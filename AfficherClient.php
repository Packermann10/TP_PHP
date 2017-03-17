<?php include('header.php'); ?>
<?php
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=facturef2b', 'root', 'ludus');
	}
	catch (Exception $e)
	{
	        die('Erreur : ' . $e->getMessage());
	}

	/* Affiche les données des clients entrés dans la base de données */
	
	session_start();		
	
	$reponse = $bdd->query('SELECT * FROM client ORDER BY VilleClient ASC');
	
	while ($donnees = $reponse->fetch()){
	?>
		<form method="post" action="">



	</form>
	</br>

	<h3>Nom : <?php echo $donnees['NomClient'];?> </h3>
	<h3>Prenom : <?php echo $donnees['PrenomClient'];?> </h3>
	<h3>Adresse : <?php echo $donnees['AdresseClient'];?> </h3>
	<h3>Ville : <?php echo $donnees['VilleClient'];?> </h3>
	<h3>CP : <?php echo $donnees['Cp'];?> </h3>
	<h3>Pays : <?php echo $donnees['PaysClient'];?> </h3>

	
	
	<?php
	
	}

	$reponse->closeCursor();
	
?>