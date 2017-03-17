<?php

try {
	
   $bdd = new PDO('mysql:host=localhost;dbname=facturef2b', 'root', 'ludus');
  }
  catch (Exception $e) {
	die('erreur : ' . $e -> getMessage());
  }
  /*requête permettant de supprimer les données d'un client lié au NumClient entré par l'utilisateur */
  
	if (isset($_GET['NumClient']) && !empty($_GET['NumClient'])) {
		
		$NumClient = $_GET['NumClient'];
		$sql = "DELETE FROM client WHERE `client`.`NumClient` = :NumClient";
		$q = array('NumClient' => $NumClient);
		$req = $bdd -> prepare($sql);
		$req -> execute($q);
		
	$req->closeCursor();
	header('Location: SupprCli.php');

	}

?>