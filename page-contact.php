  <?php get_header(); ?>
    <div class="mainWrap headerMargin_other">
      <article class="contactMain">
        <h2>お問い合わせフォーム</h2>

          <?php
          if ( have_posts() ) :
            while ( have_posts() ) : the_post();
          ?>

            <?php the_content(); ?>

          <?php
              endwhile;
          endif;
          ?>
      </article>
    </div>
    <?php get_footer(); ?>
