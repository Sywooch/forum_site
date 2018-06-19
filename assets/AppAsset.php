<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/bootstrap.min.css',
        'css/theme.css',
        'css/bootstrap-reset.css',
		'assets/font-awesome/css/font-awesome.css',
        'css/flexslider.css',
        'assets/bxslider/jquery.bxslider.css',
        'css/animate.css',
        'assets/owlcarousel/owl.carousel.css',
        'assets/owlcarousel/owl.theme.css',
        'css/superfish.css',
        'css/component.css',
        'css/style.css',
        'css/style-responsive.css',
        'css/parallax-slider/parallax-slider.css',
        'css/parallax-slider/parallax-slider.css',
    ];
    public $js = [
		"js/jquery.js",
		'js/parallax-slider/modernizr.custom.28468.js',
		"js/bootstrap.min.js",
		"js/hover-dropdown.js",
		"js/jquery.flexslider.js",
		"assets/bxslider/jquery.bxslider.js",
		"js/jquery.parallax-1.1.3.js",
		"js/wow.min.js",
		"assets/owlcarousel/owl.carousel.js",
		"js/jquery.easing.min.js",
		"js/link-hover.js",
		"js/superfish.js",
		"js/parallax-slider/jquery.cslider.js",
		"js/common-scripts.js",
		"js/site.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
