<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchBlog */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Просмотр Новостей';
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
<div class="blog-index container">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать Новость', ['create'], [
          'class' => 'btn btn-success',
          'style' => "color: #fff;background: #48cfad;", 
          ]) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'text:html',
            'title',
           

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
