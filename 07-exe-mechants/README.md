# Exercice

## Importation

Importez `mechant.sql` dans PHPMyAdmin sous MariaDB

### Création des fichiers

- Mechant.php -> mapping de la table `mechant` avec 
    - Propriétés ou attributs typés et private
    - Les getters (retourne les attributs)
    - Les setters (ajoute ou modifie les attributs suivant le type)
    - Une méthode d'hydratation
    - Un constructeur qui appelle l'hydratation

- MechantManager.php
  Classe qui va sélectionner tous les `Mechants` de la DB
    - Un attribut privé, qui contiendra notre connexion PDO
    - Un constructeur qui permettra de remplir l'attribut privé avec une connexion `PDO`
    - Une méthode getMechants() qui va récupérer tous les `Mechant` de la base de donnée Ordonné par `experienceMechant` ascendant et envoyer un tableau indexé contenant des tableaux associatifs
    - Une méthode insertMechant(Mechant $lui) qui va insérer un méchant dans la DB (sauf l'id)

- Index.php
  - Affichez tous les méchants !
  - Insertion d'un méchant