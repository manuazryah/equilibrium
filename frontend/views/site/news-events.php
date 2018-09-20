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
                                            <div class="blog-box col-md-4 col-sm-6  col-xs-12">
                                                <div class="img-box blog-index-img-box">
                                                    <img class="img-responsive" src="<?= Yii::$app->homeUrl; ?>uploads/blog/blog1.png" alt="Chairman attends Gastech 2018 Conference at Barcelona, Spain">
                                                </div>
                                                <div class="content-box">
                                                    <h5>Chairman attends Gastech 2018 Conference at Barcelona, Spain</h5>
                                                    <!--                                    <ul class="date">
                                                                                            <li><i class="fa fa-calendar-check-o" aria-hidden="true"></i>Mar 10 2018</li>
                                                                                        </ul>-->
                                                    <p>
                                                        2019 edition of Gastech Exhibition & Conference is taking place in Barcelona 17 - 20 September 2018.  Mr. Mohammed Sahoo AlSuwaidi, Chairman  of Equilibrium Engineering Company attends this important conference.  <a target="_blank" href="http://www.gastechevent.com">http://www.gastechevent.com</a>
                                                    </p>

                                                    <!--<a href="">know more</a>-->                    
                                                </div>
                                            </div>
                                            <div class="blog-box col-md-4 col-sm-6  col-xs-12">
                                                <div class="img-box blog-index-img-box">
                                                    <img class="img-responsive" src="<?= Yii::$app->homeUrl; ?>uploads/blog/blog2.png" alt="Dodsal awards Strategy and Technical Consultancy Services Contract to Abu Dhabi’s Equilibrium Engineering Consultancy">
                                                </div>
                                                <div class="content-box">
                                                    <h5>Dodsal awards Strategy and Technical Consultancy Services Contract to Abu Dhabi’s Equilibrium Engineering Consultancy</h5>
                                                    <p>
                                                        Dodsal Hydrocarbons and Power (Tanzania), Dubai-headquartered Dodsal Group, awarded its contract for the Strategy and Technical Consultancy Services to Equilibrium Engineering Consultancy, Abu Dhabi for their oil and gas exploration on the RUVU Block. 
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="events">
                                            <div class="blog-box col-md-4 col-sm-6  col-xs-12">
                                                <div class="img-box blog-index-img-box">
                                                    <img class="img-responsive" src="<?= Yii::$app->homeUrl; ?>uploads/blog/blog1.png" alt="Chairman attends Gastech 2018 Conference at Barcelona, Spain">
                                                </div>
                                                <div class="content-box">
                                                    <h5>Chairman attends Gastech 2018 Conference at Barcelona, Spain</h5>
                                                    <!--                                    <ul class="date">
                                                                                            <li><i class="fa fa-calendar-check-o" aria-hidden="true"></i>Mar 10 2018</li>
                                                                                        </ul>-->
                                                    <p>
                                                        2019 edition of Gastech Exhibition & Conference is taking place in Barcelona 17 - 20 September 2018.  Mr. Mohammed Sahoo AlSuwaidi, Chairman  of Equilibrium Engineering Company attends this important conference.  <a target="_blank" href="http://www.gastechevent.com">http://www.gastechevent.com</a>
                                                    </p>

                                                    <!--<a href="">know more</a>-->                    
                                                </div>
                                            </div>
                                            <div class="blog-box col-md-4 col-sm-6  col-xs-12">
                                                <div class="img-box blog-index-img-box">
                                                    <img class="img-responsive" src="<?= Yii::$app->homeUrl; ?>uploads/blog/blog2.png" alt="Dodsal awards Strategy and Technical Consultancy Services Contract to Abu Dhabi’s Equilibrium Engineering Consultancy">
                                                </div>
                                                <div class="content-box">
                                                    <h5>Dodsal awards Strategy and Technical Consultancy Services Contract to Abu Dhabi’s Equilibrium Engineering Consultancy</h5>
                                                    <p>
                                                        Dodsal Hydrocarbons and Power (Tanzania), Dubai-headquartered Dodsal Group, awarded its contract for the Strategy and Technical Consultancy Services to Equilibrium Engineering Consultancy, Abu Dhabi for their oil and gas exploration on the RUVU Block. 
                                                    </p>
                                                </div>
                                            </div>
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