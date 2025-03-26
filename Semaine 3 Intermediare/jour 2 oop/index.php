<?php
class Annimmal
{
    public  function manger()
    {
        echo "am animal";
    }
}

class CChien extends Annimmal
{
    public  function aboyer()
    {
        echo "am aboyer";
    }

    public function manger()
    {
        parent::manger();
        echo'surcharge';
    }
}


$newChien = new CChien();
$newChien->manger();


// moyen

class Vehhicule
{
    public $vittesse;
}

class Voiiture
{
    public $marque;
}


class Employer {
    public $nom;
}

class Manager {
    public $equipe;
}

$managger=new Manager();
echo $managger->equipe="equiiipe";