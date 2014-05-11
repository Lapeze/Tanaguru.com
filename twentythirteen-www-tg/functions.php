<?php

/*
 * i18n
 */
add_action('after_setup_theme', 'my_theme_setup');

function my_theme_setup() {
    load_theme_textdomain('wwwtg', get_stylesheet_directory() . '/languages');
}

/*
 * Remove or add CSS files
 */
add_action('wp_print_styles', 'child_overwrite_styles', 100);

function child_overwrite_styles() {
    // Remove the CSS file GoogleFonts 
    wp_dequeue_style('twentythirteen-fonts');           // Remove a CSS file that was enqueued with wp_enqueue_style().
    wp_deregister_style('twentythirteen-fonts');     // Remove a CSS file that was registered with wp_register_style().  
    // Remove CSS from Contact-Form-7 if not on page Contact
    if (!is_page('Contact')) {
        wp_deregister_style('contact-form-7');
    }
}

/*
 * Remove or add Javascript files
 */
add_action('wp_print_scripts', 'child_overwrite_scripts', 100);

function child_overwrite_scripts() {
    // Remove JS from parent theme
    if (!is_admin()) {
        wp_dequeue_script('jquery-masonry');
    }
    // Remove JS from Contact-Form-7 if not on page Contact
    if (!is_page('Contact')) {
        wp_deregister_script('contact-form-7');
    }
}
