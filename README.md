# Projet-Soutenance

## Pour installer le projet : 

Télécharger le projet :
```bf
cd {{votre dossier}}
git clone https://github.com/letalex71/Projet-Soutenance.git
```

Une fois le projet cloner, il faut installer les dépendances (Attention, cette étape peut être très longue !) :
```bf
composer update
```
___
>### Si erreur du genre : 
```yaml
PHP Fatal error:  Allowed memory size of 1610612736 bytes exhausted (tried to allocate 67108864 bytes) in phar://C:/ProgramData/ComposerSetup/bin/composer.phar/src/Composer/DependencyResolver/Solver.php on line 223

Fatal error: Allowed memory size of 1610612736 bytes exhausted (tried to allocate 67108864 bytes) in phar://C:/ProgramData/ComposerSetup/bin/composer.phar/src/Composer/DependencyResolver/Solver.php on line 223

Check https://getcomposer.org/doc/articles/troubleshooting.md#memory-limit-errors for more info on how to handle out of memory errors
```
>Aller dans le `php.ini` et changer (temporairement) l'entrée `memory_limit = 128M` en `memory_limit = -1`. `-1` voulant dire `illimité`. Remettre la limite par défaut une fois le projet près à être lancé !
___
Ensuite :
```
composer self-update
composer install
```

Puis vider les cache (par précaution):
```bf
php bin/console cache:clear --env=prod
php bin/console cache:clear --env=dev
```


Et enfin, terminer (normalement `composer install` a déjà fait cette étape) par :
```bf
php bin/console assets:install
```

Maintenant que le projet est bien installer, créer la BDD : 

> facultatif : Si la BDD existe déjà, vous pouvez la supprimer, sinon passer à l'étape suivante :

```bf 
php bin/console doctrine:database:drop --force
```
Pour bien finaliser la suppression, il faut également supprimer tous les fichiers de versions dans le dossier src/Migrations/ (Versionxxxxxxxxxxxxxx.php).

```bf
php bin/console doctrine:database:create
php bin/console make:migration
php bin/console doctrine:migrations:migrate
```
Voilà !

***
## MaJ 08/01/2020 : 
***
### Reboot du projet
* Possibilité de créer des comptes et se connecter
* Menu redéfini
* contenu des pages mieux rendu
* Boutons "ajouter watchlist/like" cliquables uniquement si utilisateur connecté (redirection vers /connexion sinon)
* Bundle pour de meilleurs promesses préinstallée. Documentation ici https://github.com/guzzle/promises
	
### A faire : 
* Fix : banniere lors de l'affichage d'un film/serie
* Vue des watchlist/like
* Table BDD "comments" (+ relation avec table users)
* Page "rechercher"
* Affichage des reviews
* Génération de l'affichage des commentaires sur les articles (films/series/personnes)
* Vue des personnes