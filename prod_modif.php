<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=facturef2b', 'root', 'ludus');
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}

	/*if(isset($_POST['Des'])){
		$Des = $_POST['Des'];
	}
	if(isset($_POST['PUHT'])){
		$PUHT = $_POST['PUHT'];
	}
	if(isset($_POST['NumProduit'])){
		$NumProduit = $_POST['NumProduit'];
	}
	*/
	
	//modifie les valeurs de la table produits
	
	$NewDes = $_POST['Des'];
	$NewPUHT = $_POST['PUHT'];
	$Des = $_POST['Des'];
	
	//$req = $bdd->prepare("UPDATE produits SET Des = :NewDes, PUHT = :NewPUHT WHERE Des = :Des"); aucun message d'erreur mais n'effectue pas la modification
	$req = $bdd->prepare("UPDATE produits SET Des = :NewDes, PUHT = :NewPUHT WHERE NumProduit = '$NumProduit'"); /* Compile correctement mais ne fait rien*/
	$req->execute(array(
	'NewDes' => $NewDes,
	'NewPUHT' => $NewPUHT,
	'NumProduit' => $NumProduit));
	
	$req->closeCursor();
    header('Location: Ajout.php');	


	

?>