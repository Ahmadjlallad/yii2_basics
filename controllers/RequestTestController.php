<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class RequestTestController extends Controller
{
	public function actionIndex()
	{
		$id = Yii::$app->request->get('id', 50);
		$host = Yii::$app->request->hostInfo;
		$headers = Yii::$app->request->headers;
		$userAgent = Yii::$app->request->userAgent;
		$userHost = Yii::$app->request->userHost;
		echo '<pre>';
		echo var_dump($headers);
		echo '</pre>';
		return $this->renderContent(
			"<pre>
			Yii::\$app->request->get('id', 50); =>	$id
			Yii::\$app->request->hostInfo; => $host 
			
		 	Yii::\$app->request->headers; => <?php ?>
		 	Yii::\$app->request->userAgent; => $userAgent
		 	Yii::\$app->request->userHost; => $userHost
		</pre>"
		);
	}
}