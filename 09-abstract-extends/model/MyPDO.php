<?php
// classe étendue de PDO
class MyPDO extends PDO
{

    // surcharge du constructeur avec l'ajout de l'argument $production
    public function __construct(string $dsn,string|null $username,string|null $password,array|null $options, bool $production=true)
    {
        // chargement du constructeur parent (qui vient de PDO)
        parent::__construct($dsn, $username, $password, $options);

        // si nous sommes en production
        if($production){
            // nous désactivons l'affichage d'erreur
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
        }
    }


}