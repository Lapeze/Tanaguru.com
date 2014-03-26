<?php
/*
Template Name: Contact
*/

get_header(); ?>

<section id="contact">
    <div id="contact_area">      

        <?php /* The loop */ ?>
        <?php while (have_posts()) : the_post(); ?>

            <h1 class="entry-title"><?php the_title(); ?></h1>

            <article id="contact_form">
                <?php the_content(); ?>                        					
            </article>

            <article>
                <p>tanaguru@tanaguru.com</p>
                <p>Tel : (+33) 972 11 26 06</p>
                <p><a href="#">@TanaguruApp</a></p>
                <p>Adresse postale : <br/>
                    Cap Omega - CS 39521 <br/>
                    Rond point Benjamin Franklin <br/>
                    34960 Montpellier Cedex 2</p>
            </article>

        <?php endwhile; ?>
    </div>
</section>

<section id="team">
    <article>
        <h2><img src="<?php echo get_stylesheet_directory_uri(); ?>/Images/matthieu.jpg" alt=""/> Matthieu</h2>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
        <p>
        <ul><li>twitter</li> 
            <li>linkedin</li>
        </ul>
    </article>

    <article>
        <h2><img src="<?php echo get_stylesheet_directory_uri(); ?>/Images/yann.jpg" alt=""/> Yann</h2>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
        <ul><li>twitter</li> 
            <li>linkedin</li>
        </ul>
    </article>


    <article>
        <h2><img src="<?php echo get_stylesheet_directory_uri(); ?>/Images/jerome.jpg" alt=""/> Jérôme</h2>   
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
        <ul><li>twitter</li> 
            <li>linkedin</li>
        </ul>
    </article>
</section>

<section id="evaluate">                           

</section>

<?php get_footer(); ?>