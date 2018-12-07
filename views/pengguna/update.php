<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pengguna */

$this->title = Yii::t('app', 'Kemaskini Pengguna: ' . $model->id_pengguna, [
    'nameAttribute' => '' . $model->id_pengguna,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pengguna'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pengguna, 'url' => ['view', 'id' => $model->id_pengguna]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Kemaskini');
?>
<div class="pengguna-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
