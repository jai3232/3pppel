<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\RefNegeri;
use app\models\RefPeranan;

/* @var $this yii\web\View */
/* @var $model app\models\Pengguna */
/* @var $form yii\widgets\ActiveForm */

$peranan_list = ['Tiada'];
$peranan_list = array_merge($peranan_list, ArrayHelper::map(RefPeranan::find()->all(), 'id_peranan', 'peranan'));
?>

<div class="pengguna-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_kp')->textInput(['maxlength' => true]) ?>

    <?php
        if($model->isNewRecord) 
            $form->field($model, 'katalaluan')->textInput(['maxlength' => true, 'value' => '']) 
    ?>

    <?= $form->field($model, 'id_pelajar')->textInput() ?>

    <?= $form->field($model, 'kod_peranan')->dropDownList($peranan_list)->label('Peranan') ?>

    <?= $form->field($model, 'kategori_agensi')->dropDownList(['Kerajaan', 'Swasta', 'Persendirian']) ?>

    <?= $form->field($model, 'nama_agensi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat2')->textInput(['maxlength' => true]) ?>

    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4">
            <?= $form->field($model, 'poskod')->textInput() ?>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
            <?= $form->field($model, 'bandar')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
            <?= $form->field($model, 'id_negeri')->dropDownList(ArrayHelper::map(RefNegeri::find()->all(), 'id_negeri', 'negeri'))->label('Negeri') ?>
        </div>
    </div>

    <?= $form->field($model, 'no_tel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_fax')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?php //= $form->field($model, 'photo')->textInput(['maxlength' => true, 'readonly' => true]) ?>
    
    <?php
        if(!$model->isNewRecord)
            echo Html::img('@web/uploads/pengguna/'.$model->photo, ['alt' => 'photo', 'width' => 120, 'heigth' => 120]);
    ?>

    <?= $form->field($model, 'image_file')->fileInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Tidak Aktif', 'Aktif', ], ['prompt' => '- Sila Pilih -']) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Simpan'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
