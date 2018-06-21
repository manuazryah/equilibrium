<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\HomeManagementSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Home Managements';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="home-management-index">

    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>


                </div>
                <div class="panel-body">

                    
                                                <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
                    


                    <?=  Html::a('<i class="fa-th-list"></i><span> Create Home Management</span>', ['create'], ['class' => 'btn btn-warning  btn-icon btn-icon-standalone']) ?>
                    <button class="btn btn-white" id="search-option" style="float: right;">
                        <i class="linecons-search"></i>
                        <span>Search</span>
                    </button>
                    <div class="table-responsive" style="border: none">
                                                                            <?= GridView::widget([
                            'dataProvider' => $dataProvider,
                            'filterModel' => $searchModel,
        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                                        'id',
            'about_content:ntext',
            'facebook',
            'twitter',
            'instagram',
            // 'pintrest',
            // 'linkedin',
            // 'header_phone',
            // 'header_email:email',
            // 'address:ntext',
            // 'phone',
            // 'email:email',
            // 'work_process_title1',
            // 'work_process_title2',
            // 'work_process_title3',
            // 'work_process_title4',
            // 'work_process_content1:ntext',
            // 'work_process_content2:ntext',
            // 'work_process_content3:ntext',
            // 'work_process_content4:ntext',
            // 'DOU',
            // 'status',

                            ['class' => 'yii\grid\ActionColumn'],
                            ],
                            ]); ?>
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

