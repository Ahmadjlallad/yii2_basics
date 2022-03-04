<?php

namespace app\models;

use yii\base\Model;

class Test extends Model
{
	public $name;
	public $myAge;
	public $surname;
	public $email;

	public function attribteLabels()
	{
		return [
			'name' => 'Enter Your Name',
			'age' => 'Your Age'
		];
	}

	public function rules()
	{
		return [
			['name', 'required', 'message' => 'please add your name']
		];
	}
}