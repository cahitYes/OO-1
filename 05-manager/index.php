<?php
require_once "config.php";
require_once "Personnage.php";
require_once "PersonnageManager.php";

try{
    $db = new PDO(DB_TYPE.':dbname='.DB_NAME.';host='.DB_HOST.';charset='.DB_CHARSET.';port='.DB_PORT,DB_LOGIN,DB_PWD);
}catch(Exception $e){
    die($e->getMessage());
}

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
    $joel = new Personnage(null,"Joel",10,25.3,1,0,1);
    $mahmoud = new Personnage(null,"Mahmoud",12,21.8,1,0,1);
    // ne fonctionne que parce qu'on a mis un __toString()
    echo $joel;
    echo "<hr>$mahmoud";
    var_dump($db,$joel,$mahmoud);
    ?>
</body>

</html>