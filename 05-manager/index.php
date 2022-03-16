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
// instanciation avec gestion du risque d'erreur
    $joe = new Personnage(null, "Joe", 10, 25.3, 1, 0, 1);
}catch(Exception $e){
    // affichage de l'erreur
    echo "<hr>".$e->getMessage()."<hr>";
}

$joel = new Personnage(null, "Joelina", 10, 25.3, 1, 0, 1);
$mahmoud = new Personnage(null, "Mahmoud", 12, 21.8, 1, 0, 1);
// ne fonctionne que parce qu'on a mis un __toString() dans Personnage pour que l'objet renvoie du texte en cas de tentative d'affichage
echo $joel;
echo "<hr>$mahmoud<hr>";

// on tente d'insérer Joël, on a ajouté un message d'erreur au cas où ça ne fonctionne pas (retour bool mais avec un echo en cas d'échec)
$insertJoel = $persoManager->insertPersonnage($joel);
if($insertJoel===true){
    echo $joel->getNom()." est bien insérée dans notre table";
}else{
    // duplicate content ()
    if($insertJoel==23000){
        echo $joel->getNom()." : Ce nom d'utilisateur est déjà pris!";
    }else{
        echo "Erreur inconnue";
    }
}
// insertion de Mahmoud
$persoManager->insertPersonnage($mahmoud);

// on récupère mes Personnage de la DB
$allPersonnage = $persoManager->SelectAllPersonnage();

// affichage des personnages
var_dump($allPersonnage);

// on récupère un personnage de la DB
$onePersonnage = $persoManager->SelectPersonnage(1,"Joel");
var_dump($onePersonnage);

// on récupère un personnage de la DB mais qui ne fonctionne pas
$onePersonnage = $persoManager->SelectPersonnage(2,"Joel");
var_dump($onePersonnage);

var_dump($db, $persoManager, $joel, $mahmoud);

echo "<hr> On veut récupérer Mahmoud, mais le retransformer en instance de Personnage<hr>";

$onePersonnage = $persoManager->SelectPersonnage(11,"Mahmoud");
if(is_array($onePersonnage)){
    $recupMahmoud = new Personnage(
            $onePersonnage['idPersonnage'],
            $onePersonnage['nom'],
            $onePersonnage['forcePerso'],
            $onePersonnage['degats'],
            $onePersonnage['niveau'],
            $onePersonnage['experience'],
            $onePersonnage['vie'],

    );
    var_dump($recupMahmoud);
}


?>
</body>

</html>