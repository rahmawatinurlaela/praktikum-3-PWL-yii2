<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "wisuda".
 *
 * @property int $id
 * @property int $ke
 * @property string $tanggal
 * @property string $tempat
 * @property int $semester
 *
 * @property PesertaWisuda[] $pesertaWisudas
 */
class Wisuda extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'wisuda';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'ke', 'semester'], 'integer'],
            [['tanggal'], 'safe'],
            [['tempat'], 'string', 'max' => 100],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ke' => 'Ke',
            'tanggal' => 'Tanggal',
            'tempat' => 'Tempat',
            'semester' => 'Semester',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPesertaWisudas()
    {
        return $this->hasMany(PesertaWisuda::className(), ['wisuda_id' => 'id']);
    }
}
