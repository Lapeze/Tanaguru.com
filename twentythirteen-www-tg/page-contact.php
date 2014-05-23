<?php
/*
  Template Name: Contact
 */

get_header();
?>

<div>
    <?php /* The loop */ ?>
    <?php while (have_posts()) : the_post(); ?>
    <div>
        <div id='page_title_gradient'>
            <div id="page_title_filter"></div>    
            <div id="page_title"><h1 class="entry-title"><?php the_title(); ?></h1></div>
        </div>
    </div>
        <?php the_content(); ?>
    <?php endwhile; ?>
</div>

<div id="evaluate"></div>

<?php get_footer(); ?>