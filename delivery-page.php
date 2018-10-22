<?php

/*
Template Name: deliveryPage
*/
get_header();
?>

<div id="content-anchor" class="site-content small-12">
    <section id="content" class="module" data-ng-controller="ContentController">
        <div class="module__content">
            <section data-widget-shipping data-widget-container data-widget-id="15" data-widget-sort="1" data-widget-url="/widget?isDomain=1&amp;route=delivery&amp;on_main=0&amp;type=27&amp;widget_id=15" data-region="1" data-widget-type="27" class="widget-sort widget-block block-15">

                <section id="27" data-widget-content data-widget-api-url="" class="delivery widget on-view delivery-widget">
                    <br>
                    <br>
                    <br>
                    <br>
                    <header class="delivery-widget__header widget__header widget__header_underlined row text-center">
                        <h1>Доставка и Оплата</h1>
                    </header>
                    <div class="content-block widget__content widget__content_filled">
                        <article class="delivery-widget__content widget__inner" id="27-show" data-ng-show="$ctrl.showContent()">

                            <div class="row">
                                <div class="small-12 columns">
                                    <div id="delivery-body" class="text-center
                                medium-text-left
                                user-inner
                                widget__desc">
                                        <p><span style="font-weight: bold; font-size: 20px; font-weight: bold;">ДОСТАВКА ПО МОСКВЕ</span></p>
                                        <p><br></p>
                                        <ul>
                                            <li>Доставка по Москве - 0 рублей.<br>
                                            </li>
                                            <li>Доставка осуществляется с ПН по ВС, с 10:00 до 23:00.</li>
                                            <li><span>Доставка осуществляется курьером в день заказа либо на следующий день по согласованию с заказчиком.</span></li>
                                            <li><span>Доставка в Подмосковье - 30 рублей за каждый км удаленности от МКАД.</span></li>
                                        </ul>
                                        <p><br></p>
                                        <p><br></p>
                                        <p><span>В случае отказа от покупки необходимо оплатить услуги курьера по Москве - 400 руб., в Подмосковье - 400 + 30 руб. за каждый километр удаленности от МКАД. (Оплата предусмотрена на основании п.п. 3,4 ст. 497 ГК РФ)</span></p>
                                        <p><br></p>
                                        <p><span>Если вы не можете определиться с выбором товара, курьер привезет:</span></p>
                                        <p>До 2 товаров на выбор при покупке 1 ед.</p>
                                        <p>До 4 товаров <span>на выбор при покупке 2 ед.</span></p>
                                        <p><br></p>
                                        <p><span>----------------------------------------------</span></p>
                                        <p><br></p>
                                        <p><span style="font-weight: bold; font-size: 20px; font-weight: bold;">ДОСТАВКА В РЕГИОНЫ</span></p>
                                        <p><br></p>
                                        <ul>
                                            <li>Доставка в регионы России - 0 рублей.<br>
                                            </li>
                                            <li>Отправка товара осуществляется: в понедельник, среду, пятницу.</li>
                                            <li>Отправка EMS (курьером до двери)</li>
                                            <li>Исключительно после предоплаты в размере 50%.</li>
                                        </ul>
                                        <p><br></p>
                                        <p><br></p>
                                        <p><br></p>
                                        <p><span style="font-weight: bold; font-weight: bold;">ВНИМАНИЕ! В связи с недобросовестными покупателями, которые при оформлении заказа наложенным платежом не выкупали посылки, отправка товаров без 50% предоплаты производиться не будет.</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="small-12 large-8 large-centered column">
                                </div>
                            </div>
                        </article>
                    </div>
                </section>



                <div class="widget__content widget__content_filled">
                    <div class="row">
                        <div data-ng-if="$ctrl.loaded" class="widget__view small-12 column" data-ui-view="shipping-view"></div>
                    </div>
                </div>

            </section>


        </div>
    </section>
</div>


<?php
get_footer();
?>

