<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\HomeManagement */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Home Managements', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
        <div class="col-md-12">

                <div class="panel panel-default">
                        <div class="panel-heading">
                                <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>


                        </div>
                        <div class="panel-body">
                                <?=  Html::a('<i class="fa-th-list"></i><span> Manage Home Management</span>', ['index'], ['class' => 'btn btn-warning  btn-icon btn-icon-standalone']) ?>
                                <div class="panel-body"><div class="home-management-view">
                                                <p>
                                                        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                                                        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                                                        'class' => 'btn btn-danger',
                                                        'data' => [
                                                        'confirm' => 'Are you sure you want to delete this item?',
                                                        'method' => 'post',
                                                        ],
                                                        ]) ?>
                                                </p>

                                                <?= DetailView::widget([
                                                'model' => $model,
                                                'attributes' => [
                                                            'id',
            'about_content:ntext',
            'facebook',
            'twitter',
            'instagram',
            'pintrest',
            'linkedin',
            'header_phone',
            'header_email:email',
            'address:ntext',
            'phone',
            'email:email',
            'work_process_title1',
            'work_process_title2',
            'work_process_title3',
            'work_process_title4',
            'work_process_content1:ntext',
            'work_process_content2:ntext',
            'work_process_content3:ntext',
            'work_process_content4:ntext',
            'DOU',
            'status',
                                                ],
                                                ]) ?>
</div>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>


