<?php

namespace app\assets;

use yii\web\AssetBundle;

class AssetsDemoAsset extends AssetBundle
{
    // point where the assets are located
    public $basePath = '@webroot';
    // where the assets are located

    public $baseUrl = '@web';
    public $css = [
        'css/styles.css',
        'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css',
        'https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic',
    ];
    public $js = [

    ];
    // assets bundle assets in the vendor installed using composer
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
    public $publishOptions = [
      'only' =>[
          'js/*'
      ]
    ];
}