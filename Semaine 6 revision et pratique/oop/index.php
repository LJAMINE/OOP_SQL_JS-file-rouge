<?php
class Libre
{
    public $titre;
    public $auteur;
    public $description;


    public function __construct($titre, $auteur, $description)
    {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->description = $description;
    }

    public function aff()
    {
        echo " {$this->titre} {$this->auteur}  {$this->description}";
    }
}



$libre = new Libre("kkkkk", "said", "zzzzzzzzzzzzz");
$libre->aff();


class Bobliothoique
{
    public $livrees = [];

    public function ajout(Libre $libress)
    {
        $this->livrees[] = $libress;
    }


    public function affichageall()
    {
        foreach ($this->livrees as $livre) {
            $livre->aff();
        }
    }

    public function retire($livre){
    }
}


$newbibli = new Bobliothoique();
$newbibli->ajout($libre);
