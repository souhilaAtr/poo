<?php

namespace App\produit;

include "Produit.php";
class ProduitElectronique extends Produit
{

    public $garantie;


    public function __construct($prix, $nom, $garantie)
    {
        parent::__construct($prix, $nom);
        $this->garantie = new DateTime($garantie);
        // $this->garantie = $this->garantie->format("Y/m/d");
    }

    private function calculeGarentie()
    {
        $dateActuelle = new DateTime();
        // $garentie = strtotime($this->garantie);
        // $date = new DateTime("@$garentie");
        $date = $this->garantie;
        $diffEnMois = $dateActuelle->diff($date)->y * 12 + $dateActuelle->diff($date)->m;

        return $diffEnMois;
    }

    public function afficheDetails()
    {
?>
        <p>Details du produit electronique</p>
        <ul>
            <li>le nom du produit : <?= $this->nom ?></li>
            <li>le prix du produit : <?= $this->prix ?> €</li>
            <?php if ($this->calculeGarentie() > 24) : ?>
                <li>Vous n'avez plus de garantie</li>
            <?php else : ?>
                <li>Il vous reste : <?= 24 - $this->calculeGarentie()  ?> mois de garantie
                </li>
            <?php endif ?>
        </ul>

<?php
    }
}

$objet = new ProduitElectronique(3000, "CP", "2023-2-10");

$objet->afficheDetails();

// echo $date1 = "1987-12-20";
// echo "<br>";
// echo $date2 = time();
// echo "<br>";
// echo strtotime($date1);
// echo "<br>";
// // echo strtotime($date2) . "<br>";
// $z =  $date2 - strtotime($date1);
// echo "<br>";
// $mois = date("Y/m/d", $z);
// echo "<br>";
// echo $mois;
