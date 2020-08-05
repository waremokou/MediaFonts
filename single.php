<?php get_header(); ?>
    <div class="mainWrap headerMargin_other">
      <article class="blogMain">

        <?php
        if ( have_posts() ) :
          while ( have_posts() ) : the_post();
        ?>

        <?php
          //カテゴリー取得
          $category = get_the_category();
          $cat_name = $category[0]->cat_name;
          $cat_id = $category[0]->cat_ID;
          $cat_link = get_category_link($cat_id);
        ?>

        <h2><?php the_title(); ?></h2>

        <div class="blogMain_tag">
          <ul>
            <li><a href="<?php echo $cat_link; ?>"><?php echo $cat_name; ?></a></li>
            <?php if(has_tag('商用利用可')==true) : ?>
              <?php
              $tag = get_term_by('name', '商用利用可', 'post_tag');
              $tag_id = $tag->term_id;
              $tag_link = get_category_link($tag_id);
              ?>
              <li><a href="<?php echo $tag_link; ?>">商用利用可</a></li>
            <?php endif; ?>
          </ul>
        </div>
        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="" class="blogMain_image">
        <?php the_content(); ?>
        <p>(配布ページより引用)</p>
        配布URL：<a href="<?php echo the_field('url'); ?>" target="_blank" class="blogMain_link"><?php echo the_field('site_title'); ?></a><br>
        制作者：<?php echo the_field('host'); ?><br>
        <div class="blogMain_share">
          <a href="https://twitter.com/share?url=<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>&text=<?php get_template_part('front', 'pagetitle'); ?>" rel="nofollow" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/common/img/share/twitter.svg" alt=""></a>
          <a href="http://www.facebook.com/share.php?u=<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" rel="nofollow" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/common/img/share/facebook.svg" alt=""></a>
        </div>

        <?php
            endwhile;
        endif;
        ?>
      </article>
    </div>
    <?php get_footer(); ?>
