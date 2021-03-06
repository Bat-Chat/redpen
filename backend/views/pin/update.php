<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pin */

$this->title = Yii::t('pin', 'Update {modelClass}: ', [
    'modelClass' => 'Pin',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('pin', 'Pins'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('pin', 'Update');
?>
<div class="pin-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
