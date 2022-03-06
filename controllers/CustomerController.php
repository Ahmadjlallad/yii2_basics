<?php

namespace app\controllers;

use app\models\Customer;
use yii\web\Controller;

class CustomerController extends Controller
{
    public function actionIndex()
    {
        $custamer = Customer::find()->all();
    }
}