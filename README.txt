RENDU de l'application WEB : 

-Commencer par lancer LOGIN.php pour lancer la page de connexion : il faut se connecter avec username pour le pseudo et password
pour le mot de passe

-----
Une fois connect� un menu est disponible et permet � l'utilisateur d'effectuer plusieurs choses.
------
Il peut ajouter/supprimer un client et faire de m�me avec un produit (fonctionnel ici)
------
Il peut ajouter/supprimer une facture (la suppression est fonctionnelle mais pas l'ajout car je n'ai pas r�ussi � la lier avec un NumClient)
------
Il peut modifier les donn�es d'un produit/client (pour le produit tout se compile mais aucune modification n'est effectu�e & pour le client un undefined index s'affiche et je n'ai pas su le r�gler)
------
Il peut acc�der aux d�tails des factures en rentrant le num�ro de facture, le num�ro de client et le num�ro de produit. (Je n'ai pas r�ussi � faire l'impression).
------
Il peut afficher tous les produits/clients inscrits dans la base de donn�es (fonctionnel mais pas sous forme de tableau)
------
Les ajouts/suppressions/modifications fonctionnent toutes par le m�me syst�me :
	-le client rentre le num�ro de produit/facture/client (une liste d�roulante aurait �t� plus ergonomique)
	-�a le redirige vers une page avec les champs � remplir
	-les actions se font lorsqu'il appuie sur le bouton.
-----

La page inscription.php est une page permettant de rentrer un nouveau pseudo/mot de passe (hash�), l'insertion se fait via la page Connect.php.