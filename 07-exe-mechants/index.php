<?php
// chargement des dépendances
require_once "config.php";
require_once "Mechant.php";

// tentative de connexion à notre DB
try {
    $db = new PDO(DB_TYPE . ':dbname=' . DB_NAME . ';host=' . DB_HOST . ';charset=' . DB_CHARSET . ';port=' . DB_PORT, DB_LOGIN, DB_PWD);
} catch (Exception $e) {
    die($e->getMessage());
}

// Instanciation de notre manager avec la connexion PDO
// $persoManager = new PersonnageManager($db);



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php
// instanciations de la classe Mechant avec new, le constructeur est donc appelé par défaut et utilisera ce qu'il y a entre parenthèse si nécessaire
$cahit = new Mechant(["nameMechant"=>"Cahit","zut"=>"DELETE "]);
$quentin = new Mechant(["nameMechant"=>"Quentin"]);

var_dump($cahit,$quentin);



?><hr>
<?php

?>
<h3>Insertion depuis un formulaire dans Mechant</h3>
<form action="" method="post" name="balek">

</form>

<h3>Affichez tous les méchants !</h3>
</body>

</html>