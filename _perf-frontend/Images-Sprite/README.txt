################################################################################
    G�n�ration d'un sprite avec COMPASS    http://compass-style.org/
    Compass est d�velopp� en ruby
        Installation RUBY       http://rubyinstaller.org/downloads/
        Installation RUBYGEMS   http://rubygems.org/pages/download
        Installation COMPASS    $ gem update --system
                                $ gem install compass
################################################################################
La g�n�ration d'un sprite passe par 2 �tapes :
    a. configuration du projet sprite
    b. ex�cution de la g�n�ration 

a. configuration
----------------------------------
    config.rb                  chemin o� les images sources (icones) se trouvent
    sass/<sprite-name>.scss    nom de la classe g�n�rique, propri�t�s personnalis�es...

b. g�n�ration du sprite
---------------------------------------
    sans utiliser le script makeSprite.sh
        $ compass compile --force       // dans le r�pertoire contenant config.rb

    makeSprite.sh : g�n�ration sprite, nettoyage des r�pertoires, d�placement pour prod
        $ ./makeSprite.sh       => g�n�ration image et CSS du sprite
        $ ./makeSprite.sh prod  => idem + copie fichiers pour mise en prod
         
        remarque : il est possible de changer l'emplacement du script
                   en modifiant la variable PATH_WORK dans le fichier du script
    
--------------------------------------------------------------------------------
L'image du sprite doit �tre optimis�e (via kraken.io ou un autre outil)
avant la mise en ligne.
--------------------------------------------------------------------------------
Pour modifier un sprite, il suffit d'ajouter une image 
au dossier "_source/SpriteTanaguru/"

puis de relancer la g�n�ration du sprite sans changer
la configuration. Le CSS sera �galement reg�n�r�. 
--------------------------------------------------------------------------------

REMARQUE :
Au cours de la g�n�ration du sprite, un sprite avec un hash d'unicit� 
est cr�� (ex : icones-ze3f15zef.png). 
        en commentaire dans config.rb : 
        Une copie de ce fichier sera faite � l'aide de COMPASS.

le nom du dossier contenant les images � spriter sera le nom du sprite g�n�r�
Par exemple, si les images sont contenues dans le dossier icones/* le sprite 
se nommera icones.png

De m�me, les classes de chaque image dans le CSS porteront aussi le nom du dossier. 
Si on suit le m�me exemple, une image ajouter.png contenu dans le dossier icones/* 
aura comme classe CSS :   icones-ajouter{}

Le nom du dossier contenant les images doit �tre configur� dans le fichier config.rb
mais �galement dans le fichier sass/sprite.scss (o� le nom des variables doit
�tre format� selon le nom de ce dossier).