<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TourPackages */

$this->title = 'Tempo Traveler Packages';
$this->params['breadcrumbs'][] = ['label' => 'Tour Packages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-md-12">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>

            </div>
            <div class="panel-body">
                <?= Html::a('<i class="fa-th-list"></i><span> Manage Traveler Packages</span>', ['tempo-traveler'], ['class' => 'btn btn-warning  btn-icon btn-icon-standalone']) ?>
                <div class="panel-body">
                    <div class="tour-packages-create">
                        <div class="tour-packages-form form-inline">

                            <?php $form = ActiveForm::begin(); ?>
                            <div class="row">
                                <div class='col-md-3 col-sm-6 col-xs-12 left_padd'>    
                                    <?= $form->field($model, 'vehicle_name')->textInput(['maxlength' => true]) ?>

                                </div>
                                <div class='col-md-3 col-sm-6 col-xs-12 left_padd'>    
                                    <?= $form->field($model, 'no_of_days')->textInput(['maxlength' => true]) ?>

                                </div>
                                <div class='col-md-3 col-sm-6 col-xs-12 left_padd'>    
                                    <?= $form->field($model, 'rate')->textInput(['maxlength' => true]) ?>

                                </div>
                                <div class='col-md-3 col-sm-6 col-xs-12 left_padd'>    
                                    <?= $form->field($model, 'passengers')->textInput() ?>

                                </div>
                            </div>
                            <div class="row">
                                <div class='col-md-3 col-sm-6 col-xs-12 left_padd'>    
                                    <?= $form->field($model, 'allowed_km')->textInput() ?>

                                </div>
                                <div class='col-md-3 col-sm-6 col-xs-12 left_padd'>    
                                    <?= $form->field($model, 'additional_km_price')->textInput(['maxlength' => true]) ?>

                                </div>
                                 <div class='col-md-3 col-sm-6 col-xs-12 left_padd'>    
                                    <?= $form->field($model, 'status')->dropDownList(['1' => 'Enabled', '0' => 'Disabled']) ?>

                                </div>
                                <div class='col-md-3 col-sm-6 col-xs-12 left_padd'>   
                                    <?= $form->field($model, 'image', ['options' => ['class' => 'form-group'], 'template' => '{label}<label>Image [ File Size :( 798x466 ) ]</label>{input}{error}'])->fileInput(['maxlength' => true])->label(FALSE) ?>
                                    <?php
                                    if ($model->isNewRecord)
                                        echo "";
                                    else {
                                        if (!empty($model->image)) {
                                            ?>

                                            <img src="<?= Yii::$app->homeUrl ?>../uploads/tour-packages/<?= $model->id ?>/small.<?= $model->image; ?>" width="125" height="100"/>
                                            <?php
                                        }
                                    }
                                    ?>

                                </div>
                            </div>
                            <div class="row">
                                <div class='col-md-12 col-sm-12 col-xs-12'>
                                    <div class="form-group">
                                        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary', 'style' => 'float:right;']) ?>
                                    </div>
                                </div>
                            </div>

                            <?php ActiveForm::end(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

