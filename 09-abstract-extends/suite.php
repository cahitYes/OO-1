<?php
// dépendances
require_once "config.php";
require_once "model/MyPDO.php";
require_once "model/Personnage/Personnage.php";
require_once "model/Personnage/PersonnageManager.php";
require_once "model/Personnage/PersonnageChild/Magicien.php";

// tentative de connexion à notre DB avec notre classe étendue de PDO : MyPDO
try {
    $connectMyPDO = new MyPDO(DB_TYPE . ':dbname=' . DB_NAME . ';host=' . DB_HOST . ';charset=' . DB_CHARSET . ';port=' . DB_PORT, DB_LOGIN, DB_PWD, null, PROD);
} catch (Exception $e) {
    die($e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Suite</title>
</head>
<body>
<a href="./">Accueil</a>
<h3>Magicien est étendu de Personnage</h3>
<p>Pour interdire l'instanciation de Personnage, on va utiliser le terme abstract</p>
<?php
$Pierre = new Magicien([]);
var_dump($Pierre);
?>

</body>
</html>