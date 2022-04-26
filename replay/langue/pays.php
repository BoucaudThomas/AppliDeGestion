<?php include('../../connect_db_replay.php'); ?>



<table border="1" width="100%">

<?php
    // limitter la récupération des 1000 derniers enregistrement
    $resultat = $db->query('SELECT * FROM langs ORDER BY id DESC LIMIT 1000');
    while($col=$resultat->fetch()){

    // Nombre de colonne
    $nb_col = 3;

    
?>
	<tr>
		<td><?php echo($col['french']); ?></td>
		<td>A</td>
		<td>D</td>
	</tr>
    
<?php } ?>	

</table>