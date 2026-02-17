# Wonmii - Mini Framework PHP Custom

Bienvenue sur **Wonmii**, une application web construite sur un mini-framework PHP développé sur mesure. Ce projet a pour but de démontrer une architecture MVC (Modèle-Vue-Contrôleur) modulaire et l'implémentation des principes de base d'un framework.

## 📋 Table des matières

- [Aperçu](#aperçu)
- [Prérequis](#prérequis)
- [Installation](#installation)
- [Structure du projet](#structure-du-projet)
- [Fonctionnalités du framework](#fonctionnalités-du-framework)
- [Personnalisation](#personnalisation)


## 🚀 Aperçu

Ce projet est une base de code pour une application web dynamique. Il utilise un routeur personnalisé, une architecture modulaire et sépare clairement la logique métier de la présentation. Il sert à la fois de démonstration technique et de point de départ potentiel pour des projets plus conséquents.

## 📦 Prérequis

- **Serveur Web** : Apache ou Nginx
- **PHP** : Version 7.4 ou supérieure
- **Base de données** : MySQL / MariaDB
- **Mod_Rewrite** : Activé sur Apache pour la réécriture d'URL (grâce au fichier `.htaccess`)

## ⚙️ Installation

1.  **Cloner le dépôt**
    ```bash
    git clone https://github.com/juniorbattle/wonformation.git
    cd wonformation
    ```

2.  **Configuration du serveur**
    - Pointez votre serveur web vers le dossier racine du projet.
    - Assurez-vous que le fichier `.htaccess` est bien pris en compte (pour Apache).

3.  **Configuration de l'application**
    - Dupliquez le fichier de configuration exemple (si existant) dans le dossier `/config` et renseignez vos paramètres de base de données et les constantes de l'application.

4.  **Base de données**
    - Importez le fichier SQL fourni (s'il existe) pour créer les tables nécessaires, ou créez vos propres modules.

## 🏗️ Structure du projet

wonformation/
├── .htaccess # Règles de réécriture Apache (URL rewriting)
├── index.php # Point d'entrée de l'application (Front Controller)
├── go.php # (Fonction à préciser - peut-être un script de tâches)
├── config/ # Fichiers de configuration (base de données, constantes)
├── core/ # Le cœur de votre mini-framework
│ ├── Controller.php # Classe de base des contrôleurs
│ ├── Model.php # Classe de base des modèles
│ ├── Router.php # Système de routage des URLs
│ └── View.php # Gestionnaire de vues/templates
├── modules/ # Les différents modules de l'application
│ └── newsletter/ # Exemple de module fonctionnel
│ ├── controllers/
│ ├── models/
│ └── views/
├── front/ # Assets publics (CSS, JS, images)
├── plugins/ # Scripts ou bibliothèques tierces
└── README.md # Ce fichier


## ✨ Fonctionnalités du framework

Le framework `core` fournit plusieurs briques essentielles :

- **Routeur** : Analyse l'URL pour déterminer quel contrôleur et quelle action exécuter.
- **Système MVC** : Sépare la logique de données (Model), la logique applicative (Controller) et l'affichage (View).
- **Modularité** : Permet de créer des modules indépendants, chacun avec son propre set de contrôleurs et de vues.
- **Gestion de base de données** : Une classe `Model` de base avec des méthodes simples pour interagir avec la base de données.
- **Sécurité de base** : Protection contre les injections SQL (via les requêtes préparées dans le Model) et gestion des entrées utilisateur.

## 🔧 Personnalisation

Pour créer votre propre module :

1.  Créez un nouveau dossier dans `modules/` (par exemple, `blog`).
2.  Créez les sous-dossiers `controllers`, `models`, `views`.
3.  Créez un contrôleur (ex: `BlogController.php`) qui étend la classe `Controller` du `core`.
4.  Définissez vos méthodes (ex: `index()`, `article()`).
5.  Créez les vues correspondantes dans le dossier `views`.
6.  Accédez à votre module via l'URL (par exemple `votre-site.com/blog/index`), le routeur s'occupera du reste.
