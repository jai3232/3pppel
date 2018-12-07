<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Calon;

/**
 * CalonSearch represents the model behind the search form of `app\models\Calon`.
 */
class CalonSearch extends Calon
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_calon', 'id_program', 'id_kampus', 'id_pusat_temuduga', 'id_bidang', 'id_tempat_lahir', 'id_warganegara', 'poskod', 'id_negeri', 'agama', 'status', 'bangsa', 'spm_bm_thn', 'id_tahap_kemahiran', 'id_noss', 'umur'], 'integer'],
            [['no_kp', 'nama', 'sesi', 'tarikh_lahir', 'alamat1', 'alamat2', 'bandar', 'jantina', 'no_tel', 'email', 'spm_bm', 'spm_sejarah', 'institusi_kemahiran', 'status_panggilan_temuduga', 'status_tawaran_temuduga', 'status_tawaran_kemasukan', 'status_terima_tawaran', 'jenis_cacat'], 'safe'],
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
        $query = Calon::find();

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
            'id_calon' => $this->id_calon,
            'id_program' => $this->id_program,
            'id_kampus' => $this->id_kampus,
            'id_pusat_temuduga' => $this->id_pusat_temuduga,
            'id_bidang' => $this->id_bidang,
            'tarikh_lahir' => $this->tarikh_lahir,
            'id_tempat_lahir' => $this->id_tempat_lahir,
            'id_warganegara' => $this->id_warganegara,
            'poskod' => $this->poskod,
            'id_negeri' => $this->id_negeri,
            'agama' => $this->agama,
            'status' => $this->status,
            'bangsa' => $this->bangsa,
            'spm_bm_thn' => $this->spm_bm_thn,
            'id_tahap_kemahiran' => $this->id_tahap_kemahiran,
            'id_noss' => $this->id_noss,
            'umur' => $this->umur,
        ]);

        $query->andFilterWhere(['like', 'no_kp', $this->no_kp])
            ->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'sesi', $this->sesi])
            ->andFilterWhere(['like', 'alamat1', $this->alamat1])
            ->andFilterWhere(['like', 'alamat2', $this->alamat2])
            ->andFilterWhere(['like', 'bandar', $this->bandar])
            ->andFilterWhere(['like', 'jantina', $this->jantina])
            ->andFilterWhere(['like', 'no_tel', $this->no_tel])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'spm_bm', $this->spm_bm])
            ->andFilterWhere(['like', 'spm_sejarah', $this->spm_sejarah])
            ->andFilterWhere(['like', 'institusi_kemahiran', $this->institusi_kemahiran])
            ->andFilterWhere(['like', 'status_panggilan_temuduga', $this->status_panggilan_temuduga])
            ->andFilterWhere(['like', 'status_tawaran_temuduga', $this->status_tawaran_temuduga])
            ->andFilterWhere(['like', 'status_tawaran_kemasukan', $this->status_tawaran_kemasukan])
            ->andFilterWhere(['like', 'status_terima_tawaran', $this->status_terima_tawaran])
            ->andFilterWhere(['like', 'jenis_cacat', $this->jenis_cacat]);

        return $dataProvider;
    }
}
