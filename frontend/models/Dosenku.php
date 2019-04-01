<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "dosen".
 *
 * @property string $nidn
 * @property string $nama
 * @property string $gender
 * @property int $prodi_id
 *
 * @property Prodi $prodi
 */
class Dosenku extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dosen';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nidn', 'prodi_id'], 'required'],
            [['prodi_id'], 'integer'],
            [['nidn'], 'string', 'max' => 10],
            [['nama'], 'string', 'max' => 45],
            [['gender'], 'string', 'max' => 1],
            [['nidn'], 'unique'],
            [['prodi_id'], 'exist', 'skipOnError' => true, 'targetClass' => Prodi::className(), 'targetAttribute' => ['prodi_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nidn' => 'Nidn',
            'nama' => 'Nama',
            'gender' => 'Gender',
            'prodi_id' => 'Prodi ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProdi()
    {
        return $this->hasOne(Prodi::className(), ['id' => 'prodi_id']);
    }
}
