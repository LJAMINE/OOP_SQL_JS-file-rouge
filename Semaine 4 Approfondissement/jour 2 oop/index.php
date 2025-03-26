<?php
class Animmmal
{
    public function son() {}
    public function dmplacer() {}
}
class CCChien extends Animmmal
{
    public function son()
    {
        echo "Wouf";
    }
}

class CHat23 extends Animmmal
{
    public function son()
    {
        echo "miaw";
    }
}

$newCjien = new CCChien();
// $newCjien->son();

$chat = new CHat23();
// $chat->son();

// Moyens


// Créer un tableau d’animaux et appeler son() pour chacun.

$tableAnimaux = [$chat, $chat];

foreach ($tableAnimaux as $one) {
    $one->son();
}






// Créer Forme avec aire(), redéfini dans Cercle et Rectangle.


class FFORMM
{
    public $lang;
    public $larg;

    public function __construct($lang, $larg)
    {
        $this->lang = $lang;
        $this->larg = $larg;
    }
    public function aires() {}
}


class cerccle extends FFORMM
{

    public function __construct($lang, $larg)
    {
        parent::__construct($lang, $larg);
    }
    public function aires()
    {
        return pi() * $this->lang * $this->larg;
    }
}

class RRRectangle extends FFORMM
{

    public function __construct($lang, $larg)
    {
        parent::__construct($lang, $larg);
    }
    public function aires()
    {
        return  $this->lang * $this->larg;
    }
}

$cerccle=new cerccle(2,1);
 echo $cerccle->aires();
 
 $reccc=new RRRectangle(2,1);
 echo $reccc->aires();


 