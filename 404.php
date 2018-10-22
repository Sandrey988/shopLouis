<?php

get_header();
?>

<div id="content-anchor" class="site-content small-12">


    <section id="content" class="module" data-ng-controller="ContentController">
        <div class="module__content">
            <section id="error404" class="widget-block widget">
                <br><br><br><br>
                <header class="widget__header text-center -inline-group">
                    <h1 class="error-page__h1">
                        Ошибка 404
                    </h1>
                </header>
                <div class="content-block widget__content widget__content_filled">
                    <div class="row widget__inner">
                        <div class="small-12 medium-10 medium-offset-1 columns">
                            <div class="error-page__head text-center">
                                <h3>
                                    Запрашиваемая Вами страница не существует
                                </h3>
                            </div>
                            <div class="error-page__content">
                                <ul class="error-page__items">
                                    <li class="error-page__item">
                                        Ссылка, по которой Вы пришли,
                                        неверна.
                                    </li>
                                    <li class="error-page__item">
                                        Вы неправильно указали путь или
                                        название файла/страницы.
                                    </li>
                                    <li class="error-page__item">
                                        Файл или страница были удалены со
                                        времени Вашего последнего посещения.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <br><br><br><br><br><br><br><br>
</div>

<?php
get_footer();
?>
