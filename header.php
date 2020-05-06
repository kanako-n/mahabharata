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
    <section class="hero">
        <div class="hero__inner">
            <p class="hero__caption"><?php bloginfo('description'); ?></p>
            <h1 class="hero__title"><?php bloginfo('name'); ?></h1>
            <div class="hero__info">
                <p class="hero__schedule">
                    2020年7月4日〜7日<br>
                    中野ZERO大ホール
                </p>
                <p class="hero__detail">
                    小池博史ブリッジプロジェクトが2013年から2020年までの8カ年計画で臨む、インド古代叙事詩「マハーバーラタ」の全編舞台作品化計画。いよいよその集大成である完全版マハーバーラタの公演が決定！！<br>
                    アジア各国のアーティストらが共同で取り組み、発展を遂げる本事業はアジア、そして世界へ向けてビッグウェーブを起こす。タイと日本から世界へと発信する本作。どうぞお見逃しなく！
                </p>
            </div>
            <!-- /.heroinfo -->
            <a class="hero__btn btn--large btn--red" href="#">チケット予約サイトへ</a>
        </div>
        <!-- /.hero__inner -->
    </section>
<?php endif; ?>