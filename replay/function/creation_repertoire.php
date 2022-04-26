<?php
    // MODULE DE CREATION DE REPERTOIRE SUR LE SERVEUR
    // Liste des répertoires
    $destination = "../../../";
    $repertoire = "upload";
    $sub1_repertoire = date("Y"); // Année
    $sub2_repertoire = date("m"); // Mois
    $sub3_repertoire = date("d"); // jour
    $sub4_repertoire = "05-12"; // matin
    $sub5_repertoire = "12-14"; // midi
    $sub6_repertoire = "14-19"; // apres-midi
    $sub7_repertoire = "19-05"; // nuit

    // Vérifie si le répertoire existe :
    if (is_dir($destination.'/'.$repertoire)) {
        echo 'Le répertoire existe déjà ! ';
        echo "$repertoire";
    }else {
        // Création du nouveau répertoire
        mkdir($destination.'/'.$repertoire);
        echo 'Le répertoire '.$repertoire.' vient d\'être créé !';
    }
?>
    <br>
<?php
    // Vérifie si le sub1_repertoire existe :
        if (is_dir($destination.'/'.$repertoire.'/'.$sub1_repertoire)) {
            echo 'Le sous-répertoire existe déjà ! ';
            echo "$sub1_repertoire";
        }else {
            // Création du nouveau répertoire sub1_repertoire
            mkdir($destination.'/'.$repertoire.'/'.$sub1_repertoire);
            echo 'Le répertoire '.$repertoire.'/'.$sub1_repertoire.' vient d\'être créé !';
        }
?>
    <br>
<?php
    // Vérifie si le sub2_repertoire existe :
        if (is_dir($destination.'/'.$repertoire.'/'.$sub1_repertoire.'/'.$sub2_repertoire)) {
            echo 'Le sous-répertoire existe déjà ! ';
            echo "$sub2_repertoire";
        }else {
            // Création du nouveau répertoire sub2_repertoire
            mkdir($destination.'/'.$repertoire.'/'.$sub1_repertoire.'/'.$sub2_repertoire);
            echo 'Le répertoire '.$repertoire.'/'.$sub1_repertoire.'/'.$sub2_repertoire.' vient d\'être créé !';
        }
?>
    <br>
<?php
    // Vérifie si le sub3_repertoire existe :
        if (is_dir($destination.'/'.$repertoire.'/'.$sub1_repertoire.'/'.$sub2_repertoire.'/'.$sub3_repertoire)) {
            echo 'Le sous-répertoire existe déjà ! ';
            echo "$sub3_repertoire";
        }else {
            // Création du nouveau répertoire sub3_repertoire
            mkdir($destination.'/'.$repertoire.'/'.$sub1_repertoire.'/'.$sub2_repertoire.'/'.$sub3_repertoire);
            echo 'Le répertoire '.$repertoire.'/'.$sub1_repertoire.'/'.$sub2_repertoire.'/'.$sub3_repertoire.' vient d\'être créé !';
        }
?>

<br>
<?php
    // Crétion module répertoire matin
    // Vérifie si le sub4_repertoire existe :
        if (is_dir($destination.'/'.$repertoire.'/'.$sub1_repertoire.'/'.$sub2_repertoire.'/'.$sub3_repertoire.'/'.$sub4_repertoire)) {
            echo 'Le sous-répertoire existe déjà ! ';
            echo "$sub4_repertoire";
        }else {
            // Création du nouveau répertoire sub4_repertoire
            mkdir($destination.'/'.$repertoire.'/'.$sub1_repertoire.'/'.$sub2_repertoire.'/'.$sub3_repertoire.'/'.$sub4_repertoire);
            echo 'Le répertoire '.$repertoire.'/'.$sub1_repertoire.'/'.$sub2_repertoire.'/'.$sub3_repertoire.'/'.$sub4_repertoire.' vient d\'être créé !';
        }
?>
<br>
<?php
    // Crétion module répertoire apres-midi
    // Vérifie si le sub5_repertoire existe :
        if (is_dir($destination.'/'.$repertoire.'/'.$sub1_repertoire.'/'.$sub2_repertoire.'/'.$sub3_repertoire.'/'.$sub5_repertoire)) {
            echo 'Le sous-répertoire existe déjà ! ';
            echo "$sub5_repertoire";
        }else {
            // Création du nouveau répertoire sub5_repertoire
            mkdir($destination.'/'.$repertoire.'/'.$sub1_repertoire.'/'.$sub2_repertoire.'/'.$sub3_repertoire.'/'.$sub5_repertoire);
            echo 'Le répertoire '.$repertoire.'/'.$sub1_repertoire.'/'.$sub2_repertoire.'/'.$sub3_repertoire.'/'.$sub5_repertoire.' vient d\'être créé !';
        }
?>
<br>
<?php
    // Crétion module répertoire soir
    // Vérifie si le sub6_repertoire existe :
        if (is_dir($destination.'/'.$repertoire.'/'.$sub1_repertoire.'/'.$sub2_repertoire.'/'.$sub3_repertoire.'/'.$sub6_repertoire)) {
            echo 'Le sous-répertoire existe déjà ! ';
            echo "$sub6_repertoire";
        }else {
            // Création du nouveau répertoire sub5_repertoire
            mkdir($destination.'/'.$repertoire.'/'.$sub1_repertoire.'/'.$sub2_repertoire.'/'.$sub3_repertoire.'/'.$sub6_repertoire);
            echo 'Le répertoire '.$repertoire.'/'.$sub1_repertoire.'/'.$sub2_repertoire.'/'.$sub3_repertoire.'/'.$sub6_repertoire.' vient d\'être créé !';
        }
?>
<br>
<?php
    // Crétion module répertoire soir
    // Vérifie si le sub7_repertoire existe :
        if (is_dir($destination.'/'.$repertoire.'/'.$sub1_repertoire.'/'.$sub2_repertoire.'/'.$sub3_repertoire.'/'.$sub7_repertoire)) {
            echo 'Le sous-répertoire existe déjà ! ';
            echo "$sub7_repertoire";
        }else {
            // Création du nouveau répertoire sub7_repertoire
            mkdir($destination.'/'.$repertoire.'/'.$sub1_repertoire.'/'.$sub2_repertoire.'/'.$sub3_repertoire.'/'.$sub7_repertoire);
            echo 'Le répertoire '.$repertoire.'/'.$sub1_repertoire.'/'.$sub2_repertoire.'/'.$sub3_repertoire.'/'.$sub7_repertoire.' vient d\'être créé !';
        }

//  FIN MODULE DE CREATION DE REPERTOIRE SUR LE SERVEUR
?>

