<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'F.A.Q.';
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
                    <h1 class="wow flipInX">F.A.Q. Клевер</h1>
                    <p class="lead wow fadeIn">У вас есть вопрос? Ответ уже может быть ниже. Давай найдём его!
				    <br/>
                        Клевер — это ежедневная онлайн-игра с денежными призами.
                        Отвечайте на вопросы, соревнуйтесь вместе с друзьями и выигрывайте деньги.
                        <br/>
                        <?php 
                            if(Yii::$app->user->identity->status == 10):?>
                                <a href="<?=Url::to('/faq/index')?>"
                                    class="btn btn-info" style="margin-top:25px;color:">
                                    Редактировать F.A.Q.
                                </a>
                        <?php endif;?>
                    </p>
                
                </div>

                    <!--////////// Accordion Toggle //////////-->
                    <div class="panel-group wow fadeInUp" id="accordion" data-wow-duration="2s">
                        <?php foreach($faqs as $faq):?>
                        <!-- PANEL 1 -->
                        <div class="panel panel-default">
                            <div class="panel-heading panel-heading-faq">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$faq->id?>">
                                    <?=$faq->title;?> 
                                    </a>
                                </h4>
                            </div>

                            <div id="collapse<?=$faq->id?>" class="panel-collapse collapse">
                                <div class="panel-body panel-faq">
                                    <p>
                                    <?=$faq->content?>
									</p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>
                         
                    </div>


                </div><!-- /col-md-10 -->


            </div>
        </div>

    </section>

