<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model common\models\NewsEvents */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-events-form form-inline">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'> 
            <?= $form->field($model, 'type')->dropDownList(['1' => 'News', '2' => 'Events']) ?>

        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>  
            <?= $form->field($model, 'image', ['options' => ['class' => 'form-group'], 'template' => '{label}<label>Image [ File Size :( 570x280 ) ]</label>{input}{error}'])->fileInput(['maxlength' => true])->label(FALSE) ?>
            <?php
            if ($model->isNewRecord)
                echo "";
            else {
                if (!empty($model->image)) {
                    ?>

                    <img class="img-responsive" src="<?= Yii::$app->homeUrl ?>../uploads/events/<?= $model->id; ?>/small.<?= $model->image; ?>"/>
                    <?php
                }
            }
            ?>

        </div>
    </div>
    <div class="row">
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($model, 'canonical_name')->textInput(['readonly' => true]) ?>

        </div>
    </div>
    <div class="row">
        <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>  
            <?=
            $form->field($model, 'description', ['options' => ['class' => 'form-group']])->widget(CKEditor::className(), [
                'options' => ['rows' => 2],
                'preset' => 'custom',
            ])
            ?>

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
        $('#newsevents-title').keyup(function () {
            var name = slug($(this).val());
            $('#newsevents-canonical_name').val(slug($(this).val()));
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
