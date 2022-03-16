<?php
// chargement des dépendances
require_once "config.php";
require_once "Personnage.php";
require_once "PersonnageManager.php";

// tentative de connexion à notre DB
try {
    $db = new PDO(DB_TYPE . ':dbname=' . DB_NAME . ';host=' . DB_HOST . ';charset=' . DB_CHARSET . ';port=' . DB_PORT, DB_LOGIN, DB_PWD);
} catch (Exception $e) {
    die($e->getMessage());
}

// Instanciation de notre manager avec la connexion PDO
$persoManager = new PersonnageManager($db);
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

</body>

</html>