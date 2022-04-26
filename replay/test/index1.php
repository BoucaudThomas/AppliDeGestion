<?php include('../../connect_db_replay.php'); ?>   
<?php
    $url_domaine  = "https://test.wow.gp/";
    $nb_recup = 20; // par default 
    $nb_donnee_traiter = 1; // Nombre de départ ****
    $nb_donnee_traiter_2 = 10; // Nombre de donnée à traiter ****
    $nb_donnee_traiter_3 = $nb_donnee_traiter_2; // Nombre de donnée à traiter
    $nb_donnee_traiter_4 = $nb_donnee_traiter_2; // Nombre de donnée à traiter 
    

    if ($_GET['nb'] && $_GET['nb_fin']) {
        $resultat = $db->query('SELECT * FROM videos ORDER BY id ASC LIMIT '.$_GET['nb'].','.$_GET['nb_fin'].'');
    }else {
        $resultat = $db->query('SELECT * FROM videos ORDER BY id ASC LIMIT '.$nb_recup.'');
    }
    while($col=$resultat->fetch()){
?>
 <B><?php echo($col['id']); ?></B> 
 <?php echo($col['title']); ?> - <B><?php echo($col['thumbnail']); ?></B><br>
<?php } ?>

<br><br>


<?php
    for (
        $i = 1 ; 
        $i <= 20 ; // Nombre de lien à générer *****
        $i++)
        
{
    
Echo "i = $i\n <a target=_blank href=$url_domaine/pages/replay/test/index1.php?&nb=$nb_donnee_traiter&nb_fin=$nb_donnee_traiter_4> $nb_donnee_traiter à $nb_donnee_traiter_3</a><BR>" ;
    $nb_donnee_traiter = $nb_donnee_traiter+$nb_donnee_traiter_2;
    $nb_donnee_traiter_3 = $nb_donnee_traiter+$nb_donnee_traiter_2;
}  

?>
