<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

</div><!-- #main -->
<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="widget-area">
        <aside id="footer-tg-logo" class="widget">
            <p><img src="<?php echo get_stylesheet_directory_uri(); ?>/Images/tg-logo-footer.png" alt=""/>
            Tanaguru</p>
            <div> <?php _e('Select your language', 'wwwtg'); ?> :
            <?php get_sidebar( 'main' ); ?></div>
        </aside>
        <aside id="footer-tg" class="widget">
            <h2>Tanaguru</h2>
            <ul>
                <li>
                    <a href="" title="<?php _e('Technology link title', 'wwwtg'); ?>"><?php _e('Technology link text', 'wwwtg'); ?></a>
                </li>
                <li>
                    <a href="" title="<?php _e('Tour link title', 'wwwtg'); ?>"><?php _e('Tour link text', 'wwwtg'); ?></a>
                </li>
                <li>
                    <a href="" title="<?php _e('Offer link title', 'wwwtg'); ?>"><?php _e('Offer link text', 'wwwtg'); ?></a>
                </li>
                <li>
                    <a href="" title="<?php _e('Contact link title', 'wwwtg'); ?>">Contact</a>
                </li>
                <li>
                    <a href="" title="<?php _e('Blog link title', 'wwwtg'); ?>">Blog</a>
                </li>
            </ul>
        </aside>
        <aside id="footer-and-also" class="widget">
            <h2><?php _e('And also', 'wwwtg'); ?></h2>
            <ul>
                <li>
                    <a href="<?php _e('KBAccess URL', 'wwwtg'); ?>" title="<?php _e('KBAccess link title', 'wwwtg'); ?>">KBAccess</a>
                </li>
                <li>
                    <a href="<?php _e('Contrast-Finder URL', 'wwwtg'); ?>" title="<?php _e('Contrast-Finder link title', 'wwwtg'); ?>">Contrast-Finder</a>
                </li>
                <li>
                    <a href="<?php _e('Observatory URL', 'wwwtg'); ?>"><?php _e('Observatory link text', 'wwwtg'); ?></a>
                </li>
                <li>
                    <a href="<?php _e('Open-S URL', 'wwwtg'); ?>">Open-S</a>
                </li>
                <li>
                    <a href="<?php _e('Press link', 'wwwtg'); ?>"><?php _e('Press link text', 'wwwtg'); ?></a>
                </li>
            </ul>
        </aside>
        <aside  id="footer-social" class="widget">
            <h2 class="screen-reader-text"><?php _e('Social Tanaguru', 'wwwtg'); ?></h2>
            <p>
                <a href="<?php _e('Twitter link', 'wwwtg'); ?>" title="<?php _e('Twitter link title', 'wwwtg'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/Images/Social/twitter.png" alt="<?php _e('Tanaguru on Twitter', 'wwwtg'); ?>" /></a>
                <a href="<?php _e('Github link', 'wwwtg'); ?>" title="<?php _e('Github link title', 'wwwtg'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/Images/Social/github.png" alt="<?php _e('Tanaguru on Github', 'wwwtg'); ?>" /></a> 
                <a href="<?php _e('Linkedin link', 'wwwtg'); ?>" title="<?php _e('Linkedin link title', 'wwwtg'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/Images/Social/linkedin.png" alt="<?php _e('Tanaguru on Linkedin', 'wwwtg'); ?>" /></a>
                <a href="<?php _e('Slideshare link', 'wwwtg'); ?>" title="<?php _e('Slideshare link title', 'wwwtg'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/Images/Social/slideshare.png" alt="<?php _e('Tanaguru on Slideshare', 'wwwtg'); ?>" /></a>
                <a href="<?php _e('Ohloh link', 'wwwtg'); ?>" title="<?php _e('Ohloh link title', 'wwwtg'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/Images/Social/ohloh.png" alt="<?php _e('Tanaguru on Ohloh', 'wwwtg'); ?>" /></a>
            </p>


        </aside>
    </div><!-- /widget-area -->

    <p id="footer2-1"><?php _e('Tanaguru free software by Open-S', 'wwwtg'); ?></p>
    <p id="footer2-2">
        <a href="<?php _e('Legal link', 'wwwtg'); ?>"><?php _e('Legal text link', 'wwwtg'); ?></a> | 
        <a href="<?php _e('Credits link', 'wwwtg'); ?>"><?php _e('Credits text link', 'wwwtg'); ?></a> |
        <a href="<?php _e('Accessibility link', 'wwwtg'); ?>"><?php _e('Accessibility text link', 'wwwtg'); ?></a>
    </p>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>