<?php 

interface CommandeInterface333{
    public function calculetot();
    public function   appliquerRemise ();
} 


class Comande  implements CommandeInterface333 {


 public $produit=[];
 public float  $remise;
 public string  $status;

 public function __construct(){
    
 }


 public function calculetot(){

 }
 public function   appliquerRemise (){

 }


}



?>