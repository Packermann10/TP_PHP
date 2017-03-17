<form method="post" action="">

    <legend>Se connecter</legend>

    <div class="form-group">
      <label class="col-lg-2 control-label">login</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="pseudo" placeholder="pseudo">
      </div>
    </div><br/><br/><br/>

    <div class="form-group">
      <label class="col-lg-2 control-label">Mot de passe</label>
      <div class="col-lg-10">
        <input type="password" class="form-control" name="password" placeholder="password">
      </div>
    </div>

<br/><br/><center><button type="submit" name="submit" class="btn btn-primary"><a href="Ajouter_CLient.php">Se connecter</a></button></center>
</form>

<?php
	
	/* requête qui récupère les username et les password inscris dans la base de donnée pour permettre à un utilisateur de se connecter */

	session_start();		


	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=facturef2b', 'root', 'ludus');
	}
	catch (Exception $e)
	{
	        die('Erreur : ' . $e->getMessage());
	}


	if (isset($_POST['pseudo'])){
		$username = $_POST['pseudo'];
	}
	if (isset($_POST['password'])){
		$password = $_POST['password'];
	}


	$sth = $bdd->prepare('SELECT pseudo, password FROM membre WHERE pseudo = :pseudo AND password = :password; ');


	$sth->bindParam (":pseudo", $pseudo); 
	$sth->bindParam (":password", $password); 



	$sth->execute();
	

	$user = $sth->fetch(PDO::FETCH_ASSOC);
	$sth->closeCursor();


	if(isset($user["pseudo"]) && /*($user["login"] != "") &&*/(isset($_POST['submit']))){
		

		$_SESSION['pseudo'] = $username;
		

		
		header('Location: Ajouter_client.php');
		
	}else{
		// Je déclenche une erreur
		echo'nom d\'utilisateur ou mot de passe erroné';
	}

?>
