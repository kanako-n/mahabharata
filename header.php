<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="header">
<?php
wp_nav_menu(
  array(
    'theme_location' => 'place_header',
    'container' => 'nav',
    'container_class' => 'header-nav',
    'menu_class' => 'header-nav__list',
    'link_before' => '<span>', 
    'link_after' => '</span>',
  )
);
?>
    </header>
<?php if( is_front_page() ): ?>
    <div class="jumbotron">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero-bg@2x.png">
    <div class="container"></div>
      <!-- /.container -->
    </div>
<?php endif; ?>