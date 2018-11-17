<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Book;

/**
 * BookSearch represents the model behind the search form of `app\models\Book`.
 */
class BookSearch extends Book
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['b_id'], 'integer'],
            [['b_name', 'b_class', 'b_author', 'b_des','b_date'], 'safe'],
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
        $query = Book::find();

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
            'b_id' => $this->b_id,
        ]);

        $query->andFilterWhere(['like', 'b_name', $this->b_name])
            ->andFilterWhere(['like', 'b_class', $this->b_class])
            ->andFilterWhere(['like', 'b_author', $this->b_author])
            ->andFilterWhere(['like', 'b_des', $this->b_des])
            ->andFilterWhere(['like', 'b_date', $this->b_date]);

        return $dataProvider;
    }
}
