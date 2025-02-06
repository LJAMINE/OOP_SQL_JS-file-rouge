<?php
abstract class Personne
{
    protected $nom;
    protected $age;

    abstract public function sePresenter();
}

class  Lecteur  extends Personne
{
    public $livresEmpruntes = [];

    public function sePresenter()
    {
        echo "Je suis {$this->nom} un lecteur de {$this->age}ans
";
    }
    public function emprunterLivre($livre)
    {
        echo    $this->livresEmpruntes[] = $livre;
    }
    public function retournerLivre(string $livre): void
    {
        $index = array_search($livre, $this->livresEmpruntes);
        if ($index !== false) {
            unset($this->livresEmpruntes[$index]);
            $this->livresEmpruntes = array_values($this->livresEmpruntes); 
            echo " {$this->nom} a  le livre {$livre}.<br>";
        } else {
            echo " Le livre '{$livre}'pass dans les emprunts.<br>";
        }
    }
    public function afficherEmprunts()
    {
        for ($i = 0; $i < count($this->livresEmpruntes); $i++) {
            print_r($this->livresEmpruntes[$i]) ;
        }
    }
}

$new = new Lecteur();
  $new->emprunterLivre("said");
$new->retournerLivre("said");
$new->afficherEmprunts();
