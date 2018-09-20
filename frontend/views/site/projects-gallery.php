<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use common\components\MenuHeaderWidget;
?>

<!--Page Title-->
<section id="banner" class="page-title project-page-banner" style="background-image:url(<?= Yii::$app->homeUrl; ?>images/background/projects.jpg);">
    <div class="auto-container">
        <h1>Ongoing Projects</h1>
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
<section class="kc-elm kc-css-173344 kc_row">
    <div class="kc-row-container  kc-container">
        <div class="kc-wrap-columns">
            <div class="kc-elm kc-css-45758 kc_col-sm-12 kc_column kc_col-sm-12">
                <div class="kc-col-container">

                    <!--Project Section-->
                    <section id="project-gallery">
                        <section class="project-page-section">
                            <div class="auto-container">
                                <div class="row clearfix">
                                    <div class="content-side col-xs-12">
                                        <div class="sec-title ">
                                            <h2><?= $our_projects->project_name ?></h2>
                                        </div>

                                        <div class="nak-gallery nlg1" id="gallery">
                                            <?php
                                            $path = Yii::getAlias('@paths') . '/project-gallery/' . $our_projects->id;
                                            if (count(glob("{$path}/*")) > 0) {
                                                $k = 0;
                                                foreach (glob("{$path}/*") as $file) {
                                                    $k++;
                                                    $arry = explode('/', $file);
                                                    $img_nmee = end($arry);

                                                    $img_nmees = explode('.', $img_nmee);
                                                    if ($img_nmees['1'] != '') {
                                                        ?>
                                                        <a href="<?= Yii::$app->homeUrl; ?>uploads/project-gallery/<?= $our_projects->id ?>/<?= end($arry) ?>" class="gallery-item revGallery-anchor">
                                                            <img class="img-responsive" src="<?= Yii::$app->homeUrl; ?>uploads/project-gallery/<?= $our_projects->id ?>/<?= end($arry) ?>">
                                                            <div style="overflow:hidden">
                                                                <div class="nak-gallery-poster" style="background-image:url('<?= Yii::$app->homeUrl; ?>uploads/project-gallery/<?= $our_projects->id ?>/<?= end($arry) ?>');background-size:cover;background-repeat:no-repeat;background-position:center center;display: block;width: 100%;height: 0;"></div>
                                                            </div>
                                                            <div class="gal-overlay"></div>
                                                        </a>
                                                        <?php
                                                    }
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                        </section>
                    </section>
                    <!--End Projects Section-->


                </div>

            </div>

        </div>
    </div>
</section>