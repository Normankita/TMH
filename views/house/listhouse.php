<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;

?>

<h1>Available Houses</h1>
<div class="container-fluid rounded-3" style=" background-color:rgba(4,4,2,0.8); color:white; padding:30px;">
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
                <td>Take it</td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= LinkPager::widget(['pagination' => $pagination]) ?>