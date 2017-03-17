<!doctype html>	
<html lang="fr">
<head>
<link rel="stylesheet" type="text/css" media="screen" href="style.css" />
	<meta charset="utf-8">
	<title>Site Web TP3</title>
</head>
				<h1>Modification d'un Client</h1><br/>
	<br>
<?php include('header.php'); ?>

<!-- permet au client de choisir les données du client qu'il veut modifier grâce au NumClient !-->

<body>

						<h3 class="panel-title">Modification d'un Client </h3>
						<div class="formulaire" >
							<form action="modif_client.php" method="GET">
								<label for="NumClient">Numéro de Client : <br/></label><br/><input type="text" name="NumClient" required /><br/><br/>
								<input type="submit" value="Modifier" /><a href="modif_client.php" /></a>
							</form>
						</div>
				<a href="header.php">Retour accueil</a>
</body>