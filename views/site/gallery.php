<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Gallery';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-gallery">
    <h1><?= Html::encode($this->title) ?></h1>

     <!--carousel starts here-->

 <div class="container flex-column ">
 <div class="carousel slide h-10" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../../web/images/chair_table.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../../web/images/bed_pillow.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../../web/images/bed.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../../web/images/dressing_table.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../../web/images/night.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../../web/images/kitchen_dim.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
 </div>


    
</div>
