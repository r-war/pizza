<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    //public $basePath = '@webroot';
    //public $baseUrl = '@web';
    public $sourcePath='@bower/Pizza-kitchen/';
    public $css = [
        //'css/site.css',
        'style.css',
        'css/navigation-menu.css'
         
    ];
    public $js = [
        'js/jquery-1.12.4.min.js',
        'libraries/lib.js',
        'js/functions.js',
        'https://maps.googleapis.com/maps/api/js?key=AIzaSyDW40y4kdsjsz714OVTvrw7woVCpD8EbLE',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
