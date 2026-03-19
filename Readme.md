# Jeu du Pendu en TDD

Ce projet implémente le jeu classique du **Pendu** en PHP, en suivant une approche de **Test-Driven Development (TDD)**.  
L’objectif est de fournir une base solide et testée pour un jeu du Pendu, avec une séparation claire des responsabilités entre la gestion des mots et la logique de la partie.

---

## Fonctionnalités

- Sélection aléatoire d’un mot à deviner à partir d’un dictionnaire.
- Gestion du nombre de tentatives restantes (7 par défaut).
- Affichage du mot avec les lettres devinées et des tirets pour les lettres manquantes.
- Prise en compte des propositions de lettres (correctes ou incorrectes).
- Gestion des doublons : les lettres déjà proposées ne décomptent pas de tentative.
- Détection automatique de la victoire ou de la défaite.
- Gestion de la casse : les lettres proposées sont systématiquement converties en minuscules.

---

## Technologies Utilisées

- **PHP 8.0+**
- **PHPUnit 10+** pour les tests unitaires
- **Composer** pour la gestion des dépendances et l’autoloading

---

## Installation

 Cloner le dépôt :

 ## Installer les dépendances Composer :

 composer install

 ## Lancer les Tests

 ./vendor/bin/phpunit
