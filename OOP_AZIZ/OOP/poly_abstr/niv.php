<?php
abstract class Animal3{
    private $nom;
    private $age;

    public function __construct($nom,$age){
        $this->age=$age;
        $this->nom=$nom;
    }
    public function seDeplacer(){
        echo "am animal";
    }
    abstract public function communiquer();
}

class Oiseau extends Animal3{

    public function seDeplacer(){
        parent::seDeplacer();
        echo "Je vole dans le ciel.";
    }
    public function communiquer(){
        echo "Je chante.";
    }
}
class Poisson  extends Animal3{

    public function seDeplacer(){
        parent::seDeplacer();
        echo  "Je fais des bulles.";    }
    public function communiquer(){
        echo "Je chante.";
    }
}
class Mammifere  extends Animal3{

    public function seDeplacer(){
        parent::seDeplacer();
        echo "Je marche sur la terre.";
    }
    public function communiquer(){
        echo  "Je grogne ou rugis.";
    }
}

interface Carnivore {
    public function manger();
}
interface Herbivore {
    public function manger();
}

class Lion implements Carnivore{
    public function manger(){
        echo "Je mange de la viande.";
    }
}

class lapin implements Herbivore{
    public function manger(){
        echo "Je mange de la plantes.";
    }
}

 function faireCrier(Animal3 $animal){

     $animal->communiquer();
}



class Zoo {
    private $animaux = [];

    public function ajouterAnimal(Animal3 $animal) {
        $this->animaux[] = $animal;
    }

    public function afficherTousLesDeplacements() {
        foreach ($this->animaux as $animal) {
            $animal->seDeplacer();
        }
    }
}



$oisea=new Mammifere("amine",1);
faireCrier($oisea);

?>