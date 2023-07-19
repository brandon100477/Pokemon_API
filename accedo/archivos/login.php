<?php

include("conexiondatabase.php");
error_reporting(0);
session_start();

if(!empty($_POST['email']) && !empty($_POST['password'])){

    $registro= $conect->prepare('SELECT Id, Correo_electronico, Password FROM usuarios WHERE Correo_electronico=:email');
    $registro->bindParam (':email',$_POST['email']);
    $registro->execute();
    $resultado = $registro->fetch(PDO::FETCH_ASSOC);


    $mensaje='';

    if(count($resultado)> 0 && password_verify($_POST['password'], $resultado['Password'])){
        $_SESSION['user_id'] = $resultado['Id'];
        header('Location: .././Pokemons.php');
    }else{
        $mensaje= "Sus credenciales no son correctas, intentalo nuevamente";
        }
}
?>
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="img/inicio.png">
   
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    
    <link rel="stylesheet" href="./assets/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/uf-style.css">
    <link rel="stylesheet" href="./assets/css/style.css"></link>
    <title>Inicio de sesión</title>


    <form action=".././Pokemons.php" method="post">
    <button type = "submit" name ="inicio" class="btn btn-dark btn-pokemon col-2">Pokemons</button>
  </form>



  </head>

  <body>

  <?php if (!empty($mensaje)): ?>
    <div class="uf-form-signin text-center text-white h3 mensaje-emergente">
    <p><?= $mensaje ?></p>
    </div>
  <?php endif;?>
  

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <div class="uf-form-signin">
      <div class="text-center">
      <img src="./assets/img/inicio.png" alt="" width="100" height="100"></a>
      <h1 class="text-white h3">Inicia sesión</h1>
      </div>

      <form class="mt-4" action="login.php" method="post">

        <div class="input-group uf-input-group input-group-lg mb-3">
          <span class="input-group-text fa fa-user"></span>
          <input type="text" name="email" id="usu" class="form-control" placeholder="Correo electronico" required autofocus>
        </div>
        <div class="input-group uf-input-group input-group-lg mb-3">
          <span class="input-group-text fa fa-lock"></span>
          <input type="password" name="password" id="pass" class="form-control" placeholder="*****" required>
        </div>
        <div class="d-grid mb-4">
          <input type = "submit" name ="inicio" value = "Iniciar"  class="btn uf-btn-primary btn-lg">
        </div>
        <div class="d-flex mb-3">
            <div class="dropdown-divider m-auto w-25"></div>
            <small class="text-nowrap text-white">Aún no tienes una cuenta?</small>
            <div class="dropdown-divider m-auto w-25"></div>
        </div>

        <div class="mt-4 text-center">
          <span class="text-white"></span>
          <a href="register.php" type="submit" name ="registro">Registrarse</a>


        </div>
      </form>
    </div>

    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </body>
</html>