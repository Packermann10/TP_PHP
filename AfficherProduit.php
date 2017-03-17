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

	/* Affiche les données des produits entrés dans la base de données */
	
	session_start();			
	
	$reponse = $bdd->query('SELECT * FROM produits ORDER BY PUHT ASC');
	
	while ($donnees = $reponse->fetch()){
	?>
			<form method="post" action="">



	</form>
	</br>
	<h4>Produit : <?php echo $donnees['Des'];?> </h4>
		<h4>Prix : <?php echo $donnees['PUHT'];?> €</h4>
	
	
	<?php
	
	}

	$reponse->closeCursor();
	
?>