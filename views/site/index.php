<?php

/* @var $this yii\web\View */
use yii\bootstrap\ActiveForm;
use aneeshikmat\yii2\Yii2TimerCountDown\Yii2TimerCountDown;
use yii\helpers\Url;
use yii\helpers\Html;

$this->title = Yii::$app->name ;

?>

  
  <div class="container pull-left col-lg-7" align="center">
    <?php if (Yii::$app->session->getFlash('success')): ?>
        <div class="alert alert-success alert-dismissible flash" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                      aria-hidden="true">&times;</span></button>
          Вопрос задан.
        </div>
    <?php elseif(Yii::$app->session->getFlash('error')):?>
      <div class="alert alert-danger alert-dismissible flash" role="alert" >
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
        Произошла ошибка! Попробуйте снова $).
        
      </div>
    <?php endif; ?>
  </div>
     <!-- Sequence Modern Slider -->
     <div id="da-slider" class="da-slider">

<div class="da-slide">
<div class="container">
  <div class="row">
    <div class="col-md-12">
  <h2>
    <i>УЧАВСТВУЙТЕ</i>
    <br>
    <i>В ИГРЕ</i>
    
  </h2>
  <p>
    <i>	Каждый день </i>
    <br />
    <i>По будням в 13:00 и 20:00 по Мск</i>
<br />
    <i>По выходным в 20:00 по Мск</i>
  </p>
  <div class="da-img">
    <img src="/img/mob11.png" alt="image01" />
  </div>
</div>
</div>
</div>
</div>


<div class="da-slide">
<div class="container">
<div class="row">
<div class="col-md-12">
<h2>
<i>ОТВЕЧАЙТЕ </i>
<br>
    <i>НА ВОПРОСЫ</i>
</h2>
<p>
<i>Ответьте правильно всего на 12 вопросов</i>
<br />
<i>И денежный приз Ваш</i>
</p>

<div class="da-img">
<img src="/img/tab11.png" alt="image01" />
</div>
</div>
</div>
</div>
</div>


<div class="da-slide">
<div class="container">
<div class="row">
<div class="col-md-12">
<h2>
<i>ВЫИГРЫВАЙТЕ </i>
<br>
    <i>ДЕНЬГИ</i>
</h2>
<p>
<i>Сумма, заявленная перед трансляцией</i>
<br />
<i>Будет разделена между </i>
<br />
<i>Всеми победителями </i>
</p>

<div class="da-img">
<img src="/img/3.png" alt="image01" />
</div>
</div>
</div>
</div>
</div>

<nav class="da-arrows">
<span class="da-arrows-prev">
</span>
<span class="da-arrows-next">
</span>
</nav>
</div>

<h2 align="center" style="">
  До начала следующей трансляции:
</h2>

<?php
	  $callBackScript = 
				"alert('Трансляция началась!')";
				;
	?>

        <div id="time-down-counter-2" class="text-center timer_styling" ></div>
        <?= Yii2TimerCountDown::widget([
            'countDownIdSelector' => 'time-down-counter-2',
            'countDownDate' => strtotime("20:00:00") * 1000,// You most * 1000 to convert time to milisecond
            'countDownResSperator' => ':',
            'addSpanForResult' => false,
            'addSpanForEachNum' => false,
            'countDownOver' => 'Трансляция началась!',
            'countDownReturnData' => 'from-days',
            'templateStyle' => 1,
            'getTemplateResult' => 0,
            'callBack' => ''
        ]) ?>

<div class="container">
<div class="row mar-b-50">
<div class="col-md-12">
<div class="text-center feature-head wow fadeInDown">
<h1 class="">
  Добро пожаловать в Клевер
</h1>

</div>


<div class="feature-box">
<div class="col-md-4 col-sm-4 text-center wow fadeInUp">
  <div class="feature-box-heading">
    <em>
    <img src="/img/11.png" alt="" width="100" height="100">

    </em>
    <h4>
      <b>Более 5 миллионов скачиваний</b>
    </h4>
  </div>
  
</div>
<div class="col-md-4 col-sm-4 text-center wow fadeInUp">
  <div class="feature-box-heading">
    <em>
      <img src="/img/2.png" alt="" width="100" height="100">
    </em>
    <h4>
      <b>Более 700 тысяч человек в игре каждый день</b>
    </h4>
  </div>
  
</div>
<div class="col-md-4 col-sm-4 text-center wow fadeInUp">
  <div class="feature-box-heading">
    <em>
      <img src="/img/coins-icon.png" alt="" width="100" height="100">
    </em>
    <h4>
      <b>Более 20 миллионов рублей разыграно</b>
    </h4>
  </div>
</div>
</div>

<!--feature end-->
</div>
</div>
</div>


<!--property start-->
<div class="property gray-bg">
<div class="container">
<div class="row">
<div class="col-lg-6 col-sm-6 text-center wow fadeInLeft">
<img src="/img/phone-frame.png" alt="">
</div>
<div class="col-lg-6 col-sm-6 wow fadeInRight">

  <h1>
  <a name="about"> Об Игре </a>
  </h1>
<hr>
<p>
  <i class="fa fa-check fa-lg pr-10">
  </i>
  Клевер - это онлайн-игра, которая была создана социальной сетью "ВКонтакте" вместе с творческой лабораторией Ивана Урганта. Приложение появилось в сети 14-го марта, в первый же месяц завоевав миллионы поклонников.
</p>
<p>
  <i class="fa fa-check fa-lg pr-10">
  </i>
  Принцип игры - правильно ответив на все 12 вопросов викторины, победители делят между собой призовой фонд, который варьируется от 50 до 500 тысяч рублей. У игроков есть 1 право на ошибку - это дополнительные жизни, которые можно получить за приглашение в игру друзей или купить за внутриигровую валюту - клеверсы.
</p>
<p>
  <i class="fa fa-check fa-lg pr-10">
  </i>
  Игры проводятся ежедневно в 13 и 20 часов по МСК, по выходным - только в 20:00, но и призовой фонд во время выходных составляет 100 тысяч рублей. Это приложение позволит любому пользователю социальной сети "ВКонтакте" зарабатывать своей логикой.
</p>
<hr>

</div>
</div>
</div>
</div>
<!--property end-->

<div id="home-services">

<div class="container">
<div class="row">
<div class="col-md-12">
<h2>
  Если понадобилась помощь
</h2>
</div>

<div class="col-md-4">
<div class="h-service">
  <div class="icon-wrap ico-bg round-fifty wow fadeInDown">
    <i class="fa fa-question">
    </i>
  </div>
  <div class="h-service-content wow fadeInUp">
    <h3>
      F.A.Q.
    </h3>
    <p>
      Ответы на Часто Задаваемые Вопросы
      <br>
      <a href="<?=Url::to('/site/about')?>">
        Узнать больше
      </a>
    </p>
  </div>
</div>
</div>
<div class="col-md-4">
<div class="h-service">
  <div class="icon-wrap ico-bg round-fifty wow fadeInDown">
    <i class="fa fa-h-square">
    </i>
  </div>
  <div class="h-service-content wow fadeInUp">
    <h3>
      Что-то непонятно?
    </h3>
    <p>
      Напишите нам и мы ответим.
      <br>
      <a href="<?=Url::to('/site/contact')?>">
        Узнать больше
      </a>
    </p>
  </div>
</div>
</div>
<div class="col-md-4" style="max-height: 215px;">
<div class="h-service">
  <div class="icon-wrap ico-bg round-fifty wow fadeInDown">
    <i class="fa fa-users">
    </i>
  </div>
  <div class="h-service-content wow fadeInUp">
    <h3>
      Посетите Форум
    </h3>
    <p>
      Сообщество, где можно обмениваться мнениями об игре
      <br>
      <a href="<?=Url::to('/podium/home')?>">
        Узнать больше 
      </a>
    </p>
  </div>
</div>
</div>
</div>
<!-- /row -->

</div>
<!-- /container -->

</div>
<!-- service end -->
<div class="hr" style="margin-top:1px;">
<span class="hr-inner"></span>
</div>

<h2 align="center">
  <a name="download">Скачать приложение:</a>
</h2>
<div class="container" align="center">
			<a href='https://play.google.com/store/apps/details?id=com.vk.quiz&hl=ru&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1'><img alt='Get it on Google Play' src='/img/google-play-badge.png'
				style="height:160px;width:425px;"
			/></a>
			<a href='https://itunes.apple.com/ru/app/клевер-игра-с-призами/id1357577712?mt=8'><img alt='Get it on App Store' src='/img/app-store-badge.svg'
				style="height:150px;width:325px;"
			/></a>
</div>
    
