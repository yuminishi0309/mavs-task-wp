<?php get_header(); ?>

<main id="contactComplete">
  <div class="wrapper">
    <!-- 全体bg ===================================== -->
    <div class="mainBg">
      <p class="mainBg-bg"><img src="assets/image/top/about_bg.png" alt="グラデーション背景画像" class="mainBg__img"></p>
    </div>
    <!-- section ===================================== -->
    <section class="contactComplete">
      <section class="contactComplete">
      <h2 class="contactComplete__ttl">COMPLETE</h2>
      <p class="contactComplete__sub">お問い合わせ完了</p>
      <div class="contactComplete__container">
        <p class="contactComplete__txt">お問い合わせ頂きありがとうございました。<br>
          担当よりご連絡致しますので、しばらくお待ち下さい。<br>
          2日営業日を過ぎても返信がない場合は、お手数ですがもう1度お問合せください。
        </p>
        <p class="contactComplete__btn">
          <a href="<?php echo esc_url( get_home_url() ); ?>" class="contactComplete__link">
            <span class="contactComplete__letter readMoreLetter" >トップページへ　&rarr;</span>
          </a>
        </p>   
      </div>
    </section>
  </div>
</main>

<?php get_footer(); ?>