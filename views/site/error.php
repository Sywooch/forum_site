<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = $name;
?>
<div class="site-error">

<h1><?= Html::encode($this->title) ?></h1>

<div class="alert alert-danger">
    <?= nl2br(Html::encode($message)) ?>
</div>

<p>
    The above error occurred while the Web server was processing your request.
</p>
<p>
    Please contact us if you think this is a server error. Thank you.
</p>

</div>

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