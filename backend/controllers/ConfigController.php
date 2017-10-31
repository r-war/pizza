<?php

//namespace app\controllers;
namespace backend\controllers;

use yii\web\Controller;
use app\models\config;


class configController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    'allow'=> true,
                    'actions'=>['index',],
                    'roles'=>['@'],
                ],
            ],
            
        ];
    }
    
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }
    
    public function actionIndex()
    {
        $this->_view='config';
        $this->redirect(array('/'.$this->id.'/setting'));
    }
    
    public function actionSetting()
    {
        $model = New config();
        //get All config/website data
        $modeld = config::model()->findAll();
        //declare configArray
        $configArray = array();
        //looping website data
        foreach($modeld as $config){
                $configArray[$config->name]=$config->value;
        }
        $model->name=$configArray('name');
        $model->title = $configArray['title'];
        $model->description = $configArray['description'];
        $model->keywords= $configArray['keywords'];
        $model->copyright = $configArray['copyright'];
        $model->phone = $configArray['phone'];
        $model->fax = $configArray['fax'];
        $model->description = $configArray['description'];
        $model->address = $configArray['address'];
        $model->maintenance = $configArray['maintenance'];
        $model->logo = $configArray['logo'];
        $model->favicon = $configArray['favicon'];
        $model->facebook = $configArray['facebook'];
        $model->youtube = $configArray['youtube'];
        $model->email_sender = $configArray['email_sender'];
        $model->sender_name = $configArray['sender_name'];
        
        //if POST Config
        if(isset($_POST['Config'])){
                //set val attributes
                $model->attributes = $_POST['Config'];
                //validate
                if($model->validate()){
                        //save website data
                        $model->saveSeoWebsite($model);
                        //set flash
                        Yii::app()->user->setFlash('success',  "Website data has been changed successfully!");
                }
        }

        $this->render('setting',array(
                'model'=>$model,
                'title'=>'Seo Website',
            )  
        );
    }

}
