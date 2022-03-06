<?php

namespace app\widgets;

use Yii\base\Widget;
use yii\bootstrap4\Html;

class Bg extends Widget
{
    public $bgColor = '#fff';
    public function init()
    {
        parent::init();
        ob_start();
    }
    public function run()
    {
        parent::run();
        $output = ob_get_clean();
        return Html::tag('div', $output, [
            'style' => 'background-color:' . $this->bgColor
        ]);
    }
}
