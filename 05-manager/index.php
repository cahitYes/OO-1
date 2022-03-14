<?php
require_once "Personnage.php";

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
    echo $joel;
    var_dump($joel,$mahmoud);
    ?>
</body>

</html>