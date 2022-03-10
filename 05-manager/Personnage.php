<?php

class Personnage
{
    // Attributs ou propriétés, en général toujours private (ou protected qu'on verra lors des extends) - A partir de PHP 7.4, on type nos attributs : https://www.php.net/manual/fr/migration74.new-features.php
    private int $idPersonnage;
    private string $nom;
    private int $forcePerso;
    private float $degats;
    private int $niveau;
    private int $experience;
    private int $vie;

    // constantes Modificateur de visibilité des constantes de classe, à partir de PHP 7.1 : https://www.php.net/manual/fr/language.oop5.constants.php
    public const VIE_DE_BASE = 1000;

    // méthodes

}
