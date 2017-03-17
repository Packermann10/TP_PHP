
<link rel="stylesheet" type="text/css" media="screen" href="stylefacture.css" />

<!--	<h1>Bienvenue <?php echo $donnees['PrenomClient']; ?>, que souhaitez vous faire?</h1>-->
<div class="fond">
<div class="parent"> 
<div class="image1"><img src="images/logo.JPG"></div> 
</div> 

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

	session_start();		
	
	$reponse = $bdd->query('SELECT * FROM client');
	
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
<?php
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=facturef2b', 'root', 'ludus');
	}
	catch (Exception $e)
	{
	        die('Erreur : ' . $e->getMessage());
	}

			
	
	$reponse = $bdd->query('SELECT * FROM client,produits');
	
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
<?php
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=facturef2b', 'root', 'ludus');
	}
	catch (Exception $e)
	{
	        die('Erreur : ' . $e->getMessage());
	}

			
	
	$reponse = $bdd->query('SELECT sum(PUHT) AS somme FROM produits');
	
	while ($donnees = $reponse->fetch()){
	?>
		<form method="post" action="">



	</form>
	</br>
	<h4>Total : <?php echo $donnees['somme'];?> € </h4>
	
	
	
	<?php
	
	}

	$reponse->closeCursor();
	
?>
</body>
</div>