<?php get_header(); ?>

<!-- 個別投稿ページ -->
    <main id="blogSingle">
      <div class="wrapper">
        <!-- 全体bg ===================================== -->
        <div class="mainBg">
          <p class="mainBg-bg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/top/about_bg.png" alt="グラデーション背景画像" class="mainBg__img"></p>
        </div>
        <!-- blogSingle sec ===================================== -->
        <section class="blogSingle">
          <h2 class="blogSingle__ttl">BLOG</h2>
          <p class="blogSingle__sub">ブログ</p>
          <div class="blogSingle__container">
            <div class="blogSingle__box">
              <!-- カスタム投稿記事 -->
              <?php if(have_posts()): while(have_posts()): the_post(); ?>
                <div class="blogSingle__unit">
                  <p class="blogSingle__date"><?php the_time("Y.m.d"); ?></p>
                  <p class="blogSingle__category">
                    <?php
                      $terms = get_the_terms($post->ID, 'genre');
                      foreach($terms as $term):
                      echo $term->name;
                      endforeach;
                    ?>
                  </p>
                </div>
                <p class="blogSingle__heading"><?php the_title(); ?></p>

                <?php if(has_post_thumbnail()): ?>
                  <?php the_post_thumbnail("", array("class" => "blogSingle__img")); ?>
                <?php else: ?>
                  <img class="swiper-blog__img" src="<?php echo get_template_directory_uri(); ?>/assets/image/blog/no-image.jpg" alt="no imageの画像">
                <?php endif; ?>

                <p class="blogSingle__txt"><?php the_content(); ?></p>

              <?php endwhile; ?>
              <?php else: ?>
                <p>記事が見つかりませんでした</p>
              <?php endif; ?>
              
            <!-- ページリンクナビ -->
            <ul class="blogSingle__nav">
              <?php previous_post_link('%link', '&larr;　PREV'); ?>
              <?php next_post_link('%link', 'NEXT　&rarr;'); ?>
            </ul>
          </div>
        </section>
      </div>
    </main>

<?php get_footer(); ?>