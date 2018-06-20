<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = $name;
?>
<!--container start-->
<div class="gray-bg">
    <div class="fof">
            <!-- 404 error -->
        <div class="container  error-inner wow flipInX">
            <h1>404, Страница не найдена.</h1>
            <p class="text-center">Страничка не существует или произошла ошибка.</p>
            <a class="btn btn-info" href="<?=Url::to('/site/index')?>">Домой на Главную</a>
        </div>
        <!-- /404 error -->
    </div>
</div>
    <!--container end-->