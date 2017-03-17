<!DOCTYPE html>
<html lang='fr'>
<head>
	<meta charset="utf-8">
	<title>Application Web</title>
	<link rel="stylesheet" href="style.css">
</head>

<h1>Rechercher</h1>
<?php include('header.php'); ?>

<body>
	
	<!-- permet à l'utilisateur de chosir quelle facture il veut afficher grâce avec les détails du client et de la facture !-->
	<h3>Rechercher</h3>

	<h3>Au choix :</h3>
	<div class="formulaire" >
	<form action="#" method="POST">  
			<p>
				<label for="client">Num client : </label><input type="text" name="client" /> 
				<br/>
				<br/>
				<label for="facture">Num Facture : </label><input type="text" name="facture" />
				<br/>
				<br/>
				<br/>
				<label for="produits">Num Produit : </label><input type="text" name="produits" />
				<br/>
				<input type="submit" value="Rechercher" />
			</p>
	</form>
	</div>

</body>
</html>

<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=facturef2b', 'root', 'ludus');
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}


	/*requête qui affiche les données du client voulu */

	if (isset($_POST['client'])){
		
		$NumClient = $_POST['client'];

		$req = $bdd->prepare("SELECT * FROM client WHERE NumClient = ?");
	   	$req -> execute(array($NumClient));
	   	while ($donnees = $req->fetch())
		{
		echo '<table>
		<tr>client</tr>
		<tr><td>Numero client : '.$donnees['NumClient'].'</td></tr>
		<tr><td>Nom : '.$donnees['NomClient'].'</td></tr>
		<tr><td>Prenom : '.$donnees['PrenomClient'].'</td></tr>
		<tr><td>Adresse : '.$donnees['AdresseClient'].'</td></tr>
		<tr><td>CP : '.$donnees['Cp'].'</td></tr>
		<tr><td>Ville : '.$donnees['VilleClient'].'</td></tr>
		<tr><td>Pays : '.$donnees['PaysClient'].'</td></tr>
		</table>';
		}

	$req->closeCursor(); 


	}
/*requête qui affiche les données de la facture voulue */

	if (isset($_POST['facture'])){
		
		$NumFacture = $_POST['facture'];

		$req = $bdd->prepare("SELECT * FROM facture, d_facture WHERE facture.NumFacture = ? AND d_facture.NumFacture = ?");
	   	$req -> execute(array($NumFacture,$NumFacture));
	   	while ($donnees = $req->fetch())
		{
		echo '<table>
		<tr>Facture</tr>
		<tr><td>Numéro facture : '.$donnees['NumFacture'].'</td></tr>
		<tr><td>Date de la Facture : '.$donnees['DateFacture'].'</td></tr>
		<tr><td>Numéro_Client : '.$donnees['NumClient'].'</td></tr>
		<tr><td>Numéro produit : '.$donnees['NumProduit'].'</td></tr>
		<tr><td>Quantité : '.$donnees['Qte'].'</td></tr>
		</table>';
		}

	$req->closeCursor(); 


	}
/*requête qui affiche les données du produit voulu */

	if (isset($_POST['produits'])){
		
		$NumProduit = $_POST['produits'];

		$req = $bdd->prepare("SELECT * FROM produit WHERE NumProduit= ?");
	   	$req -> execute(array($NumProduit));
	   	while ($donnees = $req->fetch())
		{
		echo '<table>
		<tr>Produit</tr>
		<tr><td>Numéro produit: '.$donnees['NumProduit'].'</td></tr>
		<tr><td>Libelle du Produit : '.$donnees['Des'].'</td></tr>
		<tr><td>Prix Unitaire HT : '.$donnees['PUHT'].'</td></tr>
		</table>';
		}

	$req->closeCursor(); 

	}

?>