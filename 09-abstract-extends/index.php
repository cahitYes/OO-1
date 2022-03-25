<?php
<<<<<<< HEAD
require_once "modele/MyPDO.php";
require_once "modele/PersonnageManager.php";
require_once "modele/Personnage.php";
require_once "config.php";
/*
=======
require_once "config.php";
require_once "model/MyPDO.php";
require_once "model/Personnage.php";
require_once "model/PersonnageManager.php";

/* tentative de connexion à notre DB avec la classe native PDO
>>>>>>> 29cf8a288bffea8d13d3e654576bfdba0bf20849
try {
    $connectPDO = new PDO(DB_TYPE . ':dbname=' . DB_NAME . ';host=' . DB_HOST . ';charset=' . DB_CHARSET . ';port=' . DB_PORT, DB_LOGIN, DB_PWD);
} catch (Exception $e) {
    die($e->getMessage());
}
<<<<<<< HEAD

*/
try {
    $connectMyPDO = new MyPDO(DB_TYPE . ':dbname=' . DB_NAME . ';host=' . DB_HOST . ';charset=' . DB_CHARSET . ';port=' . DB_PORT, DB_LOGIN, DB_PWD, null,production: PROD);
} catch (Exception $e) {
    die($e->getMessage());
}
$PersonnageManager= new PersonnageManager($connectMyPDO);

var_dump($connectMyPDO);
=======
*/

// tentative de connexion à notre DB avec notre classe étendue de PDO : MyPDO
try {
    $connectMyPDO = new MyPDO(DB_TYPE . ':dbname=' . DB_NAME . ';host=' . DB_HOST . ';charset=' . DB_CHARSET . ';port=' . DB_PORT, DB_LOGIN, DB_PWD, null, PROD);
} catch (Exception $e) {
    die($e->getMessage());
}

// on va instancier le manager de Personnage avec notre instance de MyPDO
$PersonnageManager = new PersonnageManager($connectMyPDO);

/* Le manager veut une connexion de type MyPDO !
$PersonnageManager2 = new PersonnageManager($connectPDO);
*/
echo "<h3>Surcharge de PDO grâce à MyPDO</h3><p>Utilisation de MyPDO dans le manager pour ne pouvoir utiliser que MyPDO pour travailler sur notre code (plugin, CMS, ...)";
var_dump($connectMyPDO,$PersonnageManager);

echo"<h3>Utilisation d'un query, ne fonctionne plus si on écrase la méthode query de PDO</h3>";
try {
    $PersonnageManager->SelectAllPersonnage();
}catch(Exception $e){
    echo $e->getMessage();
}
echo"<h3>Modification en requête préparée, va fonctionner</h3>";
$recup = $PersonnageManager->SelectAllMyPersonnage();

var_dump($recup);

>>>>>>> 29cf8a288bffea8d13d3e654576bfdba0bf20849




<<<<<<< HEAD
?>
=======
>>>>>>> 29cf8a288bffea8d13d3e654576bfdba0bf20849
