<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ref_kampus".
 *
 * @property int $id_kampus
 * @property int $kod_kampus
 * @property string $kampus
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
class RefKampus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ref_kampus';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kod_kampus', 'kampus', 'alamat1', 'alamat2', 'poskod', 'bandar', 'kod_negeri', 'no_tel', 'no_fax', 'portal'], 'required'],
            [['kod_kampus', 'poskod', 'kod_negeri'], 'integer'],
            [['kampus'], 'string', 'max' => 100],
            [['alamat1', 'alamat2', 'no_tel', 'portal'], 'string', 'max' => 50],
            [['bandar', 'no_fax'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kampus' => 'Id Kampus',
            'kod_kampus' => 'Kod Kampus',
            'kampus' => 'Kampus',
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
        return $this->hasMany(Calon::className(), ['id_kampus' => 'id_kampus']);
    }
}
