<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use common\components\MenuHeaderWidget;
?>

<!--Page Title-->
<section id="banner" class="page-title project-page-banner" style="background-image:url(<?= Yii::$app->homeUrl; ?>images/background/projects.jpg);">
    <div class="auto-container">
        <h1>News & Events</h1>
        <!--<div class="text">Projects</div>-->
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
<section class="kc-elm kc-css-173344 kc_row" style="background: #fbfbfb;">
    <div class="kc-row-container  kc-container">
        <div class="kc-wrap-columns">
            <div class="kc-elm kc-css-45758 kc_col-sm-12 kc_column kc_col-sm-12">
                <div class="kc-col-container">

                    <!--Project Section-->
                    <section class="blog-page">
                        <div class="auto-container">
                            <div class="row clearfix">
                                <div class="tabbable">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#news" data-toggle="tab">News</a></li>
                                        <li><a href="#events" data-toggle="tab">Events</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="news">
                                            <?php
                                            if (!empty($news)) {
                                                foreach ($news as $news_val) {
                                                    if (!empty($news_val)) {
                                                        ?>
                                                        <div class="blog-box col-md-4 col-sm-6  col-xs-12">
                                                            <div class="img-box blog-index-img-box">
                                                                <img class="img-responsive" src="<?= Yii::$app->homeUrl; ?>uploads/events/<?= $news_val->id ?>/<?= $news_val->id ?>.<?= $news_val->image ?>" alt="Dodsal awards Strategy and Technical Consultancy Services Contract to Abu Dhabi’s Equilibrium Engineering Consultancy">
                                                            </div>
                                                            <div class="content-box">
                                                                <h5><?= $news_val->title ?></h5>
                                                                <?= $news_val->description ?>
                                                            </div>
                                                        </div>
                                                        <?php
                                                    }
                                                }
                                            }
                                            ?>
                                        </div>
                                        <div class="tab-pane" id="events">
                                            <?php
                                            if (!empty($events)) {
                                                foreach ($events as $events_val) {
                                                    if (!empty($events_val)) {
                                                        ?>
                                                        <div class="blog-box col-md-4 col-sm-6  col-xs-12">
                                                            <div class="img-box blog-index-img-box">
                                                                <img class="img-responsive" src="<?= Yii::$app->homeUrl; ?>uploads/events/<?= $events_val->id ?>/<?= $events_val->id ?>.<?= $events_val->image ?>" alt="Dodsal awards Strategy and Technical Consultancy Services Contract to Abu Dhabi’s Equilibrium Engineering Consultancy">
                                                            </div>
                                                            <div class="content-box">
                                                                <h5><?= $events_val->title ?></h5>
                                                                <?= $events_val->description ?>
                                                            </div>
                                                        </div>
                                                        <?php
                                                    }
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--End Projects Section-->


                </div>

            </div>

        </div>
    </div>
</section>