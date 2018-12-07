<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ref_warganegara".
 *
 * @property int $id_warganegara
 * @property string $status_warganegara
 *
 * @property Calon[] $calons
 */
class RefWarganegara extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ref_warganegara';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status_warganegara'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_warganegara' => 'Id Warganegara',
            'status_warganegara' => 'Status Warganegara',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCalons()
    {
        return $this->hasMany(Calon::className(), ['id_warganegara' => 'id_warganegara']);
    }
}
