<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=facturef2b', 'root', 'ludus');
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}
/* requête permettant d'ajouter les données entrées dans la base de donnée */

	if(isset($_POST['NumClient'])){
		$NumClient = $_POST['NumClient'];
	}
	if(isset($_POST['NumFacture'])){
		$NumFacture = $_POST['NumFacture'];
	}
	if(isset($_POST['NumProduit'])){
		$NumProduit = $_POST['NumProduit'];
	}
	if(isset($_POST['Qte'])){
		$Qte = $_POST['Qte'];
	}
	$req = $bdd->prepare('INSERT INTO d_facture(NumFacture,NumProduit,Qte) VALUES (:NumFacture, :NumProduit, :Qte)');
	$req->execute(array(
	'Qte' => $_POST['Qte'],
	'NumProduit' => $_POST['NumProduit'],
	'NumFacture' => $_POST['NumFacture']));
	
	
	$req->closeCursor();
    header('Location: Ajout.php');