<?php 

include("conexiondatabase.php");
error_reporting(0);

$mensaje="";

if(!empty($_POST['newname']) && !empty($_POST['newlastname']) && !empty($_POST['newemail']) && !empty($_POST['newpassword']) && !empty($_POST['newpassword2'])){

    $sql = "INSERT INTO usuarios (Nombre, Apellido, Password, Confirmar_Password, Correo_electronico, Fecha_registro) 
    VALUES(:newname, :newlastname, :newpassword, :newpassword2, :newemail, CURRENT_TIMESTAMP)";

    $ext = $conect->prepare($sql);
    $ext->bindParam(':newname',$_POST['newname']);
    $ext->bindParam(':newlastname',$_POST['newlastname']);
    $password = password_hash($_POST['newpassword'], PASSWORD_BCRYPT);
    $ext->bindParam(':newpassword',$password);
    $password2 = password_hash($_POST['newpassword2'], PASSWORD_BCRYPT);
    $ext->bindParam(':newpassword2',$password2);
    $ext->bindParam(':newemail',$_POST['newemail']);

        if($ext->execute()){
            $mensaje= 'Usuario creado exitosamente';

        }else{
            $mensaje= 'Ha ocurrido un error. Su usuario no fue creado exitosamente';
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
    <link rel="stylesheet" href="./assets/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/uf-style.css">
    <link rel="stylesheet" href="./assets/css/style.css"></link>

    <title>Registro Pokemon</title>

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

          <div class="uf-form-signin">
            <div class="text-center">
            <img src="./assets/img/registro.png" alt="" width="100" height="150">
            <h1 class="text-white h3">Registrarse es gratis</h1>
            </div>

          <form class="mt-4" action= "register.php" method= "post">
            <div class="input-group uf-input-group input-group-lg mb-3">
            <span class="input-group-text fa fa-user"></span>
            <input type="text" class="form-control" name="newname" placeholder="Nombre" required>
            </div>

            <div class="input-group uf-input-group input-group-lg mb-3">
            <span class="input-group-text fa fa-user"></span>
            <input type="text" class="form-control" name="newlastname" placeholder="Apellido" required>
            </div>

            <div class="input-group uf-input-group input-group-lg mb-3">
            <span class="input-group-text fa fa-lock"></span>
            <input type="password" class="form-control" name="newpassword" placeholder="Password" required>
            </div>

            <div class="input-group uf-input-group input-group-lg mb-3">
            <span class="input-group-text fa fa-lock"></span>
            <input type="password" class="form-control" name="newpassword2" placeholder="Password confirmation" required>
            </div>

            <div class="input-group uf-input-group input-group-lg mb-3">
            <span class="input-group-text fa fa-envelope"></span>
            <input type="email" class="form-control" name="newemail" placeholder="Email address" required autofocus>
            </div>

            <div class="d-grid mb-4">
            <input type="submit" name ="inicio" class="btn uf-btn-primary btn-lg" value = "Registrarse"></input>
            </div>

            <div class="mt-4 text-center">
            <span class="text-white">Ya tienes una cuenta?</span>
            <a href="login.php">Inicia sesión</a>
            </div>
          </form>
          </div>

    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
      </body>
</html>