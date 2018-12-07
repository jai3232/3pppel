<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Calon */

$this->title = $model->id_calon;
$this->params['breadcrumbs'][] = ['label' => 'Calons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="calon-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_calon], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_calon], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_calon',
            'no_kp',
            'nama',
            'id_program',
            'id_kampus',
            'id_pusat_temuduga',
            'id_bidang',
            'sesi',
            'tarikh_lahir',
            'id_tempat_lahir',
            'id_warganegara',
            'alamat1',
            'alamat2',
            'poskod',
            'bandar',
            'id_negeri',
            'jantina',
            'agama',
            'status',
            'bangsa',
            'no_tel',
            'email:email',
            'spm_bm',
            'spm_sejarah',
            'spm_bm_thn',
            'institusi_kemahiran',
            'id_tahap_kemahiran',
            'id_noss',
            'status_panggilan_temuduga',
            'status_tawaran_temuduga',
            'status_tawaran_kemasukan',
            'umur',
            'status_terima_tawaran',
            'jenis_cacat',
        ],
    ]) ?>

</div>
