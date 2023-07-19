<?php
$servidor = 'localhost';
$name = 'root';
$pass = '';
$database = 'registro_pokemon';
try{
    $conect= new PDO ("mysql: host=$servidor;dbname=$database;",$name, $pass);
}catch(PDOException $e){
    die ("conexion fallida: ". $e->getMessage());
}

?>