<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Blog */

$this->title =  "Просмотр ". $model->title;
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
<div class="blog-view container">

    <?php if (Yii::$app->session->getFlash('successImg')): ?>
        <div class="alert alert-success alert-dismissible flash border_radius" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            Изображение загружено.
        </div>
    <?php endif; ?>
    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить эту новость?',
                'method' => 'post',
            ],
        ]) ?>

    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
           
            'text:html',
            'title',
            ],
    ]) ?>

    <a href="<?=Url::to('/blog/index')?>" class='btn btn-info' style="margin-bottom:19px;"/>
            Назад
        </a>

</div>
