<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ref_peranan".
 *
 * @property int $id_peranan
 * @property string $kod_peranan
 * @property string $peranan
 */
class RefPeranan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ref_peranan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kod_peranan', 'peranan'], 'required'],
            [['kod_peranan'], 'string', 'max' => 5],
            [['peranan'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_peranan' => Yii::t('app', 'Id Peranan'),
            'kod_peranan' => Yii::t('app', 'Kod Peranan'),
            'peranan' => Yii::t('app', 'Peranan'),
        ];
    }
}
