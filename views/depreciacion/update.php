<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Depreciacion */

$this->title = Yii::t('app', 'Editar Depreciacion: {name}', [
    'name' => $model->Nombre,
]);
if($inv == 2 ){


$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Inventario'), 'url' => ['inventario/index']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Detalles'), 'url' => ['inventario/detalles']];
}
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="depreciacion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'inv' => $inv,
    ]) ?>

</div>
