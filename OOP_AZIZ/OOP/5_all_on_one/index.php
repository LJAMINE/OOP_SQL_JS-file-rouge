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

class Leccteur extends Personnne
{
    public $livreeempruntes = [];

    public function emprunterLivre($livre)
    {
        $this->livreeempruntes[] = $livre;
    }
    public function sePresenter()
    {
        echo  "Je suis {$this->nom}, un lecteur de {$this->age} ans.";
    }
    public function Retourner($livre){
        $boook=array_search($livre,$this->livreeempruntes);

        if ($boook) {

        } else {
            # code...
        }
        
    }
}
