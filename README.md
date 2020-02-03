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
# MaJ 03/02/2020 :
***
###  - Du fix, du fix et encore du fix !

## Fait ces deux dernières semaines :
### Formulaire watchlist :
 - [x] système validation / message erreur
 - [x] L'implémenter dans Rechercher / pages d'affichage
 - [x] Supression de l'item quand déjà ajouté
 - [x] mettre une croix a la place du + si déjà ajouté

### Rechercher :
 - [x] Implémenter barre de recherche textuelle
 - [x] Ajax loader en bas du scroll infini

### Pages d'affichage média :
 - [x]  Ajouter présentation commentaires

### Page watchlist :
 - [x] Créer la page

### Pages "Item" :
- [x] Affichage du backdrop

### Formulaires :
- [x] Implémenter formulaires TWIG
- [x] Gestion des messages de succes
- [x] Gestion des messages d'erreur
- [x] Implémenter regex pour mot de passe > Fait + implémenté un validateur de mot de passes corrompu, mais down aujourd'hui...
- [x] CAPTCHAS !!!!!!!!!!!!!!! > Choisi la méthode HoneyPot à la place
- [x] Redirection formulaire profile
- [x] Convertir login de la version html à la version twig

Autre :
- [x] Ajouter footer
- [x] Trouver des images quand image originale non dispo
- [x] Lorem pages inutiles
- [x] Div et icones page profile
- [x] Essayer d'assombrir la div "notes, watchlist" sur le poster (accueil)
- [x] Implémenter poser par défaut si image non trouvée
- [x] Implémenter score = 0 si score "undefined"
- [x] Recherche qui n'affiche que des items pointant vers des films alors que certains résultats ne le sont pas.

## A faire :
Rechercher :
 - [ ] changer système d'ajout des films (pagination ?)

### Page watchlist :
 - [ ] Faire un affichage pour les séries
 - [ ] Améliorer le visuel
 - [ ] Améliorer réception de la watchlist (ne recevoir que film ou série par exemple)

### Formulaires :
- [ ] ajouter "mot de passe actuel" page profile > pas compris comment faire
- [ ] OAUTH

### Autre :
- [ ] Barre transversale