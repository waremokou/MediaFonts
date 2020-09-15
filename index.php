<?php get_header(); ?>
    <div class="indexHeader headerMargin_index">
      <div class="indexHeader_square"></div>
      <p>
        わたしのすきな<br>
        フリーフォントたち
      </p>
    </div>

    <div class="mainWrap">
      <p>
        デザイナーにとって欠かせないフォント。<br>
        そんなフォントの中でも無料でダウンロードできるフリーフォントをピックアップしてまとめました。
      </p>

      <article>

        <ul class="mainFlex">

          <?php
            if ( have_posts() ) :
              while ( have_posts() ) : the_post();
            ?>

            <?php
              $category = get_the_category();
              $cat_name = $category[0]->cat_name;
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

      <?php wp_pagenavi(); ?>
      </article>
    </div>
<?php get_footer(); ?>
