<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "mahasiswa".
 *
 * @property string $nim
 * @property string $nama
 * @property int $thn_masuk
 * @property int $prodi_id
 * @property string $gender
 * @property string $tmp_lahir
 * @property string $tgl_lahir
 * @property int $user_id
 *
 * @property Prodi $prodi
 * @property PesertaWisuda[] $pesertaWisudas
 */
class Mhs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim', 'nama', 'thn_masuk', 'prodi_id'], 'required'],
            [['thn_masuk', 'prodi_id', 'user_id'], 'integer'],
            [['tgl_lahir'], 'safe'],
            [['nim'], 'string', 'max' => 10],
            [['nama'], 'string', 'max' => 45],
            [['gender'], 'string', 'max' => 1],
            [['tmp_lahir'], 'string', 'max' => 30],
            [['nim'], 'unique'],
            [['prodi_id'], 'exist', 'skipOnError' => true, 'targetClass' => Prodi::className(), 'targetAttribute' => ['prodi_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nim' => 'Nim',
            'nama' => 'Nama',
            'thn_masuk' => 'Thn Masuk',
            'prodi_id' => 'Prodi ID',
            'gender' => 'Gender',
            'tmp_lahir' => 'Tmp Lahir',
            'tgl_lahir' => 'Tgl Lahir',
            'user_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProdi()
    {
        return $this->hasOne(Prodi::className(), ['id' => 'prodi_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPesertaWisudas()
    {
        return $this->hasMany(PesertaWisuda::className(), ['nim' => 'nim']);
    }
}
