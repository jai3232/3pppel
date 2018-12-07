<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ref_kod_noss".
 *
 * @property int $id_noss auto increment ID for every NOSS 
 * @property string $kod_noss
 * @property string $noss
 */
class RefKodNoss extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ref_kod_noss';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kod_noss', 'noss'], 'required'],
            [['kod_noss'], 'string', 'max' => 45],
            [['noss'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_noss' => 'Id Noss',
            'kod_noss' => 'Kod Noss',
            'noss' => 'Noss',
        ];
    }
}
