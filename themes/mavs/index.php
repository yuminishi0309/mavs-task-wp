<?php get_header(); ?>

    <main id="top">
      <div class="wrapper">
        <!-- mv ===================================== -->
        <div class="mv scroll">
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
                <!-- 画像お試しパス -->
              <p class="mv__iconImg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/top/icon-img.svg" alt="山のアイコン" class="mv__img"></p>
              <p class="mv__iconTxt"><img src="assets/image/top/icon-txt.svg" alt="アイコンテキスト" class="mv__img"></p>
            </div>
            <div class="mv__bg">
              <p class="mv__bg-wolf"><img src="assets/image/top/mv_wolf.png" alt="狼の顔" class="mv__img"></p>
              <div class="mv__bg-grey"></div>
              <div class="mv__bg-city"></div>
              <div class="mv__bg-plant"></div>
            </div>
          </div>
        </div>
        <!-- mv以降の全体bg ===================================== -->
        <div class="mainBg">
          <p class="mainBg-bg"><img src="assets/image/top/about_bg.png" alt="グラデーション背景画像" class="mainBg__img"></p>
        </div>
        <!-- about sec ===================================== -->
        <section id="about" class="about scroll">
          <div class="about__wrap">
            <h2 class="about__ttl">ABOUT</h2>
            <p class="about__txt">
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
              <h2 class="service__ttl">SERVICE</h2>
              <p class="service__sub">サービス</p>
              <p class="service__txt">マーベリックスは経験豊富なメンバーによるサイト制作やシステム開発を得意としています。さらに業務に柔軟に対応できる「リモートラボ」なら、お客様の開発を効率的に進めることができます。</p>
              <p class="service__btn">
                <a href="#" class="service__link">
                  <span class="service__letter readMoreLetter">READ MORE</span>
                </a>
              </p>
            </div>
            <div class="service__pic"></div>
          </div>
        </section>
        <!-- blog sec ===================================== -->
        <section id="blog" class="blog standardScroll">
          <div class="blog__wrap">
            <h2 class="blog__ttl">BLOG</h2>
            <p class="blog__sub">ブログ</p>
            <!-- スライダー本体 -->
            <div class="swiper swiper-blog">
              <div class="swiper-wrapper swiper-blog__wrapper">
                <div class="swiper-slide swiper-blog__slide">
                  <p class="swiper-blog__pic"><img src="./assets/image/top/blog_img.jpg" alt="ブログ内容写真" class="swiper-blog__img"></p>
                  <div class="swiper-blog__unit">
                    <p class="swiper-blog__date">2023.09.23</p>
                    <p class="swiper-blog__category">CATEGORY</p>
                  </div>
                  <p class="swiper-blog__txt">ここにブログタイトルが入ります。タイトルタイトルタイトル</p>
                </div>
                <div class="swiper-slide swiper-blog__slide">
                  <p class="swiper-blog__pic"><img src="./assets/image/top/blog_img.jpg" alt="ブログ内容写真" class="swiper-blog__img"></p>
                  <div class="swiper-blog__unit">
                    <p class="swiper-blog__date">2023.09.23</p>
                    <p class="swiper-blog__category">CATEGORY</p>
                  </div>
                  <p class="swiper-blog__txt">ここにブログタイトルが入ります。ここにブログタイトルが入ります。</p>
                </div>
                <div class="swiper-slide swiper-blog__slide">
                  <p class="swiper-blog__pic"><img src="./assets/image/top/blog_img.jpg" alt="ブログ内容写真" class="swiper-blog__img"></p>
                  <div class="swiper-blog__unit">
                    <p class="swiper-blog__date">2023.09.23</p>
                    <p class="swiper-blog__category">CATEGORY</p>
                  </div>
                  <p class="swiper-blog__txt">ここにブログタイトルが入ります。</p>
                </div>
                <div class="swiper-slide swiper-blog__slide">
                  <p class="swiper-blog__pic"><img src="./assets/image/top/blog_img.jpg" alt="ブログ内容写真" class="swiper-blog__img"></p>
                  <div class="swiper-blog__unit">
                    <p class="swiper-blog__date">2023.09.23</p>
                    <p class="swiper-blog__category">CATEGORY</p>
                  </div>
                  <p class="swiper-blog__txt">ここにブログタイトルが入ります。タイトルタイトル</p>
                </div>
              </div>
            </div>
            <!-- ↑ここまでスライダー -->
            <p class="blog__btn">
              <a href="blog.html" class="blog__link">
                <span class="blog__letter readMoreLetter">READ MORE</span>
              </a>
            </p>
          </div>
        </section>
        <!-- member sec ===================================== -->
        <section id="member" class="member standardScroll">
          <div class="member__wrap">
            <div class="member__container">
              <h2 class="member__ttl">MEMBER</h2>
              <p class="member__sub">メンバー</p>
              <div class="member__bg">
                <div class="member__bg-pic"></div>
                <div class="member__bg-plant"></div>
              </div>
              <p class="member__txt">個性あるマーベリックスの仲間をご紹介します！</p>
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
          <p class="loop__txt1"><img src="assets/image/top/member_mvs-txt.svg" alt="MVSテキスト" class="loop__img"></p>
          <p class="loop__txt2"><img src="assets/image/top/member_mvs-txt.svg" alt="MVSテキスト" class="loop__img"></p>
        </div>
        <!-- バナー ===================================== -->
        <div id="banner" class="banner__wrap standardScroll">
          <a href="#" class="banner__link">
            <picture class="banner__pic">
              <!-- PC用の画像 -->
              <source media="(min-width: 1024px)" srcset="assets/image/top/banner-pc.jpg">
              <!-- TAB用の画像 -->
              <source media="(min-width: 768px)" srcset="assets/image/top/banner-pc.jpg">
              <!-- スマホ用とデフォルト設定 -->
              <img src="assets/image/top/banner-sp.jpg" alt="スマホ用バナー" class="banner__img">
            </picture>
          </a>
        </div>
        <!-- news sec ===================================== -->
        <section id="news" class="news standardScroll">
          <div class="news__wrap">
            <div class="news__unit">
              <h2 class="news__ttl">NEWS</h2>
              <p class="news__sub">ニュース</p>
              <p class="news__btn">
                <a href="#" class="news__link">
                  <span class="news__letter readMoreLetter">READ MORE</span>
                </a>
              </p>
            </div>
            <div class="news__container">
              <div class="news__box">
                <a href="#" class="news__link">
                  <p class="news__date">2022.05.01</p>
                  <p class="news__txt">ホームページをリニューアルしました</p>
                </a>
              </div>
              <div class="news__box">
                <a href="#" class="news__link">
                  <p class="news__date">2022.05.01</p>
                  <p class="news__txt">ホームページをリニューアルしました</p>
                </a>
              </div>
              <div class="news__box">
                <a href="#" class="news__link">
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