<?php
/* @var $this yii\web\View */

use common\components\MenuHeaderWidget;
use common\models\Careers;
use yii\widgets\ActiveForm;
?>

<!--Page Title-->
<section id="banner" class="page-title careers-page-banner banner" style="background-image:url(<?= yii::$app->homeUrl; ?>images/background/careers.jpg);">
    <div class="auto-container">
        <h1>Careers</h1>
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
<section class="kc-elm kc-css-351650 kc_row careers-page">
    <div class="kc-row-container  kc-container">
        <div class="kc-wrap-columns">
            <div class="kc-elm kc-css-593335 kc_col-sm-12 kc_column kc_col-sm-12">
                <div class="kc-col-container">
                    <!--Sidebar Page Container-->
                    <div class="sidebar-page-container">
                        <div class="auto-container">
                            <div class="row clearfix">
                                <!--Sidebar Side-->
                                <div class="sidebar-side col-lg-3 col-md-4 col-sm-12 col-xs-12">
                                    <aside class="sidebar default-sidebar">
                                        <div id="bunch_servies-2" class="widget sidebar-widget widget_bunch_servies">
                                            <!--Blog Category Widget-->
                                            <div class="sidebar-blog-category project-page-section">
                                                <h5 class="title">Sectors</h5>
                                                <ul class="blog-cat">
                                                    <li class=""><button type="button" class="button is-checked" data-filter="">All</button></li>
                                                    <?php
                                                    if ($sectors) {
                                                        $i = 0;
                                                        foreach ($sectors as $sector) {
                                                            ?>
                                                            <li class=""><button type="button" class="button" data-filter=".Sector_<?= $i ?>"><?= $sector->name ?> </button></li>
                                                            <?php
                                                            $i++;
                                                        }
                                                    }
                                                    ?>
                                                </ul>
                                            </div>
                                            <?php //include './includes/service_menu.php';    ?>
                                        </div>
                                        <div id="bunch_brochures-2" class="widget sidebar-widget widget_bunch_brochures">
                                            <!--Brochure-->
                                            <div class="brochure-widget">

                                                <div class="brochure-box">
                                                    <div class="inner">
                                                        <span class="icon fa fa-user-o"></span>
                                                        <div class="text">Chairman's Message</div>
                                                    </div>
                                                    <a href="chairmans-message.php" class="overlay-link"></a>
                                                </div>

                                                <div class="brochure-box">
                                                    <div class="inner">
                                                        <span class="icon fa fa-file-powerpoint-o"></span>
                                                        <div class="text">Electronic Profile</div>
                                                    </div>
                                                    <a target="_blank" download="" href="pdf/EqecProfile.pdf"class="overlay-link"></a>
                                                </div>

                                            </div>

                                        </div>
                                    </aside>
                                </div>


                                <!--Content Side-->
                                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                                    <div class="solution-single">
                                        <div class=" nlg1" id="gallery1">
                                            <?php
                                            if ($sectors) {
                                                $i = 0;
                                                foreach ($sectors as $sector) {
                                                    ?>
                                                    <div class="gallery-item revGallery-anchor Sector_<?= $i ?>">
                                                        <div class="job_post_main_wrapper">
                                                            <?php
                                                            $careers = Careers::find()->where(['sector_id' => $sector->id, 'status' => 1])->all();
                                                            if ($careers) {
                                                                foreach ($careers as $career) {
                                                                    ?>
                                                                    <div class="row">
                                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                            <div class="job_post_side_img">
                                                                                <img src="<?= yii::$app->homeUrl . 'uploads/careers/' . $career->id . '/image.' . $career->image; ?>" alt="post_img">
                                                                            </div>
                                                                            <div class="job_post_right_cont">
                                                                                <h4><?= $career->job_title ?></h4>
                                                                                <!--<h4>Senior Reservoir Enginer(1 - 2 Yrs Exp.)</h4>-->
                                                                                <p><?= $career->company_name ?>.</p>
                                                                                <span><?= $career->description ?> </span>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                            <div class="job_post_right_btn_wrapper">
                                                                                <ul>
                                                                                     <!--<li class="post-button"><a>View More</a></li>-->
                                                                                    <li class="post-button"><a role="button" data-toggle="modal" class="career" job_id="<?= yii::$app->EncryptDecrypt->Encrypt('encrypt', $career->id) ?>" data-target="#modal-1354">Apply</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php }
                                                                ?>
                                                            <?php } else { ?>
                                                                <div class="row">
                                                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                        <div class="job_post_side_img">
                                                                            <img src="<?= yii::$app->homeUrl; ?>images/Chairman1bg.jpg.png" alt="post_img">
                                                                        </div>
                                                                        <div class="job_post_right_cont">
                                                                            <h4>No Job is opening now!</h4>
                                                                            <!--<h4>Senior Reservoir Enginer(1 - 2 Yrs Exp.)</h4>-->
                                                                            <p></p>
                                                                            <span> </span>

                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            <?php }
                                                            ?>
                                                        </div>
                                                    </div>	
                                                    <?php
                                                    $i++;
                                                }
                                            }
                                            ?>
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
<div class="modal fade offshore-modal-form in" id="modal-1354" tabindex="-1" role="dialog" aria-labelledby="modal-1354-label" style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="modal-1354-label">Apply for this Job</h4>
            </div>
            <div class="modal-body">
                <div role="form" class="wpcf7" id="wpcf7-f1332-o1" lang="en-US" dir="ltr">
                    <div class="screen-reader-response"></div>
                    <?php
                    $form = ActiveForm::begin();
                    ?>
                    <!--<form action="" method="post" class="wpcf7-form" enctype="multipart/form-data" novalidate="novalidate">-->

                    <div class="form-group"><span class="wpcf7-form-control-wrap name">

                            <?= $form->field($model, 'career_id')->hiddenInput()->label(FALSE) ?>
                            <?= $form->field($model, 'name')->textInput(['placeholder' => 'Full Name', 'maxlength' => true])->label(FALSE) ?>
                        </span></div>
                    <div class="form-group"><span class="wpcf7-form-control-wrap email">
                            <?= $form->field($model, 'email')->textInput()->input('email', ['placeholder' => 'Email', 'maxlength' => true])->label(FALSE) ?>
                        </span></div>
                    <div class="form-group"><span class="wpcf7-form-control-wrap phone">
                            <?= $form->field($model, 'mobile')->textInput(['placeholder' => 'Mobile', 'maxlength' => true])->label(FALSE) ?>
                        </span></div>
                    <div class="form-group">
                        <span class="wpcf7-form-control-wrap phone">
                            <?= $form->field($model, 'reference')->textInput(['placeholder' => 'Job Reference', 'maxlength' => true])->label(FALSE) ?>
                        </span>
                    </div>
                    <div class="form-group">
                        <span class="wpcf7-form-control-wrap phone">
                            <?= $form->field($model, 'cv')->fileInput()->label('Upload CV'); ?>
                        </span>
                    </div>

                    <div id="upload_button">
                        <label>

<!--                            <input type="file" ngf-select ng-model="new_files" ng-change="fs.uploadFiles(new_files)" name="cv">
 <span class="btn btn-primary">Browse CV</span>-->
                        </label>
                    </div>
                    <!--                        /*******/
                                            <div class="form-group">
                                                <span class="wpcf7-form-control-wrap resume">
                                                    <input type="file" name="resume" size="40" class="wpcf7-form-control wpcf7-file wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
                                                </span>
                                            </div>
                    /**************************/-->
                    <div id="recaptcha" class="g-recaptcha" style="transform:scale(0.63);-webkit-transform:scale(0.63);transform-origin:0 0;-webkit-transform-origin:0 0;position: absolute;right: -70px;bottom: 65px; margin-bottom: 15px;" data-sitekey="6LeqjF0UAAAAAP4bdtEuNVjfWrrDAnTrCQObEh13"></div>
                    <p><input type="submit" value="Apply" class="wpcf7-form-control wpcf7-submit btn btn-block btn-warning btn-style-three"><span class="ajax-loader"></span></p>
                    <div class="wpcf7-response-output wpcf7-display-none"></div>
                    <!--</form>-->
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('document').ready(function () {
        $('.career').click(function () {
            var job = $(this).attr('job_id');
            $('#careerjob-career_id').val(job);
        });
    });
</script>