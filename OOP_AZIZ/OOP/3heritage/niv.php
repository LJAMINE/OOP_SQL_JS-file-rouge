<?php
 abstract class VehiculeMotorise
{
    private $marque;
    private $modele;
    protected $vitesseMax;

    public function getMarque(){
        return $this->marque;
    }
    public function getModele(){
        return $this->modele;
    }
   
    public function __construct($marque, $modele, $vitesseMax)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->vitesseMax = $vitesseMax;
    }

    public function afficherInfos(){
        echo "{$this->marque}{$this->modele}{$this->vitesseMax}". "<br>";
    }
    abstract public function demarer();
}


class Voiture2 extends VehiculeMotorise{
    private $nombrePortes;

    public function __construct($marque, $modele, $vitesseMax,$nombrePortes){
        parent::__construct($marque,$modele,$vitesseMax);
        $this->nombrePortes=$nombrePortes;
    }

    public function afficherInfos(){
        parent::afficherInfos();
        echo "{$this->nombrePortes}"; 
       }

     public function demarer(){
echo "La voiture démarre avec un moteur silencieux". "<br>";
     }



}

final class Moto2 extends VehiculeMotorise{
    private $typeGuidon;

    public function __construct($marque, $modele, $vitesseMax, $typeGuidon)
    {
        parent::__construct($marque, $modele, $vitesseMax);
        $this->typeGuidon = $typeGuidon;
    }

    public function getTypeGuidon()
    {
        return $this->typeGuidon;
    }


    public function  faireWheelie(){
        echo "{$this->getMarque()}{$this->getModele()}{$this->vitesseMax}{$this->typeGuidon} fair cette roue arriere" ; 
    }
    public function demarer(){
        echo "La moto démarre avec un bruit puissant" . "<br>";
             }
}


interface Transportable {
    public function charger();
}

class Camion implements Transportable{
    public function charger(){
        echo "camion charger vers agadir". "<br>";
    }
}


class amine extends Moto2{

}

$Voi=new Voiture2("bmw","classique",200,20);
$Voi->afficherInfos();

$Motor=new Moto2( "tmax","sport",200 ,"sppedd");
$Motor->faireWheelie() ;
$Motor->demarer();

$camion=new Camion();
$camion->charger();



//factory??