<?php 
namespace frontend\controllers;
use yii\web\Controller;
class AdminController extends Controller
{
	public $layout=false;
    public function actionIndex()
    { 
		return $this->render('index.html');
    }
    public function actionElements(){
    	return $this->render('elements.html');
    }
    public function actionButtons(){
    	return $this->render('buttons.html');
    }
    public function actionTreeview(){
    	return $this->render('treeview.html');
    }
    public function actionJquery(){
    	return $this->render('jquery-ui.html');
    }
}
 
