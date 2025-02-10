<?php
// Maximum dans un Tableau
function maxim($table)
{
    $max = $table[0];

    for ($i = 0; $i < count($table); $i++) {

        if ($table[$i] > $max) {
            $max = $table[$i];
        }

    }
    echo "max {$max}";
}
$table=[10,9,5];
maxim($table);
