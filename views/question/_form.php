<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Question */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="question-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'question')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'first')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'second')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'third')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?php 
        $itemsStatus = [
            '0' => 'Нет',
            '1' => 'Да',
        ];
        $paramsStatus = [
            'prompt' => 'Выберите статус...'
        ];
        echo $form->field($model, 'accepted')->dropDownList($itemsStatus, $paramsStatus);; ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
