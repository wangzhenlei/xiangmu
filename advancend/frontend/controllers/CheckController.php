<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\data\Pagination;

use frontend\models\Check;
use frontend\models\Room;
use frontend\models\Users;



class CheckController extends Controller
{

	public $layout=false;
	private $table="check";


	/**
	 * 合同续租管理展示列表（新增按钮）
	 *
	 *@return check_list.php array
	 *
	 *@author likang
	 *
	 */

	public function actionShow()
	{
		
		if (Yii::$app->request->isPost) {
    		$user_name=!empty(Yii::$app->request->post('user_name'))?Yii::$app->request->post('user_name'):"";
    		$room_city=!empty(Yii::$app->request->post('room_city'))?Yii::$app->request->post('room_city'):"";
    		$start_time=!empty(Yii::$app->request->post('start_time'))?Yii::$app->request->post('start_time'):"";
    		$end_time=!empty(Yii::$app->request->post('end_time'))?Yii::$app->request->post('end_time'):"";
    		//var_dump($user_name);die;
    		$query = Check::find()->joinWith('contract')
    				->joinWith('users')
    				->joinWith('room')
    				->where(['check.is_delete' => 0])
					->andwhere(['and',['like','user_name',$user_name],['like','room_city',$room_city],['like','start_time',$start_time],['like','end_time',$end_time]]);

			$countQuery = clone $query;
			$pages = new Pagination(['totalCount' => $countQuery->count(),'pageSize'=>10]);
			$checklist = $query->offset($pages->offset)
						->limit($pages->limit)
						->asArray()
				        ->all();

			 //var_dump($conlist);die;
			return $this->render("check_list_1", [
				         'checklist' => $checklist,
				         'pages' => $pages,
				         ]);

    	}else{
    		$query = Check::find()->where(['is_delete' => 0]);
			$countQuery = clone $query;
			$pages = new Pagination(['totalCount' => $countQuery->count(),'pageSize'=>10]);
			$checklist = Check::find()->joinWith('users')
							->joinWith('room')
							->where(['is_delete'=>0])
							->offset($pages->offset)
							->limit($pages->limit)
							->asArray()
					        ->all();
			//var_dump($houlist);die;
			return $this->render("check_list", [
					    'checklist' => $checklist,
					    'pages' => $pages,
					     ]);
    	}
	}


	
    /**
     * 合同续租管理列表删除功能（单删、批删）
     *
     *@return array() int
     *
     *@author likang  
     */

    public function actionDelete()
    {
		
		$ren_id = Yii::$app->request->get('ren_id');
		
		
		$res=Yii::$app->db->createCommand()
            ->update($this->table,['is_delete'=>1],'ren_id in('.$ren_id.")")
            ->execute();
        $user_name=!empty(Yii::$app->request->get('user_name'))?Yii::$app->request->get('user_name'):"";
    	$room_city=!empty(Yii::$app->request->get('room_city'))?Yii::$app->request->get('room_city'):"";
    	$end_time=!empty(Yii::$app->request->get('end_time'))?Yii::$app->request->get('end_time'):"";
    	$start_time=!empty(Yii::$app->request->get('start_time'))?Yii::$app->request->get('start_time'):"";

		if ($res) {
		    $query = Check::find()->where(['is_delete' => 0]);
			$countQuery = clone $query;
		 	$pages = new Pagination(['totalCount' => $countQuery->count(),'pageSize'=>10]);
			$checklist = Check::find()->joinWith('users')
					->joinWith('room')
					->where(['is_delete'=>0])
					->andwhere(['and',['like','user_name',$user_name],['like','room_city',$room_city],['like','end_time',$end_time],['like','start_time',$start_time]])
					->offset($pages->offset)
					->limit($pages->limit)
					->asArray()
			        ->all();
			// $conlist = $conlist->users;

			 //var_dump($conlist);die;
			return $this->render('check_list_1', [
			         'checklist' => $checklist,
			         'pages' => $pages,
			    ]);
		}else{
			return  0;
		}
		
    }



    /** 
     *合同续租编辑展示页面
     *@return check_list_cat check_cat
     *@author likang 
     */
    public function actionCat()
    {
    	$ren_id= Yii::$app->request->get('ren_id');

    	$query = Check::find()->joinWith('users')
    				->joinWith('room')
    				->where(['ren_id'=>$ren_id])
    				->asArray()
			        ->all();
			       // var_dump($query[0]);die;
    	return $this->render('check_list_cat', [
			         'check_cat' => $query[0],
			    ]); 
    }



    /**
     *续租合同修改
     *
     *@return true false
     *
     *@author liakng 
     */

    public function actionUpdate()
    {
    	$ren_id= Yii::$app->request->get('ren_id');
    	$sub_time= Yii::$app->request->get('sub_time');
    	$ren_status= Yii::$app->request->get('ren_status');
    	$sub_time=strtotime($sub_time);
    	//var_dump($sub_time);die;
    	$sql="update `check` set sub_time='".$sub_time."',ren_status='".$ren_status."' where ren_id=".$ren_id;
    	$res=Yii::$app->db->createCommand($sql)
    					->execute();
  
		if ($res) {
			echo true;
		}else{
			echo false;
		}
    }

}
