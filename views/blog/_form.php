<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
use mihaildev\elfinder\InputFile;

/* @var $this yii\web\View */
/* @var $model app\models\Blog */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="blog-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

      <?= $form->field($model, 'text', ['inputOptions' =>
        ['height' => '500px']])->widget(CKEditor::className(), [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder',
            [/* Some CKEditor Options */]),
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        <a href="<?=Url::to('/blog/index')?>" class= 'btn btn-info'>
            Back
        </a>
    </div>

    <?php ActiveForm::end(); ?>

</div>
