<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\CareerJob;

/**
 * CareerJobSearch represents the model behind the search form about `common\models\CareerJob`.
 */
class CareerJobSearch extends CareerJob
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'career_id', 'status'], 'integer'],
            [['name', 'email', 'mobile', 'reference', 'cv', 'DOC'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = CareerJob::find()->orderBy(['id' => SORT_DESC]);

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
            'career_id' => $this->career_id,
            'DOC' => $this->DOC,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'mobile', $this->mobile])
            ->andFilterWhere(['like', 'reference', $this->reference])
            ->andFilterWhere(['like', 'cv', $this->cv]);

        return $dataProvider;
    }
}
