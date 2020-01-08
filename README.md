# Projet-Soutenance

## Pour installer le projet : 

Télécharger le projet :
```bf
cd {{votre dossier}}
git clone https://github.com/letalex71/Projet-Soutenance.git
```

Une fois le projet cloner, il faut installer les dépendances : 
```bf
composer update
composer self-update
composer install
```

Puis vider les cache (par précaution):
```bf
php bin/console cache:clear --env=prod --no-debug
php bin/console cache:clear --env=dev --no-debug
```

Et enfin, terminer (normalement `composer install` a déjà fait cette étape) par :
```bf
php bin/console assets:install
```

Maintenant que le projet est bien installer, créer la BDD : 

```bf
php bin/console doctrine:database:create
php bin/console make:migration
php bin/console doctrine:migrations:migrate
```


***
## MaJ 08/01/2020 : 
***
### Reboot du projet
* Possibilité de créer des comptes et se connecter
* Menu redéfini
* contenu des pages mieux rendu
* Boutons "ajouter watchlist/like" cliquables uniquement si utilisateur connecté (redirection vers /connexion sinon)
	
### A faire : 
* Fix : banniere lors de l'affichage d'un film/serie
* Vue des watchlist/like
* Table BDD "comments" (+ relation avec table users)
* Page "rechercher"
* Affichage des reviews
* Génération de l'affichage des commentaires sur les articles (films/series/personnes)
* Vue des personnes