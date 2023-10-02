<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\House $model */

$this->title = 'Update House: ' . $model->house_id;
$this->params['breadcrumbs'][] = ['label' => 'Houses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->house_id, 'url' => ['view', 'house_id' => $model->house_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="house-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
