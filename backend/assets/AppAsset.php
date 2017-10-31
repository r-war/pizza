<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'bootstrap/bootstrap/dist/css/bootstrap.min.css',
        'bootstrap/font-awesome/css/font-awesome.min.css',
        'bootstrap/Ionicons/css/ionicons.min.css',
        'dist/css/AdminLTE.min.css',
        'dist/css/skins/_all-skins.min.css',
        'bootstrap/morris.js/morris.css',
        'plugins/iCheck/flat/blue.css',
        'bootstrap/jvectormap/jquery-jvectormap.css',
        'bootstrap/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css',
        'bootstrap/bootstrap-daterangepicker/daterangepicker.css',
        'plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css',
    ];
    public $js = [
        'plugins\input-mask\jquery.inputmask.js',
        'plugins\input-mask\jquery.inputmask.date.extensions.js',
        'plugins\input-mask\jquery.inputmask.extensions.js',
        'bootstrap/bootstrap/dist/js/bootstrap.min.js',
        'plugins\jQueryUI\jquery-ui.min.js',
        'bootstrap/raphael/raphael.min.js',
        'bootstrap/morris.js/morris.min.js',
        'bootstrap/jquery-sparkline/dist/jquery.sparkline.min.js',
        'plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
        'plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
        'bootstrap/jquery-knob/dist/jquery.knob.min.js',
        'bootstrap/moment/min/moment.min.js',
        'bootstrap/bootstrap-daterangepicker/daterangepicker.js',
        'bootstrap/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',
        'plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js',
        'bootstrap/jquery-slimscroll/jquery.slimscroll.min.js',
        'bootstrap/fastclick/lib/fastclick.js',
        'dist/js/adminlte.min.js',
        'dist/js/pages/dashboard.js',
        'dist/js/demo.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
