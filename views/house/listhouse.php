<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;

?>
<div class="house-list">

    <h1>Available Houses</h1>
    <div class="container-fluid rounded-3 bg-dark" style=" padding:30px; opacity: 0.9;">
        <table class="table table-dark table-striped rounded border-spacing:5em">

            <thead>
                <tr>
                    <th>House name</th>
                    <th>Size</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($house as $house1): ?>
                <tr>
                    <td>
                        <?= $house1->house_name?>
                    </td>
                    <td>
                        <?=$house1->size?>
                    </td>
                    <td>Active</td>
                    <td><?= Html::a('View', ['view', 'house_id' => $house1->house_id]) ?> |
                        <?= Html::a('Take', ['take', 'house_id' => $house1->house_id], ['class' => 'btn btn-outline-secondary','data' => ['confirm' => 'Are you sure you want to take this house?']]); ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?= LinkPager::widget(['pagination' => $pagination]) ?>
</div>