<!doctype html>	
<html lang="fr">
<head>
<link rel="stylesheet" type="text/css" media="screen" href="style.css" />
	<meta charset="utf-8">
	<title>Site Web TP3</title>
</head>
				<h1>Suppression d'un Produit</h1><br/>
	<br>
<?php include('header.php'); ?>

 <!-- permet à l'utilisateur de choisir quel produit il veut supprimer !-->
<body>

						<h3 class="panel-title">Suppression d'un Produit </h3>
						<div class="formulaire" >
							<form action="SupprimProd.php" method="GET">
								<label for="NumProduit">Numéro de Produit : <br/></label><br/><input type="text" name="NumProduit" required /><br/><br/>
								<input type="submit" value="Supprimer" />
							</form>
						</div>
				<a href="header.php">Retour accueil</a>
</body>