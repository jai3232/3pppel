<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "pengguna".
 *
 * @property int $id_pengguna
 * @property int $id_pelajar
 * @property string $no_kp
 * @property string $katalaluan
 * @property string $nama
 * @property int $kod_peranan
 * @property int $kategori_agensi 0=Kerajaan, 1=Swasta, 2=Persendirian
 * @property string $nama_agensi
 * @property string $alamat1
 * @property string $alamat2
 * @property int $poskod
 * @property string $bandar
 * @property int $id_negeri
 * @property string $no_tel
 * @property string $no_fax
 * @property string $email
 * @property string $photo
 * @property string $tarikh_daftar
 * @property string $status
 *
 * @property RefNegeri $negeri
 */
class Pengguna extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */

    public $katalaluan_ulang;
    public $captcha;
    public $verifyCode;
    public $image_file;

    public static function tableName()
    {
        return 'pengguna';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pelajar', 'kod_peranan', 'kategori_agensi', 'poskod', 'id_negeri'], 'integer'],
            [['no_kp', 'katalaluan', 'nama', 'kategori_agensi', 'nama_agensi', 'alamat1', 'poskod', 'bandar', 'id_negeri'], 'required'],
            [['tarikh_daftar'], 'safe'],
            [['status'], 'string'],
            [['no_kp'], 'string', 'max' => 12],
            [['katalaluan'], 'string', 'max' => 32],
            [['nama', 'nama_agensi'], 'string', 'max' => 255],
            [['alamat1', 'alamat2', 'email', 'photo'], 'string', 'max' => 50],
            [['bandar'], 'string', 'max' => 25],
            [['no_tel', 'no_fax'], 'string', 'max' => 20],
            [['id_negeri'], 'exist', 'skipOnError' => true, 'targetClass' => RefNegeri::className(), 'targetAttribute' => ['id_negeri' => 'id_negeri']],
            [['captcha'], 'captcha', /*'captchaAction'=>'site/captcha', */'on'=>'captchaRequired'],
            ['katalaluan_ulang', 'compare', 'compareAttribute' => 'katalaluan', 'skipOnEmpty' => true, 'message'=>"Katalaluan tidak sama"],
            [['email'], 'email'],
            [['no_kp', 'email'], 'unique'],
            ['verifyCode', 'captcha'],
            [['image_file'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, gif'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pengguna' => Yii::t('app', 'Id Pengguna'),
            'id_pelajar' => Yii::t('app', 'Id Pelajar'),
            'no_kp' => Yii::t('app', 'No Kp'),
            'katalaluan' => Yii::t('app', 'Katalaluan'),
            'nama' => Yii::t('app', 'Nama'),
            'kod_peranan' => Yii::t('app', 'Kod Peranan'),
            'kategori_agensi' => Yii::t('app', 'Kategori Agensi'),
            'nama_agensi' => Yii::t('app', 'Nama Agensi'),
            'alamat1' => Yii::t('app', 'Alamat1'),
            'alamat2' => Yii::t('app', 'Alamat2'),
            'poskod' => Yii::t('app', 'Poskod'),
            'bandar' => Yii::t('app', 'Bandar'),
            'id_negeri' => Yii::t('app', 'Id Negeri'),
            'no_tel' => Yii::t('app', 'No Tel'),
            'no_fax' => Yii::t('app', 'No Fax'),
            'email' => Yii::t('app', 'Email'),
            'photo' => Yii::t('app', 'Photo'),
            'tarikh_daftar' => Yii::t('app', 'Tarikh Daftar'),
            'status' => Yii::t('app', 'Status'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNegeri()
    {
        return $this->hasOne(RefNegeri::className(), ['id_negeri' => 'id_negeri']);
    }
}
