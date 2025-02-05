<?php
// https://github.com/AzizBenMallouk/SelfLearningPHP/blob/main/02.OOP/01.md


// Encapsulation

class CompteBancaire
{
    private $solde;

    public function __construct($solde)
    {
        $this->solde = $solde;
    }

    public function depose($montant)
    {
        echo    $this->solde += $montant;
    }
    public function retire($montant)
    {
        if ($montant > $this->solde) {
            echo "error";
        } else {
            echo  $this->solde -= $montant;
        }
    }
    public function getSolde()
    {
        return $this->solde;
    }
}

$solde = new CompteBancaire(100);
$solde->depose(200);
echo $solde->getSolde();
$solde->retire(200);



// abstraction
abstract class Animal
{
    protected $nom;

    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    abstract public function faireDuBruit();
}

class chien extends Animal
{


    public function faireDuBruit()
    {
        echo "dog";
    }
}

class chat extends Animal
{


    public function faireDuBruit()
    {
        echo "chat";
    }
}

//heritage
class Vehicule
{
    protected $marque;

    public function __construct($marque)
    {
        $this->marque = $marque;
    }
    public function demarrer()
    {
        echo "vehicule";

    }
    
}

class Voiture extends Vehicule{

    public function rooler()
    {
        echo "this voiture move";

    }
}
class Moto  extends Vehicule{
    public function rooler()
    {
        echo "this moto move";

    }
}


$voiture=new Voiture("bmw");
$voiture->rooler();

$MOto=new Moto("tmax");
$MOto->rooler();

//polymorx²

interface Forme{
    public function calculerSurface();
}

class Carre implements Forme{

    public $l;
    public $L;

    public function __construct($l,$L){
$this->L=$L;
$this->l=$l;
    }
    public function calculerSurface(){
        return $this->l*$this->L;
    }
    

}

class Cercle implements Forme{

    public $r;

    public function __construct($r){
$this->r=$r;

    }
    public function calculerSurface(){
        return $this->r*$this->r*pi();
    }
    

}

$cercle=new Cercle(2);
 echo $cercle->calculerSurface();

 $Carre=new Carre(2,2);
 echo $Carre->calculerSurface();