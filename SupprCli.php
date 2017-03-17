<!doctype html>	
<html lang="fr">
<head>
<link rel="stylesheet" type="text/css" media="screen" href="style.css" />
	<meta charset="utf-8">
	<title>Site Web TP3</title>
</head>
				<h1>Suppression d'un Client</h1><br/>
	<br>
<?php include('header.php'); ?>

<!-- Permet à l'utilisateur de  choisir quel Client il veut supprimer de la base de donnée grâce au NumClient!-->
<body>

						<h3 class="panel-title">Suppression d'un Client </h3>
						<div class="formulaire" >
							<form action="SupprimeCli.php" method="GET">
								<label for="NumClient">Numéro de Client : <br/></label><br/><input type="text" name="NumClient" required /><br/><br/>
								<input type="submit" value="Supprimer" />
							</form>
						</div>
				<a href="header.php">Retour accueil</a>
</body>