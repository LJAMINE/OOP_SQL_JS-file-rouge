<?php
// Maximum dans un Tableau
function maxTable($tableau){
    $max=$tableau[0];
for ($i=0; $i < count($tableau); $i++) { 
  
     if ($tableau[$i]>$max) {
        
    $max=$tableau[$i];
    }
}
return $max;

}

$tablle=[1,2,3];

echo maxTable($tablle);