<?php bloginfo('name'); ?>
<?php if(!is_front_page()): ?>
｜
<?php if (is_single()) : ?>
<?php the_title(); ?>
<?php elseif (is_archive()): ?>
<?php the_archive_title(); ?>
<?php elseif (is_page()): ?>
<?php the_title(); ?>
<?php endif; ?>
<?php endif; ?>
