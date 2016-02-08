<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('pin', 'Pins');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pin-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('pin', 'Create Pin'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'image_id',
            'x_position',
            'y_position',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
