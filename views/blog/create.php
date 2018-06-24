<?php

use yii\helpers\Html;
use yii\helpers\Url;


/* @var $this yii\web\View */
/* @var $model app\models\Blog */

$this->title = 'Создать Новость';
$this->params['breadcrumbs'][] = ['label' => 'Blogs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<!--breadcrumbs start-->
<div class="breadcrumbs">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-sm-4">
        <h1>
        <?=$this->title?>
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
            <a href="<?=Url::to('/blog/user-view')?>">
                Новости
            </a>
          </li>

          <li class="active">
            <?=$this->title?>
          </li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!--breadcrumbs end-->
<div class="blog-create container">

    <?php if (Yii::$app->session->getFlash('errorImg')): ?>
        <div class="alert alert-danger alert-dismissible flash border_radius" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            Ошибка! Попробуйте снова или обратитесь в тех-поддержку.
        </div>
    <?php endif; ?>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
