<?php

namespace app\models;

use yii\db\ActiveRecord;

// oop representation of database
// class name will convert to lower case
// must be same as the column name or will throw an error
// or overwrite the tableName method
class Customer extends ActiveRecord
{
    public static function tableName()
    {
        // if the class was named other than the table name;
        return '{{%customer}}';
    }
}