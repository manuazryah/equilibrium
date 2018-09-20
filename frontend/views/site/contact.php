<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use common\components\MenuHeaderWidget;
?>

<!--Page Title-->
<section id="banner" class="page-title contact-page-banner banner" style="background-image:url(<?= yii::$app->homeUrl; ?>images/background/contact.jpg);">
    <div class="auto-container">
        <h1>Contact Us</h1>
        <!--<div class="text">contact us for more information</div>-->
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
<section class="kc-elm kc-css-154790 kc_row">
    <div class="kc-row-container  kc-container">
        <div class="kc-wrap-columns">
            <div class="kc-elm kc-css-629064 kc_col-sm-12 kc_column kc_col-sm-12">
                <div class="kc-col-container">
                    <!--Services Section-->
                    <section class="contact-section">
                        <div class="auto-container">
                            <div class="row clearfix">
                                <!--Column-->
                                <div class="column col-md-8 col-sm-12 col-xs-12">
                                    <h2>Get in Touch</h2>
                                    <!--<div class="text">if you want to get more info, ping us now.</div>-->
                                    <br>
                                    <!-- Contact Form -->
                                    <div class="contact-form">
                                        <!--Contact Form-->
                                        <div role="form" class="wpcf7" id="wpcf7-f284-p285-o1" lang="en-US" dir="ltr">
                                            <div class="screen-reader-response"></div>
                                            <!--<form action="mail/contact-mail.php" method="post" class="wpcf7-form" novalidate="novalidate">-->
                                            <?= \common\widgets\Alert::widget(); ?>
                                            <?php
                                            $form = ActiveForm::begin(['id' => 'contact-form', 'options' => [
                                                            'class' => 'form-theme'
                                            ]]);
                                            ?>
                                            <div class="row clearfix">
                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                                    <span class="wpcf7-form-control-wrap text-165"><input type="text" name="ContactForm[name]" value="" size="40" class="wpcf7-form-control wpcf7-text " required="" aria-required="true" aria-invalid="false" placeholder="Name" /></span>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                                    <span class="wpcf7-form-control-wrap email-857"><input type="email" name="ContactForm[email]" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" required="" aria-required="true" aria-invalid="false" placeholder="Email" /></span>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                                    <span class="wpcf7-form-control-wrap text-165"><input type="text" name="ContactForm[phone]" value="" size="40" class="wpcf7-form-control wpcf7-text " required="" aria-required="true" aria-invalid="false" placeholder="Phone" /></span>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                                    <span class="wpcf7-form-control-wrap email-857"><input type="text" name="ContactForm[subject]" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" required="" aria-required="true" aria-invalid="false" placeholder="Subject" /></span>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                                    <span class="wpcf7-form-control-wrap textarea-59"><textarea name="ContactForm[message]" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Massage"></textarea></span>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group text-right">
                                                    <div id="recaptcha" class="g-recaptcha"  style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;position: absolute;right: 120px;" data-sitekey="6LeqjF0UAAAAAP4bdtEuNVjfWrrDAnTrCQObEh13"></div>
                                                    <?= Html::submitButton('Submit', ['class' => 'wpcf7-form-control wpcf7-Subscribe theme-btn btn-style-one mt10', 'name' => 'Submit']) ?>
                                                </div>
                                            </div>
                                            <div class="wpcf7-response-output wpcf7-display-none"></div>
                                            <?php ActiveForm::end(); ?>
                                        </div>
                                    </div>
                                    <!--End Contact Form -->
                                </div>
                                <!--Column-->
                                <div class="column col-md-4 col-sm-12 col-xs-12">
                                    <h2>Contact info</h2>
                                    <!--<div class="text">if you want to get more info, ping us now.</div>-->
                                    <br>
                                    <ul class="list-style-two">
                                        <li><span data-aos="flip-left" class="icon fa fa-volume-control-phone"></span><strong><?= $contact_info->phone ?></strong>Mon-Fri, 9am until 6pm</li>
                                        <li><span data-aos="flip-left" class="icon fa fa-envelope-o"></span><strong><?= $contact_info->email ?></strong>We reply within 24 hours</li>
                                        <li><span data-aos="flip-left" class="icon fa fa-map-marker"></span>
                                            <?= $contact_info->address ?>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--End Services Section-->
                </div>
            </div>
        </div>
    </div>
</section>
<section class="kc-elm kc-css-706464 kc_row">
    <div class="kc-row-container">
        <div class="kc-wrap-columns">
            <div class="kc-elm kc-css-814923 kc_col-sm-12 kc_column kc_col-sm-12">
                <div class="kc-col-container">
                    <!--Map Section-->
                    <section class="map-section">
                       <?= $contact_info->location_iframe ?>
                    </section>
                    <!--End Map Section-->
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    jQuery(document).ready(function () {
        jQuery('#contact-form').on('submit', function (e) {
            var res = grecaptcha.getResponse();
            if (res == "" || res == undefined || res.length == 0)
            {
                e.preventDefault();
                if (jQuery("#recaptcha").next(".validation").length == 0) // only add if not added
                {
                    jQuery("#recaptcha").after("<div class='validation' style='color:#c54040;position: absolute;top: 55px;left: 46%;font-size: 12px;'>Please verify that you are not a robot</div>");
                }
            }
        });
    });
</script>