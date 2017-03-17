<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=facturef2b', 'root', 'ludus');
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}
	$bdd -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	/* requête permettant de rentrer les données d'un nouveau produit dans la base de donnée */
	
	if(isset($_POST['Des'])){
		$Des = $_POST['Des'];
	}
	if(isset($_POST['PUHT'])){
		$PUHT = $_POST['PUHT'];
	}
	$req = $bdd->prepare('INSERT INTO produits(Des, PUHT) VALUES (:Des, :PUHT)');
    
	$req->execute(array(
	'Des' => $_POST['Des'],
	'PUHT' => $_POST['PUHT']));

	$req->closeCursor();
    header('Location: Ajout.php');	



?>