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


    public function insertPersonnage(Personnage $item): bool
    {
        // request
        $sql = "INSERT INTO `personnage`(`idPersonnage`, `nom`, `forcePerso`, `degats`, `niveau`, `experience`, `vie`) VALUES (?,?,?,?,?,?,?)";
        // requête préparée
        $prepare = $this->connection->prepare($sql);

        try{
            $prepare->bindValue(1,$item->getIdPersonnage(),PDO::PARAM_INT);
            $prepare->bindValue(2,$item->getNom(),PDO::PARAM_STR);
            $prepare->bindValue(3,$item->getForcePerso(),PDO::PARAM_INT);
            $prepare->bindValue(4,$item->getDegats());
            $prepare->bindValue(5,$item->getNiveau(),PDO::PARAM_INT);
            $prepare->bindValue(6,$item->getExperience(),PDO::PARAM_INT);
            $prepare->bindValue(7,$item->getVie(),PDO::PARAM_INT);
            $prepare->execute();

        }catch(Exception $e){
            echo "Echec lors de l'insertion : ".$e->getMessage();
            return false;
        } finally {
            return true;
        }

    }

    public function SelectAllPersonnage(){

    }

    public function SelectPersonnage(Personnage $item){

    }
}