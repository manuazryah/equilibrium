<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\About;

/**
 * AboutSearch represents the model behind the search form about `common\models\About`.
 */
class AboutSearch extends About
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'status', 'CB', 'UB'], 'integer'],
            [['who_we_are', 'who_we_are_image', 'our_mission', 'our_mission_image', 'our_vision', 'our_vision_image', 'why_choose_us', 'why_choose_us_image', 'chairman_message', 'chairman_image', 'profile', 'our_core_values', 'our_certificates', 'DOC', 'DOU'], 'safe'],
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
        $query = About::find();

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
            'status' => $this->status,
            'CB' => $this->CB,
            'UB' => $this->UB,
            'DOC' => $this->DOC,
            'DOU' => $this->DOU,
        ]);

        $query->andFilterWhere(['like', 'who_we_are', $this->who_we_are])
            ->andFilterWhere(['like', 'who_we_are_image', $this->who_we_are_image])
            ->andFilterWhere(['like', 'our_mission', $this->our_mission])
            ->andFilterWhere(['like', 'our_mission_image', $this->our_mission_image])
            ->andFilterWhere(['like', 'our_vision', $this->our_vision])
            ->andFilterWhere(['like', 'our_vision_image', $this->our_vision_image])
            ->andFilterWhere(['like', 'why_choose_us', $this->why_choose_us])
            ->andFilterWhere(['like', 'why_choose_us_image', $this->why_choose_us_image])
            ->andFilterWhere(['like', 'chairman_message', $this->chairman_message])
            ->andFilterWhere(['like', 'chairman_image', $this->chairman_image])
            ->andFilterWhere(['like', 'profile', $this->profile])
            ->andFilterWhere(['like', 'our_core_values', $this->our_core_values])
            ->andFilterWhere(['like', 'our_certificates', $this->our_certificates]);

        return $dataProvider;
    }
}
