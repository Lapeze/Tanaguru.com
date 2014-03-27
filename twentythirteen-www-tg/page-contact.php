<?php
/*
  Template Name: Contact
 */

get_header();
?>

<div>
    <?php /* The loop */ ?>
    <?php while (have_posts()) : the_post(); ?>
    <div id="page_title"><h1 class="entry-title"><?php the_title(); ?></h1></div>
        <?php the_content(); ?>
    <?php endwhile; ?>
</div>

<section id="evaluate"></section>

<?php get_footer(); ?>