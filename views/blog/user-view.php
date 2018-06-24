<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchBlog */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Новости';
$this->params['breadcrumbs'][] = $this->title;
$ar = [
  'nintendo.jpg',
  'cach.jpg',
  'nintendo.jpg',
  'cach.jpg',
];
?>



<!--breadcrumbs start-->
<div class="breadcrumbs">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-sm-4">
        <h1>
          Новости
        </h1>
      </div>
      <div class="col-lg-8 col-sm-8">
        <ol class="breadcrumb pull-right">
          <li>
            <a href="#">
              Главная
            </a>
          </li>
          <li class="active">
            Новости
          </li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!--breadcrumbs end-->

    <!--container start-->
    <div class="container">
      <div class="row">
        <!--blog start-->
        <div class="col-lg-9 ">

        <?php foreach($posts as $post):?>
          <div class="blog-item">
            <div class="row">
              <div class="col-lg-2 col-sm-2">
                <div class="date-wrap">
                  <span>
                    <?php 
                      setlocale(LC_ALL, 'ru_RU.UTF-8');
                      $Month_r = array(
                          "01" => "января",
                          "02" => "февраля",
                          "03" => "марта",
                          "04" => "апреля",
                          "05" => "мая",
                          "06" => "июня",
                          "07" => "июля",
                          "08" => "августа",
                          "09" => "сентября",
                          "10" => "октября",
                          "11" => "ноября",
                          "12" => "декабря");
                      $date = strtotime($post->date);
                      $begin_month = date('m', strtotime($post->date)); // месяц на eng
                      $rus_month_begin = $Month_r[$begin_month];
                    ?>
                    <?php
                      $url = date('d ', strtotime($post->date)) . $rus_month_begin
                        . date(' Y');
                      ?>
                  </span>  
                  <span class="date">
                    <?=date('d ', $date)?>
                  </span>
                  <span class="month">
                    <?=$rus_month_begin = $Month_r[$begin_month] . date(' Y');?> 
                  </span>
                </div>

                 <div class="author">
                  Автор
                  <a href="#">
                      <?php

                      $user = bizley\podium\models\User::find($post->user_id)->one();
                      $name = $user->username;
                      ?>
                    <?=$name?>
                  </a>
                </div>
                
                <div class="st-view">
                  <ul class="list-unstyled">
                    <li>
                      <!-- <a href="javascript:;"> -->
                        <?php 
                            /*Счётчик просмотров новостей*/ 
                            $f=fopen("stat.dat". $post->id,"a+");
                            flock($f,LOCK_EX);
                            $count=fread($f,100);
                            @$count++;
                            ftruncate($f,0);
                            fwrite($f,$count);
                            fflush($f);
                            flock($f,LOCK_UN);
                            fclose($f);
                            
                            echo "Количество просмотров: $count"; 
                        ?>
                      <!-- </a> -->
                    </li>
                    
                    <li>
                      
                        <?php 
                        $comments = sizeof(\app\models\Comment::find(['post_id' => $post->id])->all());
                        ?>
                        Комментариев:
                          <?=$comments?>
                      
                    </li>
                  </ul>
                </div>
              </div>
              
              <div class="col-lg-10 col-sm-10">
                <div class="blog-img">
                  <?php if(Yii::$app->user->identity->status == 10):?>
                    <a class="btn btn-warning" href="<?=Url::to('/blog/index')?>"
                      style="color: #fff;background: #48cfad;margin-bottom: 10px;">
                      Просмотреть новости
                    </a>
                  <?php endif;?>
                  <img src="/img/<?=$ar[$post->id]?>" alt=""/>
                  <h1>
                  <a href="blog-detail.html">
                    <?php 
                      echo "<p align='center'>" .
                      Html::a("{$post->title}",
                          ['/blog/post', 'id' => $post->id, ],
                          [
                            'class' => '',
                            'data' => ['method' => 'post'],
                          ])
                      . "</p>";
                    ;?>
                  </a>
                </h1>
                  <p>
                  <?php echo $post->text?>
                </p>
                </div>

              </div>
            </div>
            
          </div>
        <?php endforeach;?> 
        </div>

        <div class="col-lg-3">
          <div class="blog-side-item">
            
            <div class="category">
              <h3>
                Категории
              </h3>
              <ul class="list-unstyled">
                <li>
                  <a href="javascript:;">
                    <i class="fa fa-angle-right pr-10">
                    </i>
                    Основные
                  </a>
                </li>
                <li>
                  <a href="javascript:;">
                    <i class="fa fa-angle-right pr-10">
                    </i>
                    Обновления Приложения
                  </a>
                </li>
                
              </ul>
            </div>

            <div class="blog-post">
              <h3>
                Последние новости
              </h3>
                <?php foreach($posts as $post):?>
                    <div class="media">
                        <a class="pull-left" href="javascript:;">
                        <img class=" " src="img/blog/blog-thumb-1.jpg" alt="">
                        </a>
                        <div class="media-body">
                        <h5 class="media-heading">
                            <a href="javascript:;">
                            <span>
                              <?php 
                                setlocale(LC_ALL, 'ru_RU.UTF-8');
                                $Month_r = array(
                                    "01" => "января",
                                    "02" => "февраля",
                                    "03" => "марта",
                                    "04" => "апреля",
                                    "05" => "мая",
                                    "06" => "июня",
                                    "07" => "июля",
                                    "08" => "августа",
                                    "09" => "сентября",
                                    "10" => "октября",
                                    "11" => "ноября",
                                    "12" => "декабря");
                                $date = strtotime($post->date);
                                $begin_month = date('m', strtotime($post->date)); // месяц на eng
                                $rus_month_begin = $Month_r[$begin_month];
                              ?>
                          
                              <?=$url = date('d ', strtotime($post->date)) . $rus_month_begin
                                    . date(' Y');?>
                            </span>
                            </a>
                        </h5>
                        <p>
                            <?=substr($post->text, 0, 450) . "..."?>
                            <br/>
                            <?php
                                  echo Html::a('Читать',
                                      ['/blog/post', 'id' => $post->id, ],
                                      [
                                        'class' => '',
                                        'data' => ['method' => 'post'],
                                      ])
                                  . "</p>";
                                ?>
                        </p>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>

          </div>
        </div>

        <!--blog end-->
      </div>

    </div>
    <!--container end-->