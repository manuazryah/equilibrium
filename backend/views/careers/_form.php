<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Sectors;

/* @var $this yii\web\View */
/* @var $model common\models\Careers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="careers-form form-inline">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>   
            <?php
            $cat = Sectors::find()->where(['status' => '1'])->all();
            echo $form->field($model, 'sector_id')->dropDownList(ArrayHelper::map($cat, 'id', 'name'), ['prompt' => 'select']);
            ?>

        </div>
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>  
            <?= $form->field($model, 'job_title')->textInput(['maxlength' => true]) ?>

        </div>
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>  
            <?= $form->field($model, 'company_name')->textInput(['maxlength' => true]) ?>

        </div>
    </div>
    <div class="row">
        <div class='col-md-8 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($model, 'description')->textarea(['rows' => 8]) ?>

        </div>
    </div>
    <div class="row">
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>  
            <?= $form->field($model, 'image', ['options' => ['class' => 'form-group'], 'template' => '{label}<label>Logo [ File Size :( 195*195 ) ]</label>{input}{error}'])->fileInput(['maxlength' => true])->label(FALSE) ?>
            <?php
            if ($model->isNewRecord)
                echo "";
            else {
                if (!empty($model->image)) {
                    ?>

                    <img src="<?= Yii::$app->homeUrl ?>../uploads/careers/<?= $model->id; ?>/small.<?= $model->image; ?>" width="90" height="90"/>
                    <?php
                }
            }
            ?>

        </div>
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>   
             <?= $form->field($model, 'status')->dropDownList(['1' => 'Enable', '0' => 'Disable']) ?>
        </div>
    </div>
    <div class='col-md-4 col-sm-6 col-xs-12' style="float:right;">
        <div class="form-group" style="float: right;">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => 'btn btn-success', 'style' => 'margin-top: 18px; height: 36px; width:100px;']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
