<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model common\models\BusinessAssociation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="business-association-form form-inline">

    <?php $form = ActiveForm::begin(); ?>

    <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
        <?= $form->field($model, 'image', ['options' => ['class' => 'form-group'], 'template' => '{label}<label>Image [ File Size :( 600*680 ) ]</label>{input}{error}'])->fileInput(['maxlength' => true])->label(FALSE) ?>
        <?php
        if ($model->isNewRecord)
            echo "";
        else {
            if (!empty($model->image)) {
                ?>

                <img src="<?= Yii::$app->homeUrl ?>../uploads/business/<?= $model->id; ?>/small.<?= $model->image; ?>" width="100" height="75"/>
                <?php
            }
        }
        ?>

    </div>
    <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>  
        <?= $form->field($model, 'status')->dropDownList(['1' => 'Enable', '0' => 'Disable']) ?>

    </div>
    <div class='col-md-12 col-sm-6 col-xs-12 left_padd'>
        <?=
        $form->field($model, 'content', ['options' => ['class' => 'form-group']])->widget(CKEditor::className(), [
            'options' => ['rows' => 2],
            'preset' => 'custom',
        ])
        ?>

    </div>

    <div class='col-md-4 col-sm-6 col-xs-12' style="float:right;">
        <div class="form-group" style="float: right;">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => 'btn btn-success', 'style' => 'margin-top: 18px; height: 36px; width:100px;']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
