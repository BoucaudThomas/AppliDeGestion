<?php include('../../connect_db_replay.php'); ?>   
<?php
    $url_domaine  = "https://test.wow.gp/";
    $nb_recup = 20;
    $nb_lien = 3;
    $nb_donnee_limite = 100;
    $nb_donnnee_limite_ligne = $nb_donnee_limite/100;
    

    if ($_GET['nb'] && $_GET['nb_fin']) {
        $resultat = $db->query('SELECT * FROM videos ORDER BY id DESC LIMIT '.$_GET['nb'].','.$_GET['nb_fin'].'');
    }else {
        $resultat = $db->query('SELECT * FROM videos ORDER BY id DESC LIMIT '.$nb_recup.'');
    }
    while($col=$resultat->fetch()){
?>
 <?php echo($col['id']); ?>
 <?php echo($col['title']); ?><br>
<?php } ?>
<br><br>
<?php
$nb1 = 1;
$nb100 = 100;
?>
<a href="<?php echo($url_domaine); ?>pages/replay/test/index.php?&nb=1&nb_fin=100"><?php echo($nb1); ?> à <?php echo($nb100); ?></a>

<?php
    for (
        $i = 1 ; 
        $i <= 200 ; 
        $i++)

{
Echo "i = $i\n" ;
Echo "i = $i\n" ;

}  

?>
    <?php /*if (($_GET['nb'] == 1) && ($_GET['nb_fin'] == 100)){?>
        <?php for ($i=0; $i < $nb_donnnee_limite_ligne; $i++){?>
            <?php $nb = $nb + 100;
                  $nb_fin = $nb100 + $nb100 ?>
            <a href="<?php echo($url_domaine); ?>pages/replay/test/index.php?&nb=$nb&nb_fin=$nb_fin"><?php echo($nb); ?> à <?php echo($nb_fin); ?></a>
            <?php }  ?>
        <?php }  ?>



<!--<a href="<?php echo($url_domaine); ?>pages/replay/test/index.php?&nb=100&nb_fin=200">100 à 200</a>
<a href="<?php echo($url_domaine); ?>pages/replay/test/index.php?&nb=nb_fin+1&nb_fin=nb_fin+nb_fin200">50 à 100</a>-->*/