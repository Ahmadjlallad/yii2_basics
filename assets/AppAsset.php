<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    // point where the assets are located
    public $basePath = '@webroot';
    // where the assets are located

    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
    ];
    public $js = [
        'javaScript/script.js'
    ];
    // assets bundle assets in the vendor installed using composer
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
