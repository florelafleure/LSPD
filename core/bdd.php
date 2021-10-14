<?php

function dbConnection(){
    $host = "localhost:3306";
    $dbName = "cours";
    $username = "root";
    $password = "root"; 

try{
    $bdd = new PDO("mysql:host={$host};dbname={$dbName};charset=utf8" ,$username ,$password);
    echo "Connection réussie <br/>";
    return $bdd;
} catch (\Throwable $th){
    die("Erreur :".$th->getMessage());
}

}





?>
