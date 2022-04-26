<?php
    //connexion à la BDD
    $db = new PDO('mysql:host=213.246.56.153;dbname=test_replay_gp','userstage1', 'Hotel2021test!!');
    //requête qui fixe l'encodage de la connexion au serveur à utf-8 pour le reste du script
    $db->exec("SET CHARACTER SET utf8");
    
?>