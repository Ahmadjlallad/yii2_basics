<?php

namespace app\controllers;

use yii\web\Controller;

class AssetsDemoController extends Controller
{

    public function actionIndex(){
        $this->layout = 'asset_layout';
        return $this->render('index');
    }
}