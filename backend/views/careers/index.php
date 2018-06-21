<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use common\models\Sectors;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CareersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Careers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="careers-index">

    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>


                </div>
                <div class="panel-body">


                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>



                    <?= Html::a('<i class="fa-th-list"></i><span> Create Careers</span>', ['create'], ['class' => 'btn btn-warning  btn-icon btn-icon-standalone']) ?>
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
//                                'sector_id',
                                [
                                    'attribute' => 'sector_id',
                                    'filter' => ArrayHelper::map(Sectors::find()->where(['status' => 1])->all(), 'id', 'name'),
                                    'value' => function($data) {
                                        return Sectors::findOne($data->sector_id)->name;
                                    }
                                ],
                                'job_title',
                                'company_name',
                                [
                                    'attribute' => 'image',
                                    'format' => 'raw',
                                    'value' => function ($data) {
                                        if (!empty($data->image))
                                            $img = '<img width="90px" src="' . Yii::$app->homeUrl . '../uploads/careers/' . $data->id . '/small.' . $data->image . '"/>';
                                        return $img;
                                    },
                                ],
//                                'description:ntext',
                                // 'image',
                                // 'CB',
                                // 'UB',
                                // 'DOC',
                                // 'DOU',
                                // 'status',
                                ['class' => 'yii\grid\ActionColumn',
                                    'template' => '{update}{delete}'],
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

