<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;



/* @var $this yii\web\View */
/* @var $model app\models\Pengguna */

$this->title = Yii::t('app', 'Lupa Katalaluan');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengguna-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php
    	if($status == 1) {
    ?>
    <div class="alert alert-success fade in">
        Katalaluan akan dihantar ke email yang didaftarkan.
    </div>
    <?php
		}
		if($status == 2) {
	?>
	<div class="alert alert-danger fade in">
        Maklumat anda tiada dalam senarai pengguna.
    </div>
    <?php
    	}
    ?>
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_kp')->textInput(['maxlength' => true, 'type' => 'number'])->label('No. KP Baru (Tanpa "-")') ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Hantar'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>