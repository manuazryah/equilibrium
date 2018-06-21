<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model common\models\About */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="about-form form-inline">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'who_we_are_image', ['options' => ['class' => 'form-group'], 'template' => '{label}<label>Image [ File Size :( 570x280 ) ]</label>{input}{error}'])->fileInput(['maxlength' => true])->label(FALSE) ?>
            <?php
            if ($model->isNewRecord)
                echo "";
            else {
                if (!empty($model->who_we_are_image)) {
                    ?>

            <img class="img-responsive" src="<?= Yii::$app->homeUrl ?>../uploads/about/who_we_are_image.<?= $model->who_we_are_image; ?>"/>
                    <?php
                }
            }
            ?>

        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'who_we_are_index')->textarea(['row' => 6]) ?>
        </div>
        <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>  
            <?=
            $form->field($model, 'who_we_are', ['options' => ['class' => 'form-group']])->widget(CKEditor::className(), [
                'options' => ['rows' => 2],
                'preset' => 'custom',
            ])
            ?>

        </div>
    </div>
    <div class="row">
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'our_mission_image', ['options' => ['class' => 'form-group'], 'template' => '{label}<label>Image [ File Size :( 250x160 ) ]</label>{input}{error}'])->fileInput(['maxlength' => true])->label(FALSE) ?>
            <?php
            if ($model->isNewRecord)
                echo "";
            else {
                if (!empty($model->our_mission_image)) {
                    ?>

            <img class="img-responsive" src="<?= Yii::$app->homeUrl ?>../uploads/about/our_mission_image.<?= $model->our_mission_image; ?>"/>
                    <?php
                }
            }
            ?>

        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'our_vision_image', ['options' => ['class' => 'form-group'], 'template' => '{label}<label>Image [ File Size :( 250x160 ) ]</label>{input}{error}'])->fileInput(['maxlength' => true])->label(FALSE) ?>
            <?php
            if ($model->isNewRecord)
                echo "";
            else {
                if (!empty($model->our_vision_image)) {
                    ?>

                    <img class="img-responsive" src="<?= Yii::$app->homeUrl ?>../uploads/about/our_vision_image.<?= $model->our_vision_image; ?>"/>
                    <?php
                }
            }
            ?>

        </div>
    </div>
      <div class="row">
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
             <?= $form->field($model, 'our_mission')->textarea(['row' => 6]) ?>
        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'> 
            <?= $form->field($model, 'our_vision')->textarea(['row' => 6]) ?>

        </div>
      </div>
      <div class="row">
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'why_choose_us_image', ['options' => ['class' => 'form-group'], 'template' => '{label}<label>Image [ File Size :( 910x621 ) ]</label>{input}{error}'])->fileInput(['maxlength' => true])->label(FALSE) ?>
            <?php
            if ($model->isNewRecord)
                echo "";
            else {
                if (!empty($model->why_choose_us_image)) {
                    ?>

            <img src="<?= Yii::$app->homeUrl ?>../uploads/about/why_choose_us_image.<?= $model->why_choose_us_image; ?>" style="height: 200px;width: 100%;"/>
                    <?php
                }
            }
            ?>

        </div>
         <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>  
             <?=
            $form->field($model, 'why_choose_us', ['options' => ['class' => 'form-group']])->widget(CKEditor::className(), [
                'options' => ['rows' => 2],
                'preset' => 'custom',
            ])
            ?>

        </div>
    </div>
    <div class="row">
        <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>   
             <?=
            $form->field($model, 'our_core_values', ['options' => ['class' => 'form-group']])->widget(CKEditor::className(), [
                'options' => ['rows' => 2],
                'preset' => 'custom',
            ])
            ?>

        </div>
        <div class='col-md-12 col-sm-12 col-xs-12 left_padd'> 
             <?=
            $form->field($model, 'our_certificates', ['options' => ['class' => 'form-group']])->widget(CKEditor::className(), [
                'options' => ['rows' => 2],
                'preset' => 'custom',
            ])
            ?>

        </div>
    </div>
     <div class="row">
        <div class='col-md-12 col-sm-2 col-xs-12'>
            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => 'btn btn-success', 'style' => 'float:right;']) ?>
            </div>
        </div>
     </div>
        <?php ActiveForm::end(); ?>

    </div>
