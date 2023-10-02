<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\House $model */

$this->title = $model->house_id;
$this->params['breadcrumbs'][] = ['label' => 'Houses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="house-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'house_id' => $model->house_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'house_id' => $model->house_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'house_id',
            'house_name',
            'size',
            'description:ntext',
        ],
    ]) ?>

</div>
