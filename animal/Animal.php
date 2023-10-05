<?php
namespace App\animal;

class Animal
{

    protected $nom;

    public function setNom($nom)
    {
        return $this->nom = $nom;
    }
    public function getNom()
    {
        return $this->nom;
    }


    public function afficheNom()
    {
        echo "mon nom est " . $this->nom;
    }
}
