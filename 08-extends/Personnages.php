<?php

class Personnages
{

    // Attribut privé - ne peut être modifié et lue que depuis une instance de personnage (ou une méthode publique héritée donc inclue dans personnage depuis un enfant (setter - getter)
    private int $idPersonnage = 1;
    // Attribut protégé - ne peut être modifié et lue que depuis une instance de Personnage OU depuis un enfant
    protected string $nom = "anonyme";
    // Attribut publique - peut être modifiée et lue depuis n'importe où
    public int $forcePerso = 5;

    public const VIE_DE_BASE = 1000;
    private const INTELL = 1200;
    protected const ENDURANCE = 800;



    // méthodes


    private function privateMethode(){
        return self::INTELL;
    }

    // une méthode protégée est passée à l'enfant
    protected function viewIntell(){
        return self::INTELL;
    }
    // une méthode protégée est passée à l'enfant
    protected function viewEndurance(){
        return self::ENDURANCE;
    }

    public function frapper(object $autre){
        echo $this->nom." dit: 'Tiens ça !' à {$autre->nom}<br>";
    }

    public function frapper2(object $autre){
        echo $this->nom." dit: 'Tiens ça !' à {$autre->nom}<br>";
    }
    public function frapper3(object $autre){
        echo $this->nom." dit: 'Quoi  ?!' à {$autre->nom}<br>";

    }



}
