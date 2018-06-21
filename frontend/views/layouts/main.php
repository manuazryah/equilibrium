<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;
use common\models\HomeManagement;
use common\models\Sectors;

AppAsset::register($this);
$action = Yii::$app->controller->id . '/' . Yii::$app->controller->action->id;
$home_management = HomeManagement::findOne(1);
$sectors = Sectors::find()->where(['status' => 1])->limit('6')->all();
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <link rel="shortcut icon" href="<?= yii::$app->homeUrl; ?>images/fav.png" type="image/png" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <script src="<?= Yii::$app->homeUrl; ?>js/jquery.js"></script>
        <script src="<?= Yii::$app->homeUrl; ?>js/jquery.themepunch.tools.min.js"></script>
        <script src="<?= Yii::$app->homeUrl; ?>js/jquery.themepunch.revolution.min.js"></script>
        <?php $this->head() ?>
    </head>
    <div class="loader"></div>
    <body class="home page-template page-template-tpl-king_composer page-template-tpl-king_composer-php page page-id-7 kingcomposer kc-css-system">
        <?php $this->beginBody() ?>
        <div class="page-wrapper">
            <header class="main-header">

                <!--Header Top-->
                <div class="header-top">
                    <div class="auto-container">
                        <div class="inner-container clearfix">
                            <div class="top-left">
                                <ul class="clearfix">
                                    <li><a href="javascript:;"><span class="icon fa fa-volume-control-phone"></span> Call us: <?= $home_management->header_phone ?></a></li>
                                </ul>
                            </div>

                            <div class="top-right clearfix">
                                <ul class="social-icon-one">
                                    <li><a href=""><span class="icon fa fa-envelope-o"></span> <?= $home_management->header_email ?></a></li>
<!--                                    <li><a href="">Solutions</a> <span>:</span></li>
                                    <li><a href="">Products</a> <span>:</span></li>
                                    <li><a href="">News & Events</a> <span>:</span></li>
                                    <li><a href="">Company</a> <span>:</span></li>-->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Header-Upper-->
                <div class="header-upper">
                    <div class="auto-container">
                        <div class="clearfix">

                            <div class="pull-left logo-outer">
                                <div class="logo">
                                    <a href="<?= Yii::$app->homeUrl; ?>"><img src="<?= Yii::$app->homeUrl; ?>images/logo.png" alt="Equilibriom Logo" title="Equilibrium"></a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!--End Header Upper-->


                <!--Sticky Header-->
                <div class="sticky-header">
                    <div class="auto-container clearfix">
                        <!--Logo-->
                        <div class="logo pull-left">
                            <a href="<?= Yii::$app->homeUrl; ?>" class="img-responsive"><img src="<?= Yii::$app->homeUrl; ?>images/logo-small.png" alt="Equilibrium Logo" title="Equilibrium Logo"></a>
                        </div>

                        <!--Right Col-->
                        <div class="right-col pull-right">
                            <!-- Main Menu -->
                            <nav class="main-menu">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->
                                    <button id="navbar-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom <?= $action == 'site/index' ? 'current' : '' ?>">
                                            <?= Html::a('Home', ['/site/index'], ['class' => 'hvr-underline-from-left1']) ?>
                                        </li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page <?= $action == 'site/about' ? 'current' : '' ?>">
                                            <?= Html::a('About Us', ['/site/about'], ['class' => 'hvr-underline-from-left1']) ?>
                                        </li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page <?= $action == 'site/sectors' ? 'current' : '' ?>">
                                            <?= Html::a('Sectors', ['/site/sectors', 'sector' => 'oil-gas-engineering'], ['class' => 'hvr-underline-from-left1']) ?>
                                        </li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page <?= $action == 'site/services' ? 'current' : '' ?>">
                                            <?= Html::a('Services', ['/site/services', 'service' => 'our-services'], ['class' => 'hvr-underline-from-left1']) ?>
                                        </li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page <?= $action == 'site/careers' ? 'current' : '' ?>">
                                            <?= Html::a('Careers', ['/site/careers'], ['class' => 'hvr-underline-from-left1']) ?>
                                        </li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page <?= $action == 'site/contact' ? 'current' : '' ?>">
                                            <?= Html::a('Contact Us', ['/site/contact'], ['class' => 'hvr-underline-from-left1']) ?>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                            <!-- Main Menu End-->
                        </div>

                    </div>
                </div>
                <!--End Sticky Header-->

            </header>

            <?= $content ?>
            <?php
            if ($action == 'site/index') {
                ?>
                <div id="index-footer">
                <?php }
                ?>
                <section class="kc-elm kc-css-671882 kc_row footer-subscribe">
                    <div class="kc-row-container">
                        <div class="kc-wrap-columns">
                            <div class="kc-elm kc-css-753762 kc_col-sm-12 kc_column kc_col-sm-12">
                                <div class="kc-col-container">
                                    <!--Subscribe Section-->
                                    <section class="subscribe-section">
                                        <div class="auto-container">
                                            <div class="row clearfix">
                                                <div class="title-column col-md-6 col-sm-6 col-xs-12">
                                                    <h2>For More Company Details</h2>
                                                    <div class="text">Submit  your email address here</div>
                                                </div>
                                                <div class="column col-md-6 col-sm-6 col-xs-12">
                                                    <div class="subscribe-form">
                                                        <form method="post" id="subscribe-mail-1">
                                                            <div class="form-group">
                                                                <input type="hidden" id="" name="" value="">
                                                                <input id="subscribe_email-1" type="email" name="subscribe_email1" value="" placeholder="Your email address" required="">
                                                                <button type="submit" name="subscribe" class="theme-btn">Submit</button>
                                                                <span class="subscribe_email-1_error" style="color:red"></span>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!--End subscribe Section-->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="clearfix"></div>
                <!--Main Footer-->
                <footer class="site-footer">
                    <div class="footer-middle-wrap">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                    <div class="footer-middle-sidebar">
                                        <section id="text-2" class="widget widget_text foot-logo">
                                            <div class="textwidget">
                                                <p><img src="<?= Yii::$app->homeUrl; ?>images/footlogo.png" alt="logo" >
                                                    <br> <?= $home_management->about_content?>.</p>
                                            </div>
                                        </section>
                <!--                        <section id="zozo_social_widget-2" class="widget zozo_social_widget">
                                            <ul class="nav social-icons social-widget widget-content social-rounded social-white social-h-white social-bg-black social-hbg-own">
                                                <li><a href="#" target="_blank" class="social-fb"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#" target="_blank" class="social-twitter"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#" target="_blank" class="social-instagram"><i class="fa fa-instagram"></i></a></li>
                                                <li><a href="#" target="_blank" class="social-pinterest"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#" target="_blank" class="social-linkedin"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </section>-->
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                    <div class="footer-middle-sidebar">
                                        <section id="nav_menu-5" class="widget widget_nav_menu">
                                            <h3 class="widget-title">Sectors & Services</h3>
                                            <div class="menu-services-menu-container">
                                                <ul id="menu-services-menu" class="menu">
                                                    <?php
                                                    $s = 3;
                                                    if ($sectors)
                                                        foreach ($sectors as $sector) {
                                                            ?>
                                                            <li id="menu-item-197<?= $s ?>" class="menu-item menu-item-type-post_type menu-item-object-mf-service menu-item-197<?= $s ?>">
                                                                <?= Html::a($sector->name, ['site/sectors', 'sector' => $sector->canonical_name], ['class' => 'title']) ?>
                                                            </li>
                                                            <?php
                                                            $s++;
                                                        }
                                                    ?>
                                                </ul>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                    <div class="footer-middle-sidebar">
                                        <section id="nav_menu-5" class="widget widget_nav_menu">
                                            <h3 class="widget-title">Social media</h3>
                                            <div class="menu-services-menu-container">
                                                <ul id="menu-services-menu" class="menu social-menu">
                                                    <?php if($home_management->facebook)?>
                                                    <li><a href="<?= $home_management->facebook?>" target="_blank" class="social-fb"><i class="fa fa-facebook"></i>Facebook</a></li>
                                                     <?php if($home_management->twitter)?>
                                                    <li><a href="<?= $home_management->twitter?>" target="_blank" class="social-twitter"><i class="fa fa-twitter"></i>Twiter</a></li>
                                                     <?php if($home_management->instagram)?>
                                                    <li><a href="<?= $home_management->instagram?>" target="_blank" class="social-instagram"><i class="fa fa-instagram"></i>Instagram</a></li>
                                                     <?php if($home_management->pintrest)?>
                                                    <li><a href="<?= $home_management->pintrest?>" target="_blank" class="social-pinterest"><i class="fa fa-pinterest"></i>Pintrest</a></li>
                                                     <?php if($home_management->linkedin)?>
                                                    <li><a href="<?= $home_management->linkedin?>" target="_blank" class="social-linkedin"><i class="fa fa-linkedin"></i>Linkedin</a></li>
                                                </ul>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                    <div class="footer-middle-sidebar">
                                        <div id="equlibrium_mailchimp_widget-2" class="widget equlibrium_mailchimp_widget">
                                            <h3 class="widget-title">For More Details</h3>
                                            <form class="newsletter" id="subscribe-mail-2" method="post">
                                                <p class="zozo-mc-subtitle">Submit your email address here.</p>
                                                <p class="mc-aknowlegement" id="zozo-mc-err2"></p>
                                                <div class="form-group" data-toggle="tooltip" data-placement="top" data-original-title="" title="">
                                                    <input type="text" class="form-control zozo-mc-email" id="subscribe_email-2" placeholder="Email Address" name="" required>
                                                </div>
                                                <button type="submit" name="subscribe" class="zozo-mc btn btn-default btn-block">Submit</button>
                                            </form>
                                        </div>
                                        <div id="text-3" class="widget widget_text">
                                            <div class="textwidget">
                                                <p>We don’t do mail to spam &amp; your mail
                                                    id is confidential.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-bottom">
                        <div class="footer-bottom-inner container">
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="footer-bottom-items nav pull-left">
                                        <li class="nav-item">
                                            <div class="nav-item-inner"> © 2018 Equilibrium. All Rights Reserved.</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <?php if ($action == 'site/index') { ?>
                </div>
            <?php }
            ?>
        </div>
        <?php $this->endBody() ?>
    </body>
</html>

<?php $this->endPage() ?>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script>
    jQuery(document).ready(function () {
        jQuery('#subscribe-mail-1').on('submit', function (e) {
            e.preventDefault();
            $('.subscribe_email-1_error').html('');
            var email = $('#subscribe_email-1').val();
            jQuery.ajax({
                type: 'POST',
                cache: false,
                async: false,
                data: {email: email},
                url: '<?= Yii::$app->homeUrl; ?>site/subscribe-mail',
                success: function (data) {
                    var $data = JSON.parse(data);
                    if ($data.msg === 'success') {
                        $('#subscribe_email-1').val('');
                    } else {
                        $('.subscribe_email-1_error').html(email + ' already subscribed');
                        $('#subscribe_email-1').val('');
                    }
                }
            });
        });
        jQuery('#subscribe-mail-2').on('submit', function (e) {
            e.preventDefault();
            var email = $('#subscribe_email-2').val();
            jQuery.ajax({
                type: 'POST',
                cache: false,
                async: false,
                data: {email: email},
                url: '<?= Yii::$app->homeUrl; ?>site/subscribe-mail',
                success: function (data) {
                    $('#subscribe_email-2').val('');
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function () {
        $(".loader").fadeOut("slow");
        function setHeight() {
            windowHeight = $(window).innerHeight();
            $('.item').css({
                'height': $(this).height() - 50
            });
            $('.slide-image').css({
                'height': $(this).height() - 50
            });
        }
        ;
        if ($(window).width() >= 767) {
            setHeight();
            $(window).resize(function () {
                setHeight();
            });
        }
    });
</script>