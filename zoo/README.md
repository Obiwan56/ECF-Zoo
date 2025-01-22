# Projet Laravel Zoo

# Une application de gestion de zoo développée avec Laravel, intégrant la gestion des animaux, des repas, des rapports vétérinaires, et un système de votes pour les photos des animaux.

# Technologies utilisées

# Laravel : Framework PHP moderne et flexible pour développer des applications robustes.

# MongoDB : Base de données NoSQL utilisée pour gérer les votes des photos des animaux.

# MySQL : Base de données relationnelle pour gérer les données liées aux animaux, habitats, repas, et rapports.

# XAMPP : Environnement de développement local pour exécuter PHP et MySQL facilement.

# Prérequis

# PHP 8.2+ avec les extensions PDO, JSON, et OpenSSL activées.

# Composer pour gérer les dépendances PHP.

# Laravel 10.x pour exécuter l'application.

# MongoDB 6.0 installé et configuré avec un utilisateur et une base de données actifs.

# Installation

# Clonez ce dépôt :

git clone https://github.com/Obiwan56/ECF-Zoo  
cd ECF-Zoo  

# Installez les dépendances avec Composer :

composer install  

# Configurez le fichier .env :Copiez le fichier .env.example en .env et modifiez les paramètres suivants :

Base de données MySQL :

DB_CONNECTION=mysql  
DB_HOST=127.0.0.1  
DB_PORT=3306  
DB_DATABASE=nom_de_votre_base  
DB_USERNAME=votre_utilisateur  
DB_PASSWORD=votre_mot_de_passe  

# Connexion MongoDB :

MONGO_DB_URI=mongodb://<utilisateur>:<mot_de_passe>@<hôte>:<port>/<nom_base>  

# Générez la clé de l'application :

php artisan key:generate  

# Effectuez les migrations pour créer les tables MySQL :

php artisan migrate 

# Créer le lien symbolique entre storage et public pour la gestion des images

php artisan storage:link

# Lancez le serveur local :

php artisan serve  

# Fonctionnalités principales

Gestion des animaux : création, modification, suppression et affichage.

Gestion des repas des animaux : suivi des repas quotidiens.

Gestion des rapports vétérinaires : création, modification et affichage des détails.

Système de votes : les visiteurs peuvent voter pour leur animal préféré, avec stockage dans MongoDB.

Interface utilisateur intuitive et responsive.
