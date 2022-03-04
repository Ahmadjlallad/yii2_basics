<?php

namespace app\components;

use yii\base\Component;

class TestComponent extends Component
{
	public function __construct($config = [])
	{
		var_dump('11111');
		parent::__construct($config);
	}
}