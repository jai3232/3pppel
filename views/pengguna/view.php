<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\RefPeranan;
use app\models\RefNegeri;

/* @var $this yii\web\View */
/* @var $model app\models\Pengguna */

$this->title = $model->id_pengguna;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pengguna'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengguna-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Kemaskini'), ['update', 'id' => $model->id_pengguna], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Padam'), ['delete', 'id' => $model->id_pengguna], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Padam rekod ini?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?php
        $kategori_agensi = ['Kerajaan', 'Swasta', 'Persendirian'];
    ?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_pengguna',
            'id_pelajar',
            'no_kp',
            'katalaluan',
            'nama',
            // 'kod_peranan', 
            [
                'attribute' => 'kod_peranan',
                'value' => RefPeranan::findOne($model->kod_peranan)->peranan,
            ],
            [
                'attribute' => 'kategori_agensi',
                'value' => $kategori_agensi[$model->kategori_agensi],
            ],
            'nama_agensi',
            'alamat1',
            'alamat2',
            'poskod',
            'bandar',
            [
                'attribute' => 'id_negeri',
                'value' => RefNegeri::findOne($model->id_negeri)->negeri,
            ],
            'no_tel',
            'no_fax',
            'email:email',
            [
                'attribute' => 'photo',
                'format' => 'raw',
                'value' => '<img src="uploads/pengguna/'.$model->photo.'" height="80" width="80" alt="photo">'
            ],
            'tarikh_daftar',
            'status',
             [
                'attribute' => 'status',
                'value' => $model->status ? 'Aktif' : 'Tidak Aktif',
            ],
        ],
    ]) ?>

</div>
