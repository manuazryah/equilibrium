<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\OurProjects */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="our-projects-form form-inline">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>   
            <?= $form->field($model, 'project_name')->textInput(['maxlength' => true]) ?>

        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>    
            <?= $form->field($model, 'client')->textInput(['maxlength' => true]) ?>

        </div>
    </div>
    <div class="row">
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>  
            <?= $form->field($model, 'canonical_name')->textInput(['readonly' => true]) ?>
        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>  
            <?= $form->field($model, 'images[]', ['options' => ['class' => 'form-group'], 'template' => '{label}<label>Gallery Images [ File Size :( 1920x1080 ) ]</label>{input}{error}'])->fileInput(['multiple' => true])->label(FALSE) ?>

        </div>
    </div>
    <div class="row">
        <?php
        $path = Yii::getAlias('@paths') . '/project-gallery/' . $model->id;
        if (count(glob("{$path}/*")) > 0) {
            $k = 0;
            foreach (glob("{$path}/*") as $file) {
                $k++;
                $arry = explode('/', $file);
                $img_nmee = end($arry);

                $img_nmees = explode('.', $img_nmee);
                if ($img_nmees['1'] != '') {
                    ?>

                    <div class = "col-md-4 img-box" id="<?= $k; ?>">
                        <div class="news-img">
                            <img class="img-responsive" src="<?= Yii::$app->homeUrl . '../uploads/project-gallery/' . $model->id . '/' . end($arry) ?>">
                            <a class="gal-img-remove" data-val="<?= Yii::$app->basePath ?>/../uploads/project-gallery/<?= $model->id ?>/<?= end($arry) ?>"><i class="fa fa-remove"></i></a>
                        </div> 
                    </div>


                    <?php
                }
                if ($k % 4 == 0) {
                    ?>
                    <div class="clearfix"></div>
                    <?php
                }
            }
        }
        ?>
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
        $('.gal-img-remove').click(function () {
            var path = $(this).attr('data-val');
            $.ajax({
                type: 'POST',
                cache: false,
                async: false,
                data: {path: path},
                url: '<?= Yii::$app->homeUrl; ?>cms/our-projects/remove-path',
                success: function (data) {
                    location.reload();
                }
            });
        });

        $('#ourprojects-project_name').keyup(function () {
            var name = slug($(this).val());
            $('#ourprojects-canonical_name').val(slug($(this).val()));
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
