<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\House $model */

$this->title = 'Create House';
$this->params['breadcrumbs'][] = ['label' => 'Houses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>



<div class="house-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
      'model' => $model,
    ]) ?>

</div>