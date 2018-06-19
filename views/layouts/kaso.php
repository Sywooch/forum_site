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
              <a class="navbar-brand" href="index.html">Clever<span></span></a>
          </div>
          <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
           
				<li>
				  <a href="<?=Url::to('/site/index')?>">Главная</a>
				</li>
				
				<li>
				  <a href="blog.html">Об Игре</a>
				</li>

        <li>
				  <a href="blog.html">Скачать</a>
				</li>
			  
        <li>
				  <a href="blog.html">Предложить вопрос</a>
				</li>

        <li>
				  <a href="<?=Url::to('/blog/index')?>">Новости</a>
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
				
              </ul>
          </div>
      </div>
    </header>
    <!--header end-->

	<?= $content ?>

    <!--footer start-->
    <footer class="footer" style="height:auto;">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-3 address wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">
            <h1>
              contact info
            </h1>
            <address>
              <p><i class="fa fa-home pr-10"></i>Address: No.XXXXXX street</p>
              <p><i class="fa fa-globe pr-10"></i>Mars city, Country </p>
              <p><i class="fa fa-mobile pr-10"></i>Mobile : (123) 456-7890 </p>
              <p><i class="fa fa-phone pr-10"></i>Phone : (123) 456-7890 </p>
              <p><i class="fa fa-envelope pr-10"></i>Email :   <a href="javascript:;">support@example.com</a></p>
            </address>
          </div>
           
          <div class="col-lg-4 col-sm-3">
            <div class="page-footer wow fadeInUp" data-wow-duration="2s" data-wow-delay=".3s">
              <h1>
                Our Company
              </h1>
              <ul class="page-footer-list">
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="about.html">About Us</a>
                </li>
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="faq.html">Support</a>
                </li>
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="service.html">Service</a>
                </li>
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="privacy-policy.html">Privacy Policy</a>
                </li>
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="career.html">We are Hiring</a>
                </li>
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="terms.html">Term & condition</a>
                </li>
              </ul>
            </div>
          </div>
          
		  <div class="col-lg-4 col-sm-3">
            <div class="text-footer wow fadeInUp" data-wow-duration="2s" data-wow-delay=".7s">
              <h1>
                Text Widget
              </h1>
              <p>
                This is a text widget.Lorem ipsum dolor sit amet.
                This is a text widget.Lorem ipsum dolor sit amet.
              </p>
            </div>
          </div>
        
		</div>
      </div>
    </footer>
	
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
