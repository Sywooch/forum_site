<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js">
    </script>
    <script src="js/respond.min.js">
    </script>
    <![endif]-->
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<!--header start-->
    <header class="head-section">
      <div class="navbar navbar-default navbar-static-top container">
          <div class="navbar-header">
              <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="/site/index"><?=Yii::$app->name?><span></span></a>
          </div>
          <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
           
				<li>
				  <a href="<?=Url::to('/site/index')?>">Главная</a>
				</li>
        
        <!-- ЯКОРь 1-->
				<li>
				  <a href="/#about">Об Игре</a>
				</li>


        <li>
				  <a href="/#download">Скачать</a>
				</li>
        
        <li>
				  <a href="<?=Url::to('/blog/user-view')?>">Новости</a>
				</li>

				<li>
				  <a href="<?=Url::to('/site/contact')?>">Отзывы</a>
				</li>
        
        <li>
				  <a href="<?=Url::to('/podium/home')?>">Форум</a>
				</li>
			  
				<li>
				  <a href="<?=Url::to('/site/about')?>">F.A.Q.</a>
        </li>
        
        <li>
          <?php 
          $name = Yii::$app->user->identity->username;
            
          ?>
          <!-- Our Special dropdown has class show-on-hover -->
          <style>
            .show-on-hover:hover > ul.dropdown-menu {
              display: block;    
          }
          </style>
           <?php if(Yii::$app->user->isGuest):?>  
            <a class="btn btn-warning" style="color: #fff;background: #48cfad;" 
              href="<?=Url::to('/site/login')?>">
                Вход
            </a>
        <?php else:?>
          <div class="btn-group show-on-hover" s>
            <button type="button" class="btn dropdown-toggle"
            style="color: #fff;background: #48cfad;min-height:40px;"  data-toggle="dropdown">
              <?=$name?> <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu">
              <li>
              <a class="btn btn" data-method="post"
              
                href="<?=Url::to('/podium/profile')?>">
                  Профиль
              </a>
              </li>
              <li>
                <a class="btn btn" data-method="post"
                  href="<?=Url::to('/site/logout')?>">
                    Выход
                </a>
              </li>
              
            </ul>
          </div>
        <?php endif;?>
        </li>
				
              </ul>
          </div>
      </div>
    </header>
    <!--header end-->

	<?= $content ?>

  <!--small footer start -->
  <footer class="footer-small">
        <div class="container">
            <div class="row" style="color:#fff;margin-left:70px;">
              
              <div class="col-lg-3 col-sm-3" style="width:35%">
                <div class="page-footer wow fadeInUp" >
                  <br>
                  <h5 class="footer_margin_left"> <strong>Для начала</strong></h5>
                  <ul class="page-footer-list">
                  <li>
                    
                      <a href="/site/index">Главная</a></li>
                    </li>
                    <li>
                     
                      <a href="/podium/home/register">Регистрация</a></li>
                    </li>
                    <li>
                      
                      <a href="/#download">Скачать</a></li>
                    </li>
                    <li>
                     
                      <a href="<?=Url::to('/site/question')?>">Предложить Вопрос</a>
                    </li>
                  </ul>
                </div>
              </div>

               <div class="col-lg-3 col-sm-3">
                <div class="page-footer wow fadeInUp" >
                  <br>
                  <h5 class="footer_margin_left"> <strong>О Нас</strong></h5>
                  <ul class="page-footer-list">
                  <li>
                      
                      <a href="/blog/user-view">Новости</a>
                    </li>
                    <li>
                  
                      <a href="<?=Url::to('/site/contact')?>">Отзывы</a>
                    </li>
                  </ul>
                  <ul class="social-link-footer list-unstyled" style="margin-right: 122px;">
                  <li class="wow flipInX pull-right" data-wow-duration="2s" data-wow-delay=".1s"><a href="https://vk.com/clever"><i class="fa fa-vk"></i></a></li>
              </ul>  
                </div>
              </div>

              <div class="col-lg-3 col-sm-3">
                <div class="page-footer wow fadeInUp" >
                  <br>
                  <h5 class="footer_margin_left"> <strong>Поддержка</strong></h5>
                  <ul class="page-footer-list">
                  <li>
                      
                      <a href="/site/about">FAQ</a>
                    </li>
                    <li>
                     
                      <a href="https://vk.com/@clever-privacy">Политика Конфиденциальности</a>
                    </li>
                    <li>
                     
                      <a href=" <?=Url::to('/podium/home')?>"> Форум</a>
                    </li>
                    
                  </ul>
                </div>
              </div>
                                  
            </div>
        </div>
    </div>
  </footer>
    <!--small footer end-->
          
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
