<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ProjectUser */

$this->title = Yii::t('projectuser', 'Update {modelClass}: ', [
    'modelClass' => 'Project User',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('projectuser', 'Project Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('projectuser', 'Update');
?>
<div class="project-user-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
