<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "calon".
 *
 * @property int $id_calon
 * @property string $no_kp
 * @property string $nama
 * @property int $id_program rujuk table ref_kod_program
 * @property int $id_kampus rujuk table ref_kampus
 * @property int $id_pusat_temuduga
 * @property int $id_bidang rujuk table ref_kod_bidang
 * @property string $sesi
 * @property string $tarikh_lahir
 * @property int $id_tempat_lahir
 * @property int $id_warganegara
 * @property string $alamat1
 * @property string $alamat2
 * @property int $poskod
 * @property string $bandar
 * @property int $id_negeri
 * @property string $jantina L=Lelaki, P=Perempuan
 * @property int $agama 1=Islam, 2=Buddha, 3=Hindu, 4=Kristian, 5=Lain-Lain
 * @property int $status 0=Bujang,1=Kahwin, 2=Duda, 3=Janda
 * @property int $bangsa 1=Melayu; 2=Cina; 3=India; 4=Lain-Lain
 * @property string $no_tel
 * @property string $email
 * @property string $spm_bm
 * @property string $spm_sejarah
 * @property int $spm_bm_thn
 * @property string $institusi_kemahiran
 * @property int $id_tahap_kemahiran
 * @property int $id_noss rujuk table ref_kod_noss
 * @property string $status_panggilan_temuduga 0=Tdk layak temuduga;  1=Layak temuduga
 * @property string $status_tawaran_temuduga 0=Tolak tawaran temuduga; 1=Terima tawaran temuduga
 * @property string $status_tawaran_kemasukan 0=gagal, 1=berjaya, 2=simpanan, 3=rayuan, 4=gagal rayuan
 * @property int $umur
 * @property string $status_terima_tawaran 0=tolak; 1=terima
 * @property string $jenis_cacat
 *
 * @property RefKodProgram $program
 * @property RefKodBidang $bidang
 * @property RefNegeri $negeri
 * @property RefKampus $kampus
 * @property RefPusatTemuduga $pusatTemuduga
 * @property RefWarganegara $warganegara
 * @property CalonTemuduga[] $calonTemudugas
 * @property Pelajar[] $pelajars
 * @property Pengalaman[] $pengalamen
 */
class Calon extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'calon';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_program', 'id_kampus', 'id_pusat_temuduga', 'id_bidang', 'id_tempat_lahir', 'id_warganegara', 'poskod', 'id_negeri', 'agama', 'status', 'bangsa', 'spm_bm_thn', 'id_tahap_kemahiran', 'id_noss', 'umur'], 'integer'],
            [['tarikh_lahir'], 'safe'],
            [['status_panggilan_temuduga', 'status_tawaran_temuduga', 'status_tawaran_kemasukan', 'status_terima_tawaran'], 'string'],
            [['no_kp'], 'string', 'max' => 12],
            [['nama'], 'string', 'max' => 255],
            [['sesi'], 'string', 'max' => 10],
            [['alamat1'], 'string', 'max' => 100],
            [['alamat2', 'bandar', 'email', 'institusi_kemahiran', 'jenis_cacat'], 'string', 'max' => 50],
            [['jantina'], 'string', 'max' => 11],
            [['no_tel'], 'string', 'max' => 20],
            [['spm_bm', 'spm_sejarah'], 'string', 'max' => 1],
            [['id_program'], 'exist', 'skipOnError' => true, 'targetClass' => RefKodProgram::className(), 'targetAttribute' => ['id_program' => 'id_program']],
            [['id_bidang'], 'exist', 'skipOnError' => true, 'targetClass' => RefKodBidang::className(), 'targetAttribute' => ['id_bidang' => 'id_bidang']],
            [['id_negeri'], 'exist', 'skipOnError' => true, 'targetClass' => RefNegeri::className(), 'targetAttribute' => ['id_negeri' => 'id_negeri']],
            [['id_kampus'], 'exist', 'skipOnError' => true, 'targetClass' => RefKampus::className(), 'targetAttribute' => ['id_kampus' => 'id_kampus']],
            [['id_pusat_temuduga'], 'exist', 'skipOnError' => true, 'targetClass' => RefPusatTemuduga::className(), 'targetAttribute' => ['id_pusat_temuduga' => 'id_pusat_temuduga']],
            [['id_warganegara'], 'exist', 'skipOnError' => true, 'targetClass' => RefWarganegara::className(), 'targetAttribute' => ['id_warganegara' => 'id_warganegara']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_calon' => 'Id Calon',
            'no_kp' => 'No Kp',
            'nama' => 'Nama',
            'id_program' => 'Id Program',
            'id_kampus' => 'Id Kampus',
            'id_pusat_temuduga' => 'Id Pusat Temuduga',
            'id_bidang' => 'Id Bidang',
            'sesi' => 'Sesi',
            'tarikh_lahir' => 'Tarikh Lahir',
            'id_tempat_lahir' => 'Id Tempat Lahir',
            'id_warganegara' => 'Id Warganegara',
            'alamat1' => 'Alamat1',
            'alamat2' => 'Alamat2',
            'poskod' => 'Poskod',
            'bandar' => 'Bandar',
            'id_negeri' => 'Id Negeri',
            'jantina' => 'Jantina',
            'agama' => 'Agama',
            'status' => 'Status',
            'bangsa' => 'Bangsa',
            'no_tel' => 'No Tel',
            'email' => 'Email',
            'spm_bm' => 'Spm Bm',
            'spm_sejarah' => 'Spm Sejarah',
            'spm_bm_thn' => 'Spm Bm Thn',
            'institusi_kemahiran' => 'Institusi Kemahiran',
            'id_tahap_kemahiran' => 'Id Tahap Kemahiran',
            'id_noss' => 'Id Noss',
            'status_panggilan_temuduga' => 'Status Panggilan Temuduga',
            'status_tawaran_temuduga' => 'Status Tawaran Temuduga',
            'status_tawaran_kemasukan' => 'Status Tawaran Kemasukan',
            'umur' => 'Umur',
            'status_terima_tawaran' => 'Status Terima Tawaran',
            'jenis_cacat' => 'Jenis Cacat',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProgram()
    {
        return $this->hasOne(RefKodProgram::className(), ['id_program' => 'id_program']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBidang()
    {
        return $this->hasOne(RefKodBidang::className(), ['id_bidang' => 'id_bidang']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNegeri()
    {
        return $this->hasOne(RefNegeri::className(), ['id_negeri' => 'id_negeri']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKampus()
    {
        return $this->hasOne(RefKampus::className(), ['id_kampus' => 'id_kampus']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPusatTemuduga()
    {
        return $this->hasOne(RefPusatTemuduga::className(), ['id_pusat_temuduga' => 'id_pusat_temuduga']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWarganegara()
    {
        return $this->hasOne(RefWarganegara::className(), ['id_warganegara' => 'id_warganegara']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCalonTemudugas()
    {
        return $this->hasMany(CalonTemuduga::className(), ['id_calon' => 'id_calon']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPelajars()
    {
        return $this->hasMany(Pelajar::className(), ['id_calon' => 'id_calon']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPengalamen()
    {
        return $this->hasMany(Pengalaman::className(), ['id_calon' => 'id_calon']);
    }
}
