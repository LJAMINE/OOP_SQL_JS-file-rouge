<?php 

function triBulle($tableau) {

    for ($i=0; $i <count($tableau)-1 ; $i++) { 

        for ($j=0; $j <count($tableau)-$i-1 ; $j++) { 

            if ($tableau[$j]>$tableau[$j+1]) {
                $temp=$tableau[$j];
                $tableau[$j]=$tableau[$j+1];
                $tableau[$j+1]=$temp;
            }

        }
    }
    print_r($tableau) ;
}

$tab=[9,2,6];
triBulle($tab);

?>