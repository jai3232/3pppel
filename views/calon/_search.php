<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CalonSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="calon-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_calon') ?>

    <?= $form->field($model, 'no_kp') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'id_program') ?>

    <?= $form->field($model, 'id_kampus') ?>

    <?php // echo $form->field($model, 'id_pusat_temuduga') ?>

    <?php // echo $form->field($model, 'id_bidang') ?>

    <?php // echo $form->field($model, 'sesi') ?>

    <?php // echo $form->field($model, 'tarikh_lahir') ?>

    <?php // echo $form->field($model, 'id_tempat_lahir') ?>

    <?php // echo $form->field($model, 'id_warganegara') ?>

    <?php // echo $form->field($model, 'alamat1') ?>

    <?php // echo $form->field($model, 'alamat2') ?>

    <?php // echo $form->field($model, 'poskod') ?>

    <?php // echo $form->field($model, 'bandar') ?>

    <?php // echo $form->field($model, 'id_negeri') ?>

    <?php // echo $form->field($model, 'jantina') ?>

    <?php // echo $form->field($model, 'agama') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'bangsa') ?>

    <?php // echo $form->field($model, 'no_tel') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'spm_bm') ?>

    <?php // echo $form->field($model, 'spm_sejarah') ?>

    <?php // echo $form->field($model, 'spm_bm_thn') ?>

    <?php // echo $form->field($model, 'institusi_kemahiran') ?>

    <?php // echo $form->field($model, 'id_tahap_kemahiran') ?>

    <?php // echo $form->field($model, 'id_noss') ?>

    <?php // echo $form->field($model, 'status_panggilan_temuduga') ?>

    <?php // echo $form->field($model, 'status_tawaran_temuduga') ?>

    <?php // echo $form->field($model, 'status_tawaran_kemasukan') ?>

    <?php // echo $form->field($model, 'umur') ?>

    <?php // echo $form->field($model, 'status_terima_tawaran') ?>

    <?php // echo $form->field($model, 'jenis_cacat') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
