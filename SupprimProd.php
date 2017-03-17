<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=facturef2b', 'root', 'ludus');
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}
	/* supprime les données du produit grâce au NumProduit entré au préalable */
	
	if (isset($_GET['NumProduit']) && !empty($_GET['NumProduit'])) {
		
		$NumProduit = $_GET['NumProduit'];
		$sql = "DELETE FROM produits WHERE `produits`.`NumProduit` = :NumProduit";
		$q = array('NumProduit' => $NumProduit);
		$req = $bdd -> prepare($sql);
		$req -> execute($q);
	
	
	$req->closeCursor();
    header('Location: SupprProduit.php');
	}

?>