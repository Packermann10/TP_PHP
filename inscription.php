<!doctype html>	
<html lang="fr">
<head>
<link rel="stylesheet" type="text/css" media="screen" href="style.css" />
	<meta charset="utf-8">
	<title>Site Web TP3</title>
</head>
				<h1>MDP</h1><br/>
	<br>
<?php include('header.php'); ?>


<body>

						<h3 class="panel-title">Nouvel utilisateur </h3>
						<div class="formulaire" >
							<form action="Connect.php" method="POST">
								<label for="pseudo">Pseudonyme : <br/></label><br/><input type="text" name="pseudo" required /><br/><br/>
								<label for="password">Mot de passe : </label><br/><input type="password" name="password" required/><br/><br/>
								<input type="submit" value="Valider" />
							</form>
						</div>
				<a href="header.php">Retour accueil</a>
</body>