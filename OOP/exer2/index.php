<?php 
// Utilisation des Traits

// trait Logger{
//     public function log($message){
//         echo "this is message {$message}";
//     }
// }

// trait Logger2{
//     public function log2($brand){
//         echo "this is brand {$brand}";
//     }
// }
// class Utilisateur {
//     use Logger;
//     use Logger2;
// }
// class Produit {
//     use Logger;
// }

// $new=new Utilisateur();
// $new->log("user");
// $new->log2("bmw");

// $new3=new Produit();
// $new3->log( "Produit");

//Typing en PHP (Type Hinting & Return Types)

// class Calculatrice{
//     public function additionner(int $a, int $b){
// return $a+$b;
//     }
//     public function moyenne(array $nombresb){

//     }

    
// }
// $calc=new Calculatrice();
// $calc->additionner("aze","aaa");


// Readonly Properties
// class CompteBancairess {
//     public readonly float $soldeInitial;

//     public function __construct($soldeInitial){
//         $this->soldeInitial=$soldeInitial;
//     }

// }

// $cmt=new CompteBancairess(12);
// echo $cmt->__construct(122);


// Classes et Méthodes final

class Base{
    final public function affcheMSG(){
echo "final ";
    }
}
class enfant extends Base{

}
$final=new enfant();
$final->affcheMSG();
?>