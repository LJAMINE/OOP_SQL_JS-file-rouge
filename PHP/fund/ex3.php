<?php
// 1 Créer un tableau et y ajouter des valeurs

$fruits = ["Pomme", "Banane", "Orange"];
print_r($fruits);

// 2 Rechercher une valeur dans un tableau

$animaux = ["Chien", "Chat", "Oiseau"];
if (array_search("Chazzt",$animaux)) {
    echo"chat est trouvee ";
} else {
    echo"chat est nontrouvee ";
}

//3 Associer des clés et des valeurs


$age=["amine"=>12, 
"said"=>11
];

foreach ($age as $name => $ages) {

echo "{$name} {$ages}";
}


//4 Problématique : Vous devez supprimer un élément spécifique d’un tableau.

$vah = ["Pomme", "Banane", "Orange", "Mangue"];

unset($vah[0]);

print_r($vah);

//5 Filtrer un tableau

$number = [34, 23, 45, 12, 67, 32];


 $new=array_filter($number,function($a){
    return $a>30;
    });

print_r($new);


//6 Fusionner deux tableaux
$fruitsss = ["Pomme", "Banane"];
$legumes = ["Carotte", "Brocoli"];

$combined =array_merge($fruitsss,$legumes);
print_r($combined);

//7 Vérifier si un tableau est vide

$videe = [];

if (empty($videe)) {
    echo "vide";
} else {
    echo"good";
}

// 8 Obtenir les clés d’un tableau
$personnes = ["Alice" => 25, "Bob" => 30, "Charlie" => 35];

foreach ($personnes as $namess => $age) {
print_r($namess);
}
?>