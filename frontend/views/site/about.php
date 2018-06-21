<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use common\components\MenuHeaderWidget;
?>
<!--Page Title-->
<section id="banner" class="page-title about-page-banner banner" style="background-image:url(images/background/about.jpg);">
    <div class="auto-container">
        <h1>About Us </h1>
        <!--<div class="text">History to our industry</div>-->
    </div>
    <!--Page Info-->
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
<section class="kc-elm kc-css-851096 kc_row">
    <div class="kc-row-container">
        <div class="kc-wrap-columns">
            <div class="kc-elm kc-css-444535 kc_col-sm-12 kc_column kc_col-sm-12">
                <div  id="who"></div>
                <div class="kc-col-container">
                    <!--About Section-->
                    <section class="about-section-two">
                        <div class="auto-container">
                            <!--Sec Title-->
                            <div class="sec-title">
                                <h2>Who we are</h2>
                            </div>
                            <div class="row clearfix">
                                <div class="content-column col-md-6 col-sm-6 col-xs-12 ">
                                    <div class="text">
                                        <?= $about_content->who_we_are ?>
                                    </div>
                                </div>
                                <div class="image-column col-md-6 col-sm-6 col-xs-12">
                                    <div class="image">
                                        <img src="<?= Yii::$app->homeUrl; ?>uploads/about/who_we_are_image.<?= $about_content->who_we_are_image ?>" alt="who_we_are" />
                                    </div>
                                </div>
                            </div>


                            <!--<div  id="mission"></div>-->
                            <div class="row clearfix">
                                <!--About Block-->
                                <div class="about-block-two col-md-6 col-sm-6 col-xs-6">

                                    <div class="inner-box">
                                        <div class="row clearfix">
                                            <!--Image Column-->
                                            <div class="image-column col-md-6 col-sm-6 col-xs-12">
                                                <div class="image">
                                                    <img src="<?= Yii::$app->homeUrl; ?>uploads/about/our_mission_image.<?= $about_content->our_mission_image ?>" alt="our_mission"/>
                                                </div>
                                            </div>
                                            <!--Content Column-->
                                            <div class="content-column col-md-6 col-sm-6 col-xs-12">
                                                <h3><a href="#">Our Mission</a></h3>
                                                <div class="text">
                                                    <?= $about_content->our_mission ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--About Block-->
                                <div class="about-block-two col-md-6 col-sm-6 col-xs-6">
                                    <div  id="vission"></div>
                                    <div class="inner-box">
                                        <div class="row clearfix">
                                            <!--Image Column-->
                                            <div class="image-column col-md-6 col-sm-6 col-xs-12">
                                                <div class="image">
                                                    <img src="<?= Yii::$app->homeUrl; ?>uploads/about/our_vision_image.<?= $about_content->our_vision_image ?>" alt="our_vision"/>
                                                </div>
                                            </div>
                                            <!--Content Column-->
                                            <div class="content-column col-md-6 col-sm-6 col-xs-12">
                                                <h3><a href="#">Our Vision</a></h3>
                                                <div class="text">
                                                    <?= $about_content->our_vision ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>
                    <!--End About Section-->
                </div>
            </div>
        </div>
    </div>
</section>
<section class="kc-elm kc-css-344464 kc_row">
    <div class="kc-row-container">
        <div class="kc-wrap-columns">
            <div class="kc-elm kc-css-736596 kc_col-sm-12 kc_column kc_col-sm-12">
                <div class="kc-col-container">
                    <!--Fluid Section One-->
                    <section class="fluid-section-one">
                        <div class="outer-container clearfix">
                            <!--Image Column-->
                            <div class="image-column" style="background-image:url('<?= Yii::$app->homeUrl; ?>uploads/about/why_choose_us_image.<?= $about_content->why_choose_us_image ?>');">
                                <figure class="image-box"><img src="<?= Yii::$app->homeUrl; ?>uploads/about/why_choose_us_image.<?= $about_content->why_choose_us_image ?>" alt="why_we_choose_image"></figure>
                            </div>
                            <!--Content Column-->
                            <div class="content-column">
                                <div class="inner-box">
                                    <div class="sec-title">
                                        <h2>Why Choose Us</h2>
                                    </div>
                                    <div class="text">
                                        <?= $about_content->why_choose_us ?>
                                    </div>
                                    <ul class="choose-info">
                                        <li><span class="icon flaticon-microscope"></span>Advanced <br> Technology</li>
                                        <li><span class="icon flaticon-time-passing"></span>Delivery <br> On Time</li>
                                        <li><span class="icon flaticon-engineer"></span>Certified <br> Engineers</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="kc-elm kc-css-344464 kc_row chairmans-message">
    <div class="kc-row-container">
        <div class="kc-wrap-columns">
            <div class="kc-elm kc-css-736596 kc_col-sm-12 kc_column kc_col-sm-12">
                <div class="kc-col-container">
                    <!--Fluid Section One-->
                    <section class="fluid-section-one">
                        <div class="outer-container clearfix">
                            <div class="content-column">
                                <div class="inner-box">
                                    <div class="sec-title">
                                        <h2>What do say our Chairman ?</h2>
                                    </div>
                                    <div class="text">
                                        <p>
                                            <?= strlen($chairmans_message->short_content) > 253 ? substr($chairmans_message->short_content, 0, 250) . '...' : $chairmans_message->short_content ?>
                                            <?= Html::a('Read more', ['/site/chairmans-message'], ['class' => '']) ?>
                                        </p>
                                    </div>
                                    <ul class="choose-info">
                                        <!--<li><a href="chairmans-message.php" class="theme-btn btn-style-three">Chaiman's Message</a></li>-->
                                        <li><a target="_blank" download="" href="pdf/EqecProfile.pdf" class="theme-btn btn-style-three">Download Electronic Profile</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--Image Column-->
                            <div class="image-column" style="background-image:url('images/Chairman.jpg');">
                                <figure class="image-box"><img src="images/Chairman.jpg" alt=""></figure>
                            </div>
                            <!--Content Column-->
                        </div>
                    </section>
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
                        <div class="kc-wrap-columns circle-listing">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"  id="core_value">
                                <div class="sec-title">
                                    <h2>OUR CORE VALUES</h2>
                                </div>
                                <?= $about_content->our_core_values ?>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                <div class="sec-title">
                                    <h2>OUR CERTIFICATIONS</h2>
                                </div>
                                <?= $about_content->our_certificates ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<?php if (!empty($partners)) { ?>
    <section class="kc-elm kc-css-285117 kc_row our-partners">
        <div class="kc-row-container">
            <div class="kc-wrap-columns">
                <div class="kc-elm kc-css-368189 kc_col-sm-12 kc_column kc_col-sm-12">
                    <div class="kc-col-container">
                        <!--Clients Section-->
                        <section class="clients-section">
                            <div class="auto-container">
                                <div class="sec-title">
                                    <h2>OUR PARTNERS</h2>
                                </div>
                                <div class="sponsors-outer">
                                    <!--Sponsors Carousel-->
                                    <ul class="sponsors-carousel owl-carousel owl-theme">
                                        <?php foreach ($partners as $partner) { ?>
                                            <li class="slide-item">
                                                <figure class="image-box"><a href="#"><img src="<?= Yii::$app->homeUrl; ?>uploads/partners/<?= $partner->id ?>/<?= $partner->id ?>.<?= $partner->image ?>" alt="<?= $partner->alt_tag ?>"></a></figure>
                                            </li>
                                        <?php }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </section>
                        <!--End Clients Section-->
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php }
?>