<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\HomeManagementSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="home-management-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'about_content') ?>

    <?= $form->field($model, 'facebook') ?>

    <?= $form->field($model, 'twitter') ?>

    <?= $form->field($model, 'instagram') ?>

    <?php // echo $form->field($model, 'pintrest') ?>

    <?php // echo $form->field($model, 'linkedin') ?>

    <?php // echo $form->field($model, 'header_phone') ?>

    <?php // echo $form->field($model, 'header_email') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'work_process_title1') ?>

    <?php // echo $form->field($model, 'work_process_title2') ?>

    <?php // echo $form->field($model, 'work_process_title3') ?>

    <?php // echo $form->field($model, 'work_process_title4') ?>

    <?php // echo $form->field($model, 'work_process_content1') ?>

    <?php // echo $form->field($model, 'work_process_content2') ?>

    <?php // echo $form->field($model, 'work_process_content3') ?>

    <?php // echo $form->field($model, 'work_process_content4') ?>

    <?php // echo $form->field($model, 'DOU') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
