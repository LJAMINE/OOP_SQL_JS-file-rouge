<?php
abstract class Personnne3
{
    protected $nom;
    protected $age;

    public function __construct($nom,$age){
        $this->nom=$nom;
        $this->age=$age;
    }

    abstract public function sepresenter3();
}

class Leecteuur2 extends Personnne3
{

    public $livresEmpruntes = [];
    public function sepresenter3()
    {
        echo  "Je suis {$this->nom} un lecteur de {$this->age} ans.";
    }

    public function emprunterLivre3($livre)
    {

        $this->livresEmpruntes[] = $livre;
    }
    public function afficherEmprunts3()
    {

        foreach ($this->livresEmpruntes as $livrrre) {
            echo $livrrre;
        }
    }
    public function retournerLivre($livre)
    {

        for ($i = 0; $i < count(value: $this->livresEmpruntes); $i++) {

            $index = array_search($livre, $this->livresEmpruntes);

            if ($index) {

                unset($this->livresEmpruntes[$index]);
                echo "Livre retourne";
            } else {
                echo "pas ici";
            }
        }
    }
    public function __tostring()
    {
        return  "Lecteur {$this->nom}, {$this->age} ans";
    }
}


class Bbebliothique extends Personnne3
{
    protected $speciality;
    public $listeLLecteurs = [];
    static public $nombreLecteeurs = 0;
    public function sepresenter3()
    {
        echo  "Je suis {$this->nom} un bibliothécaire qui gère la bibliothèque. {$this->speciality}";
    }

    public  function inscrireLecteur(Leecteuur2 $lectrur)
    {
        if (array_search($lectrur, $this->listeLLecteurs)) {
            return;
        } else {
            $this->listeLLecteurs[] = $lectrur;
        }
    }
    public function afficherLecteurs()
    {
        foreach ($this->listeLLecteurs as $key) {
            echo $key;
        }
    }
}


class ResponsableBibliotheque3 extends Bbebliothique{
    public function sepresenter3(){
        parent::sepresenter3();
        echo  "Je suis {$this->nom} e responsable de la bibliothèque, supervise toute la gestion.";
    }
    public  function __clone(){
        $this->nom=$this->nom . '_clone now';
        $this->listeLLecteurs=[];
        echo "responsable est clone {$this->nom}";
    }
} 
// $newL1 = new Leecteuur2("amine",12);
// $newL2 = new Leecteuur2("saiid",22);
// $newL3 = new Leecteuur2("aaaa",22);
// $bib=new Bbebliothique("beblio1",100);
// $bib->inscrireLecteur($newL1);
// $bib->inscrireLecteur($newL2);
// $bib->inscrireLecteur($newL3);
// $bib->inscrireLecteur($newL3);
// $bib->afficherLecteurs();

$resp1=new ResponsableBibliotheque3("respo1",10);
$resp2=clone $resp1;
$resp1->sepresenter3();
$resp2->sepresenter3();
// $newL1->emprunterLivre3("book1");
// $newL1->emprunterLivre3("book2");
// $newL1->afficherEmprunts3();
// $newL1->retournerLivre("book2");
// $newL1->afficherEmprunts3();
