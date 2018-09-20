<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model common\models\Sectors */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sectors-form form-inline">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

        </div>
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'canonical_name')->textInput(['maxlength' => true, 'readOnly' => true]) ?>

        </div>
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    <?= $form->field($model, 'main_head')->textInput(['maxlength' => true]) ?>

        </div>
    </div>
    <div class="row">
        <div class='col-md-12 col-sm-12 col-xs-12 left_padd'> 
            <?=
            $form->field($model, 'main_content', ['options' => ['class' => 'form-group']])->widget(CKEditor::className(), [
                'options' => ['rows' => 2],
                'preset' => 'custom',
            ])
            ?>

        </div>
        <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>  
            <?=
            $form->field($model, 'features', ['options' => ['class' => 'form-group']])->widget(CKEditor::className(), [
                'options' => ['rows' => 2],
                'preset' => 'custom',
            ])
            ?>
        </div>
    </div>
    <div class="row">
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>   
            <?=
            $form->field($model, 'precautions', ['options' => ['class' => 'form-group']])->widget(CKEditor::className(), [
                'options' => ['rows' => 2],
                'preset' => 'custom',
            ])
            ?>

        </div>
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>   
            <?=
            $form->field($model, 'intelligence', ['options' => ['class' => 'form-group']])->widget(CKEditor::className(), [
                'options' => ['rows' => 2],
                'preset' => 'custom',
            ])
            ?>

        </div>
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>   
            <?=
            $form->field($model, 'specialization', ['options' => ['class' => 'form-group']])->widget(CKEditor::className(), [
                'options' => ['rows' => 2],
                'preset' => 'custom',
            ])
            ?>

        </div>
    </div>
    <div class="row">
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>   
            <?= $form->field($model, 'small_image', ['options' => ['class' => 'form-group'], 'template' => '{label}<label>Small Image [ File Size :( 960*540 ) ]</label>{input}{error}'])->fileInput(['maxlength' => true])->label(FALSE) ?>
            <?php
            if ($model->isNewRecord)
                echo "";
            else {
                if (!empty($model->small_image)) {
                    ?>

                    <img src="<?= Yii::$app->homeUrl ?>../uploads/sectors/<?= $model->id; ?>/small/small.<?= $model->small_image; ?>" width="100" height="75"/>
                    <?php
                }
            }
            ?>
        </div>
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($model, 'main_image', ['options' => ['class' => 'form-group'], 'template' => '{label}<label>Main Image [ File Size :( 1024*240 ) ]</label>{input}{error}'])->fileInput(['maxlength' => true])->label(FALSE) ?>
            <?php
            if ($model->isNewRecord)
                echo "";
            else {
                if (!empty($model->main_image)) {
                    ?>

                    <img src="<?= Yii::$app->homeUrl ?>../uploads/sectors/<?= $model->id; ?>/main/small.<?= $model->main_image; ?>" width="100" height="75"/>
                    <?php
                }
            }
            ?>
        </div>
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>   
            <?= $form->field($model, 'banner_image', ['options' => ['class' => 'form-group'], 'template' => '{label}<label>Banner Image [ File Size :( 1920*1080 ) ]</label>{input}{error}'])->fileInput(['maxlength' => true])->label(FALSE) ?>
            <?php
            if ($model->isNewRecord)
                echo "";
            else {
                if (!empty($model->banner_image)) {
                    ?>

                    <img src="<?= Yii::$app->homeUrl ?>../uploads/sectors/<?= $model->id; ?>/banner/small.<?= $model->banner_image; ?>" />
                    <?php
                }
            }
            ?>
        </div>
    </div>
    <div class="row">
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>  
            <?= $form->field($model, 'status')->dropDownList(['1' => 'Enable', '0' => 'Disable']) ?>

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
<script>
    $(document).ready(function () {
        $('#sectors-name').keyup(function () {
            var name = slug($(this).val());
//            var size= slug($('#product-size').val());
//            var canonical= name+-+size;
//            $('#product-canonical_name').val(canonical);
            $('#sectors-canonical_name').val(slug($(this).val()));
        });
    });
    var slug = function (str) {
        var $slug = '';
        var trimmed = $.trim(str);
        $slug = trimmed.replace(/[^a-z0-9-]/gi, '-').
                replace(/-+/g, '-').
                replace(/^-|-$/g, '');
        return $slug.toLowerCase();
    }
</script>
