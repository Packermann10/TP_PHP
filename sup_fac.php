<!doctype html>	
<html lang="fr">
<head>
<link rel="stylesheet" type="text/css" media="screen" href="style.css" />
	<meta charset="utf-8">
	<title>Site Web TP3</title>
</head>
				<h1>Suppression d'une facture</h1><br/>
	<br>
<?php include('header.php'); ?>


<!-- Permet à l'utilisateur de choisir quelle facture il veut supprimer grâce au NumFacture !-->
<body>

						<h3 class="panel-title">Suppression d'une facture) </h3>
						<div class="formulaire" >
							<form action="suppr_fac.php" method="GET">
								<label for="NumFacture">Numéro de Facture: <br/></label><br/><input type="text" name="NumFacture" required /><br/><br/>
								<input type="submit" value="Supprimer" />
							</form>
						</div>
				<a href="header.php">Retour accueil</a>
</body>