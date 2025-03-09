<?php 

 abstract class ANNimal3{
    protected $nom;
    protected $age;

    public function __construct($nom,$age){
$this->age=$age;
$this->nom=$nom;
    }

    public function  sedeplace(){
        echo "ths is animal and ";
    }
    abstract public function  communiquer();

}

class Oiseu extends ANNimal3{
    public function sedeplace(){
        parent::sedeplace();
        echo "Je vole dans le ciel";
    }

    public function communiquer(){
        echo'je chante ';
    }
}

class Poisson  extends ANNimal3{
    public function sedeplace(){
        parent::sedeplace();
        echo "Je nage dans l'eau";
    }
    public function communiquer(){
        echo'Je fais des bulles ';
    }
}


$ois=new Oiseu("ta2ir",12);
// $ois->sedeplace();
// $ois->communiquer();

$poi=new Poisson("poissen",12);
// $poi->sedeplace();
// $poi->communiquer();


interface Carni{
    public function manger();
}

class LLion implements Carni{
    public function manger(){
        echo'Je mange de la viande ';
    }
}


// $lion=new LLion();
// $lion->manger();



class ZZoo{
    public $animaux=[];

    public function ajouterAnimal(ANNimal3 $animal){

        $this->animaux[]=$animal;

    }
     
    public function afficherTousLesDeplacements(){
        foreach ($this->animaux as $animall) {
            $animall->sedeplace();
        }
    }


}

$zooo=new ZZoo();
$zooo->ajouterAnimal($ois);
$zooo->ajouterAnimal($poi);
$zooo->afficherTousLesDeplacements();

?>