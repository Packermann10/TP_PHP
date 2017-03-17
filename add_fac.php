<!doctype html>	
<html lang="fr">
<head>
<link rel="stylesheet" type="text/css" media="screen" href="style.css" />
	<meta charset="utf-8">
	<title>Site Web TP3</title>
</head>
				<h1>Ajout d'une Facture</h1><br/>
	<br>
<?php include('header.php'); ?>

<!-- Permet à l'utilisateur de d'ajouter les données d'une nouvelle facture !-->

<body>

						<h3 class="panel-title">Ajout d'une Facture </h3>
						<div class="formulaire" >
							<form action="ajout_facture.php" method="POST">
								<label for="NumProduit">Numéro de produit : </label><br/><input type="number" name="NumProduit" required/><br/><br/>
								<label for="Qte">Quantité : </label><br/><input type="number" name="Qte" required/><br/><br/>
								<input type="submit" value="Valider" />
							</form>
						</div>
				<a href="header.php">Retour accueil</a>
</body>
