<?php  include("../db_connect_replay.php") ; ?>
<html><body>
<?php
// $NbreData : le nombre de données à afficher
// $NbrCol : le nombre de colonnes
// $NbrLigne : calcul automatique a la FIN
// -------------------------------------------------------
// (exemple)
$NbrCol = 5;
// requête
$query = "SELECT * FROM annuaire";
$result = mysqli_query($db, $query);
// -------------------------------------------------------
$NbreData = mysqli_num_rows($result);
// -------------------------------------------------------
// affichage
$NbrLigne = 0;
if ($NbreData != 0) {
$j = 1;
echo '<table border="1">';
while ($val = mysqli_fetch_array($result)) {
   if ($j%$NbrCol == 1) {
      $NbrLigne++;
      echo "<tr>";
      $fintr = 0;
   }
   echo '<td>';
    // ------------------------------------------
    // AFFICHAGE des DONNEES de la fiche
   echo $val['username'];
   echo '<br>';
   echo '<i>'.$val['sub_category_id'].'</i>';
    // ------------------------------------------
   echo '</td>';
   if ($j%$NbrCol == 0) {
      echo "</tr>"; 
      $fintr = 1;
   }
   $j++;
}
if ($fintr!=1) { echo '</tr>'; }
echo '</table>';
} else {
echo 'pas de données à afficher';
}
?>
</body></html>
<?php
// déconnexion de la base
mysqli_close($db); 
?> 