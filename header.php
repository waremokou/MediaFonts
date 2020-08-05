<!--
記事追加


-->

<!DOCTYPE html>
<html lang="en">
  <head>

    <?php get_template_part('front', 'meta'); ?>

    <script src="<?php bloginfo('template_directory'); ?>/common/js/import.js"></script>
    <link href="<?php bloginfo('template_directory'); ?>/common/css/import.css" rel="stylesheet">
    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico">

  <?php wp_deregister_script('jquery'); ?>
  <?php wp_head(); ?>
  </head>
  <body>
    <div class="stripeLine headerFix">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>

	  <header>
      <div>
        <h1>
          <a href="<?php echo home_url() ?>"><img src="<?php bloginfo('template_directory'); ?>/common/img/main/logo.png" alt="「わたしのすきなフリーフォントたち」のロゴ"></a>
        </h1>

        <nav>
          <a href="https://twitter.com/share?url=<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>&text=<?php get_template_part('front', 'pagetitle'); ?>" rel="nofollow" target="_blank"><i class="fab fa-twitter-square"></i></a>
          <a href="http://www.facebook.com/share.php?u=<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" rel="nofollow" target="_blank"><i class="fab fa-facebook-square"></i></a>

          <p>
            <a href="<?php echo get_page_link( 5 ); ?>">お問い合わせ</a>
          </p>
          <div class="hamburger">
            <span></span>
          </div>
          <ul>
            <?php
              $categories = get_categories();
              foreach($categories as $category) {
              echo '<li><a href="'.get_category_link($category->term_id).'">'.$category->name.'</a></li>';
              }
            ?>
            <?php
              $tag = get_term_by('name', '商用利用可', 'post_tag');
              $tag_id = $tag->term_id;
              $tag_link = get_category_link($tag_id);
            ?>
            <li><a href="<?php echo $tag_link; ?>">商用利用可</a></li>
          </ul>
        </nav>
      </div>
    </header>
