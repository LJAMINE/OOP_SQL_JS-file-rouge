<?php   

class Voiture23{
public $marque;

public function __construct($marque){
    $this->marque=$marque;
}

public function affiche(){
    echo "{$this->marque}";
}
}

$mavoiture=new Voiture23("toyota");
// $mavoiture->affiche();



class Animal{
    public $nom;
    public function __construct($nom){
        $this->nom=$nom;
    }
    
    public function affiche(){
        echo "{$this->nom}";
    }
      
    public function parler(){
        echo "L'animal fait un son";
    }
    
}

$lion=new Animal("zion lion");
$lion->parler();


class Rectangle{
    public $longeur;
    public $largeur;

    public function __construct($longeur,$largeur){
        $this->largeur=$largeur;
        $this->longeur=$longeur;
    }

    public function aire(){
        return $this->largeur*$this->longeur;
    }
}

$rec=new Rectangle(3,2);
 echo $rec->aire();








 class Ppersone{

    public $name;
    public $age;
    public function __construct($name,$age){
$this->name=$name;
$this->age=$age;
    }

    public function saluer(){
        echo "hi my name is {$this->name}";
    }


 }

 $persooone=new Ppersone("amine",134);
 $persooone->saluer();
 $persooone2=new Ppersone("bob",30);
 $persooone2->saluer();
?>