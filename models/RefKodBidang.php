<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ref_kod_bidang".
 *
 * @property int $id_bidang
 * @property string $bidang
 *
 * @property Calon[] $calons
 */
class RefKodBidang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ref_kod_bidang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bidang'], 'required'],
            [['bidang'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_bidang' => 'Id Bidang',
            'bidang' => 'Bidang',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCalons()
    {
        return $this->hasMany(Calon::className(), ['id_bidang' => 'id_bidang']);
    }
}
