<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\HomeManagement;

/**
 * HomeManagementSearch represents the model behind the search form about `common\models\HomeManagement`.
 */
class HomeManagementSearch extends HomeManagement
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'status'], 'integer'],
            [['about_content', 'facebook', 'twitter', 'instagram', 'pintrest', 'linkedin', 'header_phone', 'header_email', 'address', 'phone', 'email', 'work_process_title1', 'work_process_title2', 'work_process_title3', 'work_process_title4', 'work_process_content1', 'work_process_content2', 'work_process_content3', 'work_process_content4', 'DOU'], 'safe'],
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
        $query = HomeManagement::find();

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
            'DOU' => $this->DOU,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'about_content', $this->about_content])
            ->andFilterWhere(['like', 'facebook', $this->facebook])
            ->andFilterWhere(['like', 'twitter', $this->twitter])
            ->andFilterWhere(['like', 'instagram', $this->instagram])
            ->andFilterWhere(['like', 'pintrest', $this->pintrest])
            ->andFilterWhere(['like', 'linkedin', $this->linkedin])
            ->andFilterWhere(['like', 'header_phone', $this->header_phone])
            ->andFilterWhere(['like', 'header_email', $this->header_email])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'work_process_title1', $this->work_process_title1])
            ->andFilterWhere(['like', 'work_process_title2', $this->work_process_title2])
            ->andFilterWhere(['like', 'work_process_title3', $this->work_process_title3])
            ->andFilterWhere(['like', 'work_process_title4', $this->work_process_title4])
            ->andFilterWhere(['like', 'work_process_content1', $this->work_process_content1])
            ->andFilterWhere(['like', 'work_process_content2', $this->work_process_content2])
            ->andFilterWhere(['like', 'work_process_content3', $this->work_process_content3])
            ->andFilterWhere(['like', 'work_process_content4', $this->work_process_content4]);

        return $dataProvider;
    }
}
