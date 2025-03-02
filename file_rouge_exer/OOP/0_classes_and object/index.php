<?php

class Livre1
{

    private $titre;
    private $auteur;
    private $anneePublication;
    public $disponible;


    public function __construct($titre, $auteur, $anneePublication)
    {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->anneePublication = $anneePublication;
        $this->disponible = true;
    }

    public function getTitle()
    {
        return $this->titre;
    }

    public function setTitle($titre)
    {
        $this->titre = $titre;
    }

    public function getauteur()
    {
        return $this->auteur;
    }

    public function setauteur($auteur)
    {
        $this->auteur = $auteur;
    }
    public function getanneePublication()
    {
        return $this->anneePublication;
    }


    public function afficherDetails()
    {
        echo "{$this->getTitle()} and {$this->getauteur()} and {$this->getanneePublication()}";
    }


    public function emprunter()
    {

        if ($this->disponible) {
            $this->disponible = false;
            echo "le livre '{$this->titre}' est emprunter ";
        } else {
            echo "le livre '{$this->titre}' est deja deja  emprunter ";
        }
    }

    public function retourner()
    {

        if ($this->disponible) {
            $this->disponible = true;
            echo "le livre '{$this->titre}' est retourner ";
        } else {
            echo "le livre '{$this->titre}' est deja deja  disponble ";
        }
    }
}

$newlive1 = new Livre1("book1", "zayer", "1999");
$newlive2 = new Livre1("book2", "zayer2", "1998");


// $newlive->afficherDetails();


// $newlive1->emprunter();
// $newlive1->emprunter();
// $newlive1->retourner();
// $newlive1->retourner();



class Bibliotheque11
{
    public static $livre11 = [];
    private static $nombreLivres=0;

    public static function ajouterLivre(Livre1 $livre)
    {

        self::$livre11[] = $livre;
        self::$nombreLivres++;
    }
    public static function afficherTousLesLivres()
    {

        foreach (self::$livre11 as $livvre) {

            $livvre->afficherDetails();
        }
    }

    public static function getNombreLivres(){

       echo self::$nombreLivres;
    }
}


 Bibliotheque11::ajouterLivre($newlive1);
 Bibliotheque11::ajouterLivre($newlive2);

 Bibliotheque11::afficherTousLesLivres();
 Bibliotheque11::getNombreLivres();

