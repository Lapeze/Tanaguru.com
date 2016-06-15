<?php

/*
 * i18n
 */
add_action('after_setup_theme', 'my_theme_setup');

function my_theme_setup() {
    load_theme_textdomain('blogtg', get_stylesheet_directory() . '/languages');
}

function comments_popup_link_custom( $zero = false, $one = false, $more = false, $css_class = '', $none = false ) {
	$id = get_the_ID();
	$title = get_the_title();
	$number = get_comments_number( $id );

	if ( false === $zero ) {
		/* translators: %s: post title */
		$zero = sprintf( __( 'No Comments<span class="screen-reader-text"> on %s</span>' ), $title );
	}

	if ( false === $one ) {
		/* translators: %s: post title */
		$one = sprintf( __( '1 Comment<span class="screen-reader-text"> on %s</span>' ), $title );
	}

	if ( false === $more ) {
		/* translators: 1: Number of comments 2: post title */
		$more = _n( '%1$s Comment<span class="screen-reader-text"> on %2$s</span>', '%1$s Comments<span class="screen-reader-text"> on %2$s</span>', $number );
		$more = sprintf( $more, number_format_i18n( $number ), $title );
	}

	if ( false === $none ) {
		/* translators: %s: post title */
		$none = sprintf( __( 'Comments Off<span class="screen-reader-text"> on %s</span>' ), $title );
	}

	if ( 0 == $number && !comments_open() && !pings_open() ) {
		echo '<span' . ((!empty($css_class)) ? ' class="' . esc_attr( $css_class ) . '"' : '') . '>' . $none . '</span>';
		return;
	}

	if ( post_password_required() ) {
		_e( 'Enter your password to view comments.' );
		return;
	}

	echo '<span';
	
	echo '"';

	if ( !empty( $css_class ) ) {
		echo ' class="'.$css_class.'" ';
	}

	/**
	 * Filter the comments link attributes for display.
	 *
	 * @since 2.5.0
	 *
	 * @param string $attributes The comments link attributes. Default empty.
	 */
	echo apply_filters( 'comments_popup_link_attributes', $attributes );

	echo '>';
	comments_number( $zero, $one, $more );
	echo '</span>';
}