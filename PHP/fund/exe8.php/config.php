<?php
$servername="localhost";
$username="root";
$password="";
$dbname="ma_base_de_donnees";


try {
    $dsn="mysql:host=" . $servername . ";dbname=" .$dbname;
$pdo=new PDO($dsn,$username,$password);
echo 'good';
} catch (\Throwable $th) {
    throw $th;
}

?>