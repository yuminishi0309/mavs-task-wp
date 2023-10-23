<?php //header("Cache-Control: no-cache"); ?>
<!DOCTYPE html>
<html lang="ja">
  <head>
  <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,user-scalable=yes" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="<%= description %>">
    <title><%= title %></title>
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <link rel="stylesheet" href="https://use.typekit.net/xwi4xof.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&family=Rajdhani:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.js"></script>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/common.css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet" />
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/favicon.ico" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
    <?php wp_head(); ?>
  </head>
  <body>
    <header class="c-header <?php if ( !is_home() && !is_front_page() ) : ?>-under<?php endif; ?>" id="js-header">
    </header>