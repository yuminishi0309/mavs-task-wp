<?php get_header(); ?>

    <main id="contactConfirm">
      <div class="wrapper">
        <!-- 全体bg ===================================== -->
        <div class="mainBg">
          <p class="mainBg-bg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/top/about_bg.png" alt="グラデーション背景画像" class="mainBg__img"></p>
        </div>
        <!-- section ===================================== -->
        <section class="contactConfirm">
          <h2 class="contactConfirm__ttl">CONFIRM</h2>
          <p class="contactConfirm__sub">お問い合わせ内容確認</p>
          <div class="contactConfirm__container">
            <p class="contactConfirm__txt">内容に間違いがないかご確認をお願いします。</p>
            <table class="contactConfirm__table">
              <tr class="contactConfirm__tr">
                <td class="contactConfirm__td">お名前</td>
                <td class="contactConfirm__td">田中　太郎</td>
              </tr>
              <tr class="contactConfirm__tr">
                <td class="contactConfirm__td">会社名</td>
                <td class="contactConfirm__td">〇〇会社</td>
              </tr>
              <tr class="contactConfirm__tr">
                <td class="contactConfirm__td">メールアドレス</td>
                <td class="contactConfirm__td">xxxxxxxxxxx@gmail.com</td>
              </tr>
              <tr class="contactConfirm__tr">
                <td class="contactConfirm__td">性別</td>
                <td class="contactConfirm__td">男性</td>
              </tr>
              <tr class="contactConfirm__tr">
                <td class="contactConfirm__td">お問い合わせ種別</td>
                <td class="contactConfirm__td">ホームページの制作依頼,採用に関するお問い合わせ</td>
              </tr>
              <tr class="contactConfirm__tr">
                <td class="contactConfirm__td">都合のいい時間帯</td>
                <td class="contactConfirm__td">12:00〜14:00</td>
              </tr>
              <tr class="contactConfirm__tr">
                <td class="contactConfirm__td">お問い合わせ内容</td>
                <td class="contactConfirm__td">お問い合わせ内容のテキストが入ります<br>テキストテキスト</td>
              </tr>
            </table>
            <div class="contactConfirm__unit">
              <p class="contactConfirm__btn">
                <a href="<?php echo esc_url( get_home_url() ); ?>/contact" class="contactConfirm__link">
                  <span class="contactConfirm__letter readMoreLetter">&larr;　戻る</span>
                </a>
              </p>
              <p class="contactConfirm__btn">
                <a href="<?php echo esc_url( get_home_url() ); ?>/contact-complete" class="contactConfirm__link">
                  <span class="contactConfirm__letter readMoreLetter">送信する　&rarr;</span>
                </a>
              </p>
            </div>
          </div>
        </section>
      </div>
    </main>

<?php get_footer(); ?>