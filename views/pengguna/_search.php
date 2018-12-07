<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PenggunaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pengguna-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_pengguna') ?>

    <?= $form->field($model, 'id_pelajar') ?>

    <?= $form->field($model, 'no_kp') ?>

    <?= $form->field($model, 'katalaluan') ?>

    <?= $form->field($model, 'nama') ?>

    <?php // echo $form->field($model, 'kod_peranan') ?>

    <?php // echo $form->field($model, 'kategori_agensi') ?>

    <?php // echo $form->field($model, 'nama_agensi') ?>

    <?php // echo $form->field($model, 'alamat1') ?>

    <?php // echo $form->field($model, 'alamat2') ?>

    <?php // echo $form->field($model, 'poskod') ?>

    <?php // echo $form->field($model, 'bandar') ?>

    <?php // echo $form->field($model, 'id_negeri') ?>

    <?php // echo $form->field($model, 'no_tel') ?>

    <?php // echo $form->field($model, 'no_fax') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'photo') ?>

    <?php // echo $form->field($model, 'tarikh_daftar') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
