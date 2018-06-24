<?php

/* @var $this yii\web\View */
use yii\bootstrap\ActiveForm;
use aneeshikmat\yii2\Yii2TimerCountDown\Yii2TimerCountDown;
use yii\helpers\Url;
use yii\helpers\Html;

$this->title = 'Редактор Вопросов';
?>

<!--breadcrumbs start-->
<div class="breadcrumbs">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-sm-4">
        <h1>
          Редактор Вопросов
        </h1>
      </div>
      <div class="col-lg-8 col-sm-8">
        <ol class="breadcrumb pull-right">
          <li>
            <a href="<?=Url::to('/site/index')?>">
              Главная
            </a>
          </li>
          
          <li class="active">
            Редактор вопросов
          </li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!--breadcrumbs end-->

<div class="site-contact">
    
    <div class="media container">
      <?php if(Yii::$app->user->identity->status == 10):?>
        <a class="btn btn-warning" href="<?=Url::to('/question/index')?>"
          style="color: #fff;background: #48cfad;">
          Просмотреть вопросы
        </a>
      <?php endif;?>
      <h3>
        Задайте вопрос для викторины и укажите варианты ответа:
      </h3>
      <hr>

      <?php if (Yii::$app->session->getFlash('success')): ?>
        <div class="alert alert-success alert-dismissible flash" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                      aria-hidden="true">&times;</span></button>
          Вопрос задан.
        </div>
      <?php elseif(Yii::$app->session->getFlash('error')):?>
        <div class="alert alert-danger alert-dismissible flash" role="alert" >
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            Произошла ошибка! Попробуйте снова.
            
        </div>
      <?php endif; ?>
    
        <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

        <?= $form->field($model, 'question')->textInput(['autofocus' => true, 'class' => 'form-control']) ?>
        <?= $form->field($model, 'first') ?>

        <?= $form->field($model, 'second')->textInput() ?>

        <?= $form->field($model, 'third')->textInput() ?>

        <div class="form-group">
            <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
        </div>

        <?php ActiveForm::end(); ?>  
    </div>
    
</div>


  
