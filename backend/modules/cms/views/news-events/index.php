<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\NewsEventsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'News Events';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-events-index">

    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>


                </div>
                <div class="panel-body">

                    <?= Html::a('<i class="fa-th-list"></i><span> Create News Events</span>', ['create'], ['class' => 'btn btn-warning  btn-icon btn-icon-standalone']) ?>
                    <button class="btn btn-white" id="search-option" style="float: right;">
                        <i class="fa fa-search"></i>
                        <span>Search</span>
                    </button>
                    <div class="table-responsive" style="border: none">
                        <?=
                        GridView::widget([
                            'dataProvider' => $dataProvider,
                            'filterModel' => $searchModel,
                            'columns' => [
                                ['class' => 'yii\grid\SerialColumn'],
                                [
                                    'attribute' => 'image',
                                    'format' => 'raw',
                                    'value' => function ($data) {
                                        if (!empty($data->image))
                                            $img = '<img width="120px" src="' . Yii::$app->homeUrl . '../uploads/events/' . $data->id . '/small.' . $data->image . '"/>';
                                        return $img;
                                    },
                                ],
                                [
                                    'attribute' => 'type',
                                    'value' => function($model, $key, $index, $column) {
                                        return $model->type == 2 ? 'Events' : 'News';
                                    },
                                    'filter' => [1 => 'Events', 2 => 'News'],
                                ],
                                [
                                    'attribute' => 'title',
                                    'format' => 'raw',
                                    'value' => function ($data) {
                                        if (!empty($data->title)) {
                                            $title = wordwrap($data->title, 80, "<br />\n");
                                            return $title;
                                        } else {
                                            return '';
                                        }
                                    },
                                ],
                                // 'description:ntext',
                                // 'date',
                                // 'status',
                                // 'CB',
                                // 'UB',
                                // 'DOC',
                                // 'DOU',
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

