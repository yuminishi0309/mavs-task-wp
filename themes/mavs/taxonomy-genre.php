<?php get_header(); ?>

<!-- カテゴリ投稿一覧ページ -->
<main id="blog">
  <div class="wrapper">
    <!-- 全体bg ===================================== -->
    <div class="mainBg">
      <p class="mainBg-bg"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/top/about_bg.png" alt="グラデーション背景画像" class="mainBg__img"></p>
    </div>
    <!-- blogList sec ===================================== -->
    <section class="blogList">
      <div class="blogList__wrap">
        <h2 class="blogList__ttl">BLOG</h2>
        <p class="blogList__sub">ブログ</p>
        <!-- ↓カテゴリページのみ - 現在のカテゴリ表示 *************************************** -->
        <div class="blogList__group">
          <p class="blogList__heading">CATEGORY</p>
          <p class="blogList__content"><?php single_cat_title(); ?></p>
        </div>
        <!-- ↑カテゴリページのみ*************************************** -->
        <p id="blogListMenu" class="blogList__menu">CATEGORY</p>
        <nav id="blogListNav" class="blogListNav">
          <ul class="blogListNav__ul">
            <?php
            $terms = get_terms('genre');
            foreach ($terms as $term) {
                echo '<li class="blogListNav__list"><a class="blogListNav__link" href="' . get_term_link($term) . '">' . $term->name . '</a></li>';
            }
            ?>
            <li class="blogListNav__list"><a href="<?php echo esc_url( get_home_url() ); ?>/archives/blog" class="blogListNav__link">ALL</a></li>
          </ul>
        </nav>
      </div>

      <!-- ↓ループ表示  =================== -->
      <div class="blogList__container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <!-- ループさせるコンテンツ -->
          <div class="blogList__box">
            <a class="category-link" href="<?php the_permalink(); ?>">
              <!-- サムネイル表示 -->
              <?php if(has_post_thumbnail()): ?>
                  <p  class="blogList__pic"><?php the_post_thumbnail("", array("class" => "blogList__img")); ?></p>
              <?php else: ?>
                  <p class="blogList__pic"><img class="blogList__img" src="<?php echo get_template_directory_uri(); ?>/assets/image/blog/no-image.jpg" alt="no imageの画像"></p>
              <?php endif; ?>
              <div class="blogList__inner">
                <div class="blogList__unit">
                  <p class="blogList__date"><?php the_time('Y.m.d'); ?></p>
                  <p class="blogList__category">
                    <?php
                      $terms = get_the_terms($post->ID, 'genre');
                      foreach($terms as $term):
                      echo $term->name;
                      endforeach;
                    ?>
                  </p>
                </div>
                <p class="blogList__txt"><?php the_title(); ?></p>
              </div>
            </a>
          </div>
        <?php endwhile; ?>
      </div>
          <!-- ページネーション wp-pagenavi -->
          <?php
              if( function_exists('wp_pagenavi') ) {
                wp_pagenavi(array('query' => $wp_query));
              }
          ?>
          <!-- ↑ ページネーション wp-pagenavi ここまで -->
      <? endif; wp_reset_postdata(); ?>
      <!-- ↑ループ表示  =================== -->
    </section>
  </div>
</main>

<?php get_footer(); ?>