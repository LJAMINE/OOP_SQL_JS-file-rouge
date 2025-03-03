<?php

class CmptBancaire
{
    private int $solde;


    public function getsolde()
    {
        return  $this->solde;
    }
    public function __construct($solde)
    {
        $this->solde = $solde;
    }

    public function depose($montant)
    {
        $this->solde += $montant;
    }

    public function retire($montant)
    {

        if ($this->solde < $montant) {
            throw new Exception("Error montant bigger", 1);
        } else {
            $this->solde -= $montant;
        }
    }
}

$price=new CmptBancaire(100);
$price->depose(100);
echo $price->getsolde();

$price->retire(100);

echo $price->getsolde();
