<!doctype html>	
<html lang="fr">
<head>
<link rel="stylesheet" type="text/css" media="screen" href="style.css" />
	<meta charset="utf-8">
	<title>Site Web TP3</title>
</head>
				<h1>Ajouter Un Client</h1><br/>
	<br>
<?php include('header.php'); ?>

<!-- Permet à l'utilisateur de rentrer les données d'un client dans la base de données !-->

<body>

						<h3 class="panel-title">Ajouter Un Client </h3>
						<div class="formulaire" >
							<form action="inser_client.php" method="POST">
								<label for="NomClient">NOM : <br/></label><br/><input type="text" name="NomClient" required /><br/><br/>
								<label for="PrenomClient">PRENOM : </label><br/><input type="text" name="PrenomClient" required/><br/><br/>
								<label for="AdresseClient">ADRESSE : </label><br/><input type="text" name="AdresseClient" required/><br/><br/>
								<label for="VilleClient">VILLE : </label><br/><input type="text" name="VilleClient" required/><br/><br/>
								<label for="Cp">CODEPOSTAL : </label><br/><input type="text" name="Cp" required/><br/><br/>
								<label for="PaysClient">PAYS : </label><br/><input type="text" name="PaysClient" required/><br/><br/>
								<input type="submit" value="Valider" />
							</form>
						</div>
				<a href="header.php">Retour accueil</a>
</body>
