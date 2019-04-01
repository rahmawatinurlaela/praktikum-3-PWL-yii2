<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Peserta;

/**
 * PesertaSearch represents the model behind the search form of `frontend\models\Peserta`.
 */
class PesertaSearch extends Peserta
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'wisuda_id', 'status_bayar'], 'integer'],
            [['nim', 'judul_skripsi', 'kesan'], 'safe'],
            [['ipk'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Peserta::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'wisuda_id' => $this->wisuda_id,
            'status_bayar' => $this->status_bayar,
            'ipk' => $this->ipk,
        ]);

        $query->andFilterWhere(['like', 'nim', $this->nim])
            ->andFilterWhere(['like', 'judul_skripsi', $this->judul_skripsi])
            ->andFilterWhere(['like', 'kesan', $this->kesan]);

        return $dataProvider;
    }
}
