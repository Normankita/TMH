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
    <div class="umbotron text-center bg-transparent mt-5 mb-5">
        <h1><?= Html::encode($this->title) ?></h1>

        <p>
            <?= Html::a('Create House', ['create'], ['class' => 'btn btn-outline-secondary']) ?>
        </p>

        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <?= GridView::widget(['dataProvider' => $dataProvider,'filterModel' => $searchModel,'columns' => [['class' => 'yii\grid\SerialColumn'],'house_id','house_name','size','description:text',['class' => ActionColumn::className(),'urlCreator' => function ($action, House $model, $key, $index, $column) {
                return Url::toRoute([$action, 'house_id' => $model->house_id]);
             }
        ],
    ],'tableOptions' => ['style' => 'background-color:rgba(4,4,2,0.8); color:white;  margin:20px;', 'class' => 'container-fluid rounded-3 border-spacing:5em;']
]); ?>


    </div>


</div>