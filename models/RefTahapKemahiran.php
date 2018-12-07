<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ref_tahap_kemahiran".
 *
 * @property int $id_tahap_kemahiran
 * @property string $tahap
 */
class RefTahapKemahiran extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ref_tahap_kemahiran';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tahap'], 'required'],
            [['tahap'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_tahap_kemahiran' => 'Id Tahap Kemahiran',
            'tahap' => 'Tahap',
        ];
    }
}
