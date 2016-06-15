<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-header">
		<?php if ( has_post_thumbnail() && ! post_password_required() && ! is_attachment() ) : ?>
		<div class="entry-thumbnail">
			<?php the_post_thumbnail(); ?>
		</div>
		<?php endif; ?>

		<?php if ( is_single() ) : ?>
		<h2 class="entry-title"><?php the_title(); ?></h2>
		<?php else : ?>
		<h2 class="entry-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h2>
		<?php endif; // is_single() ?>

		<div class="entry-meta">
			<?php twentythirteen_entry_meta(); ?>
			<span><?php comments_popup_link_custom( __('No comments yet', 'blogtg'), __('1 comment', 'blogtg'), __('% comments', 'blogtg')); ?></span>
			<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
		</div><!-- .entry-meta -->

	</div><!-- .entry-header -->

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->
	<?php endif; ?>
</li><!-- #post -->
