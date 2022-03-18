<?php

class Magicien extends Personnages
{

    private int $idPersonnage = 5;
    protected int $magie = 25;
    protected string $nom = "Magicien";

    // réécriture d'une constante protégée ok (comme les publiques)
    protected const ENDURANCE = 500;

    private const INTELL = 1000;


    public function __construct(){
        /*
         * Méthodes protégées (protected) donc héritées
         */
        echo $this->viewIntell()."<hr>";
        // viewEndurence réécrite, donc avec la valeur 500
        echo $this->viewEndurance()."<hr>";
        // viewEndurence venant du parent avec la valeur 800
        echo parent::viewEndurance()."<hr>";

        // impossible d'utiliser un méthode privée (private) venant du parent, ici elle est réécrite
         echo $this->privateMethode()."<hr>";
        //Impossible de récupérer celle du parent, car en private, echo parent::privateMethode()."<hr>";

    }

    // une méthode protégée venant du parent  est passée à l'enfant mais peut être réécrite, dans ce cas, l'utilisation du sell::ENDURANCE var permettre de récupérer celui récrit dans l'enfant
    protected function viewEndurance(){
        return self::ENDURANCE;
    }
    // réécriture d'une méthode private venant du parent
    private function privateMethode(){
        return self::INTELL;
    }

    // surcharge de frapper 2
    public function frapper2(object $autre)
    {
        parent::frapper2($autre);// on garde le frapper2 du parent
        // mais on ajoute la magie
        echo $autre->nom." se transforme en grenouille<br>";
    }
    // écrasement de frapper 3
    public function frapper3(object $autre){
        echo $this->nom." dit: 'fait kwaaaaa !' à {$autre->nom}<br>";
    }
}