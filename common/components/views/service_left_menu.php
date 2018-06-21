<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use common\models\Services;
?>
<div class="sidebar-side col-lg-3 col-md-4 col-sm-12 col-xs-12">
    <aside class="sidebar default-sidebar">
        <div id="bunch_servies-2" class="widget sidebar-widget widget_bunch_servies">
            <div class="sidebar-blog-category">
                <?php $page_name = Yii::$app->getRequest()->getQueryParam('service'); ?>
                <h5 class="title">Services</h5>
                <ul class="blog-cat">
                    <?php
                    $sectors = Services::find()->where(['status' => 1])->all();
                    foreach ($sectors as $sector) {
                        ?>
                        <li class="<?= $page_name == $sector->canonical_name ? 'active' : '' ?>">
                            <?= Html::a($sector->title, ['/site/services', 'service' => $sector->canonical_name], ['class' => 'hvr-underline-from-left1']) ?>
                        </li>

                    <?php } ?>
                    <!-- Title -->
                </ul>
            </div>
            <!--Blog Category Widget-->



        </div>
        <div id="bunch_contact_us-2" class="widget sidebar-widget widget_bunch_contact_us">
            <!--Help Box-->
            <div class="help-box" style="background-image:url('<?= yii::$app->homeUrl; ?>images/image-2-1.jpg')">
                <div class="inner">
                    <h2>How can we help you?</h2>
                    <div class="text">Contact us at the Industrial office nearest to you or Subscribe a business inquiry online.</div>
                    <a class="contact" href="<?= Yii::$app->homeUrl . 'site/contact'; ?>">Contact Us  <span class="fa fa-angle-double-right"></span></a>
                </div>
            </div>

        </div>
    </aside>
</div>