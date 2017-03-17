
<!doctype html>	
<html lang="fr">
<head>
<link rel="stylesheet" type="text/css" media="screen" href="style.css" />
	<meta charset="utf-8">
	<title>Site Web TP3</title>
</head>
				<h1>Ajout d'un Produit</h1><br/>
	<br>
<?php include('header.php'); ?>

<!-- Permet à l'utilisateur de rentrer les données d'un produit dans la base de données !-->

<body>

						<h3 class="panel-title">Ajout d'un Produit </h3>
						<div class="formulaire" >
							<form action="Inser.php" method="POST">
								<label for="Des">DESIGNATION : <br/></label><br/><input type="text" name="Des" required /><br/><br/>
								<label for="PUHT">PRIX : </label><br/><input type="number" name="PUHT" required/><br/><br/>
								<input type="submit" value="Valider" />
							</form>
						</div>
				<a href="header.php">Retour accueil</a>
</body>
