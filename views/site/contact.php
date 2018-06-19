<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Отзывы';
?>
<!--breadcrumbs start-->
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

    <h1 align="center"><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div  align="center" class="alert alert-success">
            Спасибо за отзыв!
        </div>

    <?php else: ?>

         <div class="row">
        <div class="col-lg-5 col-sm-5 address">
          <section class="contact-infos">
            <h4 class="title custom-font text-black">
              ADDRESS
            </h4>
            <address>
              Revox
              Crossraid, 85/B Cross Street,
              <br>
              New York, USA
              <br>
              NA1 42SL
            </address>
          </section>
          <section class="contact-infos">
            <h4 class="title custom-font text-black">
              BUSINESS HOURS
            </h4>
            <p>
              Monday - Friday 8am to 4pm
              <br>
              Saturday - 7am to 6pm
              <br>
              Sunday- Closed
              <br>
            </p>
          </section>
          <section class="contact-infos">
            <h4>
              TELEPHONE
            </h4>
            <p>
              <i class="icon-phone">
              </i>
              +088-01234567890
            </p>

            <p>
              <i class="icon-phone">
              </i>
              +088-01234567890
            </p>

          </section>
        </div>
        <div class="col-lg-7 col-sm-7 address">
          <h3>
            Напишите несколько строк и мы вас услышим
          </h3>
          
          <div class="contact-form">
          <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

            <?= $form->field($model, 'name')->textInput(['autofocus' => true, 'class' => 'form-control']) ?>
            <?= $form->field($model, 'email') ?>

            <?= $form->field($model, 'subject') ?>

            <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
            ]) ?>

            <div class="form-group">
                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>

          </div>
        </div>
      </div>

    <?php endif; ?>
</div>
