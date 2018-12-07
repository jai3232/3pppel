<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Calon */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="calon-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_kp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_program')->textInput() ?>

    <?= $form->field($model, 'id_kampus')->textInput() ?>

    <?= $form->field($model, 'id_pusat_temuduga')->textInput() ?>

    <?= $form->field($model, 'id_bidang')->textInput() ?>

    <?= $form->field($model, 'sesi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tarikh_lahir')->textInput() ?>

    <?= $form->field($model, 'id_tempat_lahir')->textInput() ?>

    <?= $form->field($model, 'id_warganegara')->textInput() ?>

    <?= $form->field($model, 'alamat1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'poskod')->textInput() ?>

    <?= $form->field($model, 'bandar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_negeri')->textInput() ?>

    <?= $form->field($model, 'jantina')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'agama')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'bangsa')->textInput() ?>

    <?= $form->field($model, 'no_tel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'spm_bm')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'spm_sejarah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'spm_bm_thn')->textInput() ?>

    <?= $form->field($model, 'institusi_kemahiran')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_tahap_kemahiran')->textInput() ?>

    <?= $form->field($model, 'id_noss')->textInput() ?>

    <?= $form->field($model, 'status_panggilan_temuduga')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'status_tawaran_temuduga')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'status_tawaran_kemasukan')->dropDownList([ '0', '1', '2', '3', '4', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'umur')->textInput() ?>

    <?= $form->field($model, 'status_terima_tawaran')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'jenis_cacat')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
