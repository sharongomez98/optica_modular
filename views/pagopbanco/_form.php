<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use dosamigos\datetimepicker\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Pagopbanco */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pagopbanco-form">

    <?php $form = ActiveForm::begin(); ?>

   

    <?= $form->field($model, 'Nodocumento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Empleado_id')->widget(Select2::classname(),[
        'data' => $emps,
        'options'=>['placeholder'=>'Seleccione al Encargado'],
        'pluginOptions'=>['allowClear=>true'],
    ]) ?>
<!--
    <?= $form->field($model, 'Proveedores_id')->textInput() ?>
-->
    <?= $form->field($model, 'Bancos_id')->widget(Select2::classname(),[
        'data' => $bans,
        'options'=>['placeholder'=>'Seleccione la cuenta bancaria'],
        'pluginOptions'=>['allowClear=>true'],
    ]) ?>

    <?= $form->field($model, 'Fecha')->widget(DateTimePicker::className(), [
                                                                        'language' => 'es',
                                                                        'size' => 'ms',
                                                                        //'template' => '{input}',
                                                                        'pickButtonIcon' => 'glyphicon glyphicon-time',
                                                                        'inline' => false,
                                                                        'clientOptions' => [
                                                                          //'startView' => 1,
                                                                           // 'minView' => 0,
                                                                            //'maxView' => 1,
                                                                            'autoclose' => true,
                                                                            'linkFormat' => 'HH:ii P', // if inline = true
                                                                            // 'format' => 'HH:ii P', // if inline = false
                                                                            'todayBtn' => true
                                                                        ]]) ?>

    <?= $form->field($model, 'No_cheque')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Monto')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Registrar'), ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('app', 'Regresar'), ['proveedores/view','id'=> $idp], ['class' => 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
