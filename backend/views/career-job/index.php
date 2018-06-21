<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use common\models\Careers;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CareerJobSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Career Jobs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="career-job-index">

    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>


                </div>
                <div class="panel-body">


                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>



                    <button class="btn btn-white" id="search-option" style="float: right;">
                        <i class="linecons-search"></i>
                        <span>Search</span>
                    </button>
                    <div class="table-responsive" style="border: none">
                        <?=
                        GridView::widget([
                            'dataProvider' => $dataProvider,
                            'filterModel' => $searchModel,
                            'columns' => [
                                ['class' => 'yii\grid\SerialColumn'],
//                                'id',
                                [
                                    'attribute' => 'career_id',
                                    'filter' => ArrayHelper::map(Careers::find()->where(['status' => 1])->all(), 'id', 'job_title'),
                                    'value' => function($data) {
                                        return Careers::findOne($data->career_id)->job_title;
                                    }
                                ],
                                'name',
                                'email:email',
                                'mobile',
                                'reference',
//                                        [
//                                    'attribute' => 'cv',
//                                    'format' => 'raw',
//                                    'value' => function ($data) {
//                                        if (!empty($data->cv))
//                                            $img = '<img width="90px" src="' . Yii::$app->homeUrl . '../uploads/cv/' . $data->id . '/cv.' . $data->cv . '"/>';
//                                        return $img;
//                                    },
//                                ],
//                                 'cv',
                                // 'DOC',
                                // 'status',
                                ['class' => 'yii\grid\ActionColumn',
                                    'template' => '{view}',
                                    'buttons' => [
                                        'view' => function ($url, $model) {
                                            return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, [
                                                        'target'=>'_target',
                                                        'title' => Yii::t('app', 'cv'),
                                                        'class' => '',
                                            ]);
                                        },
                                    ],
                                    'urlCreator' => function ($action, $model) {
                                        if ($action === 'view') {
                                            $url = Url::to(['../uploads/cv/'.$model->id.'/cv.'.$model->cv]);
                                            return $url;
                                        }
                                    }
                                ],
                            ],
                        ]);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $(".filters").slideToggle();
        $("#search-option").click(function () {
            $(".filters").slideToggle();
        });
    });
</script>

