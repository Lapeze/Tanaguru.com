################################################################################
#
# Fichier de configuration : Sprite 2
#
################################################################################

# CHEMIN CONTENANT LE DOSSIER DES ICONES A SPRITER
images_dir = "_source/"

################################################################################

# Configurations globales
sass_dir   = "sass"                                # Dossier contenant le fichier SASS
css_dir    = "_output"                             # Dossier où sera généré le CSS
generated_images_dir = '_output/Images/Sprites'    # Dossier où sera généré le sprite 

# Désactiver le mode débug : commentaire qui affiche le chemin original du sélecteur
line_comments = false

# Activer l'écriture de chemin relatif vers le sprite dans le CSS
relative_assets = true

#  Style de sortie (version minifié ou normal)
output_style = :expanded       # DEV  : non minifié 
# output_style = :compressed   # PROD : minifié


# Réaliser une copie des sprites avec un nom dépourvu du hash d'unicité.
# Ex : sprite-1rzeg235zr.png ==> sprite.png
    #    on_sprite_saved do |filename|
    #    if File.exists?(filename)
    #    FileUtils.cp filename, filename.gsub(%r{-s[a-z0-9]{10}\.png$}, '.png')
    #    end
    #    end
 
# Remplacer dans les feuilles de styles générés les références aux sprites 
# par leurs équivalents dépourvus du hash d'unicité.
    #    on_stylesheet_saved do |filename|
    #      if File.exists?(filename)
    #        css = File.read filename
    #        File.open(filename, 'w+') do |f|
    #          f << css.gsub(%r{-s[a-z0-9]{10}\.png}, '.png')
    #        end
    #      end
    #    end