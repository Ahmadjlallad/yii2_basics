<div>render btn widget</div>
<?= \app\widgets\Button::widget([
    'text' => 'submit my'
]) ?>


<div>
    wedges
</div>
<?php \app\widgets\Bg::begin([
    'bgColor' => 'lightgreen'
]) ?>
using begin and end
<?php \app\widgets\Bg::end() ?>