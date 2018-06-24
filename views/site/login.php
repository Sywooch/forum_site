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
        <div class="container" style="height: 500px;">

            <div align="center" style="width:25%;margin-top:70px;
                margin-left:auto;margin-right:auto;">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                <div class="form-group">
                    <?= $form->field($model, 'username')->textInput(['placeholder' => Yii::t('podium/view', 'Username or E-mail'), 'autofocus' => true])->label(false) ?>
                </div>
                <div class="form-group">
                    <?= $form->field($model, 'password')->passwordInput(['placeholder' => Yii::t('podium/view', 'Password')])->label(false) ?>
                </div>
                <div class="form-group text-center">
                    <?= $form->field($model, 'rememberMe')->checkBox()->label(null, ['data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => Yii::t('podium/view', "Don't use this option on public computers!")]) ?>
                </div>
                <div class="form-group">
                    <?= Html::submitButton('<span class="glyphicon glyphicon-ok-sign"></span> ' . Yii::t('podium/view', 'Sign in'), ['class' => 'btn btn-block btn-primary', 'name' => 'login-button']) ?>
                </div>
                <div class="form-group" align="center">
                    
                    Вы не зарегистрированы?
                    <br>
                    <a style="margin-left:85px;margin-right:auto;" href="<?= Url::to(['/podium/register']) ?>" class="pull-left">Создать аккаунт</a>
                    <br>
                    <a style="margin-right:90px;margin-left:auto;" href="<?= Url::to(['/podium/account/reset']) ?>" class="pull-right"><?= Yii::t('podium/view', 'Reset Password') ?></a>
                    <br>
                    <a href="<?= Url::to(['/podium/account/reactivate']) ?>" class="pull-left"><?= Yii::t('podium/view', 'Resend activation link') ?></a>
                </div>
            <?php ActiveForm::end(); ?>

            </div>


          </form>
         
          </div>
        </div>
    </div>
    <!--container end-->