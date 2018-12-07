<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ref_pusat_temuduga".
 *
 * @property int $id_pusat_temuduga
 * @property int $kod_pusat_temuduga
 * @property string $pusat_temuduga
 * @property string $alamat1
 * @property string $alamat2
 * @property int $poskod
 * @property string $bandar
 * @property int $kod_negeri
 * @property string $no_tel
 * @property string $no_fax
 * @property string $portal
 *
 * @property Calon[] $calons
 */
class RefPusatTemuduga extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ref_pusat_temuduga';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kod_pusat_temuduga', 'pusat_temuduga', 'alamat1', 'alamat2', 'poskod', 'bandar', 'kod_negeri', 'no_tel', 'no_fax', 'portal'], 'required'],
            [['kod_pusat_temuduga', 'poskod', 'kod_negeri'], 'integer'],
            [['pusat_temuduga'], 'string', 'max' => 100],
            [['alamat1', 'alamat2', 'portal'], 'string', 'max' => 50],
            [['bandar', 'no_tel', 'no_fax'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pusat_temuduga' => 'Id Pusat Temuduga',
            'kod_pusat_temuduga' => 'Kod Pusat Temuduga',
            'pusat_temuduga' => 'Pusat Temuduga',
            'alamat1' => 'Alamat1',
            'alamat2' => 'Alamat2',
            'poskod' => 'Poskod',
            'bandar' => 'Bandar',
            'kod_negeri' => 'Kod Negeri',
            'no_tel' => 'No Tel',
            'no_fax' => 'No Fax',
            'portal' => 'Portal',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCalons()
    {
        return $this->hasMany(Calon::className(), ['id_pusat_temuduga' => 'id_pusat_temuduga']);
    }
}
