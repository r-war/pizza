<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\config */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="box box-primary">
    <div class="box-body form">
        <div class="row">
		<?php
			echo $form->labelEx($model,'name');
			echo $form->textField($model,'name',array('class'=>'form-control'));
			echo $form->error($model,'name');
		?>
	</div>
    </div>
</div>
