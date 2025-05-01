<?php
// interface Compteete
// {
//     const COEFF = 3.14;
//     public function deposer($montant);
//     public function retirer();
// }



// abstract class Compte implements Compteete
// {

//     public $nom;
//     public $solde;
//     public $interet;

//     public function __construct($nom, $interet,$solde=0)
//     {
//         $this->nom = $nom;
//         $this->interet = $interet;
//         $this->solde = $solde;
//     }
//     public function interet($montantcreadit)
//     {
//           $interetResult = self::COEFF * $montantcreadit;
//           echo $interetResult;
//     }
// }



// class CompteEpargne extends Compte
// {



//     public function __construct($nom, $solde){
//         parent::__construct($nom,$solde,3);
//     }

//     public function deposer($montant)
//     {
//         $this->solde += $montant;
//     }
//     public function retirer() {}
// }


declare(strict_types=1);


class UserDRISS
{
    private string  $name;
    private string  $email;
    private array  $orders = [];
    private CardDriss $cart;


    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function addOrder(OrderDriss $order)
    {
        $this->orders[] = $order;
    }
    public function __get($params){
        return $this->$params ;
    }
}

trait ZakariaTrait{
    public function getTotalPrice()
    {
        $Totalprice = 0;
        foreach ($this->products as $product) {
            $Totalprice += $product->getTotalPrice();
        }
        return $Totalprice;
    }
}
class OrderDriss
{
    use ZakariaTrait;
    private array  $products = [];
    private UserDRISS  $user;

    public function __construct(UserDRISS $user)
    {
        $this->user = $user;
    }
    public function addProdcut(ProductDriss $prodcut)
    {
        $this->products[] = $prodcut;
    }
    

}


class ProductDriss
{

    private string $name;
    private float  $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
    public function getPrice()
    {
        return $this->price;
    }

    public function __equals(ProductDriss $instance){
// return $this->ref ==$instance->ref;
    }
}

class CardDriss
{

    use ZakariaTrait;

    private array  $usert;
    private array  $products;
    private UserDRISS  $user;

    public function __construct(UserDRISS $user)
    {
        $this->user = $user;
    }
    public function addProdcut(ProductDriss $prodcut)
    {
        $this->products[] = $prodcut;
    }

  
}





abstract class  PaymentDriss {

}




$user = new UserDRISS("amine", "aùine");
$product1 = new ProductDriss("11", 123);
$product2 = new ProductDriss("22", 222);
$order = new OrderDriss($user);

echo $user->name;
$cart = new CardDriss($user);

$order->addProdcut($product1);
$order->addProdcut($product2);

$user->addOrder($order);

$product1 = new ProductDriss("11", 123);
$product2 = new ProductDriss("22", 222);

