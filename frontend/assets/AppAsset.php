<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'http://fonts.googleapis.com',
        'css/settings.css',
        'css/woocommerce-layout.css',
        'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css',
        'css/modal.css',
        'css/owl.css',
        'css/custom.css',
        'css/slider.css',
        'https://fonts.googleapis.com/css?family=PT+Sans%3A400%2C400i%2C700%2C700i%7CRaleway%3A100%2C100i%2C200%2C200i%2C300%2C300i%2C400%2C400i%2C500%2C500i%2C600%2C600i%2C700%2C700i%2C800%2C800i%2C900%2C900i&amp;subset=latin%2Clatin-ext',
        'https://fonts.googleapis.com/css?family=Poppins',
        'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',
        'css/kingcomposer.min.css',
        'css/flaticon.css',
        'https://unpkg.com/aos@2.3.1/dist/aos.css',
        'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css',
        'https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.2.21/css/lightgallery.min.css',
        'http://maps.google.com/maps/api/js?key=AIzaSyBhRfpxP8pyckIWC0eq7vMnEBI5_wGar3k&amp;ver=4.9.5',
        'css/style.css',
        'css/responsive.css',
    ];
    public $js = [
        'http://maps.google.com/maps/api/js?key=AIzaSyBhRfpxP8pyckIWC0eq7vMnEBI5_wGar3k&amp;ver=4.9.5',
//        'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js',
        'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js',
//        'js/jquery.js',
        'js/core.min.js',
        'js/lightbox.js',
        'js/owl.js',
        'js/wow.js',
        'js/map-script.js',
        'js/script.js',
        'js/careers.js',
        'https://unpkg.com/aos@2.3.1/dist/aos.js',
        'https://cdnjs.cloudflare.com/ajax/libs/just-animate/2.5.0/just-animate.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.2.21/js/lightgallery-all.min.js',
        'https://npmcdn.com/isotope-layout@3.0/dist/isotope.pkgd.min.js',
        'https://npmcdn.com/imagesloaded@4.1/imagesloaded.pkgd.js',
        'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}
