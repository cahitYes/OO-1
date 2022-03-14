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
<?php
// Instantiation

try {
// erreur
    $joe = new Personnage(null, "Joe", 10, 25.3, 1, 0, 1);
}catch(Exception $e){
    // affichage de l'erreur
    echo "<hr>".$e->getMessage()."<hr>";
}

$joel = new Personnage(null, "Joel", 10, 25.3, 1, 0, 1);
$mahmoud = new Personnage(null, "Mahmoud", 12, 21.8, 1, 0, 1);
// ne fonctionne que parce qu'on a mis un __toString()
echo $joel;
echo "<hr>$mahmoud<hr>";

// on tente d'insérer Joël
$persoManager->insertPersonnage($joel);

var_dump($db, $persoManager, $joel, $mahmoud);

?>
</body>

</html>