<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CalonSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Calons';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="calon-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Calon', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_calon',
            'no_kp',
            'nama',
            'id_program',
            'id_kampus',
            //'id_pusat_temuduga',
            //'id_bidang',
            //'sesi',
            //'tarikh_lahir',
            //'id_tempat_lahir',
            //'id_warganegara',
            //'alamat1',
            //'alamat2',
            //'poskod',
            //'bandar',
            //'id_negeri',
            //'jantina',
            //'agama',
            //'status',
            //'bangsa',
            //'no_tel',
            //'email:email',
            //'spm_bm',
            //'spm_sejarah',
            //'spm_bm_thn',
            //'institusi_kemahiran',
            //'id_tahap_kemahiran',
            //'id_noss',
            //'status_panggilan_temuduga',
            //'status_tawaran_temuduga',
            //'status_tawaran_kemasukan',
            //'umur',
            //'status_terima_tawaran',
            //'jenis_cacat',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
