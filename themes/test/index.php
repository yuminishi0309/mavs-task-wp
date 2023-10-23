<?php get_header(); ?>

<main class="topMain c-main">
  <section class="topMv">
    <div class="topMv_wrap">
    </div>
  </section>
  <section class="topContents">
    <div class="topContents_wrap">
      <div class="topContents_title">
        <h2>タイトルだよ</h2>
      </div>
      <p class="topContents_text">テキスト</p>
      <div class="c-link"><a href="about.html">会社概要ページへ</a></div>
    </div>
  </section>
  <section class="topImages">
    <div class="topImages_wrap">
      <p>JPG</p>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/image/morning.jpg" alt="">
      <p>PNG</p>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/image/fashion.png" alt="">
      <p>SVG</p>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/image/car.svg" alt="">
      <div class="parts">
        <div class="parts_wrap">
          <h2>タイトル</h2>
          <p><a href="">ボタン</a></p>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>