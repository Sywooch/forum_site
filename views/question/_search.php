<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SearchQuestion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="question-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'question') ?>

    <?= $form->field($model, 'first') ?>

    <?= $form->field($model, 'second') ?>

    <?= $form->field($model, 'third') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'accepted') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
