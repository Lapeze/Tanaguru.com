#!/bin/bash

# Configuration 
#######################################

# répertoire où est situé le fichier config.rb
PATH_WORK='./ ' 

# Répertoire source et destination
#            => pas de / final 
DIR_SOURCE='_output'
DIR_DEST='../../twentythirteen-www-tg'

# Image du sprite
PREFIX_IMAGE='SpriteTanaguru'
DIR_IMAGE='Images/Sprites'

# Fichier CSS et LESS
CSS_FILE_NAME='sprite-tanaguru'
CSS_EXT_SOURCE='css'
CSS_EXT_DEST='less'

#### Fin configuration #######################################


########################################################
PATH_SOURCE_IMAGE=$DIR_SOURCE/$DIR_IMAGE
PATH_DEST_IMAGE=$DIR_DEST/$DIR_IMAGE
CSS_SOURCE=$DIR_SOURCE/$CSS_FILE_NAME.$CSS_EXT_SOURCE
CSS_DEST=$DIR_DEST/Less/$CSS_FILE_NAME.$CSS_EXT_DEST
########################################################

# Sauvegarde du répertoire de travail  initial 
CURRENT_PATH=`pwd`

# Aller dans le répertoire de travail
cd $PATH_WORK
echo "";echo "Répertoire de travail : $( pwd )";

echo ''; echo "1. Création du SPRITE";
echo ''; echo "1.1. CLEAN : suppression des anciennes versions du sprite";
rm -vf $PATH_SOURCE_IMAGE/$PREFIX_IMAGE*

echo ''; echo "1.2. GENERATION du sprite"
compass compile --force 

echo ''; echo "1.3. CLEAN : suppression du répertoire .sass-cache"
# rm -vrf .sass-cache
rm -rf .sass-cache

if [ -n "$1" ] && [ $1 = 'prod' ]  # 1er paramètre présent et égal à 1
then   echo '';
   echo ''; echo "2. Déplacement du SPRITE pour mise en prod";   echo ''; echo "2.1. CLEAN : suppression des anciennes versions du sprite";   rm -vf $PATH_DEST_IMAGE/$PREFIX_IMAGE* 
   
   echo ''; echo "2.2. COPIE du fichier IMAGE";
   cp -v $PATH_SOURCE_IMAGE/$PREFIX_IMAGE-* $PATH_DEST_IMAGE/
   
   echo ''; echo "2.3. COPIE du fichier CSS ";
   cp -v $CSS_SOURCE $CSS_DEST      

    echo ""
    echo "--- End ----------"
    echo ""
else    
    echo ""
    echo "--- End ----------"
    echo ""; echo ""; echo ""
    echo "------> Option non activée"
    echo ' Déplacement du SPRITE pour mise en prod';
    echo " Essayer : <script>.sh prod "
    echo ""
fi


# retour au répertoire de travail initial
echo ""
cd $CURRENT_PATH
echo "retour au répertoire : $CURRENT_PATH";
echo ""