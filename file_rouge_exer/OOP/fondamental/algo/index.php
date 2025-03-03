<?php
// 1. Trouver le Maximum dans un Tableau
function trouverMax1($tableau)
{

    for ($i = 0; $i < count($tableau); $i++) {
        $max = $tableau[0];

        if ($max < $tableau[$i]) {
            $max = $tableau[$i];
        }
    }

    return $max;
}


$table = [1, 2, 3, 55];

echo trouverMax1($table);




// 2. Somme des Éléments d’un Tableau


function sommeTableau1($tableau)
{

    $total = 0;
    for ($i = 0; $i < count($tableau); $i++) {
        $total += $tableau[$i];
    }

    return $total;
}

$taabme = [1, 2, 4];

echo sommeTableau1($taabme);

//3. Vérifier si un Nombre est Pair ou Impair

function estPair($nombre)
{
    if ($nombre % 2 == 0) {
        return  "pair";
    } else {
        return "impair";
    }
}

$nbra = 2;

echo estPair($nbra);

// 4. Compter le Nombre d'Occurrences d’un Élément dans un Tableau

function compterOccurrences1($tableau, $valeur)
{
    $count = 0;
    for ($i = 0; $i < count($tableau); $i++) {

        if ($valeur == $tableau[$i]) {
            $count++;
        }
         
    }

    echo $count;
}

$tbl=[1,3,1];

echo compterOccurrences1($tbl,1);


// 5. Inverser une Chaîne de Caractères

function inverseChaine1($chaine){

    $length=strlen($chaine);
    $word='';

    for ($i=$length-1; $i >=0 ; $i--) { 

        $word=$word.$chaine[$i];
    }
    echo $word;
}

$ste="aze";

inverseChaine1($ste);