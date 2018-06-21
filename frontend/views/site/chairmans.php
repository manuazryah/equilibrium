<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use common\components\MenuHeaderWidget;

$this->title = 'Chairmans-Message';
$this->params['breadcrumbs'][] = $this->title;
$chairmans = common\models\Chairmans::findOne(1);
?>
<div class="site-contact">

    <section id="banner" class="page-title banner" style="background-image:url(../uploads/chairman/banner/banner_image.<?= $chairmans->banner_image; ?>)">
    <!--<section id="banner" class="page-title" style="background-image:url(images/601.jpg)">-->
        <div class="auto-container">
            <h1>Chairman's Message</h1>
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
                        <?php // include './includes/menu_header.php'; ?>
                    </nav>
                    <!-- Main Menu End-->
                </div>
            </div>
        </div>
    </section>
    <div class="kc_clfw"></div>
    <section class="kc-elm kc-css-173344 kc_row">
        <div class="kc-row-container  kc-container">
            <div class="kc-wrap-columns">
                <div class="kc-elm kc-css-45758 kc_col-sm-12 kc_column kc_col-sm-12">
                    <div class="kc-col-container">
                        <section class="chairmans-page-section">
                            <div class="auto-container">
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="sec-title">
                                            <h2>Chairman's Message</h2>
                                        </div>
                                        <div class="text text-justify">
                                            <p><i class="chairmans-img"><img src="<?= Yii::$app->homeUrl ?>uploads/chairman/<?= $chairmans->id; ?>/image.<?= $chairmans->image; ?>" class="img-responsive"/></i>

                                            </p>
                                            <?= $chairmans->content; ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
