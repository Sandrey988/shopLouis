<?php
/*
Template Name: postsPage
*/
get_header();
?>

<div id="content-anchor" class="site-content small-12">
    <section id="content" class="module" data-ng-controller="ContentController">
        <div class="module__content">
            <section data-widget-posts data-widget-container data-widget-id="7" data-widget-sort="1" data-widget-url="/widget?isDomain=1&amp;route=post&amp;on_main=0&amp;type=5&amp;widget_id=7" data-region="1" data-widget-type="5" class="widget-sort widget-block block-7">


                <section id="posts" data-widget-content class="posts widget on-view widget-block -relative">
                    <br><br><br><br>
                    <header class="posts__header widget__header row text-center widget__header_underlined">
                        <div class="small-12 column"><h1 class="posts__title">Новости
                            </h1></div>    </header>
                    <div class="content-block posts__content widget__content widget__content_filled" id="posts-show">
                        <div class="widget__inner row" data-ng-show="$ctrl.showContent()">
                            <div class="small-12 column">                                <div class="text-center">
                                    <div class="small-12 medium-12 large-9 column posts__list small-centered inline-block text-left">

                                        <article itemscope itemtype="https://schema.org/NewsArticle" class="post-item posts__item row">
                                            <div class="large-1-of-9 show-for-large column">
                                                <time itemprop="dateCreated" datetime="2018-09-05" class="post-item__time hide-for-small-only">
                                                    05.09.2018
                                                </time>
                                            </div>
                                            <div class="small-12 medium-12 large-8-of-9 column">
                                                <header class="post-item__header">
                                                    <h4 class="post-item__title"><a itemprop="url" href="https://louis-vuitton.su/posts/3610010">
                                                            НОВАЯ МОДЕЛЬ В КОЛЛЕКЦИИ NEW WAVE</a></h4>                        </header>
                                                <time itemprop="dateCreated" datetime="2018-09-05" class="post-item__time hide-for-large">
                                                    05.09.2018
                                                </time>
                                                <div itemprop="description" class="user-inner post-item__brief ">
                                                    <p style="text-align: center;"><span style="font-weight: bold; font-weight: bold;">Коллекция пополнилась сумкой из лимитированной серии с яркой вышивкой #LV на ремешке</span></p>
                                                    <p><img src="//i.siteapi.org/Y_v35nYxvz_3uAfmsZ4LeBFtvAI=/0x0:1082x609/cd2000cd7dfd450.s2.siteapi.org/img/sq2oxdsh39wo004oc40kcc8w0c8s48" alt="" title="" class="" style="width: 1082px; height: 609px; margin: 0px;" data-eval="//i.siteapi.org/bolJvgdKkSuvaHE24mAkaZmtEfY=/cd2000cd7dfd450.s2.siteapi.org/img/sq2oxdsh39wo004oc40kcc8w0c8s48" data-origin="cd2000cd7dfd450.s2.siteapi.org/img/sq2oxdsh39wo004oc40kcc8w0c8s48"></p>
                                                </div>
                                            </div>
                                        </article>
                                        <div class="text-center">


                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>



                <div class="widget__content widget__content_filled">
                    <div class="row">
                        <div data-ng-if="$ctrl.loaded" class="widget__view small-12 column" data-ui-view="posts-view"></div>
                    </div>
                </div>

            </section>


        </div>
    </section>
</div>


<?php
get_footer();
?>

