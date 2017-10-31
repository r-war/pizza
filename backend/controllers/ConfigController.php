<?php

namespace backend\controllers;

use app\models\Config;
use yii\filters\AccessControl;
use yii\helpers\Url;

class ConfigController extends \yii\web\Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index', 'setting',],
                'rules' => [
                    [
                        'actions' => ['index', 'setting',],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }
    public function actionIndex()
    {
        return $this->render('setting');
    }
    public function actionSetting($id)
    {
        $model =  new Config;
        return $this->render('setting', array('model'=>$model));
        
    }
}
