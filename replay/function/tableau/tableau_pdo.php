<?php  include("../../../connect_db_replay.php") ; ?>
<?php
// $NbreData : le nombre de données à afficher
// $NbrCol : le nombre de colonnes
// $NbrLigne : calcul automatique a la FIN
// -------------------------------------------------------
// (exemple)
$NbrCol = 3;
// requête
$sql = "SELECT * FROM annuaire";
$result = $db->query($sql);
// -------------------------------------------------------
$NbreData = $Data->rowCount($sql);
/*$NbreDatas = $Data->prepare($sql);
$NbreDatas->execute();
$NbreData = $NbreDatas->rowCount($result);
echo $NbreData;*/
// -------------------------------------------------------
// affichage
$NbrLigne = 0;
if ($NbreData != 0) {
$j = 1;
echo '<table border="1">';
while ($val = $result->fetch()) {
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