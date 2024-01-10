<footer id="footer" class="footer">
            <p class="footer__top"><a href="#" class="footer__link"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/top/goTop.svg" alt="GO TOP画像"></a></p>
            <div class="footer__wrap">
                <nav class="footerGnav">
                    <ul class="footerGnav__nav--left">
                        <li class="footerGnav__list"><a href="<?php echo esc_url( get_home_url() ); ?>" class="footerGnav__link">TOP</a></li>
                        <li class="footerGnav__list"><a href="#" class="footerGnav__link">ABOUT</a></li>
                        <li class="footerGnav__list"><a href="#" class="footerGnav__link">WORKS</a></li>
                        <li class="footerGnav__list"><a href="#" class="footerGnav__link">SERVICE</a></li>
                    </ul>
                    <ul class="footerGnav__nav--right">
                        <li class="footerGnav__list"><a href="#" class="footerGnav__link">MEMBER</a></li>
                        <li class="footerGnav__list"><a href="#" class="footerGnav__link">COMPANY</a></li>
                        <li class="footerGnav__list"><a href="<?php echo esc_url( get_home_url() ); ?>/archives/blog" class="footerGnav__link">BLOG</a></li>
                        <li class="footerGnav__list"><a href="#" class="footerGnav__link">NEWS</a></li>
                    </ul>
                </nav>
                <div class="footer__container">
                    <div class="footerNav">
                        <p class="footerNav__btn footerNav__btnBg">
                            <a href="<?php echo esc_url( get_home_url() ); ?>/contact" class="footerNav__link"></a>
                        </p>
                        <p class="footerNav__btn footerNav__btnBg">
                            <a href="#" class="footerNav__link"></a>
                        </p>
                    </div>
                    <p class="footer__logo">
                        <a href="<?php echo esc_url( get_home_url() ); ?>" class="footer__logo-link"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/top/logo-mvs.svg" alt="マーベリックスロゴ" class="footer__logo-img"></a>
                    </p>
                    <div class="footer__copyright">@Mavericks Inc.</div>
                </div>
            </div>
        </footer>
    </div>
    <!-- swiper本体 -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- .jsファイルの読み込み -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/swiper.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
    <?php wp_footer(); ?>
</body>
</html>