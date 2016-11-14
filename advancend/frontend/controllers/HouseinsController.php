<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Room;
use frontend\models\Users;
use frontend\models\UploadForm;
use frontend\models\Houseins;
use frontend\models\HouseinsForm;
use yii\base\InvalidParamException;
use yii\data\Pagination;
use yii\web\UploadedFile;


class HouseinsController extends Controller
{
	private $table="houseins";
	public $layout=false;
	public $enableCsrfValidation = false ;

	/**
	 * 入住验房管理展示列表（新增按钮）
	 *
	 *@return hou_list.php array
	 *
	 *@author likang
	 *
	 */

	public function actionShow()
	{
		
		if (Yii::$app->request->isPost) {
    		$user_name=!empty(Yii::$app->request->post('user_name'))?Yii::$app->request->post('user_name'):"";
    		$room_city=!empty(Yii::$app->request->post('room_city'))?Yii::$app->request->post('room_city'):"";
    		$hou_time=!empty(Yii::$app->request->post('hou_time'))?Yii::$app->request->post('hou_time'):"";
    		$rption_time=!empty(Yii::$app->request->post('rption_time'))?Yii::$app->request->post('rption_time'):"";
    		//var_dump($user_name);die;
    		$query = Houseins::find()->joinWith('users')
    				->joinWith('room')
    				->where(['is_delete' => 0])
					->andwhere(['and',['like','user_name',$user_name],['like','room_city',$room_city],['like','hou_time',$hou_time],['like','rption_time',$rption_time]]);

			$countQuery = clone $query;
			$pages = new Pagination(['totalCount' => $countQuery->count(),'pageSize'=>10]);
			$houlist = $query->offset($pages->offset)
						->limit($pages->limit)
						->asArray()
				        ->all();

			 //var_dump($conlist);die;
			return $this->render("hou_list_1", [
				         'houlist' => $houlist,
				         'pages' => $pages,
				         ]);

    	}else{
    		$query = Houseins::find()->where(['is_delete' => 0]);
			$countQuery = clone $query;
			$pages = new Pagination(['totalCount' => $countQuery->count(),'pageSize'=>10]);
			$houlist = Houseins::find()->joinWith('users')
						->joinWith('room')
						->where(['is_delete'=>0])
						->offset($pages->offset)
						->limit($pages->limit)
						->asArray()
				        ->all();
			//var_dump($houlist);die;
			return $this->render("hou_list", [
				         'houlist' => $houlist,
				         'pages' => $pages,
				         ]);
    	}
	}


	/**
	 * 入住验房管理新增页面
	 *
	 *@return hou_add.html from
	 *
	 *@var    ajax 
	 *
	 *@author likang 
	 *
	 */

	public function actionInsert()
	{

		//查询房源表全部数据 字段room_id,room_city
		$rooms = Room::find(array(
			  'select'=>array('room_id','room_city')
			))->asArray()->all();
		
		$users = Users::find(array(
			  'select'=>array('user_id','user_name')
			))->asArray()->all();

		return $this->render("hou_add",['rooms'=>$rooms,'users'=>$users]);
	}

	/**
	 * 验房管理添加数据
	 *
	 * @return bool
	 *
	 * @author likang
	 *
	 */
	public function actionAddhou()
	{
		$model = new HouseinsForm;
		$model->room_id=Yii::$app->request->post('room_id');
		$model->hou_time=Yii::$app->request->post('hou_time');
		$model->rption_time=Yii::$app->request->post('rption_time');
		$model->user_id=Yii::$app->request->post('user_id');
		$model->isone_qualified=Yii::$app->request->post('isone_qualified');
		$model->istwo_qualified=Yii::$app->request->post('istwo_qualified');
		$model->repair_time=Yii::$app->request->post('repair_time');
		$model->inspector=Yii::$app->request->post('inspector');
		$model->hou_path=Yii::$app->request->post('hou_path');
		$model->problem=Yii::$app->request->post('problem');
		$model->remarks=Yii::$app->request->post('remarks');
        if ($model->rules()) {
            // 验证 $model 收到的数据
			$res=Yii::$app->db->createCommand()->insert('houseins',$model)->execute();
            // 做些有意义的事 ...

			if ($res) {
				return 1;
			}else{
				return "添加失败";
			}
            
        } else {
            
            return $model->getErrors();
        }

	}

	/**
	 * 验房单文件上传
	 *
	 * @return string
	 *
	 * @author likang
	 *
	 */

	public function actionUpload(){  
        //header("content-type:text/html;charset=utf8");

           $model = new UploadForm();  
            if (Yii::$app->request->isPost) {  
                $model->imageFile = UploadedFile::getInstance($model, 'imageFile');  
                if ($model->imageFile && $model->validate()) {  
                    //if(!file_exists('./data/upload/houseins'))mkdir('./data/upload/houseins');  
                    $path='uploads/houseins/'.date('Y/m/d',time());  
                    if(!file_exists($path)){
                    	mkdir($path,0777,true); 
                    } 
                              
                    $filename=time().'.'. $model->imageFile->extension;  
                    $arr=array();
                    if($model->imageFile->saveAs($path.$filename)){
                        $arr=["result"=>"Success","url"=>$path.$filename]; 
                    }else{
                        $arr=["result"=>"Fail"];
                    }
                }else{
                     $arr=["result"=>"ValidFail"];  
                }
               
            }else{
                 $arr=["result"=>"PostFail"]; 
            }
           
            echo  json_encode($arr);
        }


    /**
     * 验房管理列表删除功能（单删、批删）
     *
     *@return array() int
     *
     *@author likang  
     */

    public function actionDelete()
    {
		
		$hou_id = Yii::$app->request->get('hou_id');
		
		
		$res=Yii::$app->db->createCommand()
            ->update($this->table,['is_delete'=>1],'hou_id in('.$hou_id.")")
            ->execute();
        $user_name=!empty(Yii::$app->request->get('user_name'))?Yii::$app->request->get('user_name'):"";
    	$room_city=!empty(Yii::$app->request->get('room_city'))?Yii::$app->request->get('room_city'):"";
    	$hou_time=!empty(Yii::$app->request->get('hou_time'))?Yii::$app->request->get('hou_time'):"";
    	$rption_time=!empty(Yii::$app->request->get('rption_time'))?Yii::$app->request->get('rption_time'):"";

		if ($res) {
		    $query = Houseins::find()->where(['is_delete' => 0]);
			$countQuery = clone $query;
		 	$pages = new Pagination(['totalCount' => $countQuery->count(),'pageSize'=>10]);
			$houlist = Houseins::find()->joinWith('users')
					->joinWith('room')
					->where(['is_delete'=>0])
					->andwhere(['and',['like','user_name',$user_name],['like','room_city',$room_city],['like','hou_time',$hou_time],['like','rption_time',$rption_time]])
					->offset($pages->offset)
					->limit($pages->limit)
					->asArray()
			        ->all();
			// $conlist = $conlist->users;

			 //var_dump($conlist);die;
			return $this->render('hou_list_1', [
			         'houlist' => $houlist,
			         'pages' => $pages,
			    ]);
		}else{
			return  0;
		}
		
    }




     /** 
     *编辑展示页面
     *@return hou_list_cat hou_cat
     *@author likang 
     */
    public function actionCat()
    {
    	$hou_id= Yii::$app->request->get('hou_id');

    	$query = Houseins::find()->joinWith('users')
    				->joinWith('room')
    				->where(['hou_id'=>$hou_id])
    				->asArray()
			        ->all();
			       // var_dump($query[0]);die;
    	return $this->render('hou_list_cat', [
			         'hou_cat' => $query[0],
			    ]); 
    }



    /**
     *验房管理修改
     *
     *@return true false
     *
     *@author liakng 
     */

    public function actionUpdate()
    {
    	$hou_id= Yii::$app->request->get('hou_id');
    	$hou_time= Yii::$app->request->get('hou_time');
    	$isone_qualified= Yii::$app->request->get('isone_qualified');
    	$problem= Yii::$app->request->get('problem');
    	$repair_time= Yii::$app->request->get('repair_time');
    	$istwo_qualified= Yii::$app->request->get('istwo_qualified');
    	$hou_path= Yii::$app->request->get('hou_path');
    	$remarks= Yii::$app->request->get('remarks');

    	$sql="update houseins set hou_time='".$hou_time."',isone_qualified='".$isone_qualified."',problem='".$problem."',repair_time='".$repair_time."',istwo_qualified='".$istwo_qualified."',hou_path='".$hou_path."',remarks='".$remarks."' where hou_id='".$hou_id."'";
    	$res=Yii::$app->db->createCommand($sql)
    					->execute();
  
		if ($res) {
			echo true;
		}else{
			echo false;
		}
    }

}
?>