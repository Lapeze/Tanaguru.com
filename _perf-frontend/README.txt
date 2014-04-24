

Roadmap
------------------------------------

1. plugin WPminify : concaténation fichier JS/CSS 

    1.a. Test plugin WPminify par Open-S                  => 8 requêtes HTTP en moins
            - aucune incidence sur autres sites WP ?
            - aucune fonctionnalité cassé ?

    1.b. Inclusion CSS thème parent via fichier less      => 1 requêtes HTTP en moins
    1.b. Inclusion CSS font google par surcharge HTML     => 1 requêtes HTTP en moins (si possible)
    
    
2. images optimisé
   => vérifier si le rendu est correcte (logiquement aucun pixel modifié)
   
3. solution pour images
   => sprites / lazyload
   
4. font => nécessaire d'utiliser les 5 polices ?




  
----------- Post-IT Technique    -----------------------------------------------------




I. Script JS intutile
<script src='http://wp.tanaguru.com/?dm=(...)
    plugin  "WordPress MU Domain Mapping"
    "remote login" feature ==> <script src='http://wp.tanaguru.com/?dm=(...)

    
--- Solution 1 : via config Wordpress Network Admin -----------------------
Disable Remote Login. That should remove this script from being added. 

    ///////////////////////////////////////////////////
    In Network Admin > Settings > Domain Mapping > Domain Options, 
    uncheck Remote Login. 
    ///////////////////////////////////////////////////
    source : https://kx.cloudingenium.com/technologies/wordpress/wordpress-multisite-remove-render-blocking-javascript/
    
--- Solution 2 : via function.php -----------------------

    ///////////////////////////////////////////////////
    * Remove unwanted  JS script 
    * 1. <script src='http://wp.tanaguru.com/?dm=(...)
    *        plugin  "WordPress MU Domain Mapping"
    *        "remote login" feature ==> <script src='http://wp.tanaguru.com/?dm=(...)
    */
    add_action('wp_loaded', 'remove_unwanted_js');
    function remove_unwanted_js(){
        remove_action( 'wp_head', 'remote_login_js_loader' );
    }
    ///////////////////////////////////////////////////
    source : 
        http://wordpress.org/support/topic/plugin-wordpress-mu-domain-mapping-domain-mapping-javascript
        http://wordpress.stackexchange.com/questions/32000/odd-script-file-trying-to-be-loaded
        
        
        
II.  Suppression des scripts et du CSS du thème parent

    source :     
    http://www.acs04.fr/wordpress-modifier-comportement-theme-parent/
    http://bulledev.com/desactiver-scripts-css-extensions-wordpress/
    ///////////////////////////////////////////////////
    // functions.php du thème PARENT 
    add_action( 'wp_print_scripts', 'parent_scripts' );
    add_action( 'wp_print_styles', 'parent_styles' );
    function parent_scripts() {
        wp_enqueue_script( 'fancybox-parent-js', get_stylesheet_directory_uri() . '/fancybox/jquery.fancybox.pack.js' );
    } 
    function parent_styles() {
        wp_enqueue_style( 'fancybox-parent-css', get_stylesheet_directory_uri() . '/fancybox/jquery.fancybox.css' );
    }   
    ///////////////////////////////////////////////////
    // functions.php du thème ENFANT
    add_action( 'wp_print_scripts', 'child_overwrite_scripts', 100 );
    add_action( 'wp_print_styles', 'child_overwrite_styles', 100 );
    function child_overwrite_scripts() {
        wp_deregister_script( 'fancybox-parent-js' );
    }
    function child_overwrite_styles() {
        wp_deregister_style( 'fancybox-parent-css' );
    }
    ///////////////////////////////////////////////////

    
III. Nettoyer le contenu de wp_head() de WordPress

    source : 
        http://www.mwanoz.fr/nettoyer-le-contenu-de-wp_head-sur-wordpress/2/
        http://www.revue-hebergement-web.com/tutoriels/Wordpress/Supprimer_codes_inutiles_dans_wphead/
        
    //////////////////////////////////////////////
    /**
    * On supprime les fonctions inutiles de l'entête
    */
    function clean_head() {
        remove_action('wp_head', 'feed_links', 2); // Affiche les liens des flux RSS pour les Articles et les commentaires.
        remove_action('wp_head', 'feed_links_extra', 3); // Affiche les liens des flux RSS supplémentaires comme les catégories de vos articles.
        remove_action('wp_head', 'rsd_link'); // Affiche le lien RSD (Really Simple Discovery). Je ne l'ai jamais utilisé mais si vous êtes certain d'en avoir besoin, laissez-le.
        remove_action('wp_head', 'wlwmanifest_link'); // Affiche le lien xml dont a besoin Windows Live Writer pour accéder à votre blog. Si vous ne publiez pas vos articles avec ce logiciel, il ne vous sert à rien.
        remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0); // Affiche les liens relatifs vers les articles suivants et précédents. (<kbd>      <link title=" href=" rel="prev" /></kbd> et <kbd>       <link title="" href=""" rel="next" /></kbd>). Ces liens peuvent parfois affecter votre SEO.
        remove_action('wp_head', 'wp_generator'); // Affiche la meta qui indique la version de WordPress que vous utilisez. Je vous recommande de la retirer. Vous n'avez pas envie de faciliter le travail de personnes malveillantes qui souhaitent hacker votre site en utilisant des failles liées à certaines version de WordPress. Même si il y a très peu de grosses failles, c'est un poil plus "secure".
        remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0); // Affiche l'url raccourcie de la page ou vous vous situez.

        /**
        * On en profite pour supprimer le style en trop ajouté par le widget "Commentaires récents"
        */
        global $wp_widget_factory;
        remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
    } // End clean_head()
    add_action('init', 'clean_head');
    //////////////////////////////////////////////