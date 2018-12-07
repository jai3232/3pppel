<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\Pjax;
use app\models\RefPeranan;
/* @var $this yii\web\View */
/* @var $searchModel app\models\PenggunaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Pengguna');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengguna-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Tambah Pengguna'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'tableOptions' => [
                            'class' => 'table table-striped table-bordered table-condensed table-hover table-mini',
        ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            // [
            //     'label' => 'Id',
            //     'attribute' => 'id_pengguna',
            // ],
            'nama',
            'no_kp',
            'id_pelajar',
            // 'katalaluan',
            [
                'attribute' => 'kod_peranan',
                'format' => 'raw',
                'value' => function($model) {
                    $peranan_list = ['Tiada'];
                    $peranan_list = array_merge($peranan_list, ArrayHelper::map(RefPeranan::find()->all(), 'id_peranan', 'peranan'));
                    return Html::dropDownList('peranan_'.$model->id_pengguna, $model->kod_peranan, $peranan_list, ['class' => 'form-control peranan']);
                },
                'filter' => ArrayHelper::map(RefPeranan::find()->all(), 'id_peranan', 'peranan'),
            ],
            //'kategori_agensi',
            'nama_agensi',
            //'alamat1',
            //'alamat2',
            //'poskod',
            //'bandar',
            //'id_negeri',
            //'no_tel',
            //'no_fax',
            'email:email',
            //'photo',
            //'tarikh_daftar',
            [
                'attribute' => 'status',
                'format' => 'raw',
                'value' => function($model) {
                    return Html::checkbox('aktif_'.$model->id_pengguna, $model->status, ['class' => 'aktif']);
                },
                'filter' => ['Tidak', 'Aktif'],
                'contentOptions' => ['class' => 'text-center'],
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
<?php

$this->registerJs('
    $(".peranan").change(function(){
        if(confirm("Tukar peranan ini?")) {
            var id = $(this).prop("name").substr(8); 
            var kod_peranan = $(this).val();
            $.get("'.Url::to(['pengguna/role']).'", {id:id, kod_peranan:kod_peranan}, function(data) {if(false)alert(data);});
        }
    });

    $(".aktif").change(function(){
        //alert($(this).is(":checked"));
        if(confirm("Tukar status ?")) {
            var id = $(this).prop("name").substr(6);
            var val = $(this).is(":checked") ? 1 : 0;
            $.get("'.Url::to(['pengguna/status']).'", {id:id, val:val}, function(data) { if(false)alert(data); })
        }
        else {
            if($(this).is(":checked"))
                $(this).prop("checked", false);
            else
                $(this).prop("checked", true);
        }

    })
');
?>
