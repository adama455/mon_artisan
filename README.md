# mon_artisan

Ce dépôt contient le code source et les ressources associées à votre projet Laravel. Il est utilisé pour gérer le développement, la documentation et le suivi des problèmes.

## Prérequis

Avant de commencer, assurez-vous d'avoir les éléments suivants installés sur votre système :

- PHP (version PHP 8.2.4)
- Composer (version 2.3.5)

## Installation

1. Clonez ce dépôt sur votre machine locale :
git clone https://github.com/adama455/mon_artisan.git

2. Accédez au répertoire du projet :
cd mon_artisan

3. Installez les dépendances via Composer :
composer install

4. Copiez le fichier `.env.example` et renommez-le en `.env`. Configurez les informations de votre base de données et d'autres variables d'environnement nécessaires.

5. Générez une clé d'application unique :
php artisan key:generate

6. Exécutez les migrations pour créer les tables de base de données : 
php artisan migrate


7. Lancez le serveur de développement : 
php artisan serve

