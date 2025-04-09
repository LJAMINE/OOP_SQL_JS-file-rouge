<?php
// Challenge 2 : Manipulation des Tableaux Associatifs------------------


// $persone=["nom"=>"amine","age"=>12,"ville"=>"agadir"];

// // print_r($persone['nom']) ;

// foreach ($persone as $item) {
// // echo $item;
// }

// Challenge 3 : Les Structures de Contrôle (Conditions)----------------

// $nbr=2;

// if ($nbr%2===0) {
//     echo "true";
// }else  if($nbr>10){
//     echo "bigger than 10";

// }else {
//     echo "false";

// }
// Challenge 4 : Les Boucles en PHP----------------------


// $table=[1,2,3,4];

// foreach ($table as $item) {
//     echo $item;
// }

// for ($i=1; $i <=10 ; $i++) { 
// echo $i;
// }


// $a=1;

// while ($a <= 5) {

//     echo $a;

//     $a++;

// }


// Challenge 5 : Les Fonctions en PHP-----------------

// function addition($a,$b){
//     return $a+$b;
// }

// echo (addition(1,2));



// function afficher($text){
//     echo "amine is good at {$text}";
// }

// echo (afficher("foot"));

// Challenge 6 : Manipulation des Chaînes de Caractères--------------

// $phr="amine";

// echo (strlen($phr));
// echo (strpos($phr,"n"));
// echo (strtoupper($phr));
// echo (substr($phr,2));



// Challenge 9 : Les Tableaux Multidimensionnels en PHP---------------



$etudiants=[
    ["nom"=>"amine","age"=>12,"note"=>[1,3,4]],
    ["nom"=>"said","age"=>20,"note"=>[1,8,4]],
    ["nom"=>"bro","age"=>22,"note"=>[0,3,4]]
];

// foreach ($etudiants as $etudiant) {
// echo "{$etudiant["nom"]} {$etudiant["age"]}";
// }




foreach ($etudiants as $etudiant) {
    $total=0;
    $notes = $etudiant["note"];
    for ($i=0; $i <count($notes) ; $i++) { 
$total+=$notes[$i];
    }

    $moy=$total/count($notes);
    echo "Total des notes de {$etudiant['nom']} : " . $total .  $moy ."<br>";


}

?>