<?php
class VehiculeLast
{
    private $marque;
    private $modele;
    private $vitesseMax;

    public function getMaeque()
    {
        $this->marque;
    }

    public function getmodel()
    {
        $this->modele;
    }
    public function getvitesse()
    {
        $this->vitesseMax;
    }

    public function __construct($marque, $modele, $vitesseMax)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->vitesseMax = $vitesseMax;
    }
    public function afficher()
    {
        echo " {$this->marque}{$this->modele} {$this->vitesseMax}";
    }
}

// class VoitureLast extends VehiculeLast
// {
//     public  $nombrePortes;

//     public function __construct($marque, $modele, $vitesseMax, $nombrePortes)
//     {
//         parent::__construct($marque, $modele, $vitesseMax);
//         $this->nombrePortes = $nombrePortes;
//     }

//     public function afficher(){
//         parent::afficher();
//         echo" et nbr porte est {$this->nombrePortes}";
//     }
// }


// $voit=new VoitureLast("bmw","hyb",123,12);
// $voit->afficher();

abstract class VehiculeMotoriselast extends VehiculeLast
{
    public  $nombrePortes;

    public function __construct($marque, $modele, $vitesseMax, $nombrePortes)
    {
        parent::__construct($marque, $modele, $vitesseMax);
        $this->nombrePortes = $nombrePortes;
    }

    public function afficher()
    {
        parent::afficher();
        echo " et nbr porte est {$this->nombrePortes}";
    }
    abstract  public  function demarrer();
}

class mini extends VehiculeMotoriselast
{

    public  function demarrer()
    {
        echo "La voiture démarre avec un moteur silencieux";
    }
}

