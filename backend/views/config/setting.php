<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Breadcrumbs;
use yii\bootstrap\ActiveField;
//use app\models\Config;
$model =new \app\models\Config();
/* @var $this yii\web\View */
/* @var $model app\models\config */
/* @var $form ActiveForm */
$this->title='Website Data';
?>
<ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dasboard</a></li>
        <li class="active">Website Data</li>
    </ol>?>


<div class="config-setting">
    
    <?php $form = ActiveForm::begin(); ?>
    
        <div class="form-group">
            <?= $form->field($model, 'value')->textInput([
                'class'=>'form-control'])->label('name',['class'=>'label-class'])?>
        </div>
        <div class="form-group">
            <?= $form->field($model, 'value')->textInput([
                'class'=>'form-control'])->label('title',['class'=>'label-class'])?>
        </div>
        <div class="form-group">
            <?= $form->field($model, 'value')->textInput([
                'class'=>'form-control'])->label('Company Name',['class'=>'label-class'])?>
        </div>
        <div class="form-group">
            <?= $form->field($model, 'value')->textInput([
                'class'=>'form-control'])->label('Address',['class'=>'label-class'])?>
        </div>
        <div class="form-group">
            <?= $form->field($model, 'value')->textInput([
                'class'=>'form-control'])->label('Keywords',['class'=>'label-class'])?>
        </div>
    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>    
        
    <?php ActiveForm::end(); ?>

</div><!-- config-setting -->
