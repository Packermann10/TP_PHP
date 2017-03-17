RENDU de l'application WEB : 

-Commencer par lancer LOGIN.php pour lancer la page de connexion : il faut se connecter avec username pour le pseudo et password
pour le mot de passe

-----
Une fois connecté un menu est disponible et permet à l'utilisateur d'effectuer plusieurs choses.
------
Il peut ajouter/supprimer un client et faire de même avec un produit (fonctionnel ici)
------
Il peut ajouter/supprimer une facture (la suppression est fonctionnelle mais pas l'ajout car je n'ai pas réussi à la lier avec un NumClient)
------
Il peut modifier les données d'un produit/client (pour le produit tout se compile mais aucune modification n'est effectuée & pour le client un undefined index s'affiche et je n'ai pas su le régler)
------
Il peut accéder aux détails des factures en rentrant le numéro de facture, le numéro de client et le numéro de produit. (Je n'ai pas réussi à faire l'impression).
------
Il peut afficher tous les produits/clients inscrits dans la base de données (fonctionnel mais pas sous forme de tableau)
------
Les ajouts/suppressions/modifications fonctionnent toutes par le même système :
	-le client rentre le numéro de produit/facture/client (une liste déroulante aurait été plus ergonomique)
	-ça le redirige vers une page avec les champs à remplir
	-les actions se font lorsqu'il appuie sur le bouton.
-----

La page inscription.php est une page permettant de rentrer un nouveau pseudo/mot de passe (hashé), l'insertion se fait via la page Connect.php.