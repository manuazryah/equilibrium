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
                    <section id="project">
                        <section class="project-page-section">
                            <div class="auto-container">
                                <div class="row clearfix">
                                    <div class="content-side col-xs-12">

                                        <div class="sec-title ">
                                            <h2>Ongoing Projects</h2>
                                        </div>
                                        <div class="table-responsive text-nowrap">
                                            <table>
                                                <thead>
                                                    <tr class="heading-row">
                                                        <th class="default-col">
                                                            # </th>
                                                        <th class="default-col">
                                                            Project Name
                                                        </th>
                                                        <th class="default-col">
                                                            Client 
                                                        </th>
        <!--                                                <th class="default-col">
                                                            Scope of Work 
                                                        </th>-->
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    if (!empty($our_projects)) {
                                                        $k = 0;
                                                        foreach ($our_projects as $our_project) {
                                                            if (!empty($our_project)) {
                                                                $k++;
                                                                ?>
                                                                <tr class="default-row">
                                                                    <td class="default-col">
                                                                        <?= $k ?></td>
                                                                    <td class="default-col">
                                                                        <?= Html::a($our_project->project_name, ['/site/project-gallery', 'project' => $our_project->canonical_name], ['class' => '']) ?>
                                                                    </td>
                                                                    <td class="default-col">
                                                                        Client: <?= $our_project->client ?>
                                                                    </td>
                    <!--                                                <td class="default-col">
                                                                        Design Engineering , Supply, Installation , Testing and Commisioning of Mechannical, Electrical &amp; Plumbing Works
                                                                    </td>-->
                                                                </tr>
                                                                <?php
                                                            }
                                                        }
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
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