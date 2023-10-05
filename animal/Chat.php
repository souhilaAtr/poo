<?php
namespace App\animal;
include "Animal.php";

class Chat extends Animal
{
    // traiement
    public $couleur
    ;
}


$chat = new Chat();
echo $chat->setNom("monchat");
echo $chat->couleur = "noir";
$chat->afficheNom();
