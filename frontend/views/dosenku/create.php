<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Dosenku */

$this->title = 'Create Dosenku';
$this->params['breadcrumbs'][] = ['label' => 'Dosenkus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dosenku-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
