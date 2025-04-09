<?php

// 🟢 Niveau 1 : Débutant
// 1. Trouver le Maximum dans un Tableau

function maxim($table)
{
    $max = $table[0];

    for ($i = 0; $i < count($table); $i++) {
        if ($max < $table[$i]) {
            $max = $table[$i];
        }
    }
    return $max;
}

$newTable = [1, 200, 44, 1];

// echo maxim($newTable);

// 2. Somme des Éléments d’un Tableau


function someTbale($someTTable)
{
    $somme = 0;
    for ($i = 0; $i < count($someTTable); $i++) {
        $somme += $someTTable[$i];
    }
    return $somme;
}
$great = [1, 200, 44, 9];

// echo someTbale($great);

// 3. Vérifier si un Nombre est Pair ou Impair

function estpair($tblle)
{
    for ($i = 0; $i < count($tblle); $i++) {
        if ($tblle[$i] % 2 !== 0) {
            echo $tblle[$i];
        } else {
            // echo $tblle[$i];
        }
    }
}

$pairetimpair = [1, 200, 44, 9];

// echo estpair($pairetimpair);



// 4. Compter le Nombre d'Occurrences d’un Élément dans un Tableau

function compterOccurrences($tableau, $valeur)
{
    $count = 0;
    for ($i = 0; $i < count($tableau); $i++) {
        if ($tableau[$i] === $valeur) {
            $count++;
        }
    }
    return $count;
}


$tableocc = [1, 1, 1, 2, 3, 3, 2];

// echo compterOccurrences($tableocc,1);

// 5. Inverser une Chaîne de Caractères


function inverseChaine($chaine)
{

    $chainelenght = strlen($chaine);
    $chaineinversere = "";

    for ($i = $chainelenght - 1; $i >= 0; $i--) {
        $chaineinversere .= $chaine[$i];
    }
    return $chaineinversere;
}

$mychain = "aze";
//  echo inverseChaine($mychain);


//  🟡 Niveau 2 : Intermédiaire

function  estPalindrome($chaine)
{
    $chainelenght = strlen($chaine);
    $chaineenverser = "";

    for ($i = $chainelenght - 1; $i >= 0; $i--) {
        $chaineenverser .= $chaine[$i];
    }
    return $chaineenverser === $chaine ? "true" : "false";
}

$aminechaine = "az";

// echo estPalindrome($aminechaine);


// 7. Trier un Tableau (Tri à Bulles)

function triBulle($tableau)
{
    for ($i = 0; $i < count($tableau) - 1; $i++) {
        for ($j = 0; $j < count($tableau) - $i - 1; $j++) {
            if ($tableau[$j] > $tableau[$j + 1]) {
                $swap = $tableau[$j];
                $tableau[$j] = $tableau[$j + 1];
                $tableau[$j + 1] = $swap;
            }
        }
    }
    return $tableau;
}


$tableas = [2, 3, 11, 1, 12];

// print_r(triBulle($tableas));

//  8. Trouver le Deuxième Plus Grand Nombre dans un Tableau

function deuxiemeMax($tableau) {
    $max=$tableau[0];
    $max2=$tableau[0];

    for ($i=0; $i <count($tableau) ; $i++) { 

        if ($max<$tableau[$i]) {
            $max2=$max;
            $max=$tableau[$i];
        }elseif ($tableau[$i]>$max2 && $tableau[$i]!==$max) {
            $max2=$tableau[$i];

        }
    }
    return $max2;
}

$tableas = [2, 3, 111, 1, 12];

echo deuxiemeMax($tableas);