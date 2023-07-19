<?php
session_start();
error_reporting(0);
$sesion_i =$_SESSION["user_id"];

if(empty($sesion_i)){
    
    echo '
    <script>
    
    alert("Lo siento, primero debe iniciar sesión.");
    location.href = ".././Pokemons.php";
    </script>
    ';
    //header("location:.././Pokemons.php");
    die();
}

?>