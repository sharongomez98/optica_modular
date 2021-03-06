<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Detallecotizacion;

/**
 * DetallecotizacionSearch represents the model behind the search form of `app\models\Detallecotizacion`.
 */
class DetallecotizacionSearch extends Detallecotizacion
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'Cotizacion_id', 'Aro_id', 'Accesorios_id', 'Lentesterm_id', 'Lenteterm_id'], 'integer'],
            [['Total', 'Cantidad', 'Descuento'], 'number'],
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
        $query = Detallecotizacion::find();

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
            'Cotizacion_id' => $this->Cotizacion_id,
            'Aro_id' => $this->Aro_id,
            'Accesorios_id' => $this->Accesorios_id,
            'Lentesterm_id' => $this->Lentesterm_id,
            'Lenteterm_id' => $this->Lenteterm_id,
            'Total' => $this->Total,
            'Cantidad' => $this->Cantidad,
            'Descuento' => $this->Descuento,
        ]);

        return $dataProvider;
    }
}
