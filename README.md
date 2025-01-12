# Application de Gestion de Contacts

Cette application Symfony permet de gérer des contacts, y compris leurs informations de base (nom, prénom, téléphone) ainsi que des champs personnalisés. L'application permet également la gestion des photos, des groupes de contacts, et offre une fonctionnalité de recherche avancée.

## Fonctionnalités principales :
- **Gestion des contacts** : Ajouter, modifier, afficher, et supprimer des contacts.
- **Ajout de champs personnalisés** : Vous pouvez ajouter des champs personnalisés pour chaque contact (par exemple, adresse, date d'anniversaire, etc.).
- **Téléchargement de photos** : Chaque contact peut avoir une photo associée.
- **Gestion des groupes** : Les contacts peuvent être organisés en groupes (par exemple, "famille", "bureau").
- **Recherche avancée** : Recherchez des contacts par différents critères (nom, prénom, téléphone, champs personnalisés).
- **Sécurité** : Protection contre les attaques CSRF pour les actions sensibles (ajout, modification, suppression).

## Prérequis

Avant de commencer, vous devez avoir installé les éléments suivants :
- **PHP 8.0 ou supérieur**
- **Composer** (pour gérer les dépendances PHP)
- **Symfony CLI** (recommandé mais non obligatoire)
- **Serveur de base de données** (MySQL ou MariaDB recommandé)

## Installation

### 1. Cloner le projet

```bash
git clone https://votre-repository.git
cd votre-dossier-projet
```

### 2. Installer les dépendances

```bash
composer install
```

### 3. Configurer la base de données

Modifiez le fichier .env (ou .env.local si vous avez des configurations spécifiques à l'environnement) pour configurer la connexion à la base de données.

Exemple pour MySQL :

```bash
Copier le code
DATABASE_URL="mysql://username:password@localhost:3306/nom_de_votre_base"
```

### 4. Créer la base de données et les tables

Exécutez les commandes suivantes pour créer la base de données et exécuter les migrations :

```bash
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
```
### 5. Configurer le répertoire pour les photos
L'application permet de télécharger des photos pour chaque contact. Assurez-vous que le répertoire public/uploads/photos existe et que votre serveur a les permissions nécessaires pour y écrire des fichiers.

Créez ce répertoire manuellement si nécessaire :

```bash
mkdir -p public/uploads/photos
```
Utilisation
Démarrer le serveur Symfony
Pour démarrer l'application en mode développement, exécutez :

```bash
symfony serve
```
Ensuite, ouvrez votre navigateur et allez à l'adresse suivante :
```arduino
http://127.0.0.1:8000
```


## Fonctionnalités disponibles
- Page d'accueil : L'application affiche la liste de tous les contacts avec la possibilité de les ajouter, modifier ou supprimer.
- Ajouter un contact : Vous pouvez ajouter un nouveau contact avec des informations de base comme le nom, le prénom, le numéro de téléphone, l'email, et une photo.
- Modifier un contact : Vous pouvez modifier les informations d'un contact existant.
- Supprimer un contact : Vous pouvez supprimer un contact de la base de données.
- Recherche : Vous pouvez rechercher un contact en fonction du nom, prénom, numéro de téléphone, ou des champs personnalisés.

## Routes disponibles
Voici les principales routes de l'application :

- Page d'accueil : /
- Liste des contacts : /contact
- Ajouter un contact : /contact/new
- Détails d'un contact : /contact/{id}
- Modifier un contact : /contact/{id}/edit
- Supprimer un contact : /contact/{id}
- Liste des groupes   :  /group
- Modifier un group   :  /group/{id}/edit

## Gestion des champs personnalisés
L'application permet d'ajouter des champs personnalisés pour chaque contact. Vous pouvez ajouter des informations supplémentaires comme des adresses, des dates d'anniversaire, ou toute autre information pertinente.

## Auteurs

https://github.com/Gbane26/contacts-manager.git