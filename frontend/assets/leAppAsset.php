<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class leAppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $js = [

        "js/js/html5shiv.js",
        "js/js/respond.min.js",

    ];
    public $jsOptions = [

         'condition' => 'lte IE9',
         'position' => \yii\web\View::POS_HEAD,

    ];
}