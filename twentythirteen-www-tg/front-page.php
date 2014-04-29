<?php get_header(); ?>

<section id="everest">

    <div id="everest_gradient" class="gradient">

        <div id="everest_filter"></div>
        <article id="accessibility_simply">
            <div id="text_simply">
                <h2><?php _e('Everest Simply Title', 'wwwtg'); ?></h2>
                <p><?php _e('Everest Simply Little Phrase', 'wwwtg'); ?></p>
            </div>    
            <p class="center">
                <a href="https://my.tanaguru.com/sign-up/sign-up.html" id="button_simply" class="button gradient">
                    <span id="chevron" class="sprite-chevron"></span>  
                    <?php _e('Button Test Tanaguru', 'wwwtg'); ?>
                </a>
            </p>
        </article>    
    </div>

    <div id="everest_dragon">

        <article id="accessibility_fast">
            <h2 class="center"><?php _e('Everest Fast Title', 'wwwtg'); ?></h2>
            <p class="center responsive"><?php _e('Everest Fast Little Phrase', 'wwwtg'); ?></p>
            <img class="tg-img-deco responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/Images/machine.png" alt=""/>
        </article>
    </div>

</section>
<section id="technology">

    <h2 class="center"><?php _e('Technology Title', 'wwwtg'); ?></h2>

    <ul class="center">
        <li id="techno1">
            <h3 class="center"><?php _e('Techno1 Title', 'wwwtg'); ?></h3>
            <p><?php _e('Techno1 Feature', 'wwwtg'); ?></p>
        </li> 

        <li id="techno2">
            <h3 class="center"><?php _e('Techno2 Title', 'wwwtg'); ?></h3>
            <p><?php _e('Techno2 Feature', 'wwwtg'); ?></p>
        </li>  

        <li id="techno3">
            <h3 class="center"><?php _e('Techno3 Title', 'wwwtg'); ?></h3>
            <p> <?php _e('Techno3 Feature', 'wwwtg'); ?></p>
        </li>  
    </ul>

<!--    <p class="center">
        <a href="#" id="button_technology" class="button gradient"><?php _e('More about our technology', 'wwwtg'); ?></a>
    </p> -->

</section>

<section id="why" class="gradient">

    <h2 class="center"><?php _e('Why Title', 'wwwtg'); ?></h2> 

    <ul class="center">
        <li id="why1">
            <div class="sprite-center sprite-data"></div>
            <h3><?php _e('Why1 Title', 'wwwtg'); ?></h3>
            <p><?php _e('Why1 Description', 'wwwtg'); ?></p>
        </li><!--
             
        --><li id="why2">
            <div class="sprite-center sprite-gears"></div>
            <h3><?php _e('Why2 Title', 'wwwtg'); ?></h3>
            <p><?php _e('Why2 Description', 'wwwtg'); ?></p>
        </li><!--
             
        --><li id="why3">
            <div class="sprite-center sprite-flipflops"></div>
            <h3><?php _e('Why3 Title', 'wwwtg'); ?></h3>
            <p><?php _e('Why3 Description', 'wwwtg'); ?></p>
        </li>
    </ul>

</section>

<section id="steps">

    <h2 class="center"><?php _e('Steps Title', 'wwwtg'); ?></h2>

    <p class="center"><?php _e('Steps Little Phrase', 'wwwtg'); ?></p>

    <ol class="center">

        <li id="step1">
            <div class="sprite-center sprite-steps sprite-step1"></div>
            <?php _e('Step1 Description', 'wwwtg'); ?>
        </li>

        <li id="step2">
            <div class="sprite-center sprite-steps sprite-step2"></div>
            <?php _e('Step2 Description', 'wwwtg'); ?>
        </li>

        <li id="step3">
            <div class="sprite-center sprite-steps sprite-step3"></div>
            <?php _e('Step3 Description', 'wwwtg'); ?>
        </li>

        <li id="step4">
            <div class="sprite-center sprite-steps sprite-step4"></div>
            <?php _e('Step4 Description', 'wwwtg'); ?>
        </li>

    </ol>

</section>

<section id="references">

    <h2 class="center">
        <?php _e('References slogan subject', 'wwwtg'); ?> 
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/Images/heart.png" alt="<?php _e('References slogan verb', 'wwwtg'); ?>"/> 
        Tanaguru
    </h2>

    <p class="center"><?php _e('References Little Phrase', 'wwwtg'); ?></p>

    <p class="center responsive"><img class="responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/Images/references.png" alt="EDF, Smile, Adullact, Alter Way, Société Générale, Capgemini, Universcience, Mairie de Paris, Michelin, Ministère de la Culture, Inpes, Réseau Férré de France, Agence de l'Eau"/></p>   

</section>

<section id="evaluate">

    <p class="center">
        <a href="https://my.tanaguru.com/sign-up/sign-up.html" id="button_evaluate" class="button gradient"><?php _e('Evaluate your accessibility !', 'wwwtg'); ?></a>
    </p>

</section>

<?php get_footer(); ?>
