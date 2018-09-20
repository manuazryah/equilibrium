<?php
/* @var $this yii\web\View */

use common\components\MenuHeaderWidget;
use common\components\ServiceSidemenuWidget;
use common\models\BusinessAssociation;

$this->title = $services->title;
$this->params['breadcrumbs'][] = $this->title;
?>
<!--Page Title-->
<section id="banner" class="page-title services-page-banner banner" style="background-image:url(../uploads/services/<?= $services->id ?>/banner_image/image.<?= $services->banner_image ?>)">
    <div class="auto-container">
        <h1>Services</h1>
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
                    <section id="Service"></section>
                    <div class="sidebar-page-container">
                        <div class="auto-container">
                            <div class="row clearfix">
                                <!--Sidebar Side-->
                                <?= ServiceSidemenuWidget::widget() ?>


                                <!--<div id="Oil-Gas-Engineering"></div>-->

                                <!--Content Side-->
                                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                                    <div class="solution-single">
                                        <div class="inner-box">
                                            <h2>Our Services</h2>
                                            <div class="text">
                                                <?php
                                                if (!empty($services->content)) {
                                                    echo $services->content;
                                                }
                                                ?>
                                                <div class="two-column row clearfix">
                                                    <div class="column col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <ul>
                                                            <img src="<?= Yii::$app->homeUrl ?>uploads/services/<?= $services->id; ?>/main_image/image.<?= $services->main_image; ?>" alt="" />
                                                            <?php
                                                            if (!empty($services->content_1)) {
                                                                echo $services->content_1;
                                                            }
                                                            ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


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

<section class="kc-elm kc-css-810793 kc_row core-values">
    <div class="kc-row-container">
        <div class="kc-wrap-columns">
            <div class="kc-elm kc_col-sm-12 kc_column kc_col-sm-12">
                <div class="kc-col-container">
                    <div class="auto-container">
                        <div class="kc-wrap-columns">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div data-aos="flip-down" class="sec-title">
                                    <h2>BUSINESS ASSOCIATIONS</h2>
                                </div>
                            </div>
                            <?php $business = BusinessAssociation::findOne(1); ?>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <img src="<?= Yii::$app->homeUrl ?>uploads/business/<?= $business->id; ?>/image.<?= $business->image; ?>" alt="post_img" class="img-responsive">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <?= $business->content; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>