<?php

namespace App;



include "Voiture.php";
include "Personne.php";
include "Produit.php";
include "etudiant/Etudiant.php";
include "Livre.php";
include "animal/Animal.php";
include "animal/Chien.php";

$voiture = new Voiture("kia", "rouge");
var_dump($voiture);
$voiture->couleur = "";
$voiture->marque = "";
$voiture->setTemps(6300);
$voiture->setDistance(50000); /// $voiture->distance = 50000
// $voiture->getDistance(); // echo $voiture->distance
$voiture->infosVoiture();
$voiture->afficheVitesse();

$moi = new Personne("dupont", "luna", 18);

$moi->setPrenom("souhila");
$moi->setNom("atr");
$moi->setAge(36);
$moi->afficherInformations();


$prod = new Produit(12.1, "toto");
$prod->setNom("gel douche");
$prod->setPrix(2);
$prod->afficheDetails();

$etudiant1 = new Etudiant("laporte", "mike", "155465465");
$etudiant2 = new Etudiant("maison", "sara", 1579455);
$etudiant2->afficherInfosEtudiant();
$etudiant1->nom = "dupont";
$etudiant1->prenom = "pierre";
$etudiant1->matricule = "15264454656";
$etudiant1->afficherInfosEtudiant();



$livre = new Livre("toto", "moi", "1995-10-10");
$livre->afficheInfosLivre();
$livre->setAuteur("Alex");
$livre->setTitre("la vie est belle");
$livre->setannePubliation("2010-10-20");
$livre->afficheInfosLivre();


$chien = new Chien();
