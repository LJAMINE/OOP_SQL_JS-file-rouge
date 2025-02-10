<?php 
// 3. Vérifier si un Nombre est Pair ou Impair


function estPair($nombre) {
    if ($nombre%2==0) {
        echo 'true';
    } else {
        echo 'false';
}
    
}

$nbr=3;
 estPair($nbr);


?>