<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use dosamigos\datetimepicker\DateTimePicker;
/* @var $this yii\web\View */
/* @var $model app\models\Venta */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="venta-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nodocumento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Encargado')->textInput(['maxlength' => true]) ?>

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
<!--
    <?= $form->field($model, 'Total')->textInput() ?>

    <?= $form->field($model, 'Credito')->textInput() ?>

    <?= $form->field($model, 'Contado')->textInput() ?>

        <?= $form->field($model, 'Finalizada')->textInput() ?>
-->
    <?= $form->field($model, 'Cliente_id')->widget(Select2::classname(),[
        'data' => $clts,
        'options'=>['placeholder'=>'Seleccione el Cliente'],
        'pluginOptions'=>['allowClear=>true'],
    ]) ?>
     <?= Html::a(Yii::t('app', 'Registrar Cliente'), ['cliente/create', 'inv' => 2], ['class' => 'btn btn-primary']) ?>

        
    </p>


    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Siguiente'), ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('app', 'Cancelar'), ['venta/index'], ['class' => 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>