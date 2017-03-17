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
	
	/* requête permettant de rentrer les données d'un nouveau client dans la base de donnée */
	
	if(isset($_POST['NomClient'])){
		$NomClient = $_POST['NomClient'];
	}
	if(isset($_POST['PrenomClient'])){
		$PrenomClient = $_POST['PrenomClient'];
	}
	if(isset($_POST['AdresseClient'])){
		$AdresseClient = $_POST['AdresseClient'];
	}
	if(isset($_POST['Cp'])){
		$Cp = $_POST['Cp'];
	}
	if(isset($_POST['VilleClient'])){
		$VilleClient = $_POST['VilleClient'];
	}
	if(isset($_POST['PaysClient'])){
		$PaysClient = $_POST['PaysClient'];
	}
	$req = $bdd->prepare('INSERT INTO client(NomClient, PrenomClient, AdresseClient ,VilleClient ,Cp, PaysClient) VALUES (:NomClient, :PrenomClient, :AdresseClient, :VilleClient, :Cp,:PaysClient)');

    $req->execute(array(
    	'NomClient' => $_POST['NomClient'],
    	'PrenomClient' => $_POST['PrenomClient'],
		'AdresseClient' => $_POST['AdresseClient'],
		'VilleClient' => $_POST['VilleClient'],
		'Cp' => $_POST['Cp'],
		'PaysClient' => $_POST['PaysClient']));

    $req->closeCursor();
    header('Location: Ajouter_Client.php');	


?>