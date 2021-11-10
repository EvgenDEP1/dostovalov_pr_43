<?php

use yii\widgets\LinkPager;

?>
<!--main content start-->
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php foreach ($articles as $article): ?>
                    <article class="post">
                        <div class="post-thumb">
                            <a href="blog.html"><img src="<?= $article->getImage();?>" alt=""></a>

                            <a href="blog.html" class="post-thumb-overlay text-center">
                                <div class="text-uppercase text-center">Посмотреть</div>
                            </a>
                        </div>
                        <div class="post-content">
                            <header class="entry-header text-center text-uppercase">
                                <h6><a href="#"> <?= $article->category->title; ?></a></h6>

                                <h1 class="entry-title"><a href="blog.html"><?= $article->title; ?></a></h1>


                            </header>
                            <div class="entry-content">
                                <p><?= $article->description; ?>
                                </p>

                                <div class="btn-continue-reading text-center text-uppercase">
                                    <a href="blog.html" class="more-link">Продолжить Чтение</a>
                                </div>
                            </div>
                            <div class="social-share">
                                <span class="social-share-title pull-left text-capitalize">Автор <a href="#">Рубель</a> На <?= $article->date; ?></span>
                                <ul class="text-center pull-right">
                                    <li><a class="s-facebook" href="#"><i class="fa fa-eye"></i></a></li>
                                    <?= (int) $article->viewed;?>
                                </ul>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>


                <?php

                echo LinkPager::widget([
                    'pagination' => $pagination,
                ]);
                ?>
                ?>
            </div>
            <div class="col-md-4" data-sticky_column>
                <div class="primary-sidebar">

                    <aside class="widget">
                        <h3 class="widget-title text-uppercase text-center">Популярные Посты</h3>
                        <div class="popular-post">
                            <a href="#" class="popular-img"><img src="public/images/p1.jpg" alt="">
                                <div class="p-overlay"></div>
                            </a>
                            <div class="p-content">
                                <a href="#" class="text-uppercase">Дом - это спокойное Место</a>
                                <span class="p-date">Ноябрь 9, 2021</span>
                            </div>
                        </div>
                        <div class="popular-post">
                            <a href="#" class="popular-img"><img src="public/images/p1.jpg" alt="">
                                <div class="p-overlay"></div>
                            </a>
                            <div class="p-content">
                                <a href="#" class="text-uppercase">Дом - это спокойное Место</a>
                                <span class="p-date">Ноябрь 9, 2021</span>
                            </div>
                        </div>
                        <div class="popular-post">


                            <a href="#" class="popular-img"><img src="public/images/p1.jpg" alt="">

                                <div class="p-overlay"></div>
                            </a>

                            <div class="p-content">
                                <a href="#" class="text-uppercase">Дом - это спокойное Место</a>
                                <span class="p-date">Ноябрь 9, 2021</span>
                            </div>
                        </div>
                    </aside>
                    <aside class="widget pos-padding">
                        <h3 class="widget-title text-uppercase text-center">Последние Сообщения</h3>
                        <div class="thumb-latest-posts">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#" class="popular-img"><img src="public/images/r-p.jpg" alt="">
                                        <div class="p-overlay"></div>
                                    </a>
                                </div>
                                <div class="p-content">
                                    <a href="#" class="text-uppercase">Дом - это спокойное Место</a>
                                    <span class="p-date">Ноябрь 9, 2021</span>
                                </div>
                            </div>
                        </div>
                        <div class="thumb-latest-posts">


                            <div class="media">
                                <div class="media-left">
                                    <a href="#" class="popular-img"><img src="public/images/r-p.jpg" alt="">
                                        <div class="p-overlay"></div>
                                    </a>
                                </div>
                                <div class="p-content">
                                    <a href="#" class="text-uppercase">Дом - это спокойное Место</a>
                                    <span class="p-date">Ноябрь 9, 2021</span>
                                </div>
                            </div>
                        </div>
                        <div class="thumb-latest-posts">


                            <div class="media">
                                <div class="media-left">
                                    <a href="#" class="popular-img"><img src="public/images/r-p.jpg" alt="">
                                        <div class="p-overlay"></div>
                                    </a>
                                </div>
                                <div class="p-content">
                                    <a href="#" class="text-uppercase">Дом - это спокойное Место</a>
                                    <span class="p-date">Ноябрь 9, 2021</span>
                                </div>
                            </div>
                        </div>
                        <div class="thumb-latest-posts">


                            <div class="media">
                                <div class="media-left">
                                    <a href="#" class="popular-img"><img src="public/images/r-p.jpg" alt="">
                                        <div class="p-overlay"></div>
                                    </a>
                                </div>
                                <div class="p-content">
                                    <a href="#" class="text-uppercase">Дом - это спокойное Место</a>
                                    <span class="p-date">Ноябрь 9, 2021</span>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <aside class="widget border pos-padding">
                        <h3 class="widget-title text-uppercase text-center">Категории</h3>
                        <ul>
                            <li>
                                <a href="#">Еда и напитки</a>
                                <span class="post-count pull-right"> (2)</span>
                            </li>
                            <li>
                                <a href="#">Путешествия</a>
                                <span class="post-count pull-right"> (2)</span>
                            </li>
                            <li>
                                <a href="#">Бизнес</a>
                                <span class="post-count pull-right"> (2)</span>
                            </li>
                            <li>
                                <a href="#">История</a>
                                <span class="post-count pull-right"> (2)</span>
                            </li>
                            <li>
                                <a href="#">Поделки и советы</a>
                                <span class="post-count pull-right"> (2)</span>
                            </li>
                            <li>
                                <a href="#">Образ жизни</a>
                                <span class="post-count pull-right"> (2)</span>
                            </li>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end main content-->