<?php
namespace App;

class Voiture
{

    public $marque;
    public $couleur;
    private $distance;
    private $temps;

    public function __construct(string $marc, string $color)
    {
        $this->marque = $marc;
        $this->couleur = $color;
    }


    public function getTemps()
    {
        return $this->temps;
    }
    public function setTemps($temps)
    {
        return $this->temps = $temps;
    }

    //////
    // public function setTemps($temps)
    //{$this->temps = $temps;
    // return $this;
    //}

    public function getDistance()
    {

        return $this->distance;
    }
    public function setDistance($dist)
    {
        $this->distance = $dist;
        return $this->distance;
    }



    public function infosVoiture()
    {

        echo "<li> la couleur est    " . $this->couleur . "  </li> ";
        echo "<li>la marque est    $this->marque </li>";
    }

    private function calculeVitesse()
    {
        $vitesse = null;
        $vitesse = $this->distance / $this->temps;
        return $vitesse;
    }
    // fonction qui calcule la vitesse de la voiture private 
    // fonction qui affiche la vitesse public "votre vitesse est de $vitesse KM/H"

    public function afficheVitesse()
    {
        echo "votre vitesse est de " . $this->calculeVitesse() . "KM/H";
    }
}
