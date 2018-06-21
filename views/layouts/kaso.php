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
    <title><?= Html::encode(Yii::$app->name) ?></title>
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
              <a class="navbar-brand" href="index.html"><?=Yii::$app->name?><span></span></a>
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
				  <a href="<?=Url::to('/site/about')?>">FAQ</a>
        </li>
        
        <li>
          <a class="btn btn-warning" style="color: #fff;background: #48cfad;" 
          href="<?=Url::to('/site/login')?>">
            Вход
          </a>
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
            <div class="row" style="color:#fff;">
                
                    <ul class="social-link-footer list-unstyled">
                        <li class="wow flipInX pull-right" data-wow-duration="2s" data-wow-delay=".1s"><a href="#"><i class="fa fa-vk"></i></a></li>
                    </ul>
                    
                    <a style="color: #fff;" href="/#about">Об Игре</a></li>
                    <a style="margin-left:7%;color: #fff;"  href="<?=Url::to('/site/contact')?>">    Поддержка</a>
                    <a style="margin-left:7%;color: #fff;" href="<?=Url::to('/podium/home')?>">   Форум</a>
                    <a style="margin-left:7%;color: #fff;" href="#">   Политика Конфиденциальности</a>
                    <a style="margin-left:7%;color: #fff;" href="#">   Условия пользования</a>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--small footer end-->
          
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
