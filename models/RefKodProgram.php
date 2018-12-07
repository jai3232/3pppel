<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ref_kod_program".
 *
 * @property int $id_program
 * @property string $kod_program
 * @property string $program
 *
 * @property Calon[] $calons
 */
class RefKodProgram extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ref_kod_program';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kod_program', 'program'], 'required'],
            [['kod_program'], 'string', 'max' => 3],
            [['program'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_program' => 'Id Program',
            'kod_program' => 'Kod Program',
            'program' => 'Program',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCalons()
    {
        return $this->hasMany(Calon::className(), ['id_program' => 'id_program']);
    }
}
