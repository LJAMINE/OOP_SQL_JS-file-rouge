<?php

abstract class Personnne
{
    protected string $nom;
    protected int $age;

    public function __construct($nom, $age)
    {
        $this->age = $age;
        $this->nom = $nom;
    }
    abstract public function sePresenter();
}

class Leccteurs extends Personnne
{
    public $livreeempruntes = [];

    public function emprunter_Livre($livre)
    {
        $this->livreeempruntes[] = $livre;
    }
    public function sePresenter()
    {
        echo  "Je suis {$this->nom}, un lecteur de {$this->age} ans.";
    }
    public function Retourner_Livre($livre)
    {
        $index = array_search($livre, $this->livreeempruntes);

        if ($index!==false) {
            unset($this->livreeempruntes[$index]);
            $this->livreeempruntes = array_values($this->livreeempruntes);

        } else {
            echo "livre pas ici ";
        }
    }
    public function afficherEmprunts()
    {
        foreach ($this->livreeempruntes as $livre1) {

            echo $livre1;
        }
    }
    public function __tostring()
    {
        return "Lecteur {$this->nom},{$this->age}, ans";
    }
}


$leecteur = new Leccteurs("amineaa", 22);
$leecteur->emprunter_Livre("book1");

$leecteur->Retourner_Livre("book1");
$leecteur->afficherEmprunts();
