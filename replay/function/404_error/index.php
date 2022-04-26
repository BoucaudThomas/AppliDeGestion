    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">

    <form action="404.php" method="POST" enctype="multipart/form-data">
        URL:
        <input type="text" name="lien" id="lien" style="width: 500px;">
        <br><br>
        <input type="submit" name="action" value="verifier">
    </form>


    <?php
// $NbreData : le nombre de données à afficher
// $NbrLigne : le nombre de lignes
// $NbrCol : le nombre de colonnes : calcul automatique
// -------------------------------------------------------
// (exemple)
$NbrLigne = 3;
$tableau = array('elt0','elt1','elt2','elt3','elt4','elt5'
                                               ,'elt6','elt7','elt8','elt9');
// -------------------------------------------------------
$NbreData = sizeof($tableau);
// -------------------------------------------------------
// affichage
if ($NbreData != 0) {
$i = 0;
$NbrCol = 0;
echo '<table border="1">';
   for ($i=0; $i<$NbrLigne; $i++) {
      echo '<tr>';
      $j = 0;
      while (($i+($j*$NbrLigne))%$NbrLigne==$i && ($i+($j*$NbrLigne))<$NbreData) {
         echo '<td>';
          // --------------------------------------
          // AFFICHAGE de l'element
         $k = ($i+($j*$NbrLigne));
         echo $tableau[$k];
          // --------------------------------------
         echo '</td>';
         $j++;
         if ($NbrCol<$j) { $NbrCol=$j; }
      }
      echo '</tr>';
   }
echo '</table>';
} else {
echo 'pas de données à afficher';
}
?>