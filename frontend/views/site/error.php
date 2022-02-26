<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use afzalroq\cms\entities\unit\Unit;
use yii\helpers\Html;

$this->title = $name;
?>
<!-- Banner Start-->
<section class="main-inner-banner back-img" data-jarallax data-speed="0.2"
         data-imgPosition="50% 0%" style="background-image: url(<?=Unit::get('error') ?>);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-page-banner-content">
                    <h1 class="h1-title wow fadeup-animation" data-wow-delay="0.4s">Error</h1>
                    <div class="breadcrumb-box wow fadeup-animation" data-wow-delay="0.5s">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li><a href="/">404 error</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner End-->

