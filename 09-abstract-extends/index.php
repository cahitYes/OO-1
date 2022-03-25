<?php
require_once "modele/MyPDO.php";
require_once "modele/PersonnageManager.php";
require_once "modele/Personnage.php";
require_once "config.php";
/*
try {
    $connectPDO = new PDO(DB_TYPE . ':dbname=' . DB_NAME . ';host=' . DB_HOST . ';charset=' . DB_CHARSET . ';port=' . DB_PORT, DB_LOGIN, DB_PWD);
} catch (Exception $e) {
    die($e->getMessage());
}

*/
try {
    $connectMyPDO = new MyPDO(DB_TYPE . ':dbname=' . DB_NAME . ';host=' . DB_HOST . ';charset=' . DB_CHARSET . ';port=' . DB_PORT, DB_LOGIN, DB_PWD, null,production: PROD);
} catch (Exception $e) {
    die($e->getMessage());
}
$PersonnageManager= new PersonnageManager($connectMyPDO);

var_dump($connectMyPDO);




?>