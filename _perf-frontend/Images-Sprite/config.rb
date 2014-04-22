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
css_dir    = "_output"                             # Dossier o� sera g�n�r� le CSS
generated_images_dir = '_output/Images/Sprites'    # Dossier o� sera g�n�r� le sprite 

# D�sactiver le mode d�bug : commentaire qui affiche le chemin original du s�lecteur
line_comments = false

# Activer l'�criture de chemin relatif vers le sprite dans le CSS
relative_assets = true

#  Style de sortie (version minifi� ou normal)
output_style = :expanded       # DEV  : non minifi� 
# output_style = :compressed   # PROD : minifi�


# R�aliser une copie des sprites avec un nom d�pourvu du hash d'unicit�.
# Ex : sprite-1rzeg235zr.png ==> sprite.png
    #    on_sprite_saved do |filename|
    #    if File.exists?(filename)
    #    FileUtils.cp filename, filename.gsub(%r{-s[a-z0-9]{10}\.png$}, '.png')
    #    end
    #    end
 
# Remplacer dans les feuilles de styles g�n�r�s les r�f�rences aux sprites 
# par leurs �quivalents d�pourvus du hash d'unicit�.
    #    on_stylesheet_saved do |filename|
    #      if File.exists?(filename)
    #        css = File.read filename
    #        File.open(filename, 'w+') do |f|
    #          f << css.gsub(%r{-s[a-z0-9]{10}\.png}, '.png')
    #        end
    #      end
    #    end