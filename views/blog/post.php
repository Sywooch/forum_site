<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchBlog */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = $post->title;
$this->params['breadcrumbs'][] = $this->title;
?>



<!--breadcrumbs start-->
<div class="breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-4">
            <h1>
              <?=$post->title?>
            </h1>
          </div>
          <div class="col-lg-8 col-sm-8">
            <ol class="breadcrumb pull-right">
              <li>
                <a href="<?=Url::to('/site/index')?>">
                  Главная
                </a>
              </li>
              <li>
                <a href="<?=Url::to('/blog/user-view')?>">
                  Новости
                </a>
              </li>
              <li class="active">
                <?=$post->title?>
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
              <?php $url = date('d ', strtotime($post->date)) . $rus_month_begin
                    . date(' Y');?>
            </span>  
                <span class="date">
                    <?=date('d ', $date)?>
                  </span>
                  <span class="month">
                    <?=$rus_month_begin = $Month_r[$begin_month] . date(' Y');?> 
                  </span>
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
                  <img src="/img/blog/img7.jpg" alt=""/>
                </div>

              </div>
            </div>
            <div class="row">
              <div class="col-lg-2 col-sm-2 text-right">
                <div class="author">
                  By
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
                      <a href="javascript:;">
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
                      </a>
                    </li>
                    
                    <li>
                      <a href="javascript:;">
                        <?php echo sizeof($comments) . " комментариев";?> 
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-10 col-sm-10">
                <h1>
                  <a href="blog-detail.html">
                    <?php echo $post->title?>
                  </a>
                </h1>
                <p>
                <?php echo $post->text;?>
                </p>
                <div class="media">
                  <h3>
                    Комментарии
                  </h3>
                  <hr>
                  <?php if(sizeof($comments)==0):?>
                    <h3 style="color:#48cfad;">Прокомментируйте первым</h3>
                  <?php else:?> 
                    <?php foreach($comments as $comment):?>
                      <a class="pull-left" href="javascript:;">
                        <img class="media-object" src="/img/person_1.png" alt="">
                      </a>
                      <div class="media-body">
                        <h4 class="media-heading">
                          <?php echo $comment->name;?>
                          <span>
                            |
                          </span>
                          <span>
                          <?php echo $comment->date;?>
                          </span>
                        </h4>
                        <p>
                        <?php echo $comment->text;?>
                        </p>
                        <a href="javascript:;">
                          Reply
                        </a>
                        <hr>
                        <!--end media-->
                      </div>
                    <?php endforeach;?>
                  <?php endif;?>
                </div>

                <div class="post-comment">
                  <h3 class="skills">
                    Написать комментарий
                  </h3>

                  <?php  $form = ActiveForm::begin();?>
                  <?= $form->field($model, 'name')->textInput(['maxlength' => true])?>
                  <?= $form->field($model, 'email')->input('email',['maxlength' => true])?>
                  <?= $form->field($model, 'text')->textarea(['rows' => '6'])?>
                  <div class="form-group">
                    <?= Html::submitButton('Прокомментировать', ['class' => 'btn btn-info ']) ?>
                  </div>
                  <?php ActiveForm::end();?>
                  
                </div>
               
              </div>
            </div>
          </div>
        
        </div>

        <div class="col-lg-3">
          <div class="blog-side-item">
            <div class="search-row">
              <input type="text" class="form-control" placeholder="Search here">
            </div>
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
                        </p>
                        </div>
                    </div>
            </div>

          </div>
        </div>

        <!--blog end-->
      </div>

    </div>
    <!--container end-->