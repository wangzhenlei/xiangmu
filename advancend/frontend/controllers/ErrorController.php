<?php 
namespace frontend\controllers;


use yii\web\Controller;


class ErrorController extends Controller
{
	public function actionError500()
	{
		return $this->render("error-500.html");
	}
}
?>