<?php get_header(); ?>
<div class="page-main">
    <?php
    if( have_posts() ):
        while( have_posts() ):the_post();
            the_content();
        endwhile;
    endif;
    ?>
</div>
<!-- /.page-main -->

<?php get_footer(); ?>