<?php
// gestion de la table mappée Personnage
class PersonnageManager
{
    // Attributs
    private PDO $connection;

    // Méthodes

    // constructeur
    /**
     * @param PDO $connection
     */
    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }


    public function insertPersonnage(Personnage $item){

    }

    public function SelectAllPersonnage(){

    }

    public function SelectPersonnage(Personnage $item){

    }
}