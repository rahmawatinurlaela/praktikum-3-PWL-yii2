<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Wisuda;

/**
 * WisudaSearch represents the model behind the search form of `frontend\models\Wisuda`.
 */
class WisudaSearch extends Wisuda
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'ke', 'semester'], 'integer'],
            [['tanggal', 'tempat'], 'safe'],
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
        $query = Wisuda::find();

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
            'ke' => $this->ke,
            'tanggal' => $this->tanggal,
            'semester' => $this->semester,
        ]);

        $query->andFilterWhere(['like', 'tempat', $this->tempat]);

        return $dataProvider;
    }
}
