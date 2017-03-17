<?php

try {
	
   $bdd = new PDO('mysql:host=localhost;dbname=facturef2b', 'root', 'ludus');
  }
  catch (Exception $e) {
	die('erreur : ' . $e -> getMessage());
  }
  /* requête permettant de supprimer les données de la facture liée au NumFacture entré par l'utilisateur */
  
	if (isset($_GET['NumFacture']) && !empty($_GET['NumFacture'])) {
		
		$NumFacture = $_GET['NumFacture'];
		$sql = "DELETE FROM facture WHERE `facture`.`NumFacture` = :NumFacture";
		$q = array('NumFacture' => $NumFacture);
		$req = $bdd -> prepare($sql);
		$req -> execute($q);
		
	$req->closeCursor();
	header('Location: sup_fac.php');

	}

?>