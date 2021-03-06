<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Marca */
$this->title = Yii::t('app', 'Registrar Marca');
if ($invo == 1)
{
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Inventario'), 'url' => ['inventario/index']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mercaderia'), 'url' => ['inventario/mercaderia']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ingreso'), 'url' => ['entrada/createinar','id'=>0]];
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Aro'), 'url' => ['aro/create', 'inv' => $invo]];
$this->params['breadcrumbs'][] = $this->title;
}
else if($invo == 2 ){


$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Inventario'), 'url' => ['inventario/index']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Detalles'), 'url' => ['inventario/detalles']];
$this->params['breadcrumbs'][] = $this->title;
}
else if($invo == 3)
{
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Financiero')];
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Compras')];
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Detalle compra'), 'url' => ['compras/creates','id' => $ido]];
if($op == 3)
{
	$this->title = Yii::t('app', 'Agregar Aros');
}
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Registrar Aro')];
$this->params['breadcrumbs'][] = $this->title;
}
?>
<div class="marca-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
            'invo' => $invo,
            'inv' => $inv,
         'ido' => $ido,
         'op' => $op,
    ]) ?>

</div>
