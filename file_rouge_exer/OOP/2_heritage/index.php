<?php  

abstract class Carss3{

    private $marque;
    private $modele;
    private $vitesseMax;


    public function getMarque(){
        return $this->marque;
    }
    
    public function getModel(){
        return $this->modele;
    }
    
    public function getVitesse(){
        return $this->vitesseMax;
    }

    public function __construct($marque,$modele,$vitesseMax){
        $this->marque=$marque;
        $this->modele=$modele;
        $this->vitesseMax=$vitesseMax;
    }


    public function getDETAILS(){
        echo "{$this->marque} and {$this->modele} and {$this->vitesseMax}";
    }


    abstract  public function demarrer();
}


class Voiture3 extends Carss3{

    public $nombrePorte;

    public function __construct($marque, $modele, $vitesseMax,$nombrePorte){

        parent::__construct($marque,$modele,$vitesseMax);
        $this->nombrePorte=$nombrePorte;
    }

    public function getDETAILS() {
        parent::getDETAILS();
        echo "{$this->nombrePorte}";
    }

    public function demarrer(){
        echo 'La voiture démarre avec un moteur silencieux';
    }

}


$carss=new Voiture3("bmw","hybr",123,100);
// $carss->getDETAILS();
// $carss->demarrer();




class Motor3 extends Carss3 {
    public $typegu;

    public function __construct($marque, $modele, $vitesseMax,$typegu){
        parent::__construct($marque,$modele,$vitesseMax);
        $this->typegu=$typegu;
    }

    public function faitweel(){
        parent::getDETAILS();
        echo "{$this->typegu }  is that type of wheelie";
    }
    public function demarrer(){
        echo 'La moto démarre avec un moteur silencieux';
    }
}

$moto=new Motor3("tmax","horat",200,"dynamique");
// $moto->faitweel();
// $moto->demarrer();


interface Transpo{
    public function charger();
}


final  class CCamion  implements Transpo{
    public function charger(){
        echo "this camion is moving ";
    }
}



$camio=new CCamion();
$camio->charger();
?>