<?php

namespace frontend\assets;

use yii\web\AssetBundle;
use yii\web\YiiAsset;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/animate.css',
        'css/bootstrap.min.css',
        'css/font-awesome.min.css',
        'css/jarallax.css',
        'css/slick.css',
        'css/slick-theme.css',
        'css/style.css',
        'css/search.css'
    ];
    public $js = [
        'js/bootstrap.min.js',
        'js/custom.js',
        'js/custom-scroll-count.js',
        'js/jarallax.js',
        'js/jarallax.min.js',
//        'js/jquery.min.js',
        'js/popper.min.js',
        'js/slick.min.js',
        'js/tilt.jquery.js',
        'js/wow.min.js',
        'js/search.js',
        'js/seacialview.js',
        'js/jquery.magnific-popup.min.js.js'
    ];
    public $depends = [
        YiiAsset::class,
    ];
}
