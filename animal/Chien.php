<?php

namespace App\animal;

include "Animal.php";

class Chien extends Animal
{

    public $food;


    public function afficheNom2()
    {
        echo "mon 2eme nom est" . $this->nom;
    }
}


$chien = new Chien();

echo $chien->setNom("naw");
echo $chien->food = "viande";
$chien->afficheNom2();
