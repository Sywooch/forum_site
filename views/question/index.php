<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchQuestion */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Заданные вопросы';
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
            <a href="<?=Url::to('/site/question')?>">
                Редактор вопросов
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
<div class="question-index container">    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить Вопрос', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'question',
            'first',
            'second',
            'third',
            //'date',
            //'accepted',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
