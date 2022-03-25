<?php
require_once "config.php";
require_once "model/MyPDO.php";
require_once "model/Personnage.php";
require_once "model/PersonnageManager.php";

// tentative de connexion à notre DB avec la classe native PDO
try {
    $connectPDO = new PDO(DB_TYPE . ':dbname=' . DB_NAME . ';host=' . DB_HOST . ';charset=' . DB_CHARSET . ';port=' . DB_PORT, DB_LOGIN, DB_PWD);
} catch (Exception $e) {
    die($e->getMessage());
}

// tentative de connexion à notre DB avec notre classe étendue de PDO : MyPDO
try {
    $connectMyPDO = new MyPDO(DB_TYPE . ':dbname=' . DB_NAME . ';host=' . DB_HOST . ';charset=' . DB_CHARSET . ';port=' . DB_PORT, DB_LOGIN, DB_PWD, null, );
} catch (Exception $e) {
    die($e->getMessage());
}

var_dump($connectPDO,$connectMyPDO);

?>
