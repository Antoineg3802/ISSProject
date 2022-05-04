# ISSProject

## Antoine GUERIN / Orian MAILLOT

### Description :
   Site internet récupérant toute les 5 secondes les cordonnées de l’ISS.
  Ces coordonnées seront ensuite affichées sur une carte de la terre avec un pointeur précis représentant la position exacte de l’ISS. 
  Traqueur de l'ISS avec persistance des marqueurs seulement si l'utilisateur est connecté.


### Description technique :
  Nous utiliserons [ISS Location Now](http://api.open-notify.org) pour les coordonnées de l’ISS.
  Nous utiliserons l’API d’Open Street Map pour afficher un pointeur précis sur une carte de la terre.


### Comment faire :
  Nous réaliserons une base de données contenant la trajectoire de l’ISS et les utilisateurs.
  Nous réaliserons une commande qui s’exécutera toutes les XX minutes et qui enverra toutes les informations dans la base de données.
  Nous réaliserons un petit design du site pour avoir un rendu agréable et joli.


### Problèmes rencontrés :
  Le développement du  site en meme temps que les autres projets nous a laissé moins de temps que nous aurions voulu passer sur le projet


### Pistes D'amelioration :
  Etant donné l'avancée du site nous avons pas mal de pistes d'amélioration dont nous n'avons du coup pas eu le temps de se pancher comme :
 * Sauvegarde des précedentes positions de l'ISS via un script powershell ou bash dans la base de données pour avoir un historique plus fournis
 * Le front : nous ne sommes pas designer donc le site est pasforcément très très joli 


### Procédure d'installation
* Avoir Composer d'installer et php version 8.1 minimum
* `git clone https://github.com/Antoineg3802/ISSProject.git`
* Configurez votre BDD dans le fichier `.env`
* Dans un terminal `composer update` puis `php bin/console make:migration` puis `php bin/console doctrine:migrations:migrate`
* Puis effectuez `composer start` et naviguez sur notree site en toute liberté !
