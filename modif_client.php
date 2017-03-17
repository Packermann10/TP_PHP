<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=facturef2b', 'root', 'ludus');
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}

 /* requête pour modifier les données du client voulu */
 /*
	if(isset($_POST['NomClient'])){
		$NewNom = $_POST['NewNom'];
	}
	if(isset($_POST['PrenomClient'])){
		$NewPrenom = $_POST['NewPrenom'];
	}
	if(isset($_POST['AdresseClient'])){
		$NewAdr = $_POST['NewAdr'];
	}
	if(isset($_POST['Cp'])){
		$NewCp = $_POST['NewCp'];
	}
	if(isset($_POST['VilleClient'])){
		$NewVille = $_POST['NewVille'];
	}
	if(isset($_POST['PaysClient'])){
		$NewPays = $_POST['NewPays'];
	}
	
	if(isset($_POST['NumClient'])){
		$NumClient = $_POST['NumClient'];
	}
   */
	$NewNom = $_POST['NomClient'];
	$NewPrenom = $_POST['PrenomClient'];
	$NewAdr = $_POST['AdresseClient'];
	$NewCp = $_POST['Cp'];
	$NewVille = $_POST['VilleClient'];
	$NewPays = $_POST['PaysClient'];
	$NumClient = $_POST['NumClient'];

	/*$req = $bdd->prepare("UPDATE client SET NomClient = :NewNom,, PrenomClient = :NewPrenom, AdresseClient = :NewAdr,
		Cp = :NewCp, VilleClient = :NewVille, PaysClient = :NewPays WHERE NumClient = :NumClient"); aucun message d'erreur mais n'effectue pas la modification */
	$req = $bdd->prepare("UPDATE client SET NomClient = :NewNom, PrenomClient = :NewPrenom, AdresseClient = :NewAdr,
		Cp = :NewCp, VilleClient = :NewVille, PaysClient = :NewPays WHERE NumClient = :NumClient");
	$req->execute(array(
	'NomClient' => $_POST['NewNom'],
	'NewPrenom' => $NewPrenom,
	'NewAdr'=> $NewAdr,
	'NewCp' => $NewCp,
	'NewVille' => $NewVille,
	'Newpays' => $Newpays,
	'NumClient' => $NumClient));
	
	$req->closeCursor();