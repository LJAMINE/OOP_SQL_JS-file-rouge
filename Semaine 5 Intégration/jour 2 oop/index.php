<?php


class newCompte
{
    private $solde;

    public function getSolde()
    {
        return $this->solde;
    }
    public function setSolde($solde)
    {
        if ($this->solde > 0) {
            $this->solde = $solde;
        } else {
            throw new Exception("solde negative", 1);
        }
    }
}

abstract class Forms
{
    abstract public function aite();
}

class Cercles extends Forms
{
    public function aite() {}
}
class Rectangles extends Forms
{
    public function aite() {}
}


class Utilisateur
{
    private $nom;
    private $prenom;

    public function getNom()
    {
        return $this->nom;
    }
    public function getpreNom()
    {
        return $this->prenom;
    }

    public function call()
    {
        echo "{$this->getNom()}{$this->getpreNom()}";
    }
    private function callme()
    {
        echo "{$this->getNom()}{$this->getpreNom()}";
    }
}

interface  interf
{
    public function amine();
}

class amine1 implements interf
{
    public function amine() {}
}
class amine2 implements interf
{
    public function amine() {}
}
