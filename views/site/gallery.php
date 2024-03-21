<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use coderius\swiperslider\SwiperSlider;

$this->title = 'Gallery';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-gallery">
    <h1><?= Html::encode($this->title) ?></h1>

     <!--carousel starts here-->

 <div class="container flex-column " id="slider">
 <?= SwiperSlider::widget([
    // 'on ' . \coderius\swiperslider\SwiperSlider::EVENT_AFTER_REGISTER_DEFAULT_ASSET => function(){
    //     CustomAsset::register($view);
    // },
    'showScrollbar' => true,
    'slides' => [
        [
            'value' => 'The Martin Houses Dodoma',
            'options' => [
                'style' => ["background-image" => "url(/images/front.jpg)", "color"=>"blue"]
            ]
        ],
        '<img src="/images/bed.jpg">',
        '<img src="/images/chair_table.jpg">',
        '<img src="/images/bed.jpg">',
        '<img src="/images/kitchen_dim.jpg">',
        '<img src="/images/pillow.jpg">',
        '<img src="/images/remote.jpg">',
    ],
    // 'assetFromCdn' => true,
    'clientOptions' => [
        'slidesPerView' => 2,
        'spaceBetween'=> 10,
        'centeredSlides'=> true,
        'pagination' => [
            'clickable' => true,
            'renderBullet' => new \yii\web\JsExpression("function (index, className) {
                    return '<span class=\"' + className + '\" ><br><b>' + (index + 1) + '</b></span>';
                },
            "),
            ],
            "scrollbar" => [
                "el" => SwiperSlider::getItemCssClass(SwiperSlider::SCROLLBAR),
                "hide" => true,
            ],
    ],

    //Global styles to elements. If create styles for all slides
    'options' => [
        'styles' => [
            SwiperSlider::CONTAINER => ["height" => "300px", "margin-top"=>"0px"],
            SwiperSlider::SLIDE => ["text-align" => "center"],
        ],
    ],
        
]);
 ?>
 </div>   
</div>

<div class="container-fluid flex box " id="imsect">
<div class="row row-cols-lg-auto">
    <div class="col col-lg-3">
    <img src="/images/split.jpg" alt="the night view" >
    </div>
    <div class="col col-lg-3">
        <img src="/images/tag.jpg" alt="" >
    </div>
    <div class="col col-lg-3">
        <img src="/images/blurry.jpg" alt="">
    </div>
    <div class="col col-lg-3">
    <img src="/images/chair_table.jpg" alt="">
    </div>
</div>
<div class="row row-cols-lg-auto">
    <div class="col col-lg-3">
    <img src="/images/night.jpg" alt="the night view" >
    </div>
    <div class="col col-lg-3">
        <img src="/images/pillow.jpg" alt="" >
    </div>
    <div class="col col-lg-3">
        <img src="/images/remote.jpg" alt="">
    </div>
    <div class="col col-lg-3">
    <img src="/images/table.jpg" alt="">
    </div>
</div>
<div class="row row-cols-lg-auto">
    <div class="col col-lg-3">
    <img src="/images/tv.jpg" alt="the night view" >
    </div>
    <div class="col col-lg-3">
        <img src="/images/kitchen.jpg" alt="" >
    </div>
    <div class="col col-lg-3">
        <img src="/images/chair_table.jpg" alt="">
    </div>
    <div class="col col-lg-3">
    <img src="/images/bed_pillow.jpg" alt="">
    </div>
</div>
<div class="row row-cols-lg-auto">
    <div class="col col-lg-3">
    <img src="/images/kitchen_dim.jpg" alt="the night view" >
    </div>
    <div class="col col-lg-3">
        <img src="/images/wall_light.jpg" alt="" >
    </div>
    <div class="col col-lg-3">
        <img src="/images/dressing_table.jpg" alt="">
    </div>
    <div class="col col-lg-3">
    <img src="/images/table.jpg" alt="">
    </div>
</div>
 </div>
