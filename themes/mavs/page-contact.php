<?php get_header(); ?>

    <main id="contact">
      <div class="wrapper">
        <!-- 全体bg ===================================== -->
        <div class="mainBg">
          <p class="mainBg-bg"><img src="assets/image/top/about_bg.png" alt="グラデーション背景画像" class="mainBg__img"></p>
        </div>
        <!-- section ===================================== -->
        <section class="contact">
          <section class="contact">
            <h2 class="contact__ttl">CONTACT</h2>
            <p class="contact__sub">お問い合わせ</p>
            <div class="contact__container">
              <p class="contact__txt">株式会社マーベリックスへのお問い合わせページです。<br>
                プライバシーポリシーをご確認の上、お気軽にお問い合わせください。
              </p>
              <!-- フォーム -->
              <form id="ContactForm" class="form" action="#">
                <div class="form__box">
                  <label for="form__name" class="form__label form__bold form__required">お名前</label>
                  <input type="text" id="form__name" class="form__input" name="name" required placeholder="田中 太郎">
                </div>
                <div class="form__box">
                  <label for="form__company" class="form__label form__bold">会社名</label>
                  <input type="text" id="form__company" class="form__input" name="company">
                </div>
                <div class="form__box">
                  <label class="form__label form__bold form__required" for="form__email">メールアドレス</label>
                  <input type="email" id="form__email" class="form__input" name="email">
                </div>
                <div class="form__box">
                  <p class="form__txt form__bold">性別</p>
                  <div class="form__unit">
                    <label><input type="radio" name="sex" value="男性">男性</label>
                    <label><input type="radio" name="sex" value="女性">女性</label>
                  </div>
                </div>
                <div class="form__box">
                  <p class="form__txt form__bold">お問い合わせ種別</p>
                  <div class="form__group">
                    <label class="form__category"><input type="checkbox" name="category" value="制作依頼">ホームページの制作依頼</label>
                    <label class="form__category"><input type="checkbox" name="category" value="新規取引">新規お取引に関するお問い合わせ</label>
                    <label class="form__category"><input type="checkbox" name="category" value="採用">採用に関するお問い合わせ</label>
                  </div>
                </div>
                <div class="form__box">
                  <p class="form__txt form__bold">都合のいい時間帯</p>
                  <select name="time" id="form__time" class="form__time">
                    <option value="0" selected>午前中</option>
                    <option value="1">12:00〜14:00</option>
                    <option value="2">14:00〜16:00</option>
                    <option value="3">16:00〜18:00</option>
                    <option value="4">18:00〜20:00</option>
                  </select>
                </div>
                <div class="form__box">
                  <label class="form__label form__bold form__required" for="form__message">お問い合わせ内容</label>
                  <textarea name="message" id="form__message" cols="60" rows="6" class="form__textarea"></textarea>
                </div>
              </form>
              <!-- ↑フォーム -->
              <p class="contact__btn">
                <a href="contact_confirm.html" class="contact__link">
                  <span class="contact__letter readMoreLetter">内容確認　&rarr;</span>
                </a>
              </p>
            </div>
          </section>
      </div>
    </main>

<?php get_footer(); ?>