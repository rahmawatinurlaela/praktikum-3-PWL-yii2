<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Wisuda */

$this->title = 'Create Wisuda';
$this->params['breadcrumbs'][] = ['label' => 'Wisudas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wisuda-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
