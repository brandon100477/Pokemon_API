<?php 
    
include("archivos/conexiondatabase.php");

session_start();
error_reporting(0);

if(isset($_SESSION['user_id'])){
    $registro= $conect->prepare('SELECT Id, Nombre, Correo_electronico, Password FROM usuarios WHERE Id=:id');
    $registro->bindParam (':id',$_SESSION['user_id']);
    $registro->execute();
    $resultado = $registro->fetch(PDO::FETCH_ASSOC);

    $usuario =null;

    if(count($resultado)> 0){
        $usuario = $resultado;
    }
}
include("seguridad.php");
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Lista de Pokemons</title>
        <link rel="stylesheet" href="archivos/style.css"></link>
        
        

</nav>
        <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #c1f7be;">
  <div class="container-fluid">
    <a class="navbar-brand disabled">Bienvenido <?=$usuario['Nombre'] ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="archivos/login.php" name= "loggin">iniciar sesión</a>
        <a class="nav-link" href="archivos/register.php">Registrarse</a>

    <?php if(!empty($registro)):?>
        <a class="nav-link" href="archivos/cerrar_sesion.php">Cerrar sesión</a>
        <?php else: ?>
            
        <?php endif; ?>

      </div>
    </div>
  </div>
</nav>
    </form>
    </head>


<body>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="archivos/assets/css/style.css">

    <?php if (!empty($usuario)): ?>
        
        <div class ="pa">
            <h3>Ya puedes ver la descripción de los pokemons.</h3>
        </div>

    <?php else: ?>
    <?php endif; ?>

    <!--Rediccionamiento para pokemones-->
    <form action="archivos/descrip1.php" method="post" > 

        <div class="container text-center">

        <div class="row align-items-start">
            <div class="col">
            <input type = "submit" name ="a1" class="btn btn-primary" value = "Bulbasaur">
            </div>
            <div class="col">
            <input type = "submit" name ="a2" class="btn btn-primary" value = "Ivysaur">
            </div>
            <div class="col">
            <input type = "submit" name ="a3" class="btn btn-primary" value = "Venusaur">
            </div>
            <div class="col">
            <input type = "submit" name ="a4" class="btn btn-primary" value = "Charmander">
            </div>
        </div>
        </div>

    <div class="container text-center">
    <div class="row align-items-start">
        <div class="col">
        <input type = "submit" name ="a5" class="btn btn-primary" value = "Charmeleon">
        </div>
        <div class="col">
        <input type = "submit" name ="a6" class="btn btn-primary" value = "Charizard">
        </div>
        <div class="col">
        <input type = "submit" name ="a7" class="btn btn-primary" value = "Squirtle">
        </div>
        <div class="col">
        <input type = "submit" name ="a8" class="btn btn-primary" value = "Wartortle">
        </div>
    </div>
    </div>

    <div class="container text-center">
    <div class="row align-items-start">
        <div class="col">
        <input type = "submit" name ="a9" class="btn btn-primary" value = "Blastoise">
        </div>
        <div class="col">
        <input type = "submit" name ="b1" class="btn btn-primary" value = "Caterpie">
        </div>
        <div class="col">
        <input type = "submit" name ="b2" class="btn btn-primary" value = "Metapod">
        </div>
        <div class="col">
        <input type = "submit" name ="b3" class="btn btn-primary" value = "Buterfree">
        </div>
    </div>
    </div>

    <div class="container text-center">
    <div class="row align-items-start">
        <div class="col">
        <input type = "submit" name ="b4" class="btn btn-primary" value = "Weedle">
        </div>
        <div class="col">
        <input type = "submit" name ="b5" class="btn btn-primary" value = "Kakuna">
        </div>
        <div class="col">
        <input type = "submit" name ="b6" class="btn btn-primary" value = "Beedrill">
        </div>
        <div class="col">
        <input type = "submit" name ="b7" class="btn btn-primary" value = "Pidgey">
        </div>
    </div>
    </div>

    <div class="container text-center">
    <div class="row align-items-start">
        <div class="col">
        <input type = "submit" name ="b8" class="btn btn-primary" value = "Pidgeotto">
        </div>
        <div class="col">
        <input type = "submit" name ="b9" class="btn btn-primary" value = "Piedgeot">
        </div>
        <div class="col">
        <input type = "submit" name ="c1" class="btn btn-primary" value = "Rattata">
        </div>
        <div class="col">
        <input type = "submit" name ="c2" class="btn btn-primary" value = "Raticate">
        </div>
    </div>
    </div>

    </form>
    <link rel="stylesheet" href="js/bootstrap.min.js">
</body>

<html>
