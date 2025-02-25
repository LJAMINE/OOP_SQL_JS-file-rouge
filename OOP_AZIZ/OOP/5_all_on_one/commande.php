<?php

interface CommandeInterface
{
    public function calculerTotal();
    public function ajouterProduit($produit, $prix);
    public function appliquerRemise($remise);
}


class Commande implements CommandeInterface
{

    public float $total;

    protected array $produits = [];
    protected float $remise;
    protected string $status = "attente";

    public function __construct($total)
    {
        $this->total = $total;
    }


    public function ajouterProduit($produit, $prix)
    {

        $this->produits[] = ["name" => $produit, "prix" => $prix];
    }
    public function appliquerRemise($remise)
    {
        $this->total -=( $this->total * ($remise / 100));
    }
    public function calculerTotal() {
       return $this->total;
    }
    public function __tostring(){
          foreach ($this->produits as $key) {
        } "{$key["name"]}{$key["prix"]}";
    
        return $key;
    }

}

$commande=new Commande(0);
$commande->ajouterProduit("tide",10);
$commande->appliquerRemise(2);
$commande->__tostring();
