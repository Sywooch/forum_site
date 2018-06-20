<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$this->title = 'Вход';
$this->params['breadcrumbs'][] = $this->title;
?>
    <!--breadcrumbs start-->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <h1>Страница Входа</h1>
                </div>
                <div class="col-lg-8 col-sm-8">
                    <ol class="breadcrumb pull-right">
                        <li><a href="<?=Url::to('/site/index')?>">Главная</a></li>
                        <li class="active">Вход</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <!--container start-->
    <div class="login-bg">
        <div class="container">

            <div class="form-wrapper">
            <form class="form-signin wow fadeInUp" action="index.html">
            <h2 class="form-signin-heading">Войти сейчас</h2>
            <div class="login-wrap">
                <input type="text" class="form-control" placeholder="Логин" autofocus>
                <input type="password" class="form-control" placeholder="Пароль">
                <label class="checkbox">
                    <input type="checkbox" value="remember-me"> Запомнить меня
                    <span class="pull-right">
                        <a data-toggle="modal" href="#myModal"> Забыли пароль?</a>

                    </span>
                </label>
                <button class="btn btn-lg btn-login btn-block" type="submit">Войти</button>
             
                <div class="registration">
                    Вы не зарегистрированы?
                    <a class="" href="/site/registration">
                        Создать аккаунт
                    </a>
                </div>

            </div>

          </form>
          </div>
        </div>
    </div>
    <!--container end-->