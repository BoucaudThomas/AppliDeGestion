<?php

            //===========================================================================
            //  MODULE PERMETTANT DE TELECHARGEMENT, RENOMMER ET REDMENSIONNER UNE IMAGE
            //===========================================================================

            // PS : CE MODULE SAUVEGARDE LE FICHIER D'ORIGINE DANS LE REPERTOIRE "$directory_save".
            //      SI VOUS VOULEZ MODIFIER LE CHEMIN DU REPERTOIRE MODIFIER "$directory_save".
            //      SI VOUS VOULEZ METTRE TOUS LES FICHIERS A LA RACINE DU PROJET SUPPRIMER ET/OU COMMENTEZ "$directory_save".


            
            $name_file = basename($_FILES["fileToUpload"]["name"]); // Recuperation du nom et de l'extension du fichier
            $temp_path_file = $_FILES["fileToUpload"]["tmp_name"];  // Recuperation du chemin temporaire de l'image
            //$directory_save = "save/";  // Nom du repertoire où enregistrer le chemin temporaire de l'image
            $path_file = /*$directory_save.*/$name_file; // Chemin ou trouver l'image           
            $move_file = move_uploaded_file($temp_path_file, /*$directory_save.*/$name_file); // Deplacement du chemin temporaire de l'image dans "$directory_save" avec son nom d'origine
            $uploadOk = 1; // Verifie si l'upload est Vrai ou Faux
            $nameImageFile = strtolower(pathinfo($name_file,PATHINFO_FILENAME)); // Recuperation du nom du fichier
            $extensionImageFileType = strtolower(pathinfo($name_file,PATHINFO_EXTENSION)); // Recuperation de l'extension du fichier
            $new_name = "numero_3"; // Nouveau nom du fichier
            $new_name_full = $new_name.'.'.$extensionImageFileType; // Nouveau nom du fichier suivi de son extension

            

            // VERIFICATION ET RENOMMGAE DU FICHIER (IMAGE)
            // Verifie si c'est une vrai image
            if(isset($_POST["submit"])) {
                // On enregistre la taille du fichier
                $check = getimagesize($path_file);
                if($check !== false) {
                    $info = getimagesize($path_file);
                    $mime = $info['mime'];

                    switch ($mime) {
                            case 'image/jpeg':
                                    $image_create_func = 'imagecreatefromjpeg';
                                    $image_save_func = 'imagejpeg';
                                    break;

                            case 'image/png':
                                    $image_create_func = 'imagecreatefrompng';
                                    $image_save_func = 'imagepng';
                                    break;

                            case 'image/gif':
                                    $image_create_func = 'imagecreatefromgif';
                                    $image_save_func = 'imagegif';
                                    break;
                    }
                    
                    list($width, $height) = getimagesize($path_file);
                    $modwidth = 1250;  //target width
                    $modheight = 835;   //target height

                    $image_p = imagecreatetruecolor($modwidth, $modheight) ;
                    $image = $image_create_func($path_file) ;
                    $image_resize = imagecopyresampled($image_p, $image, 0, 0, 0, 0, $modwidth, $modheight, $width, $height);
                    $image_save_func($image_p, $nameImageFile) ;

                    echo '<img src="'.$new_name_full.'">'."<br>"."";

                } else {
                    echo "Le fichier n'est pas une image"."<br>"."";
                    $uploadOk = 0;
                }
                $file_rename = rename($nameImageFile, $new_name_full);
            }

            // Vérifie si le fichier existe déja
            if (file_exists($new_name_full)) {
                echo "Le fichier existe déja"."<br>"."";
                $uploadOk = 0;
            }else {
                echo "Fichier telecharger avec succes !";
            }

            // Vérifie la taille du fichier
            if ($_FILES["fileToUpload"]["size"] > 100000000) {
                echo "Le fichier est trop volumineux."."<br>"."";
                $uploadOk = 0;
            }

            // Format accepté
            if($extensionImageFileType != "jpg" && $extensionImageFileType != "png" && $extensionImageFileType != "jpeg"
            && $extensionImageFileType != "gif" ) {
                echo "Uniquement les fichiers JPG, JPEG, PNG & GIF."."<br>"."";
                $uploadOk = 0;
            }

            // Message si le fichier n'a pas été télécharger
            if ($uploadOk == 0) {
                echo "Fichier non télécharger."."<br>"."";
                // Si tout est bon, on télécharge le fichier
            }
            
?>