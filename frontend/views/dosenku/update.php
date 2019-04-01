<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Dosenku */

$this->title = 'Update Dosenku: ' . $model->nidn;
$this->params['breadcrumbs'][] = ['label' => 'Dosenkus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nidn, 'url' => ['view', 'id' => $model->nidn]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dosenku-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
