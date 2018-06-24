<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

// импорт классов
// методы для генерации html-разметки
use yii\helpers\Html;
// методы для генерации url
use yii\helpers\Url;

// методы для генерации формы с подключение фрейморка bootstrap 
use yii\bootstrap\ActiveForm;
// методы для генерации и использования капчи
// генериться уникальный текст - и конвертируется в картинку
use yii\captcha\Captcha;

$this->title = 'Отзывы';
// echo sizeof($contacts);
?>
<!-- ВЕРСТКА -->
<!--breadcrumbs start-->
<!--"хлебные крошки"-->

<div class="breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-4">
            <h1>
              Отзывы
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
                Отзывы
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!--breadcrumbs end-->

<div class="site-contact">

    <div class="media container">
    <?php if (Yii::$app->session->getFlash('success')): ?>
      <div class="alert alert-success alert-dismissible flash" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
        Отзыв удалён.
      </div>
    <?php elseif(Yii::$app->session->getFlash('error')):?>
      <div class="alert alert-danger alert-dismissible flash" role="alert" >
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                      aria-hidden="true">&times;</span></button>
          Произошла ошибка! Обратитесь в службу поддержки.
          
      </div>
    <?php endif; ?>
    <?php if($contacts != null):?>
      <h3>
        Отзывы пользователей
      </h3>
      <hr>

      <?php foreach($contacts as $contact):?>
        <a class="pull-left" href="javascript:;">
          <img class="media-object" src="/img/person_1.png" alt="">
        </a>
        <div class="media-body">
          <h4 class="media-heading">
            <?=$contact->name?>
            <span>
              |
            </span>
            <span>
              <?php 
                setlocale(LC_ALL, 'ru_RU.UTF-8');
                $Month_r = array(
                    "01" => "января",
                    "02" => "февраля",
                    "03" => "марта",
                    "04" => "апреля",
                    "05" => "мая",
                    "06" => "июня",
                    "07" => "июля",
                    "08" => "августа",
                    "09" => "сентября",
                    "10" => "октября",
                    "11" => "ноября",
                    "12" => "декабря");
                $date = strtotime($contact->date);
                $begin_month = date('m', strtotime($contact->date)); // месяц на eng
                $rus_month_begin = $Month_r[$begin_month];
              ?>
              <?=$url = date('d ', strtotime($contact->date)) . $rus_month_begin
                    . date(' Y', $weekDate);?>
            </span>
            <?php if(Yii::$app->user->identity->status == 10):?>
              <span class="pull-right">
              |
                <a href="<?=Url::to(['/site/delete-contact', 'id' => $contact->id])?>">
                  <i class="fa fa-times-circle"></i>
                </a>
              |
              </span>
            <?php endif;?>
          </h4>
          <p>
            <?=$contact->body?>
          </p>        
          <!--end media-->
          <hr>
          <!--end media-->
        </div>
      <?php endforeach; ?>
    <?php endif;?>              
    </div>
    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div  align="center" class="alert alert-success container">
            Спасибо за отзыв!
        </div>

    <?php else: ?>

         <div class="row">
        
        <div class="col-lg-5 col-sm-5 address" style="margin-left:+30%;">
          <h3 style="color:#48cfad;">
            Поделитесь своим мнением о приложении
          </h3>
          
          <div class="contact-form">
          <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

            <?= $form->field($model, 'name')->textInput(['autofocus' => true, 'class' => 'form-control']) ?>
            <?= $form->field($model, 'email') ?>

            <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
            ]) ?>

            <div class="form-group">
                <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>

          </div>
        </div>
      </div>

    <?php endif; ?>
</div>
