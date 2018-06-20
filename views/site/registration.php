<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$this->title = 'Регистрация';
$this->params['breadcrumbs'][] = $this->title;
?>
    <!--breadcrumbs start-->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <h1>Страница Регистрации</h1>
                </div>
                <div class="col-lg-8 col-sm-8">
                    <ol class="breadcrumb pull-right">
                        <li><a href="<?=Url::to('/site/index')?>">Главная</a></li>
                        <li class="active">Регистрация</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <!--container start-->
    <div class="registration-bg">
        <div class="container">

            <form class="form-signin wow fadeInUp" action="">
                <h2 class="form-signin-heading">Зарегистрируйтесь сейчас</h2>
                <div class="login-wrap">
                    <p>Введите персональные данные</p>
                    <input type="text" class="form-control" placeholder="Имя пользователя" autofocus="">
                    <input type="text" class="form-control" placeholder="E-mail" autofocus="">
                   
                    <input type="password" class="form-control" placeholder="Пароль">
                    <input type="password" class="form-control" placeholder="Повторите пароль">
                    <label class="checkbox">
                        <input type="checkbox" value="agree this condition"> Согласен с Условиями Пользования и Политикой Конфиденциальности
                    </label>
                    <button class="btn btn-lg btn-login btn-block" type="submit">Отправить</button>

                    <div class="registration">
                        Уже зарегистрированы ?
                        <a class="" href="login.html">
                            Вход
                        </a>
                    </div>
                </div>
            </form>

        </div>
     </div>
    <!--container end-->