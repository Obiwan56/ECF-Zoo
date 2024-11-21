# Projet Laravel Zoo

Ce projet utilise le framework Laravel pour gérer un zoo, incluant la gestion des animaux, des repas, des rapports vétérinaires et des votes sur les photos des animaux.

## Technologies utilisées

- **Laravel** : Framework PHP pour le développement d'applications web.
- **MongoDB** : Base de données NoSQL pour stocker les votes des animaux.
- **MySQL** : Base de données relationnelle pour les autres informations liées aux animaux.
- **XAMPP** : Environnement local de développement pour PHP et MySQL.

## Prérequis

- PHP 8.2+
- Composer
- Laravel 10.x
- MongoDB 6.0

## Installation

1. Clonez ce dépôt :

   ```bash
   git clone https://github.com/Obiwan56/ECF-Zoo

2. Installation des dépendances

   - composer install
   - composer update

3. Effectuer les migrations

    - php artisan migrate

4. Lancer le serveur local

    - php artisan serve


# Lors du déploiement sur OVH, des limitations ont empêché le bon fonctionnement de MongoDB, 
# affectant notamment le système de votes. Découvert trop tard pour le rendu final de l'ECF, 
# ce problème est lié à l'hébergement. 
# Une migration vers un fournisseur comme MongoDB Atlas est envisagée pour résoudre cette incompatibilité. 
# Les fonctionnalités SQL restent pleinement opérationnelles.
