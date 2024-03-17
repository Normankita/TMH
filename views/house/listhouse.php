<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Available Houses</h1>
<ul>
    <?php foreach ($house as $house1): ?>
    <?php endforeach; ?>
</ul>
<?= LinkPager::widget(['pagination' => $pagination]) ?>