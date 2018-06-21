<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use common\models\Sectors;
?>
<div class="sidebar-side col-lg-3 col-md-4 col-sm-12 col-xs-12">
    <aside class="sidebar default-sidebar">
        <div id="bunch_servies-2" class="widget sidebar-widget widget_bunch_servies">
            <!--Blog Category Widget-->
            <div class="sidebar-blog-category">
                <h5 class="title">Sectors</h5>
                <ul class="blog-cat">
                    <!-- Title -->
                    <?php
                    $page_name = Yii::$app->getRequest()->getQueryParam('sector');
                    $sectors = Sectors::find()->where(['status' => 1])->all();
                    foreach ($sectors as $sector) {
                        ?>
                        <li class="<?= $page_name == $sector->canonical_name ? 'active' : '' ?>">
                            <?= Html::a($sector->name, ['/site/sectors', 'sector' => $sector->canonical_name], ['class' => 'hvr-underline-from-left1']) ?>
                        </li>

                    <?php } ?>
                </ul>
            </div>
            <div class="sidebar-blog-category mt40">
                <?php $page_name = basename($_SERVER['PHP_SELF']); ?>
            </div>


        </div>
        <div id="bunch_contact_us-2" class="widget sidebar-widget widget_bunch_contact_us">
            <!--Help Box-->
            <div class="help-box" style="background-image:url('../images/image-2-1.jpg')">
                <div class="inner">
                    <h2>How can we help you?</h2>
                    <div class="text">Contact us at the Industrial office nearest to you or Subscribe a business inquiry online.</div>
                    <a class="contact" href="<?= Yii::$app->homeUrl . 'site/contact'; ?>">Contact Us  <span class="fa fa-angle-double-right"></span></a>
                </div>
            </div>

        </div>
    </aside>
</div>