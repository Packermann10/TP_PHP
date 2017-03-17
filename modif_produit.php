<!doctype html>	
<html lang="fr">
<head>
<link rel="stylesheet" type="text/css" media="screen" href="style.css" />
	<meta charset="utf-8">
	<title>Site Web TP3</title>
</head>
				<h1>Modification du produit</h1><br/>
	<br>
<?php include('header.php'); ?>

	<!-- Permet à l'utilisateur de modifier le libelle et le prix du produit voulu !-->

	<body>

						<h3 class="panel-title">Modification du produit</h3>
						<div class="formulaire" >
							<form action="prod_modif.php" method="GET">
								<label for="Des">DESIGNATION : <br/></label><br/><input type="text" name="Des" required /><br/><br/>
								<label for="PUHT">PRIX : </label><br/><input type="number" name="PUHT" required/><br/><br/>
								<input type="submit" value="Valider" />
							</form>
						</div>
				<a href="header.php">Retour accueil</a>
</body>