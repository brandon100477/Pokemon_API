<html>
    <head>
        <meta charset="utf-8">
        <title>Descripción</title>
        <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="./assets/css/style.css">
    
        <!--Batón de pokemon-->
        <form action=".././Pokemons.php" method="post">
            <button type = "submit" name ="inicio" class="btn btn-dark btn-pokemon col-2">Pokemons</button>
        </form>

    </head>

    <body>

<?php

include("seguridad.php");
session_start();
error_reporting(0);

$a1="";
$a2="";
$a3="";
$a4="";
$a5="";
$a6="";
$a7="";
$a8="";
$a9="";
$b1="";
$b2="";
$b3="";
$b4="";
$b5="";
$b6="";
$b7="";
$b8="";
$b9="";
$c1="";
$c2="";

if(isset($_POST['a1']))$a1=$_POST['a1'];

if(isset($_POST['a2']))$a2=$_POST['a2'];

if(isset($_POST['a3']))$a3=$_POST['a3'];

if(isset($_POST['a4']))$a4=$_POST['a4'];

if(isset($_POST['a5']))$a5=$_POST['a5'];

if(isset($_POST['a6']))$a6=$_POST['a6'];

if(isset($_POST['a7']))$a7=$_POST['a7'];

if(isset($_POST['a8']))$a8=$_POST['a8'];

if(isset($_POST['a9']))$a9=$_POST['a9'];

if(isset($_POST['b1']))$b1=$_POST['b1'];

if(isset($_POST['b2']))$b2=$_POST['b2'];

if(isset($_POST['b3']))$b3=$_POST['b3'];

if(isset($_POST['b4']))$b4=$_POST['b4'];

if(isset($_POST['b5']))$b5=$_POST['b5'];

if(isset($_POST['b6']))$b6=$_POST['b6'];

if(isset($_POST['b7']))$b7=$_POST['b7'];

if(isset($_POST['b8']))$b8=$_POST['b8'];

if(isset($_POST['b9']))$b9=$_POST['b9'];

if(isset($_POST['c1']))$c1=$_POST['c1'];

if(isset($_POST['c2']))$c2=$_POST['c2'];

?>

<div class="container descrip"> 

<?php
if($a1){

    $pokemon=1;
    $url = "https://pokeapi.co/api/v2/pokemon/".$pokemon . "/";
    $json = file_get_contents($url);
    $data = json_decode($json,true);
    
    
    
    $name = $data["species"]["name"];
    $img = $data['sprites']['front_default'];
    $peso= $data['weight'];
    
    
    echo "<H1>Nombre pokemon: <br> </h1>" .'<h2>'.$name . '</h2>';
    echo "<br>" . '<img src="'. $img .'"alt="">';
    
    
    echo "<b><br> Peso: </b>". $peso . "Kg";
    
    foreach($data['abilities'] as $ability){
    echo "<b><br> Habilidades: </b>" . $ability['ability']['name'];
    }
    foreach($data['types'] as $type){
        echo "<b><br> Tipo: </b>" . $type['type']['name'];
        }
    }
?>

        </div>

        <div class="container descrip"> 

<?php
if($a2){

    $pokemon=2;
    $url = "https://pokeapi.co/api/v2/pokemon/".$pokemon . "/";
    $json = file_get_contents($url);
    $data = json_decode($json,true);
    
    
    
    $name = $data["species"]["name"];
    $img = $data['sprites']['front_default'];
    $peso= $data['weight'];
    
    
    echo "<H1>Nombre pokemon: <br> </h1>" .'<h2>'.$name . '</h2>';
    echo "<br>" . '<img src="'. $img .'"alt="">';
    
    
    echo "<b><br> Peso: </b>". $peso . "Kg";
    
    foreach($data['abilities'] as $ability){
    echo "<b><br> Habilidades: </b>" . $ability['ability']['name'];
    }
    foreach($data['types'] as $type){
        echo "<b><br> Tipo: </b>" . $type['type']['name'];
        }
    }
?>

        </div>

        <div class="container descrip"> 

<?php
if($a3){

    $pokemon=3;
    $url = "https://pokeapi.co/api/v2/pokemon/".$pokemon . "/";
    $json = file_get_contents($url);
    $data = json_decode($json,true);
    
    
    
    $name = $data["species"]["name"];
    $img = $data['sprites']['front_default'];
    $peso= $data['weight'];
    
    
    echo "<H1>Nombre pokemon: <br> </h1>" .'<h2>'.$name . '</h2>';
    echo "<br>" . '<img src="'. $img .'"alt="">';
    
    
    echo "<b><br> Peso: </b>". $peso . "Kg";
    
    foreach($data['abilities'] as $ability){
    echo "<b><br> Habilidades: </b>" . $ability['ability']['name'];
    }
    foreach($data['types'] as $type){
        echo "<b><br> Tipo: </b>" . $type['type']['name'];
        }
    }
?>

        </div>

        <div class="container descrip"> 

<?php
if($a4){

    $pokemon=4;
    $url = "https://pokeapi.co/api/v2/pokemon/".$pokemon . "/";
    $json = file_get_contents($url);
    $data = json_decode($json,true);
    
    
    
    $name = $data["species"]["name"];
    $img = $data['sprites']['front_default'];
    $peso= $data['weight'];
    
    
    echo "<H1>Nombre pokemon: <br> </h1>" .'<h2>'.$name . '</h2>';
    echo "<br>" . '<img src="'. $img .'"alt="">';
    
    
    echo "<b><br> Peso: </b>". $peso . "Kg";
    
    foreach($data['abilities'] as $ability){
    echo "<b><br> Habilidades: </b>" . $ability['ability']['name'];
    }
    foreach($data['types'] as $type){
        echo "<b><br> Tipo: </b>" . $type['type']['name'];
        }
    }
?>

        </div>

        <div class="container descrip"> 

<?php
if($a5){

    $pokemon=5;
    $url = "https://pokeapi.co/api/v2/pokemon/".$pokemon . "/";
    $json = file_get_contents($url);
    $data = json_decode($json,true);
    
    
    
    $name = $data["species"]["name"];
    $img = $data['sprites']['front_default'];
    $peso= $data['weight'];
    
    
    echo "<H1>Nombre pokemon: <br> </h1>" .'<h2>'.$name . '</h2>';
    echo "<br>" . '<img src="'. $img .'"alt="">';
    
    
    echo "<b><br> Peso: </b>". $peso . "Kg";
    
    foreach($data['abilities'] as $ability){
    echo "<b><br> Habilidades: </b>" . $ability['ability']['name'];
    }
    foreach($data['types'] as $type){
        echo "<b><br> Tipo: </b>" . $type['type']['name'];
        }
    }
?>

        </div>

        <div class="container descrip"> 

<?php
if($a6){

    $pokemon=6;
    $url = "https://pokeapi.co/api/v2/pokemon/".$pokemon . "/";
    $json = file_get_contents($url);
    $data = json_decode($json,true);
    
    
    
    $name = $data["species"]["name"];
    $img = $data['sprites']['front_default'];
    $peso= $data['weight'];
    
    
    echo "<H1>Nombre pokemon: <br> </h1>" .'<h2>'.$name . '</h2>';
    echo "<br>" . '<img src="'. $img .'"alt="">';
    
    
    echo "<b><br> Peso: </b>". $peso . "Kg";
    
    foreach($data['abilities'] as $ability){
    echo "<b><br> Habilidades: </b>" . $ability['ability']['name'];
    }
    foreach($data['types'] as $type){
        echo "<b><br> Tipo: </b>" . $type['type']['name'];
        }
    }
?>

        </div>

        <div class="container descrip"> 

<?php
if($a7){

    $pokemon=7;
    $url = "https://pokeapi.co/api/v2/pokemon/".$pokemon . "/";
    $json = file_get_contents($url);
    $data = json_decode($json,true);
    
    
    
    $name = $data["species"]["name"];
    $img = $data['sprites']['front_default'];
    $peso= $data['weight'];
    
    
    echo "<H1>Nombre pokemon: <br> </h1>" .'<h2>'.$name . '</h2>';
    echo "<br>" . '<img src="'. $img .'"alt="">';
    
    
    echo "<b><br> Peso: </b>". $peso . "Kg";
    
    foreach($data['abilities'] as $ability){
    echo "<b><br> Habilidades: </b>" . $ability['ability']['name'];
    }
    foreach($data['types'] as $type){
        echo "<b><br> Tipo: </b>" . $type['type']['name'];
        }
    }
?>

        </div>

        <div class="container descrip"> 

<?php
if($a8){

    $pokemon=8;
    $url = "https://pokeapi.co/api/v2/pokemon/".$pokemon . "/";
    $json = file_get_contents($url);
    $data = json_decode($json,true);
    
    
    
    $name = $data["species"]["name"];
    $img = $data['sprites']['front_default'];
    $peso= $data['weight'];
    
    
    echo "<H1>Nombre pokemon: <br> </h1>" .'<h2>'.$name . '</h2>';
    echo "<br>" . '<img src="'. $img .'"alt="">';
    
    
    echo "<b><br> Peso: </b>". $peso . "Kg";
    
    foreach($data['abilities'] as $ability){
    echo "<b><br> Habilidades: </b>" . $ability['ability']['name'];
    }
    foreach($data['types'] as $type){
        echo "<b><br> Tipo: </b>" . $type['type']['name'];
        }
    }
?>

        </div>

        <div class="container descrip"> 

<?php
if($a9){

    $pokemon=9;
    $url = "https://pokeapi.co/api/v2/pokemon/".$pokemon . "/";
    $json = file_get_contents($url);
    $data = json_decode($json,true);
    
    
    
    $name = $data["species"]["name"];
    $img = $data['sprites']['front_default'];
    $peso= $data['weight'];
    
    
    echo "<H1>Nombre pokemon: <br> </h1>" .'<h2>'.$name . '</h2>';
    echo "<br>" . '<img src="'. $img .'"alt="">';
    
    
    echo "<b><br> Peso: </b>". $peso . "Kg";
    
    foreach($data['abilities'] as $ability){
    echo "<b><br> Habilidades: </b>" . $ability['ability']['name'];
    }
    foreach($data['types'] as $type){
        echo "<b><br> Tipo: </b>" . $type['type']['name'];
        }
    }
?>

        </div>

        <div class="container descrip"> 

<?php
if($b1){

    $pokemon=10;
    $url = "https://pokeapi.co/api/v2/pokemon/".$pokemon . "/";
    $json = file_get_contents($url);
    $data = json_decode($json,true);
    
    
    
    $name = $data["species"]["name"];
    $img = $data['sprites']['front_default'];
    $peso= $data['weight'];
    
    
    echo "<H1>Nombre pokemon: <br> </h1>" .'<h2>'.$name . '</h2>';
    echo "<br>" . '<img src="'. $img .'"alt="">';
    
    
    echo "<b><br> Peso: </b>". $peso . "Kg";
    
    foreach($data['abilities'] as $ability){
    echo "<b><br> Habilidades: </b>" . $ability['ability']['name'];
    }
    foreach($data['types'] as $type){
        echo "<b><br> Tipo: </b>" . $type['type']['name'];
        }
    }
?>

        </div>

        <div class="container descrip"> 

<?php
if($b2){

    $pokemon=11;
    $url = "https://pokeapi.co/api/v2/pokemon/".$pokemon . "/";
    $json = file_get_contents($url);
    $data = json_decode($json,true);
    
    
    
    $name = $data["species"]["name"];
    $img = $data['sprites']['front_default'];
    $peso= $data['weight'];
    
    
    echo "<H1>Nombre pokemon: <br> </h1>" .'<h2>'.$name . '</h2>';
    echo "<br>" . '<img src="'. $img .'"alt="">';
    
    
    echo "<b><br> Peso: </b>". $peso . "Kg";
    
    foreach($data['abilities'] as $ability){
    echo "<b><br> Habilidades: </b>" . $ability['ability']['name'];
    }
    foreach($data['types'] as $type){
        echo "<b><br> Tipo: </b>" . $type['type']['name'];
        }
    }
?>

        </div>

        <div class="container descrip"> 

<?php
if($b3){

    $pokemon=12;
    $url = "https://pokeapi.co/api/v2/pokemon/".$pokemon . "/";
    $json = file_get_contents($url);
    $data = json_decode($json,true);
    
    
    
    $name = $data["species"]["name"];
    $img = $data['sprites']['front_default'];
    $peso= $data['weight'];
    
    
    echo "<H1>Nombre pokemon: <br> </h1>" .'<h2>'.$name . '</h2>';
    echo "<br>" . '<img src="'. $img .'"alt="">';
    
    
    echo "<b><br> Peso: </b>". $peso . "Kg";
    
    foreach($data['abilities'] as $ability){
    echo "<b><br> Habilidades: </b>" . $ability['ability']['name'];
    }
    foreach($data['types'] as $type){
        echo "<b><br> Tipo: </b>" . $type['type']['name'];
        }
    }
?>

        </div>

        <div class="container descrip"> 

<?php
if($b4){

    $pokemon=13;
    $url = "https://pokeapi.co/api/v2/pokemon/".$pokemon . "/";
    $json = file_get_contents($url);
    $data = json_decode($json,true);
    
    
    
    $name = $data["species"]["name"];
    $img = $data['sprites']['front_default'];
    $peso= $data['weight'];
    
    
    echo "<H1>Nombre pokemon: <br> </h1>" .'<h2>'.$name . '</h2>';
    echo "<br>" . '<img src="'. $img .'"alt="">';
    
    
    echo "<b><br> Peso: </b>". $peso . "Kg";
    
    foreach($data['abilities'] as $ability){
    echo "<b><br> Habilidades: </b>" . $ability['ability']['name'];
    }
    foreach($data['types'] as $type){
        echo "<b><br> Tipo: </b>" . $type['type']['name'];
        }
    }
?>

        </div>

        <div class="container descrip"> 

<?php
if($b5){

    $pokemon=14;
    $url = "https://pokeapi.co/api/v2/pokemon/".$pokemon . "/";
    $json = file_get_contents($url);
    $data = json_decode($json,true);
    
    
    
    $name = $data["species"]["name"];
    $img = $data['sprites']['front_default'];
    $peso= $data['weight'];
    
    
    echo "<H1>Nombre pokemon: <br> </h1>" .'<h2>'.$name . '</h2>';
    echo "<br>" . '<img src="'. $img .'"alt="">';
    
    
    echo "<b><br> Peso: </b>". $peso . "Kg";
    
    foreach($data['abilities'] as $ability){
    echo "<b><br> Habilidades: </b>" . $ability['ability']['name'];
    }
    foreach($data['types'] as $type){
        echo "<b><br> Tipo: </b>" . $type['type']['name'];
        }
    }
?>

        </div>

        <div class="container descrip"> 

<?php
if($b6){

    $pokemon=15;
    $url = "https://pokeapi.co/api/v2/pokemon/".$pokemon . "/";
    $json = file_get_contents($url);
    $data = json_decode($json,true);
    
    
    
    $name = $data["species"]["name"];
    $img = $data['sprites']['front_default'];
    $peso= $data['weight'];
    
    
    echo "<H1>Nombre pokemon: <br> </h1>" .'<h2>'.$name . '</h2>';
    echo "<br>" . '<img src="'. $img .'"alt="">';
    
    
    echo "<b><br> Peso: </b>". $peso . "Kg";
    
    foreach($data['abilities'] as $ability){
    echo "<b><br> Habilidades: </b>" . $ability['ability']['name'];
    }
    foreach($data['types'] as $type){
        echo "<b><br> Tipo: </b>" . $type['type']['name'];
        }
    }
?>

        </div>
        <div class="container descrip"> 

<?php
if($b7){

    $pokemon=16;
    $url = "https://pokeapi.co/api/v2/pokemon/".$pokemon . "/";
    $json = file_get_contents($url);
    $data = json_decode($json,true);
    
    
    
    $name = $data["species"]["name"];
    $img = $data['sprites']['front_default'];
    $peso= $data['weight'];
    
    
    echo "<H1>Nombre pokemon: <br> </h1>" .'<h2>'.$name . '</h2>';
    echo "<br>" . '<img src="'. $img .'"alt="">';
    
    
    echo "<b><br> Peso: </b>". $peso . "Kg";
    
    foreach($data['abilities'] as $ability){
    echo "<b><br> Habilidades: </b>" . $ability['ability']['name'];
    }
    foreach($data['types'] as $type){
        echo "<b><br> Tipo: </b>" . $type['type']['name'];
        }
    }
?>

        </div>

        <div class="container descrip"> 

<?php
if($b8){

    $pokemon=17;
    $url = "https://pokeapi.co/api/v2/pokemon/".$pokemon . "/";
    $json = file_get_contents($url);
    $data = json_decode($json,true);
    
    
    
    $name = $data["species"]["name"];
    $img = $data['sprites']['front_default'];
    $peso= $data['weight'];
    
    
    echo "<H1>Nombre pokemon: <br> </h1>" .'<h2>'.$name . '</h2>';
    echo "<br>" . '<img src="'. $img .'"alt="">';
    
    
    echo "<b><br> Peso: </b>". $peso . "Kg";
    
    foreach($data['abilities'] as $ability){
    echo "<b><br> Habilidades: </b>" . $ability['ability']['name'];
    }
    foreach($data['types'] as $type){
        echo "<b><br> Tipo: </b>" . $type['type']['name'];
        }
    }
?>

        </div>
        <div class="container descrip"> 

<?php
if($b9){

    $pokemon=18;
    $url = "https://pokeapi.co/api/v2/pokemon/".$pokemon . "/";
    $json = file_get_contents($url);
    $data = json_decode($json,true);
    
    
    
    $name = $data["species"]["name"];
    $img = $data['sprites']['front_default'];
    $peso= $data['weight'];
    
    
    echo "<H1>Nombre pokemon: <br> </h1>" .'<h2>'.$name . '</h2>';
    echo "<br>" . '<img src="'. $img .'"alt="">';
    
    
    echo "<b><br> Peso: </b>". $peso . "Kg";
    
    foreach($data['abilities'] as $ability){
    echo "<b><br> Habilidades: </b>" . $ability['ability']['name'];
    }
    foreach($data['types'] as $type){
        echo "<b><br> Tipo: </b>" . $type['type']['name'];
        }
    }
?>

        </div>

        <div class="container descrip"> 

<?php
if($c1){

    $pokemon=19;
    $url = "https://pokeapi.co/api/v2/pokemon/".$pokemon . "/";
    $json = file_get_contents($url);
    $data = json_decode($json,true);
    
    
    
    $name = $data["species"]["name"];
    $img = $data['sprites']['front_default'];
    $peso= $data['weight'];
    
    
    echo "<H1>Nombre pokemon: <br> </h1>" .'<h2>'.$name . '</h2>';
    echo "<br>" . '<img src="'. $img .'"alt="">';
    
    
    echo "<b><br> Peso: </b>". $peso . "Kg";
    
    foreach($data['abilities'] as $ability){
    echo "<b><br> Habilidades: </b>" . $ability['ability']['name'];
    }
    foreach($data['types'] as $type){
        echo "<b><br> Tipo: </b>" . $type['type']['name'];
        }
    }
?>

        </div>

        <div class="container descrip"> 

<?php
if($c2){

    $pokemon=20;
    $url = "https://pokeapi.co/api/v2/pokemon/".$pokemon . "/";
    $json = file_get_contents($url);
    $data = json_decode($json,true);
    
    
    
    $name = $data["species"]["name"];
    $img = $data['sprites']['front_default'];
    $peso= $data['weight'];
    
    
    echo "<H1>Nombre pokemon: <br> </h1>" .'<h2>'.$name . '</h2>';
    echo "<br>" . '<img src="'. $img .'"alt="">';
    
    
    echo "<b><br> Peso: </b>". $peso . "Kg";
    
    foreach($data['abilities'] as $ability){
    echo "<b><br> Habilidades: </b>" . $ability['ability']['name'];
    }
    foreach($data['types'] as $type){
        echo "<b><br> Tipo: </b>" . $type['type']['name'];
        }
    }
?>

        </div>

    </body>
</html>
