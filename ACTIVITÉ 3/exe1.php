<?php


abstract class Animal133
{

    protected $nom;
    protected $espèce;
    protected $cri;
    private $homour;

    public function __construct($nom, $espèce, $cri, $homour)
    {
        $this->nom = $nom;
        $this->espèce = $espèce;
        $this->cri = $cri;
        $this->homour = $homour;
    }

    public function getName()
    {
        return $this->nom;
    }
    public function getespece()
    {
        return $this->espèce;
    }
    public function getcri()
    {
        return $this->cri;
    }
    public function gethomour()
    {
        return $this->homour;
    }
    abstract public function reagir();
}


class Lion133 extends Animal133
{
    public function __construct($nom, $espèce, $cri, $homour)
    {
        parent::__construct($nom, $espèce, $cri, $homour);
    }
    public function reagir()
    {

        if ($this->gethomour() === "happy") {
            echo "{$this->nom} and is lion and i so happy ";
        } else if ($this->gethomour() === "sad") {
            echo "{$this->nom} and is lion and i so sad ";
        }
    }
}

class Singe133 extends Animal133
{
    public function __construct($nom, $espèce, $cri, $homour)
    {
        parent::__construct($nom, $espèce, $cri, $homour);
    }
    public function reagir()
    {
        if ($this->gethomour() === "happy") {
            echo "{$this->nom} and is singe and i so happy ";
        } else if ($this->gethomour() === "sad") {
            echo "{$this->nom} and is singe and i so sad ";
        }
    }
}



class test133
{
    public static $sad = 0;

    public function interagirAvecTousLesAnimaux($animaix)
    {

        foreach ($animaix as $animal) {

            $animal->reagir();
            if ($animal instanceof Lion133 && $animal->gethomour() === "sad") {

                self::$sad++;
            }
        }
        if (self::$sad >= 2) {
            echo "alerte zoo , 2 lion sad";
        }
    }
}


$lion = new Lion133("lion1", "lionss", "wow", "sad");
// $lion->reagir();


$totalanimaux = [
    new Lion133("lion1", "lionss1", "wow", "sad"),
    new Lion133("lion2", "lionss2", "wow", "happy"),
    new Lion133("lion3", "lionss3", "wow", "sad"),
    new Singe133("singe1", "lionss3", "wow", "happy"),

];



$test=new test133();
$test->interagirAvecTousLesAnimaux($totalanimaux);
