<?php 
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Contract; 
use frontend\models\Users; 
use frontend\models\ContractFrom;
use yii\helpers\Url;
use yii\data\Pagination;
use yii\db\Query;


class ContractController extends Controller
{
	public $layout=false;
	public $table="contract";
	//public $enableCsrfValidation = false;
	/**
	 * 电子合同管理列表展示
	 *@return con_list.html conlist pages
	 *@author likang 
	 */
    public function actionShow()
    { 
    	if (Yii::$app->request->isPost) {
    		$user_name=!empty(Yii::$app->request->post('user_name'))?Yii::$app->request->post('user_name'):"";
    		$con_title=!empty(Yii::$app->request->post('con_title'))?Yii::$app->request->post('con_title'):"";
    		$con_effecttime=!empty(Yii::$app->request->post('con_effecttime'))?Yii::$app->request->post('con_effecttime'):"";
    		$con_endtime=!empty(Yii::$app->request->post('con_endtime'))?Yii::$app->request->post('con_endtime'):"";
    		//var_dump($user_name);die;
    		$query = Contract::find()->joinWith('users')
					->where(['is_delete'=>0])
					->andwhere(['and',['like','user_name',$user_name],['like','con_title',$con_title],['like','con_effecttime',$con_effecttime],['like','con_endtime',$con_endtime]]);

			$countQuery = clone $query;
		 	$pages = new Pagination(['totalCount' => $countQuery->count(),'pageSize'=>10]);
			$conlist =$query->offset($pages->offset)
					->limit($pages->limit)
					->asArray()
			        ->all();
			// $conlist = $conlist->users;

			 //var_dump($conlist);die;
			return $this->render('con_list_1.html', [
			         'conlist' => $conlist,
			         'pages' => $pages,
			    ]);

    	}else{
    		//$csrfToken = Yii::$app->request->csrfToken;
    		$query = Contract::find()->where(['is_delete' => 0]);
			$countQuery = clone $query;
		 	$pages = new Pagination(['totalCount' => $countQuery->count(),'pageSize'=>10]);
			$conlist = Contract::find()->joinWith('users')
					->where(['is_delete'=>0])
					->offset($pages->offset)
					->limit($pages->limit)
					->asArray()
			        ->all();
			// $conlist = $conlist->users;

			 //var_dump($conlist);die;
			return $this->render('con_list.html', [
			         'conlist' => $conlist,
			         'pages' => $pages,
			    ]);
			//return $this->render('con_list.html');
    	}
    	
    }


    /**
     * 电子合同管理列表删除功能（单删、批删）
     *@return array() int
     *@author likang  
     */

    public function actionDelete()
    {
		
		$con_id = Yii::$app->request->get('con_id');
		
		
		$res=Yii::$app->db->createCommand()
            ->delete($this->table, 'con_id in('.$con_id.")")
            ->execute();


		if ($res) {
		    $query = Contract::find()->where(['is_delete' => 0]);
			$countQuery = clone $query;
		 	$pages = new Pagination(['totalCount' => $countQuery->count(),'pageSize'=>10]);
			$conlist = Contract::find()->joinWith('users')
					->where(['is_delete'=>0])
					->offset($pages->offset)
					->limit($pages->limit)
					->asArray()
			        ->all();
			// $conlist = $conlist->users;

			 //var_dump($conlist);die;
			return $this->render('con_list_1.html', [
			         'conlist' => $conlist,
			         'pages' => $pages,
			    ]);
		}else{
			return  0;
		}
		
    }

    /** 
     *编辑展示页面
     *@return con_list_cat.html con_cat
     *@author likang 
     */
    public function actionCat()
    {
    	$con_id= Yii::$app->request->get('con_id');

    	$query = Contract::find()->joinWith('users')
    				->where(['con_id'=>$con_id])
    				->asArray()
			        ->all();
			       // var_dump($query[0]);die;
    	return $this->render('con_list_cat.html', [
			         'con_cat' => $query[0],
			    ]); 
    }

    /**
     *电子合同修改
     *
     *@return true false
     *
     *@author liakng 
     */

    public function actionUpdate()
    {
    	$con_id= Yii::$app->request->get('con_id');
    	$con_type= Yii::$app->request->get('con_type');
    	$con_status= Yii::$app->request->get('con_status');
    	$sql="update contract set con_type=".$con_type.",con_status=".$con_status." where con_id=".$con_id;
    	$res=Yii::$app->db->createCommand($sql)
    					->execute();
  
		var_dump($res);
    }


}