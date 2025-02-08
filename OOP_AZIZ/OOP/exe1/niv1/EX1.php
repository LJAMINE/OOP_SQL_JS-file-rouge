<?php
// 🔹 Niveau 1 : Débutant (Classes, objets et instances)

class Livre
{
    protected $titre;
    protected $auteur;
    protected $anneePublication;
    protected $disponible=true;


    public function __construct($titre, $auteur, $anneePublication)
    {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->anneePublication = $anneePublication;
    }

    public function afficherDetails()
    {
        echo "{$this->titre}{$this->auteur}{$this->anneePublication}";
    }

    public function emprunter()
    {
if ($this->disponible) {
    $this->disponible=false;
    echo "le livre  {$this->titre}  est emprunter  <br>";
} else {
    echo "le livre  {$this->titre} deja empr <br> ";

}

    }

    public function retourner()
    {
if ($this->disponible) {
    $this->disponible=true;
    echo "le livre  {$this->titre}  est retourner <br>";
} else {
    echo "le livre  {$this->titre} pas retourner <br>  ";

}

    }
   
}



$newlivre2 = new Livre("all", "amine", 1234);

$newlivre1=new Livre("azert","aaa",222);
$newlivre1->afficherDetails();
$newlivre2->afficherDetails();

$newlivre1->emprunter();
$newlivre1->emprunter();
// $newlivre1->retourner();

$newlivre1->afficherDetails();
$newlivre2->afficherDetails();
