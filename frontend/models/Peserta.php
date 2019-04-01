<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "peserta_wisuda".
 *
 * @property int $id
 * @property int $wisuda_id
 * @property string $nim
 * @property string $judul_skripsi
 * @property string $kesan
 * @property int $status_bayar
 * @property double $ipk
 *
 * @property Mahasiswa $nim0
 * @property Wisuda $wisuda
 */
class Peserta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'peserta_wisuda';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['wisuda_id', 'nim', 'judul_skripsi', 'kesan', 'status_bayar', 'ipk'], 'required'],
            [['wisuda_id', 'status_bayar'], 'integer'],
            [['judul_skripsi'], 'string'],
            [['ipk'], 'number'],
            [['nim'], 'string', 'max' => 10],
            [['kesan'], 'string', 'max' => 100],
            [['nim'], 'exist', 'skipOnError' => true, 'targetClass' => Mahasiswa::className(), 'targetAttribute' => ['nim' => 'nim']],
            [['wisuda_id'], 'exist', 'skipOnError' => true, 'targetClass' => Wisuda::className(), 'targetAttribute' => ['wisuda_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'wisuda_id' => 'Wisuda ID',
            'nim' => 'Nim',
            'judul_skripsi' => 'Judul Skripsi',
            'kesan' => 'Kesan',
            'status_bayar' => 'Status Bayar',
            'ipk' => 'Ipk',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNim0()
    {
        return $this->hasOne(Mahasiswa::className(), ['nim' => 'nim']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWisuda()
    {
        return $this->hasOne(Wisuda::className(), ['id' => 'wisuda_id']);
    }
}
