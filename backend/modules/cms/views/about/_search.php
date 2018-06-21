<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\AboutSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="about-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'who_we_are') ?>

    <?= $form->field($model, 'who_we_are_image') ?>

    <?= $form->field($model, 'our_mission') ?>

    <?= $form->field($model, 'our_mission_image') ?>

    <?php // echo $form->field($model, 'our_vision') ?>

    <?php // echo $form->field($model, 'our_vision_image') ?>

    <?php // echo $form->field($model, 'why_choose_us') ?>

    <?php // echo $form->field($model, 'why_choose_us_image') ?>

    <?php // echo $form->field($model, 'chairman_message') ?>

    <?php // echo $form->field($model, 'chairman_image') ?>

    <?php // echo $form->field($model, 'profile') ?>

    <?php // echo $form->field($model, 'our_core_values') ?>

    <?php // echo $form->field($model, 'our_certificates') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'CB') ?>

    <?php // echo $form->field($model, 'UB') ?>

    <?php // echo $form->field($model, 'DOC') ?>

    <?php // echo $form->field($model, 'DOU') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
