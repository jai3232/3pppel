<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Calon */

$this->title = 'Create Calon';
$this->params['breadcrumbs'][] = ['label' => 'Calons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="calon-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
