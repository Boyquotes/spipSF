Spip Symfony Demo
========================

Ce code permet d'acceder à vos articles et rubriques d'une BDD Spip à la fois côté front et back avec le framework Symfony.
L'authentificator a été modifié afin de gérer l'authentification avec les identifiants existants déjà dans votre table spip_auteurs(il faut ajouté une colonne roles à cette table).

Requirements
------------

  * PHP 7.1.3 or higher; 
  * une BDD de SPIP en version 3.x
  * and the [usual Symfony application requirements][2].

Installation
------------

Télécharger ce code.
Créer un fichier .env.local en copiant le .env à la racine de ce depot et adapter la ligne mysql en renseignement les informations pour se connecter à la base Spip que vous souhaitez parcourir.
$DATABASE_URL=mysql://VOTRE_LOGIN:VOTRE_PASSWORD@127.0.0.1:3306/NOM_DE_LA_BDD

Vos rubriques et articles doivent s'afficher tant sur le front que dans l'admin.

