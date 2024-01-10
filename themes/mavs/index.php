<?php get_header(); ?>

    <main id="top">
      <div class="wrapper">
        <!-- mv ===================================== -->
        <div class="mv">
          <div class="mv__wrap">
            <div class="mv__container">
              <p class="mv__ttl">
                <span class="mv__ttl--01">UNION</span>
                <span class="mv__ttl--02">CREATE</span>
                <span class="mv__ttl--03">STRENGTH</span>
              </p>
              <p class="mv__sub">最高のチームで、最高の価値を提供する</p>
            </div>
            <div class="mv__icon">
                <p class="mv__iconImg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/top/icon-img.svg" alt="山のアイコン" class="mv__img"></p>
                <p class="mv__iconTxt"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/top/icon-txt.svg" alt="アイコンテキスト" class="mv__img"></p>
            </div>
            <div class="mv__bg">
                <p class="mv__bg-wolf">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/top/mv_wolf.png" alt="狼の顔" class="mv__img">
                </p>
                <p class="mv__bg-grey">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/top/mv_bg.png" alt="グレーの背景画像" class="mv__img">
                </p>
                <p class="mv__bg-city">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/top/mv_city.png" alt="街の背景画像" class="mv__img">
                </p>
                <div class="mv__bg-plant"></div>
            </div>
          </div>
        </div>
        <!-- mv以降の全体bg ===================================== -->
        <div class="mainBg">
            <p id="mainBg-color" class="mainBg-color">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/top/about_bg-color.png" alt="グラデーション背景画像" class="mainBg__img">
            </p>
            <div id="mainBg-grey" class="mainBg-grey"></div>
        </div>
        <!-- about sec ===================================== -->
        <section id="about" class="about">
          <div class="about__wrap">
            <h2 class="about__ttl fadeUp">ABOUT</h2>
            <p class="about__txt fadeUp">
              <span class="about__txtSpan--01">マーベリックスは<br class="about__br">技術力とコミュニケーションスキルを<br class="about__br">兼ね備えたエンジニア集団。<br class="about__br--tb"></span>
              <span class="about__txtSpan--02">それぞれの個性を活かしチームで取り組むからこそ最高の価値を提供できる。<br class="about__br--tb"></span>
              変化を恐れず己を磨き、挑戦を続けながら明日の世界を創造していく。
            </p>
            <p class="about__btn">
              <a href="#" class="about__link">
                <span class="about__letter readMoreLetter">READ MORE</span>
              </a>
            </p>
          </div>
        </section>
        <!-- service sec ===================================== -->
        <section id="service" class="service standardScroll">
          <div class="service__wrap">
            <div class="service__container">
                <h2 class="service__ttl">
                    <span class="service__ttlLetter txtAnimationFadeUp" id="animationDelay1">S</span>
                    <span class="service__ttlLetter txtAnimationFadeUp" id="animationDelay2">E</span>
                    <span class="service__ttlLetter txtAnimationFadeUp" id="animationDelay3">R</span>
                    <span class="service__ttlLetter txtAnimationFadeUp" id="animationDelay4">V</span>
                    <span class="service__ttlLetter txtAnimationFadeUp" id="animationDelay5">I</span>
                    <span class="service__ttlLetter txtAnimationFadeUp" id="animationDelay6">C</span>
                    <span class="service__ttlLetter txtAnimationFadeUp" id="animationDelay7">E</span>
                </h2>
                <p class="service__sub fadeUp">サービス</p>
                <p class="service__txt fadeUp">マーベリックスは経験豊富なメンバーによるサイト制作やシステム開発を得意としています。さらに業務に柔軟に対応できる「リモートラボ」なら、お客様の開発を効率的に進めることができます。</p>
                <p class="service__btn">
                <a href="#" class="service__link">
                    <span class="service__letter readMoreLetter">READ MORE</span>
                </a>
                </p>
            </div>
            <div class="fadeUp">
                <div class="service__pic"></div>
            </div>
          </div>
        </section>
        <!-- blog sec ===================================== -->
        <section id="blog" class="blog standardScroll">
          <div class="blog__wrap">
            <h2 class="blog__ttl">
                <span class="blog__ttlLetter txtAnimationFadeUp" id="animationDelay1">B</span>
                <span class="blog__ttlLetter txtAnimationFadeUp" id="animationDelay2">L</span>
                <span class="blog__ttlLetter txtAnimationFadeUp" id="animationDelay3">O</span>
                <span class="blog__ttlLetter txtAnimationFadeUp" id="animationDelay4">G</span>
            </h2>
            <p class="blog__sub fadeUp">ブログ</p>
            <!-- スライダー本体 ================== -->
            <div class="swiper swiper-blog">
                <div class="swiper-wrapper swiper-blog__wrapper">
                    <!-- ループ表示 ================== -->
                    <?php 
                        $post_query = new WP_Query(
                        array (
                            'post_type' => 'blog',
                            'posts_per_page' => 8,
                        )
                        );
                    ?>
                    <?php if($post_query -> have_posts()) : ?>
                    <?php while($post_query -> have_posts()) : $post_query -> the_post(); ?>
                        <!-- スライド -->
                        <div class="swiper-slide swiper-blog__slide">
                            <a href="<?php the_permalink(); ?>">
                                <?php if(has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail("", array("class" => "swiper-blog__img")); ?>
                                <?php else: ?>
                                    <img class="swiper-blog__img" src="<?php echo get_template_directory_uri(); ?>/assets/image/blog/no-image.jpg" alt="no imageの画像">
                                <?php endif; ?>
                                <div class="swiper-blog__unit">
                                    <p class="swiper-blog__date"><?php the_time('Y.m.d'); ?></p>
                                    <p class="swiper-blog__category">
                                        <?php
                                            $terms = get_the_terms($post->ID, 'genre');
                                            foreach($terms as $term):
                                            echo $term->name;
                                            endforeach;
                                        ?>
                                    </p>
                                </div>
                                <p class="swiper-blog__txt"><?php the_title(); ?></p>
                            </a>
                        </div>
                        <!-- ↑スライド -->
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                        <h2>記事がありません</h2>
                    <?php endif; ?>
                    <!-- ↑ループ表示 ================== -->
                </div>
            </div>
            <!-- ↑ここまでスライダー本体 ================== -->
            <p class="blog__btn">
              <a href="<?php echo esc_url( get_home_url() ); ?>/archives/blog" class="blog__link">
                <span class="blog__letter readMoreLetter">READ MORE</span>
              </a>
            </p>
          </div>
        </section>
        <!-- member sec ===================================== -->
        <section id="member" class="member standardScroll">
          <div class="member__wrap">
            <div class="member__container">
            <h2 class="member__ttl">
                <span class="member__ttlLetter txtAnimationFadeUp" id="animationDelay1">M</span>
                <span class="member__ttlLetter txtAnimationFadeUp" id="animationDelay2">E</span>
                <span class="member__ttlLetter txtAnimationFadeUp" id="animationDelay3">M</span>
                <span class="member__ttlLetter txtAnimationFadeUp" id="animationDelay4">B</span>
                <span class="member__ttlLetter txtAnimationFadeUp" id="animationDelay5">E</span>
                <span class="member__ttlLetter txtAnimationFadeUp" id="animationDelay6">R</span>
            </h2>
                <p class="member__sub fadeUp">メンバー</p>
                <div class="member__bg">
                    <div class="fadeUp">
                        <div class="member__bg-pic"></div>
                    </div>
                    <div class="member__bg-plant"></div>
                </div>
                <p class="member__txt fadeUp">個性あるマーベリックスの仲間をご紹介します！</p>
                <p class="member__btn">
                <a href="#" class="member__link">
                  <span class="member__letter readMoreLetter">READ MORE</span>
                </a>
              </p>
            </div>
          </div>
        </section>
        <!-- テキストループアニメーション ===================================== -->
        <div id="loop" class="loop__wrap standardScroll">
          <p class="loop__txt1"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/top/member_mvs-txt.svg" alt="MVSテキスト" class="loop__img"></p>
          <p class="loop__txt2"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/top/member_mvs-txt.svg" alt="MVSテキスト" class="loop__img"></p>
        </div>
        <!-- バナー ===================================== -->
        <div id="banner" class="banner__wrap standardScroll">
          <a href="#" class="banner__link">
            <picture class="banner__pic">
              <!-- PC用の画像 -->
              <source media="(min-width: 1024px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/image/top/banner-pc.jpg">
              <!-- TAB用の画像 -->
              <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/image/top/banner-pc.jpg">
              <!-- スマホ用とデフォルト設定 -->
              <img src="<?php echo get_template_directory_uri(); ?>/assets/image/top/banner-sp.jpg" alt="スマホ用バナー" class="banner__img">
            </picture>
          </a>
        </div>
        <!-- news sec ===================================== -->
        <section id="news" class="news standardScroll">
          <div class="news__wrap">
            <div class="news__unit">
            <h2 class="news__ttl">
                <span class="news__ttlLetter txtAnimationFadeUp" id="animationDelay1">N</span>
                <span class="news__ttlLetter txtAnimationFadeUp" id="animationDelay2">E</span>
                <span class="news__ttlLetter txtAnimationFadeUp" id="animationDelay3">W</span>
                <span class="news__ttlLetter txtAnimationFadeUp" id="animationDelay4">S</span>
            </h2>
              <p class="news__sub fadeUp">ニュース</p>
              <p class="news__btn">
                <a href="#" class="news__link">
                  <span class="news__letter readMoreLetter">READ MORE</span>
                </a>
              </p>
            </div>
            <div class="news__container fadeUp">
              <div class="news__box">
                <a href="#" class="news__link-ttl">
                  <p class="news__date">2022.05.01</p>
                  <p class="news__txt">ホームページをリニューアルしました</p>
                </a>
              </div>
              <div class="news__box">
                <a href="#" class="news__link-ttl">
                  <p class="news__date">2022.05.01</p>
                  <p class="news__txt">ホームページをリニューアルしました</p>
                </a>
              </div>
              <div class="news__box">
                <a href="#" class="news__link-ttl">
                  <p class="news__date">2022.05.01</p>
                  <p class="news__txt">ホームページをリニューアルしました</p>
                </a>
              </div>
            </div>
          </div>
        </section>
      </div>
    </main>
<?php get_footer(); ?>