<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,user-scalable=yes" />
    <title><?php bloginfo('name'); wp_title('|', true, 'left'); ?></title>
    <link rel="stylesheet" href="https://use.typekit.net/zte7fky.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/common.css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet" />
    <!-- <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/image/top/favicon.png" /> -->
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="wrapper">
        <header id="header" class="header">
            <div class="header__wrap">
                <h1 class="header__ttl">
                    <a href="<?php echo esc_url( get_home_url() ); ?>" class="header__link">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/top/logo-bl.svg" alt="マーベリックスロゴ" class="header__img">
                    </a>
                </h1>
                <nav class="gnavTop">
                    <ul class="gnavTop__nav">
                        <li class="gnavTop__list"><a href="#" class="gnavTop__link">ABOUT</a></li>
                        <li class="gnavTop__list"><a href="#" class="gnavTop__link">SERVICE</a></li>
                        <li class="gnavTop__list"><a href="#" class="gnavTop__link">NEWS</a></li>
                        <li class="gnavTop__list"><a href="<?php echo esc_url( get_home_url() ); ?>/blog" class="gnavTop__link">BLOG</a></li>
                        <li class="gnavTop__list"><a href="#" class="gnavTop__link">COMPANY</a></li>
                        <li class="gnavTop__list"><a href="#" class="gnavTop__link">RECRUIT</a></li>
                        <li class="gnavTop__list gnavTop__btn">
                            <a href="<?php echo esc_url( get_home_url() ); ?>/contact" class="gnavTop__link gnavTop__contactLink">
                              <span class="gnavTop__letter readMoreLetter" >CONTACT</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- FadeInメニュー -->
                <!-- ハンバーガーメニューボタン -->
                <div class="btn" id="btn">
                    <span class="btn__top" id="btn__top"></span>
                    <span class="btn__middle" id="btn__middle"></span>
                    <span class="btn__bottom" id="btn__bottom"></span>
                </div>
                <!-- FadeInナビゲーション -->
                <nav class="gnavFadeIn" id="gnavFadeIn">
                    <p class="gnavFadeIn__logo">
                        <a href="index.html" class="gnavFadeIn__logoLink">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/top/logo-wh.svg" alt="マーベリックスロゴ" class="gnavFadeIn__img">
                        </a>
                    </p>
                    <div class="gnavFadeIn__wrap">
                        <div class="gnavFadeIn__container">
                            <ul class="gnavFadeIn__nav--left">
                                <li class="gnavFadeIn__list"><a href="index.html" class="gnavFadeIn__link">TOP</a></li>
                                <li class="gnavFadeIn__list"><a href="#" class="gnavFadeIn__link">ABOUT</a></li>
                                <li class="gnavFadeIn__list"><a href="#" class="gnavFadeIn__link">WORKS</a></li>
                                <li class="gnavFadeIn__list"><a href="#" class="gnavFadeIn__link">SERVICE</a></li>
                            </ul>
                            <ul class="gnavFadeIn__nav--right">
                                <li class="gnavFadeIn__list"><a href="#" class="gnavFadeIn__link">MEMBER</a></li>
                                <li class="gnavFadeIn__list"><a href="#" class="gnavFadeIn__link">COMPANY</a></li>
                                <li class="gnavFadeIn__list"><a href="blog.html" class="gnavFadeIn__link">BLOG</a></li>
                                <li class="gnavFadeIn__list"><a href="#" class="gnavFadeIn__link">NEWS</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- nav独立ボタン -->
                    <div class="nav">
                        <p class="nav__btn nav__btnBg">
                            <a href="<?php echo esc_url( get_home_url() ); ?>/contact" class="nav__link"></a>
                        </p>
                        <p class="nav__btn nav__btnBg">
                            <a href="#" class="nav__link"></a>
                        </p>
                    </div>
                </nav>
            </div>
        </header>