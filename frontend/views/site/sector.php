<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use common\components\MenuHeaderWidget;
use common\components\SectorSidemenuWidget;

$this->title = $sectors->name;
$this->params['breadcrumbs'][] = $this->title;
?>
<section id="banner" class="page-title sectors-page-banner banner" style="background-image:url(../uploads/sectors/<?= $sectors->id ?>/banner/<?= $sectors->id ?>.<?= $sectors->banner_image ?>);">
    <div class="auto-container">
        <h1><?= $sectors->name ?></h1>
        <div class="text"></div>
        <!--<div class="text">lorem ipsum dolor sit amet</div>-->
    </div>
    <div class="header-lower">

        <div class="auto-container">
            <div class="nav-outer clearfix">
                <!-- Main Menu -->
                <nav class="main-menu">
                    <div class="navbar-header">
                        <!-- Toggle Button -->
                        <button id="mobile-menu" type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <?= MenuHeaderWidget::widget() ?>
                </nav>
                <!-- Main Menu End-->
            </div>
        </div>
    </div>
</section>
<!--End Page Title-->

<div class="kc_clfw"></div>
<section class="kc-elm kc-css-351650 kc_row">
    <div class="kc-row-container  kc-container">
        <div class="kc-wrap-columns">
            <div class="kc-elm kc-css-593335 kc_col-sm-12 kc_column kc_col-sm-12">
                <div class="kc-col-container">
                    <!--Sidebar Page Container-->
                    <section id="<?= $sectors->canonical_name ?>"></section>
                    <!--<section id="Oil-Gas-Engineering"></section>-->
                    <div class="sidebar-page-container">
                        <div class="auto-container">
                            <div class="row clearfix">
                                <!--Sidebar Side-->
                                <?= SectorSidemenuWidget::widget() ?>

                                <!--<div id="Feasibility-studies"></div>-->

                                <!--Content Side-->
                                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                                    <div class="solution-single">
                                        <div class="inner-box">
                                            <div class="image">
                                                <img src="<?= Yii::$app->homeUrl ?>uploads/sectors/<?= $sectors->id; ?>/main/image.<?= $sectors->main_image; ?>" alt="" />
                                            </div>
                                            <h2><?= $sectors->main_head ?></h2>
                                            <div class="text">
                                                <?= $sectors->main_content ?>
                                                <div class="two-column row clearfix">
                                                    <div class="column col-md-6 col-sm-6 col-xs-12">
                                                        <div class="image">
                                                            <img src="<?= Yii::$app->homeUrl . 'uploads/sectors/' . $sectors->id . '/small/image.' . $sectors->small_image; ?>" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="column col-md-6 col-sm-6 col-xs-12 equilibrium_features">
                                                        <h3>Equilibrium's Features</h3>
                                                        <?= $sectors->features ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!--Product Info Tabs-->
                                        <div class="product-info-tabs">
                                            <!--Product Tabs-->
                                            <div class="prod-tabs tabs-box">

                                                <!--Tab Btns-->
                                                <ul class="tab-btns tab-buttons clearfix">
                                                    <li data-tab="#prod-details1" class="tab-btn active-btn">Precautions</li>
                                                    <li data-tab="#prod-details2" class="tab-btn ">Intelligence</li>
                                                    <li data-tab="#prod-details3" class="tab-btn ">Specializations</li>
                                                </ul>

                                                <!--Tabs Container-->
                                                <div class="tabs-content">
                                                    <!--Tab / Active Tab-->
                                                    <div class="tab active-tab" id="prod-details1">
                                                        <div class="content">
                                                            <p><?= $sectors->precautions ?></p>
                                                        </div>
                                                    </div>
                                                    <!--Tab / Active Tab-->
                                                    <div class="tab " id="prod-details2">
                                                        <div class="content">
                                                            <p><?= $sectors->intelligence ?></p>
                                                        </div>
                                                    </div>
                                                    <!--Tab / Active Tab-->
                                                    <div class="tab " id="prod-details3">
                                                        <div class="content">
                                                            <p><?= $sectors->specialization ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!--End Product Info Tabs-->
                                    </div> 
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>