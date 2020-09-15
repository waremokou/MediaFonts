<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>
<?php get_template_part('front', 'pagetitle'); ?>
</title>

<meta name="description" content="わたしが好きなフリーフォントをたくさん紹介しています。明朝体、ゴシック体から手書き風まで、どれも素敵なフォントたちです。" />
<meta name="keywords" content="フォント,フリーフォント,デザイン" />

<meta property="og:title" content="<?php if(is_front_page()): ?>わたしのすきなフリーフォントたち<?php elseif (is_archive()): ?><?php the_archive_title(); ?><?php else: ?><?php the_title(); ?><?php endif; ?>" />
<meta property="og:type" content="<?php if(is_front_page()): ?>website<?php else: ?>article<?php endif; ?>" />
<meta property="og:url" content="<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>">
<meta property="og:image" content="<?php bloginfo('template_directory'); ?>/common/img/seo/img.jpg" />
<meta property="og:site_name" content="わたしのすきなフリーフォントたち" />
<meta property="og:description" content="わたしが好きなフリーフォントをたくさん紹介しています。明朝体、ゴシック体から手書き風まで、どれも素敵なフォントたちです。" />

<!--  Facebook用設定 -->
<!--<meta property="fb:admins" content="adminID（15文字の半角数字）" />-->

<!-- ※ Twitter共通設定 -->
<meta name="twitter:card" content="summary_large_image" />
