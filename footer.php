<?php

?>




<footer id="footer" class="site-footer">
    <div class="row">
        <section class="small-12 column">
            <div class="-inline-group">
                <div class="small-12 large-8 text-center medium-text-left">
                    <div id="footer-text" class="footer-text client">
                        <div id="footertext1" class="footer-text__about">
                            2018 © Моя компания
                        </div>
                    </div>
                </div>
            </div>
            <div class="row column site-footer_indent">
                <div class="small-12 large-6 small-centered site-footer__statcounters">
                    <section id="statcounters-left" data-block-id="16" class="block-16 statcounters widget-left widget-block -nt-widget">
                        <div id="statcounters-left-show" class="content-block">
                            <div class="statcounters-list text-center">
                                <div class="statcounters__item">
                                    <!-- Yandex.Metrika counter --><script type="text/javascript" nonce="">
                                        (function (d, w, c) {
                                            (w[c] = w[c] || []).push(function() {
                                                try {
                                                    w.yaCounter50667100 = new Ya.Metrika2({
                                                        id:50667100
                                                        ,clickmap: true                    ,trackLinks: true                    ,accurateTrackBounce: true                    ,trackHash: true                                        ,webvisor: true                                    });
                                                } catch(e) { }
                                            });
                                            var n = d.getElementsByTagName("script")[0],
                                                s = d.createElement("script"),
                                                f = function () { n.parentNode.insertBefore(s, n); };
                                            s.type = "text/javascript";
                                            s.async = true;
                                            s.src = "https://mc.yandex.ru/metrika/tag.js";
                                            if (w.opera == "[object Opera]") {
                                                d.addEventListener("DOMContentLoaded", f, false);
                                            } else { f(); }
                                        })(document, window, "yandex_metrika_callbacks2");
                                    </script><noscript><div><img src="https://mc.yandex.ru/watch/50667100" style="position:absolute; left:-9999px;" alt=""></div></noscript>
                                    <!-- /Yandex.Metrika counter -->
                                </div>

                            </div>
                        </div>
                    </section>



                </div>
            </div>
        </section>
    </div>
</footer>

</div> <!--site layout-->
<div id="for-explain"></div>
<input type="hidden" class="-currentFont" value="Roboto">
<script src="/js/lang/ru_RU/translate.js?v=845039680435609820410"></script>
<script type="text/javascript" src="//s.siteapi.org/frontend/static/grid_9/js/vendor-0519471bd1.min.js"></script>
<script type="text/javascript" src="//s.siteapi.org/frontend/static/grid_9/js/scripts-1c5ae43a8d.js"></script>
<div id="vk_api_transport"></div>
<script type="text/javascript">
    (function () {
        window.vkAsyncInit = function() {
            $(document).trigger('vk-loaded');
        };
        setTimeout(function() {
            var el = document.createElement("script");
            el.type = "text/javascript";
            el.src = "//vk.com/js/api/openapi.js";
            el.async = true;
            document.getElementById("vk_api_transport").appendChild(el);
        }, 0);
        window.fbAsyncInit = function() {
            $(document).trigger('fb-loaded');
        };
        (function(d, s, id){
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    }());
</script>


<?php wp_footer(); ?>
</body>
</html>
