<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'http://fonts.googleapis.com',
        'css/settings.css',
        'css/woocommerce-layout.css',
        'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css',
//        'css/modal.scss',
        'css/owl.css',
        'css/custom.css',
        'css/slider.css',
        'https://fonts.googleapis.com/css?family=PT+Sans%3A400%2C400i%2C700%2C700i%7CRaleway%3A100%2C100i%2C200%2C200i%2C300%2C300i%2C400%2C400i%2C500%2C500i%2C600%2C600i%2C700%2C700i%2C800%2C800i%2C900%2C900i&amp;subset=latin%2Clatin-ext',
        'https://fonts.googleapis.com/css?family=Poppins',
        'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',
        'css/kingcomposer.min.css',
        'css/flaticon.css',
        'https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.2.21/css/lightgallery.min.css',
        'http://maps.google.com/maps/api/js?key=AIzaSyBhRfpxP8pyckIWC0eq7vMnEBI5_wGar3k&amp;ver=4.9.5',
        'css/style.css',
        'css/responsive.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
