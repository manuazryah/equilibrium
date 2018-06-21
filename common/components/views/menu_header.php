<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
?>
<div class="navbar-collapse collapse clearfix">
    <ul class="navigation clearfix">
        <li class="">
            <?= Html::a('<img src="' . yii::$app->homeUrl . 'images/nav-logo.png"/>', ['/site/index'], ['class' => 'hvr-underline-from-left1']) ?>
        </li>
        <li class="menu-item menu-item-type-custom menu-item-object-custom <?= $action == 'site/index' ? 'current' : '' ?>">
            <?= Html::a('Home', ['/site/index'], ['class' => 'hvr-underline-from-left1']) ?>
        </li>
        <li class="menu-item menu-item-type-post_type menu-item-object-page <?= $action == 'site/about' ? 'current' : '' ?>">
            <?= Html::a('About Us', ['/site/about'], ['class' => 'hvr-underline-from-left1']) ?>
        </li>
        <li class="menu-item menu-item-type-post_type menu-item-object-page <?= $action == 'site/sectors' ? 'current' : '' ?>">
            <?= Html::a('Sectors', ['/site/sectors', 'sector' => 'oil-gas-engineering'], ['class' => 'hvr-underline-from-left1']) ?>
        </li>
        <li class="menu-item menu-item-type-post_type menu-item-object-page <?= $action == 'site/ervices' ? 'current' : '' ?>">
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