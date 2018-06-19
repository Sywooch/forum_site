<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'FAQ';
?>

    <!--breadcrumbs start-->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <h1>FAQ</h1>
                </div>
                <div class="col-lg-8 col-sm-8">
                    <ol class="breadcrumb pull-right">
                        <li><a href="<?=Url::to('/site/index')?>">Главная</a></li>
                        <li class="active">FAQ</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->
	
	<section id="faq">

        <div class="container">



            <div class="row">

                <div class="col-md-10 col-md-offset-1 mar-b-30">

                <div id="heading">
                  <h1 class="wow flipInX">F.A.Q.Клевер</h1>
                  <p class="lead wow fadeIn">У вас есть вопрос? Ответ уже может быть ниже. Давай найдём его!
				  <br/>
				  Клевер — это ежедневная онлайн-игра с денежными призами.
Отвечайте на вопросы, соревнуйтесь вместе с друзьями и выигрывайте деньги.</p>
                </div>

                    <!--////////// Accordion Toggle //////////-->
                    <div class="panel-group wow fadeInUp" id="accordion" data-wow-duration="2s">

                        <!-- PANEL 1 -->
                        <div class="panel panel-default">
                            <div class="panel-heading panel-heading-faq">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    Когда играть? 
                                    </a>
                                </h4>
                            </div>

                            <div id="collapseOne" class="panel-collapse collapse">
                                <div class="panel-body panel-faq">
                                    <p>
										Игры проходят два раза в день по будням и один раз по выходным.
										Будни: 13:00 и 20:00, выходные: 20:00 по Москве
									</p>
                                </div>
                            </div>
                        </div>

                        <!-- PANEL 2 -->
                        <div class="panel panel-default">
                            <div class="panel-heading panel-heading-faq">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                    Сколько можно выиграть? 
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body panel-faq">
                                    <p>Призовой фонд — от 10 000 рублей.</p>
                                </div>
                            </div>
                        </div>

                        <!-- PANEL 3 -->
                        <div class="panel panel-default">
                            <div class="panel-heading panel-heading-faq">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                    Как играть?
                                    </a>
                                </h4>
                            </div>

                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body panel-faq">
                                    <p>Для того, чтобы скачать игру, перейдите по ссылке: vk.cc/clever
										Чтобы победить в игре, необходимо правильно ответить на 12 вопросов. 
										Если вы — единственный, кто дошел до финала, призовой фонд — ваш. 
										Если выиграло несколько человек, призовой фонд делится между ними.
									</p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading panel-heading-faq">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                                    Сколько это стоит?
                                    </a>
                                </h4>
                            </div>

                            <div id="collapseFive" class="panel-collapse collapse">
                                <div class="panel-body panel-faq">
                                    <p>
										От участников не требуется никаких вложений. Игра, как и участие в ней, бесплатные.
									</p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading panel-heading-faq">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
                                    Чтобы играть, нужны жизни?
                                    </a>
                                </h4>
                            </div>

                            <div id="collapseSix" class="panel-collapse collapse">
                                <div class="panel-body panel-faq">
                                    <p>Нет, не нужны.</p>
                                </div>
                            </div>
                        </div>
						
						<div class="panel panel-default">
                            <div class="panel-heading panel-heading-faq">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
                                    Зачем нужны бонусные жизни?
                                    </a>
                                </h4>
                            </div>

                            <div id="collapseSeven" class="panel-collapse collapse">
                                <div class="panel-body panel-faq">
                                    <p>С помощью них вы можете продолжить играть после неправильного ответа на любой вопрос, кроме последнего. 
									За одну игру вы можете использовать только одну жизнь. 
									За одну игру вы можете использовать только одну жизнь. 
									Вы можете пригласить друзей, чтобы получить дополнительные жизни.</p>
                                </div>
                            </div>
                        </div>
						
						<div class="panel panel-default">
                            <div class="panel-heading panel-heading-faq">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseEight">
                                    Выигрыш реальный? Как вывести деньги?
                                    </a>
                                </h4>
                            </div>

                            <div id="collapseEight" class="panel-collapse collapse">
                                <div class="panel-body panel-faq">
                                    <p>Да. Как только вы накопите 200 рублей, вы можете вывести их на мобильный телефон или банковскую карту. 
									Информация о выплатах доступна в приложении.</p>
                                </div>
                            </div>
                        </div>
						
						<div class="panel panel-default">
                            <div class="panel-heading panel-heading-faq">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseNine">
                                    Можно ли играть с одного аккаунта на разных устройствах одновременно?
                                    </a>
                                </h4>
                            </div>

                            <div id="collapseNine" class="panel-collapse collapse">
                                <div class="panel-body panel-faq">
                                    <p>Мы не гарантируем стабильную работу приложения при использовании одного аккаунта на разных устройствах. 
									Так делать не стоит.</p>
                                </div>
                            </div>
                        </div>
						
						<div class="panel panel-default">
                            <div class="panel-heading panel-heading-faq">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTen">
                                    Ответил на 12 вопросов, но денег не получил. Почему?
                                    </a>
                                </h4>
                            </div>

                            <div id="collapseTen" class="panel-collapse collapse">
                                <div class="panel-body panel-faq">
                                    <p>Причин может быть несколько — вы забыли обновить приложение перед игрой, сигнал интернета был нестабилен или игра велась с двух устройств. 
									В таком случае могла возникнуть рассинхронизация, вследствие которой вы увидели некорректную информацию на экране телефона. 
									Перед следующей игрой не забудьте убедиться в том, что все причины, которые могут помешать вам забрать приз, устранены.</p>
                                </div>
                            </div>
                        </div>
                    </div>


                </div><!-- /col-md-10 -->


            </div>
        </div>

    </section>

