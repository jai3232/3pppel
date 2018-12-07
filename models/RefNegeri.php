<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ref_negeri".
 *
 * @property int $id_negeri
 * @property int $kod_negeri
 * @property string $negeri
 *
 * @property Calon[] $calons
 */
class RefNegeri extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ref_negeri';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kod_negeri', 'negeri'], 'required'],
            [['kod_negeri'], 'integer'],
            [['negeri'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_negeri' => 'Id Negeri',
            'kod_negeri' => 'Kod Negeri',
            'negeri' => 'Negeri',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCalons()
    {
        return $this->hasMany(Calon::className(), ['id_negeri' => 'id_negeri']);
    }
}
