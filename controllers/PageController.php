<?php

namespace app\controllers;

use yii\web\Controller;

class PageController extends Controller
{
	public function actionIndex()
	{
		return $this->renderContent('<pre style="font-weight: bolder;font-size: 9rem; width: max-content">Render Content method</pre>');
	}
}