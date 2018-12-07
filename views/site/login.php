<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
// use app\models\Pengguna;

// print_r(Pengguna::find()->where(['id_pengguna' => 1])->asArray()->one());
// $this->title = 'Login';
// $this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-login row">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <!-- <p>Please fill out the following fields to login:</p> -->
    <div class="container">
        <div class="login-form">
            <div class="main-div">
                <div class="panel">
                    <h3>Selamat Datang ke Sistem 3PPPel</h3>
                    <p>Masukkan No. KP dan Katalaluan</p>
               </div>
                <?php $form = ActiveForm::begin([
                    'id' => 'login-form',
                    'layout' => 'horizontal',
                    'fieldConfig' => [
                        'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                        'labelOptions' => ['class' => 'col-lg-1 control-label'],
                    ],
                ]); ?>

                    <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label('No. KP') ?>

                    <?= $form->field($model, 'password')->passwordInput()->label('Katalaluan') ?>

                    <?php /*= $form->field($model, 'rememberMe')->checkbox([
                        'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
                    ]) */ ?>

                    <div class="form-group">
                        <div class="col-lg-offset-0 col-lg-12">
                            <?= Html::submitButton('Login', ['class' => 'btn btn-primary form-control', 'name' => 'login-button']) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-0 col-lg-12">
                            <?= Html::a('Daftar', Url::to(['site/register']), ['class' => 'btn btn-primary register form-control']) ?>
                        </div>
                    </div>
                    <div class="forgot"><a href="<?= Url::to(['site/forgot']) ?>">Lupa Katalaluan</a></div>

                <?php ActiveForm::end(); ?>
            </div>

        </div>
    </div>
</div>

<?php

$this->registerCss('
body{ background-image:url("images/bg02.jpg"); background-repeat:no-repeat; background-position:center; background-size:cover; padding:10px;}
nav + .container {
    background: none;
    -webkit-box-shadow: 0px 0px 16px 2px rgba(97,93,97,0);
    -moz-box-shadow: 0px 0px 16px 2px rgba(97,93,97,0);
    box-shadow: 0px 0px 16px 2px rgba(97,93,97,0);
}

.form-heading { color:#fff; font-size:23px;}
.panel h2{ color:#444444; font-size:18px; margin:0 0 8px 0;}
.panel p { color:#777777; font-size:14px; margin-bottom:30px; line-height:24px;}
.login-form .form-control {
    background: #f7f7f7 none repeat scroll 0 0;
    border: 1px solid #d4d4d4;
    border-radius: 4px;
    font-size: 14px;
    height: 50px;
    line-height: 50px;
}
.main-div {
    background: #ffffff none repeat scroll 0 0;
    border-radius: 5px;
    margin: 10px auto 30px;
    max-width: 88%;
    width: 500px;
    padding: 50px 45px 70px 45px;
    -webkit-box-shadow: 12px 12px 10px -8px rgba(0,0,0,0.75);
    -moz-box-shadow: 12px 12px 10px -8px rgba(0,0,0,0.75);
    box-shadow: 12px 12px 10px -8px rgba(0,0,0,0.75);
}

.login-form .form-group {
    margin-bottom:10px;
}
.login-form{ text-align:center;}
.forgot a {
    color: #777777;
    font-size: 14px;
    text-decoration: underline;
}
.login-form  .btn.btn-primary {
    background: #f0ad4e none repeat scroll 0 0;
    border-color: #f0ad4e;
    color: #ffffff;
    font-size: 14px;
    width: 100%;
    height: 50px;
    line-height: 50px;
    padding: 0;
}
.forgot {
    text-align: left; 
    margin-bottom:30px;
    font-weight: bold;
}
.botto-text {
    color: #ffffff;
    font-size: 14px;
    margin: auto;
}
.login-form .btn.btn-primary.reset {
    background: #ff9900 none repeat scroll 0 0;
}

.login-form .btn.btn-primary.register {
    background: #3300cc none repeat scroll 0 0;
}
.back { text-align: left; margin-top:10px;}
.back a {color: #444444; font-size: 13px;text-decoration: none;}
label {
    text-align: left !important;
}
p.help-block-error {
    margin-left: 0px !important;
    text-align: left;
}

');


$this->registerJs('
    $(".col-lg-1").removeClass("col-lg-1").addClass("col-lg-4");
    $(".col-lg-3").removeClass("col-lg-3").addClass("col-lg-12");
');


?>