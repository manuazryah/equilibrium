<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\WorkProcess */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="work-process-form form-inline">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>   
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

        </div><div class='col-md-6 col-sm-6 col-xs-12 left_padd'>  
            <?= $form->field($model, 'content')->textarea(['rows' => 6])->label('Content {<i>Max 70 char long</i>}') ?>

        </div>  
    </div>
    <div class="row">
        <div class='col-md-12 col-sm-12 col-xs-12'>
            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => 'btn btn-success', 'style' => 'float:right;']) ?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
