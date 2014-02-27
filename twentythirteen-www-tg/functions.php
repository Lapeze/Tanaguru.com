<?php
/*
 * i18n
 */
add_action('after_setup_theme', 'my_theme_setup');
function my_theme_setup(){
    // load_theme_textdomain('wwwtg', get_template_directory() . '-www-tg/languages');
    load_theme_textdomain('wwwtg', get_stylesheet_directory() . '/languages');
    
    
    
}
