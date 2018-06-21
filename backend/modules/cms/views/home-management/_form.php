<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\HomeManagement */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="home-management-form form-inline">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>    
    <?= $form->field($model, 'about_content')->textarea(['rows' => 4]) ?>

        </div>
    </div>
    <h4 class="panel-title1">Social Media Links</h4>
    <hr>
    <div class="row">
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($model, 'facebook')->textInput(['maxlength' => true]) ?>

        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($model, 'twitter')->textInput(['maxlength' => true]) ?>

        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($model, 'instagram')->textInput(['maxlength' => true]) ?>

        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($model, 'pintrest')->textInput(['maxlength' => true]) ?>

        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($model, 'linkedin')->textInput(['maxlength' => true]) ?>

        </div>
    </div>
    <h4 class="panel-title1">Contact Info</h4>
    <hr>
    <div class="row">
        <div class='col-md-3 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($model, 'header_phone')->textInput(['maxlength' => true]) ?>

        </div>
        <div class='col-md-3 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($model, 'header_email')->textInput(['maxlength' => true]) ?>

        </div>
        <div class='col-md-3 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
        </div>
        <div class='col-md-3 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

        </div>
        <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>    
            <?= $form->field($model, 'address')->textarea(['rows' => 3]) ?>

        </div>
    </div>
    <h4 class="panel-title1">Work Process</h4>
    <hr>
    <div class="row">
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($model, 'work_process_title1')->textInput(['maxlength' => true]) ?>

        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($model, 'work_process_title2')->textInput(['maxlength' => true]) ?>

        </div>
    </div>
    <div class="row">
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($model, 'work_process_content1')->textarea(['rows' => 3]) ?>

        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($model, 'work_process_content2')->textarea(['rows' => 3]) ?>

        </div>
    </div>
    <div class="row">
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($model, 'work_process_title3')->textInput(['maxlength' => true]) ?>

        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($model, 'work_process_title4')->textInput(['maxlength' => true]) ?>

        </div>
    </div>
    <div class="row">
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($model, 'work_process_content3')->textarea(['rows' => 3]) ?>

        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($model, 'work_process_content4')->textarea(['rows' => 3]) ?>

        </div>
    </div>
    <h4 class="panel-title1">Profile Details</h4>
    <hr>
    <div class="row">
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($model, 'cpmpany_profile_message')->textarea(['rows' => 6]) ?>
        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($model, 'profile_download', ['options' => ['class' => 'form-group'], 'template' => '{label}<label>Profile Dowload Pdf</label>{input}{error}'])->fileInput(['maxlength' => true])->label(FALSE) ?>
            <?php
            if ($model->isNewRecord)
                echo "";
            else {
                if (!empty($model->profile_download)) {
                    ?>

            <a target="_blank" style="color: #395c9c;font-weight: 600;font-size: 15px;padding: 0px 5px;" href="<?= Yii::$app->homeUrl ?>../uploads/profile.<?= $model->profile_download; ?>">Download Profile</a>
                    <?php
                }
            }
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
