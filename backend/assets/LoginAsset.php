<?php
namespace backend\assets;
use yii\web\AssetBundle;

class LoginAsset extends AssetBundle
{
    public  $basePath='@webroot';
    public  $baseUrl ='@web';
    //public $sourcePath='@bower/AdminLTE';
    public  $css=[
        'dist/css/AdminLTE.min.css',
        'bootstrap/bootstrap/dist/css/bootstrap.min.css',
        'bootstrap/font-awesome/css/font-awesome.min.css',
        'plugins/iCheck/flat/blue.css'
    ];
    public  $js =[
        'plugins/iCheck/icheck.min.js',
    ];
    public  $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
    
    
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

