<!doctype html>	
<html lang="fr">
<head>
<link rel="stylesheet" type="text/css" media="screen" href="style.css" />
	<meta charset="utf-8">
	<title>Site Web TP3</title>
</head>
				<h1>Modification de produit</h1><br/>
	<br>
<?php include('header.php'); ?>

<!-- Permet à l'utilisateur de choisir quel produit il veut modifier !-->
<body>

						<h3 class="panel-title">Modification produit </h3>
						<div class="formulaire" >
							<form action="prod_modif.php" method="POST">
								<label for="NumProduit">Numéro du produit : <br/></label><br/><input type="text" name="NumProduit" required /><br/><br/>
								<input type="submit" value="modifier" /><a href="modif_produit.php"></a>
							</form>
							
						</div>
				<a href="header.php">Retour accueil</a>
</body>