<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Pengguna */

$this->title = Yii::t('app', 'Create Pengguna');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Penggunas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengguna-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
