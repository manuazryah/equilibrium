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
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>  
            <?= $form->field($model, 'about_content')->textarea(['row' => 6]) ?>

        </div>
       
    </div>
    <div class="row">
         <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>   
            <?= $form->field($model, 'facebook')->textInput(['maxlength' => true]) ?>

        </div>
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($model, 'twitter')->textInput(['maxlength' => true]) ?>

        </div>
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>   
            <?= $form->field($model, 'instagram')->textInput(['maxlength' => true]) ?>

        </div>
    </div>
    
    <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>    
        <?= $form->field($model, 'pintrest')->textInput(['maxlength' => true]) ?>

    </div>
    <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>  
        <?= $form->field($model, 'linkedin')->textInput(['maxlength' => true]) ?>

    </div>
    <!--        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>  
                <?$form->field($model, 'status')->textInput() ?>
    
            </div>   -->
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
