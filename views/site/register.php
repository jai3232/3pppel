<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use app\models\Jabatan;
use app\models\RefNegeri;
use yii\captcha\Captcha;


/* @var $this yii\web\View */
/* @var $model app\models\Pengguna */

$this->title = Yii::t('app', 'Daftar Pengguna');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengguna-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_kp')->textInput(['maxlength' => true, 'type' => 'number'])->label('No. KP Baru (Tanpa "-")') ?>

    <?= $form->field($model, 'kategori_agensi')->dropDownList([0 => 'Kerajaan', 1 => 'Swasta', 3 => 'Persendirian'], ['prompt' => '- Sila Pilih -']) ?>    

    <?= $form->field($model, 'nama_agensi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat2')->textInput(['maxlength' => true]) ?>

    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4">
            <?= $form->field($model, 'poskod')->textInput(['maxlength' => true, 'type' => 'number']) ?>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
            <?= $form->field($model, 'bandar')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
            <?= $form->field($model, 'id_negeri')->dropDownList(ArrayHelper::map(RefNegeri::find()->all(), 'kod_negeri', 'negeri'), ['prompt' => '- Sila Pilih -'])->label('Negeri') ?>
        </div>
    </div>

    <?= $form->field($model, 'no_tel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_fax')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'katalaluan')->passwordInput(['maxlength' => true])->label('Katalaluan') ?>

    <?= $form->field($model, 'katalaluan_ulang')->passwordInput(['maxlength' => true])->label('Ulang Katalaluan') ?>

    <?= $form->field($model, 'verifyCode')->widget(Captcha::className()) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Daftar'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>