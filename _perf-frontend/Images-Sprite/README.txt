################################################################################
    Génération d'un sprite avec COMPASS    http://compass-style.org/
    Compass est développé en ruby
        Installation RUBY       http://rubyinstaller.org/downloads/
        Installation RUBYGEMS   http://rubygems.org/pages/download
        Installation COMPASS    $ gem update --system
                                $ gem install compass
################################################################################
La génération d'un sprite passe par 2 étapes :
    a. configuration du projet sprite
    b. exécution de la génération 

a. configuration
----------------------------------
    config.rb                  chemin où les images sources (icones) se trouvent
    sass/<sprite-name>.scss    nom de la classe générique, propriétés personnalisées...

b. génération du sprite
---------------------------------------
    sans utiliser le script makeSprite.sh
        $ compass compile --force       // dans le répertoire contenant config.rb

    makeSprite.sh : génération sprite, nettoyage des répertoires, déplacement pour prod
        $ ./makeSprite.sh       => génération image et CSS du sprite
        $ ./makeSprite.sh prod  => idem + copie fichiers pour mise en prod
         
        remarque : il est possible de changer l'emplacement du script
                   en modifiant la variable PATH_WORK dans le fichier du script
    
--------------------------------------------------------------------------------
L'image du sprite doit être optimisée (via kraken.io ou un autre outil)
avant la mise en ligne.
--------------------------------------------------------------------------------
Pour modifier un sprite, il suffit d'ajouter une image 
au dossier "_source/SpriteTanaguru/"

puis de relancer la génération du sprite sans changer
la configuration. Le CSS sera également regénéré. 
--------------------------------------------------------------------------------

REMARQUE :
Au cours de la génération du sprite, un sprite avec un hash d'unicité 
est créé (ex : icones-ze3f15zef.png). 
        en commentaire dans config.rb : 
        Une copie de ce fichier sera faite à l'aide de COMPASS.

le nom du dossier contenant les images à spriter sera le nom du sprite généré
Par exemple, si les images sont contenues dans le dossier icones/* le sprite 
se nommera icones.png

De même, les classes de chaque image dans le CSS porteront aussi le nom du dossier. 
Si on suit le même exemple, une image ajouter.png contenu dans le dossier icones/* 
aura comme classe CSS :   icones-ajouter{}

Le nom du dossier contenant les images doit être configuré dans le fichier config.rb
mais également dans le fichier sass/sprite.scss (où le nom des variables doit
être formaté selon le nom de ce dossier).