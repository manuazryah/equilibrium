<?php
/* @var $this yii\web\View */

use common\components\MenuHeaderWidget;
use common\components\ServiceLeftMenuWidget;
?>
<!--Page Title-->
<section id="banner" class="page-title sectors-page-banner banner" style="background-image:url(<?= yii::$app->homeUrl; ?>images/background/services.jpg);">
    <div class="auto-container">
        <h1>Oil & Gas Engineering</h1>
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
                    <section id="Oil-Gas-Engineering"></section>
                    <div class="sidebar-page-container">
                        <div class="auto-container">
                            <div class="row clearfix">
                                <!--Sidebar Side-->
                                <?= ServiceLeftMenuWidget::widget() ?>

                                <!--<div id="Feasibility-studies"></div>-->

                                <!--Content Side-->
                                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                                    <div class="solution-single">
                                        <div class="inner-box">
                                            <div class="image">
                                                <img src="<?= yii::$app->homeUrl; ?>images/services/1920.jpg" alt="" />
                                            </div>
                                            <h2>Equilibrium at Oil & Gas Engineering Sector</h2>
                                            <div class="text">
                                                <p>EEC will provide consultancy services and support at all stages from concept to commissioning, driven by environmental studies and impact assessment, risk analysis, energy conservation and optimization, and asset integrity.</p>
                                                <p>With our unique expertise, we are equipped to assess and advise on de-bottlenecking, revamping, and expansion of aged Petroleum Refining and Oil & Gas Plants based on  industry benchmarks on HSE management, loss prevention, energy optimization and life assessment, and through these, facilitating management of plant integrity, performance enhancement and sustainability.</p>
                                                <div class="two-column row clearfix">
                                                    <div class="column col-md-6 col-sm-6 col-xs-12">
                                                        <div class="image">
                                                            <img src="<?= yii::$app->homeUrl; ?>images/services/1.jpg" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="column col-md-6 col-sm-6 col-xs-12">
                                                        <h3>Equilibrium's Features</h3>
                                                        <p><ul class="list-style-one">
                                                            <li>Master Planning</li>
                                                            <li>Upstream facilities and Operations in the Hydrocarbon chain</li>
                                                            <li>Reservoir Engineering, and Well Integrity Management </li>
                                                            <li>Capacity balancing and debottlenecking </li>
                                                            <li>Turn-Around Planning and Management </li>
                                                            <li>Cost optimization studies and recommendations</li>
                                                            <li>Handling of Petroleum derivative products </li>
                                                            <li>Value Engineering</li>

                                                        </ul></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <!--Product Info Tabs-->
                                        <div class="product-info-tabs">
                                            <!--Product Tabs-->
                                            <div class="prod-tabs tabs-box">

                                                <!--Tab Btns-->
                                                <ul class="tab-btns tab-buttons clearfix">
                                                    <li data-tab="#prod-details1" class="tab-btn active-btn">Precautions</li>
                                                    <li data-tab="#prod-details2" class="tab-btn ">Intelligence</li>
                                                    <li data-tab="#prod-details3" class="tab-btn ">Specializations</li>
                                                </ul>

                                                <!--Tabs Container-->
                                                <div class="tabs-content">
                                                    <!--Tab / Active Tab-->
                                                    <div class="tab active-tab" id="prod-details1">
                                                        <div class="content">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                        </div>
                                                    </div>
                                                    <!--Tab / Active Tab-->
                                                    <div class="tab " id="prod-details2">
                                                        <div class="content">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                        </div>
                                                    </div>
                                                    <!--Tab / Active Tab-->
                                                    <div class="tab " id="prod-details3">
                                                        <div class="content">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!--End Product Info Tabs-->
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