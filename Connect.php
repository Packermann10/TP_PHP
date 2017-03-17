<?php
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=facturef2b', 'root', 'ludus');
	}
	catch (Exception $e)
	{
	        die('Erreur : ' . $errors->getMessage());
	}

	$bdd -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	/* requête pour rentrer un nouvel utilisateur dans la base de donnée */
	
	if(isset($_POST['pseudo'])){
		$pseudo = $_POST['pseudo'];
	}
	if(isset($_POST['password'])){
		$password = sha1($_POST['password']);
	}
		
	//insertion des données
	$req = $bdd->prepare('INSERT INTO membre(pseudo, password) VALUES(:pseudo, :password)');
	
	$req->execute(array(
		'pseudo' => $_POST['pseudo'],
		'password' => sha1($_POST['password']))); //hashage du password
		$req->closeCursor();
		header('Location : LOGIN.php');
?>