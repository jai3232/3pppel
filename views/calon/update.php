<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Calon */

$this->title = 'Update Calon: ' . $model->id_calon;
$this->params['breadcrumbs'][] = ['label' => 'Calons', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_calon, 'url' => ['view', 'id' => $model->id_calon]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="calon-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
