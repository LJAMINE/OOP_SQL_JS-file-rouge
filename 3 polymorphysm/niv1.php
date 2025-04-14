<?php
abstract class AnimalLast
{
    protected $nom;
    protected $age;

    public function __construct($nom, $age)
    {
        $this->nom = $nom;
        $this->age = $age;
    }
    public function sedeplacer()
    {
        echo " {$this->nom} {$this->age} ";
    }

    abstract public function communiquer();
}

class OiseauLast extends AnimalLast
{

    public function __construct($nom, $age){
        parent::__construct($nom,$age);
    }
    public function sedeplacer()
    {
        parent::sedeplacer();
        echo "Je vole dans le ciel";
    }
    public function communiquer()
    {
        echo "Je chante";
    }
}

class Mammiferelast extends AnimalLast
{
    public function __construct($nom, $age){
        parent::__construct($nom,$age);
    }
    public function sedeplacer()
    {
        parent::sedeplacer();
        echo "Je marche sur la terre";
    }
    public function communiquer()
    {
        echo "Je grogne ou rugis";
    }
}

interface Carnivore
{
    public function manger();
}

class LionLast implements Carnivore
{
    public function manger()
    {
        echo "Je mange de la viande";
    }
}
class HerbivoreLast implements Carnivore
{
    public function manger()
    {
        echo "Je mange des plantes";
    }
}

class ZOOOO
{
    public $animaux = [];
    public function ajouterAnimal(AnimalLast $animalll)
    {
        $this->animaux[] = $animalll;
    }
    public function afficherTousLesDeplacements() {
        foreach ($this->animaux as $key) {
            $key->sedeplacer();
        }
    }
}


$animaoao=new Mammiferelast("mamf","123");
$animaoao2=new OiseauLast("oise","123");

$zol=new ZOOOO();
$zol->ajouterAnimal($animaoao);
$zol->ajouterAnimal($animaoao2);
$zol->afficherTousLesDeplacements();

