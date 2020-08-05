<?php get_header(); ?>
    <div class="mainWrap headerMargin_other">
      <p>
        <?php the_archive_title(); ?>のフリーフォントの一覧です。
      </p>

      <article>

        <ul class="mainFlex">

          <?php
            if ( have_posts() ) :
              while ( have_posts() ) : the_post();
            ?>

            <li>
              <a href="<?php the_permalink( $post ); ?>">
                <dl>
                  <dt><img src="<?php the_post_thumbnail_url('full'); ?>" alt=""></dt>
                  <dd><?php the_title(); ?></dd>
                  <dd><?php echo $cat_name; ?></dd>

                  <dd>商用：
                    <?php if(has_tag('商用利用可')==true) : ?>
                      ○
                    <?php else : ?>
                      ×
                    <?php endif; ?>
                  </dd>

                </dl>
              </a>
            </li>
            <?php
                endwhile;
            endif;
            ?>
        </ul>

      </article>
    </div>
    <?php get_footer(); ?>
