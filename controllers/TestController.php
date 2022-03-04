<?php

namespace app\controllers;

use app\models\Test;
use yii\web\Controller;

//  test/hello
// if the controler name consist form two word it would be the MyArticleController -> my-article/hello
// I can nest it by create a new file in the controller files
class TestController extends Controller
{
	public $defaultAction = 'hello';

	public function actionHello()
	{
		$test = new Test();
//		$test->name = 'Ahmad';
		echo '<pre>';

		$test->attributes = $_POST;
		var_dump($test->validate());
		var_dump($test->errors);
		var_dump($test->attributes);
		echo '</pre>';


		echo 'controller id are generated when created form the action or stand alone action';
	}
}