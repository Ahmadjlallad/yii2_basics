<?php

namespace app\controllers\admin;

use yii\web\Controller;

class HelloController extends Controller
{
//	public $defaultAction = 'hello';

	public function actionIndex()
	{
		echo 'adminIndex';
		die('hello');
	}

	public function actionHello()
	{
		echo 'hello Admin';
	}
}