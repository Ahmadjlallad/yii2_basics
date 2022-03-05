<?php

namespace app\controllers;

use Yii;
use yii\db\Expression;
use yii\db\Query;
use yii\web\Controller;

class UsersController extends Controller
{
    public function actionIndex()
    {
        // not good way but its good way to create component
        // as singleton
//        new Connection([
//           'dsn'=>'mysql:host=localhost;dbname=yii2_test',
//            'username'=>'root',
//            'password'=>''
//        ]);
        $db = Yii::$app->db;
        $user = $db->createCommand('SELECT * FROM users')->queryAll();
//        $user = $db->createCommand('SELECT * FROM users LIMIT 1')->queryOne();
        $usernames = $db->createCommand('SELECT username FROM users')->queryAll();
        $test = (new Query())
            ->select('*')
            ->from('users')
            ->where('id = 1')
            ->limit(1)
            ->all();

        echo '<pre>';
        echo var_dump($user);
        echo '</pre>';
        echo '<br>';
        echo '<pre>';
        echo var_dump($usernames);
        echo '</pre>';
        echo '<br>';
        echo '<pre>';
        echo var_dump($test);
        echo '</pre>';
    }

    public function actionView($id)
    {
        $db = Yii::$app->db;
        // bad sql injectable code if id was concat directly to $id
        $user = $db->createCommand('SELECT * FROM users WHERE id= :id')
            ->bindValue('id', $id)
            ->queryOne();

        echo '<pre>';
        echo var_dump($user);
        echo '</pre>';
    }

    public function actionCreate()
    {
        $db = Yii::$app->db;
        $res = $db->createCommand()->insert(
            'users',
            [
                'username' => 'memejoo',
                'email' => 'memejoo@hotmail.com',
                'status' => 1,
            ]
        )->execute();
        return $res;
    }

    public function actionUpdate()
    {
        $db = Yii::$app->db;
        $res = $db->createCommand()->update(
            'users',
            [
                'username' => 'ibrahim',
                'email' => 'banat@gmail.com',
                'status' => 0
            ],
            ['id' => 0]
        )->execute();
        return $res;
    }

    public function actionUpsert()
    {
        $db = Yii::$app->db;
        $db->createCommand()->upsert('users', [
            'username' => 'asfd',
            'email' => 'asfd',
        ], [
            'email' => new Expression('CONCAT(username, \'@gmail.com\')'),
        ])->execute();
    }
}