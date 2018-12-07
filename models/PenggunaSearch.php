<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pengguna;

/**
 * PenggunaSearch represents the model behind the search form of `app\models\Pengguna`.
 */
class PenggunaSearch extends Pengguna
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pengguna', 'id_pelajar', 'kod_peranan', 'kategori_agensi', 'poskod', 'id_negeri'], 'integer'],
            [['no_kp', 'katalaluan', 'nama', 'nama_agensi', 'alamat1', 'alamat2', 'bandar', 'no_tel', 'no_fax', 'email', 'photo', 'tarikh_daftar', 'status'], 'safe'],
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
        $query = Pengguna::find();

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
            'id_pengguna' => $this->id_pengguna,
            'id_pelajar' => $this->id_pelajar,
            'kod_peranan' => $this->kod_peranan,
            'kategori_agensi' => $this->kategori_agensi,
            'poskod' => $this->poskod,
            'id_negeri' => $this->id_negeri,
            'tarikh_daftar' => $this->tarikh_daftar,
        ]);

        $query->andFilterWhere(['like', 'no_kp', $this->no_kp])
            ->andFilterWhere(['like', 'katalaluan', $this->katalaluan])
            ->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'nama_agensi', $this->nama_agensi])
            ->andFilterWhere(['like', 'alamat1', $this->alamat1])
            ->andFilterWhere(['like', 'alamat2', $this->alamat2])
            ->andFilterWhere(['like', 'bandar', $this->bandar])
            ->andFilterWhere(['like', 'no_tel', $this->no_tel])
            ->andFilterWhere(['like', 'no_fax', $this->no_fax])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'photo', $this->photo])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
