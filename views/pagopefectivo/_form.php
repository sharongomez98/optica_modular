<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pagopefectivo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pagopefectivo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Caja_id')->textInput() ?>

    <?= $form->field($model, 'Monto')->textInput() ?>

    <?= $form->field($model, 'Empleado_id')->textInput() ?>

    <?= $form->field($model, 'Nodocumento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Proveedores_id')->textInput() ?>

    <?= $form->field($model, 'Fecha')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
