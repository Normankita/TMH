<?php

use app\models\House;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\HouseSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Houses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="house-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create House', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>



    <?= Html::button($model[1]->house_id , ['class' => 'btn btn-primary dropdown-toggle', 'data-toggle' => 'dropdown']) ?>
    <div class="dropdown-menu">
  <p><?= $model[1]->house_name ?></p>
  <p><?= $model[1]->size ?></p>
  <p><?= $model[1]->description ?></p>
</div>






    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'house_id',
            'house_name',
            'size',
            'description:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, House $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'house_id' => $model->house_id]);
                 }
            ],
        ],
    ]); ?>


</div>
