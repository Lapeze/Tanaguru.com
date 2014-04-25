<?php get_header(); ?>

<section id="everest">

    <div id="everest_gradient" class="gradient">
        <div id="everest_filter"></div>
         <article id="accessibility_simply">
            <div id="text_simply">
                <h2>L'accessibilité, simplement</h2>
                <p>La voie la plus rapide pour optimiser votre accessibilité.</p>
            </div>    
            <p class="center">
                <a href="https://my.tanaguru.com/sign-up/sign-up.html" id="button_simply" class="button gradient">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/Images/chevron.png" alt="" /> 
                        <?php _e('Testez Tanaguru', 'wwwtg'); ?>
                </a>
            </p>
        </article>    
        
    </div>    
    <div id="everest_dragon">
       
        <article id="accessibility_fast">
            <h2 class="center">Accélérez vos tests d’accessibilité. Vraiment.</h2>
            <p class="center responsive">
                Tanaguru automatise 167 tests d'accessibilité 
                (<abbr title="Référentiel Général d'Accessibilité des Administrations">RGAA</abbr>, AccessiWeb, <span lang="en"><abbr title="Web Content Accessibility Guidelines">WCAG</abbr></span>).<br />
                L'évaluation d'une page, d'un site entier ou d'une application web est fiable, intuitive et elle-même accessible.
            </p>
            <img class="tg-img-deco responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/Images/machine.png" alt=""/>
        </article>     
    </div>

</section>
<section id="technology">

    <h2 class="center">Plusieurs types d’analyses, tous les usages</h2>
    <ul class="center">
        <li id="techno1">
            <h3 class="center">Gabarit &amp; page web</h3>
            <p>
                Les gabarits en cours de création peuvent être audités avant même leur mise en production.<br />
                Les pages web sont évaluées instantanément.
            </p>
        </li> 
        <li id="techno2">
            <h3 class="center">Site entier</h3>
            <p>
                Grâce à son <span lang="en">crawler</span>, Tanaguru parcours la totalité du site.
                Portail institutionnel, blog ou site vitrine, mesurez l'accessibilité de 10000 pages en un clic !
            </p>
        </li>  
        <li id="techno3">
            <h3 class="center">Scénario</h3>
            <p>
                Validez les applications Javascript, les intranets ou le parcours d'achat d'un site e-commerce.
                L'audit scénario permet même de contrôler plusieurs états d'une même page.
            </p>
        </li>  
    </ul>

<!--    <p class="center">
        <a href="#" id="button_technology" class="button gradient"><?php _e('More about our technology', 'wwwtg'); ?></a>
    </p> -->

</section>

<section id="why" class="gradient">

    <h2 class="center">Pourquoi Tanaguru ?</h2> 
    <ul class="center">
        <li id="why1">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/Images/data.png" alt=""/>
            <h3>Fiable</h3>
            <p>
                Les résultats de Tanaguru sont fiables.
                En cas de doute, il vous informe au lieu de donner un résultat faux.
                Tanaguru vous fourni tous les éléments nécessaires à votre prise de décision.
            </p>
        </li><!--
        --><li id="why2">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/Images/gears.png" alt=""/>
            <h3>Automatisé</h3>
            <p>
                Vous en avez marre de compter les <code>alt</code> à la main ? Nous aussi ! 
                Repousser les limites de l'automatisation est notre motivation. 
                Offrir des gains de productivité fait partie du code (génétique) de Tanaguru.
            </p>
        </li><!--
        --><li id="why3">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/Images/flipflops.png" alt=""/>
            <h3>Facile</h3>
            <p>
                Les normes d'accessibilité peuvent être complexes.
                Tanaguru apporte les marche-pieds pour bien initier sa mise en conformité.
            </p>
        </li>
    </ul>

</section>

<section id="steps">
    <h2 class="center">Simple, rapide, adapté </h2>
    <p class="center"> Avec Tanaguru, 4 étapes suffisent pour tester un site entier, de manière personnalisable, fiable et agréable.</p>

    <ol class="center">

        <li id="step1">
            <img class="tg-img-deco responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/Images/Pictograms/step1.png" alt=""/>
            Lancez un audit en le
            parametrant suivant
            vos besoins.</li>

        <li id="step2">
            <img class="tg-img-deco responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/Images/Pictograms/step2.png" alt=""/>
            Définissez vos priorités grâce à la synthèse globale.</li>

        <li id="step3">
            <img class="tg-img-deco responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/Images/Pictograms/step3.png" alt=""/>
            A vous de jouer! Utilisez les résultats
            détaillés.</li>

        <li id="step4">
            <img class="tg-img-deco responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/Images/Pictograms/step4.png" alt=""/>
            Suivez l’évolution
            de l’accessibilité de
            votre site.</li>
    </ol>
</section>

<section id="references">

    <h2 class="center">They<img src="<?php echo get_stylesheet_directory_uri(); ?>/Images/heart.png" alt="love"/>Tanaguru</h2>
    <!--<p class="center"><?php _e('Slogan', 'wwwtg'); ?></p>-->
    <p class="center responsive">
        <img class="responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/Images/references.png" alt="EDF, Smile, Adduclact, Alter Way, Société Générale, Capgemini, Universcience, Mairie de Paris, Michelin, Ministère de la Culture, Inpes, RFF, Agence de l'Eau"/>
    </p>   

</section>

<section id="evaluate">
    <p class="center">
        <a href="https://my.tanaguru.com/sign-up/sign-up.html" id="button_evaluate" class="button gradient"><?php _e('Evaluate your accessibility !', 'wwwtg'); ?></a>
    </p>
</section>


<?php get_footer(); ?>
