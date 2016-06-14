<?php

/*
Template Name: References
*/

get_header(); ?>


<div id='page_title_gradient'>
    <div id="page_title_filter"></div>    
    <div id="page_title"><h1 class="entry-title"><?php the_title(); ?></h1></div>
</div>

<section id="references">

    <h2 class="center">
        <?php _e('References slogan subject', 'wwwtg'); ?> 
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAqCAMAAADCkShIAAABqlBMVEUAAADvO0LiJi3vO0LvO0LiJi3vO0LvO0LvO0LvO0LiJi3vO0LiJi3vO0LiJi3vO0LiJS3vO0LiJS3vO0LiJS3iJSzvO0LvO0LvO0LvO0LvO0LvO0LiJCzvO0LvO0LhJCzvO0LvO0LvO0LvO0LvO0LhJCvhIyvvO0LvO0LpMTjhIyvhIyvvO0LhIyvhIyrhIyrgIyrvO0LkKTDgIirvO0LgIirgIirvO0LkKDDvO0LgISnjJi7vO0LgISnvO0LvO0LiJS3gISnfISjfICjvO0LhJCvfICjfICjvO0LvO0LgIinvO0LvO0LfICffISjvO0LeHyfeHybeHibeHybvO0LeHibeHibvO0LdHSXdHSXvO0LvO0LdHSTdHSTvO0LvO0LvO0LvO0LvO0LvO0LcGyPvO0LcGyLvO0LvO0LbGSHvO0LvO0LaGB/aGCDvO0LvO0LZFx/ZFh7vO0LvO0LZFh7vO0LYFR3vO0LYFBzYFR3uOkHXExvYFBzvO0LWERnWEhrXEhrXExvYFBzfICjgISngIingIirnLjboLjboLzboMDfuOkHvOkHvO0JHr331AAAAfnRSTlMAAQICAwQGBwgJDA8QExQUISIjJCUqLS8zNjc6QUJKS0tMTlBRUmJmaWtucHBzdHZ5fX6AgIGEhY6OlJSUlp2en6Cnqamqq62usLGxs7jAwsPFx8fLzc7P1NbW2Nnb3N3f4ePk5+fp6+zu7vH29vb3+Pn5+vv7/Pz9/f3+/v4qZr0RAAABc0lEQVR42pXUVXfyUBCF4f25a93d3d3d3d2dqlCbUNf5z6WswCIwpw3P9Z6V9yYHui9x5V2T0/3N6X4wSB3cOCU6WGwKgLtvOcusO2sPgkvmBjlpw//hEjLFbg6LPsLh+wi5s2ZBF2tho7bPsPu9QkZaKRzCdthT/Tvg/Tx50jJg92OOvSUBjeTt6C+AEhas/gk4IcEg8GuTJfndJLH5I5lFs0ckqkULix5INo8ZFt2QbA9nLLogBaiLZNhnyTUpaBhjwZOyaBtVLLgnlQlEsuCKVPLwYdSXoq1PQLQvRQWwqzRfNI4XX4fMFq3/hMO/OXNFB+HQ+S2YKbJGwSVw6e0iawIgX9yR5CQBBsFr7HQp7hPhIdR58Xiu3hsvLOxwK/3KaRBEWFRFtgxAvpCLtGwoxOxKRVohlGJ3+VLaq8UfexVV4FUpF/JeLdf4iRq8qdhmeBlNKNPIqQ6mVJOuAyY1KPZqrWTXAx90EvXCJ30DkD0DFY6c2EtNX54AAAAASUVORK5CYII=" alt="love"> 
        Tanaguru
    </h2>

    <p class="center"><?php _e('References Little Phrase', 'wwwtg'); ?></p>

    <ul class="list-logos center responsive" lang="fr">
    	<li class="logo"><a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/Images/logo_tg.png" alt="" class="logo-image"></li><!-- 
    	 --><li class="logo"><a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/Images/logo_tg.png" alt="" class="logo-image"></a></li><!-- 
    	 --><li class="logo"><a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/Images/logo_tg.png" alt="" class="logo-image"></a></li><!-- 
    	 --><li class="logo"><a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/Images/logo_tg.png" alt="" class="logo-image"></a></li><!-- 
    	 --><li class="logo"><a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/Images/logo_tg.png" alt="" class="logo-image"></a></li><!-- 
    	 --><li class="logo"><a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/Images/logo_tg.png" alt="" class="logo-image"></a></li><!-- 
    	 --><li class="logo"><a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/Images/logo_tg.png" alt="" class="logo-image"></a></li><!-- 
    	 --><li class="logo"><a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/Images/logo_tg.png" alt="" class="logo-image"></a></li><!-- 
    	 --><li class="logo"><a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/Images/logo_tg.png" alt="" class="logo-image"></a></li><!-- 
    	 --><li class="logo"><a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/Images/logo_tg.png" alt="" class="logo-image"></a></li>
    </ul>   

    <p class="big-phrase center"><?php _e('References Big Phrase', 'wwwtg'); ?></p>


</section>

<div id="evaluate">
    <p class="center">
        <a href="https://my.tanaguru.com/sign-up/sign-up.html" id="button_evaluate" class="button gradient">
        	<?php _e('Button Reference Tanaguru', 'wwwtg'); ?></a>
        </a>
    </p>
</div>

<?php get_footer(); ?>
