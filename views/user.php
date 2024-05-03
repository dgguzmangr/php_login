<?php

session_start();
error_reporting(0);

//require_once('../includes/_db.php');
//$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
//$dotenv->load();

$varsesion = $_SESSION['name'];

if($varsesion == null || $varsesion == ''){
    header("Location: ../includes/login.php");
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/fontawesome-all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Usuarios</title>
  </head>
  <body>
    <div class="container">
      <div class="col-xs-12">
          <h1 class="text-center p-3">Lista de usuarios</h1>
          <br>
          <div>
            <a class="btn btn-success" href="../index.php">Nuevo usuario <i class="fa fa-plus"></i></a>
            <a class="btn btn-warning" href="../includes/_sesion/cerrarSesion.php">Cerrar sesión <i class="fa fa-power-off" aria-hidden="true"></i></a>
          </div>
          <br>
          <br>
          <table class="table table-striped table-dark " id= "table_id">
            <thead>    
            <tr class="text-center">
              <th>Nombre</th>
              <th>Correo electrónico</th>
              <th>Contraseña</th>
              <th>Teléfono</th>
              <th>Fecha</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $connection=mysqli_connect("localhost","root","","login_module_db");
            $SQL="SELECT * FROM user";
            $dato = mysqli_query($connection, $SQL);
            if($dato -> num_rows >0){
                while($fila=mysqli_fetch_array($dato)){
            ?>

            <tr>
              <td><?php echo $fila['name']; ?></td>
              <td><?php echo $fila['email']; ?></td>
              <td><?php echo $fila['password']; ?></td>
              <td><?php echo $fila['phone']; ?></td>
              <td><?php echo $fila['date']; ?></td>
              <td>
                <a class="btn btn-warning" href="editar_user.php?id=<?php echo $fila['id']?> "><i class="fa fa-edit">Editar</i></a>
                <a class="btn btn-danger" href="eliminar_user.php?id=<?php echo $fila['id']?>"><i class="fa fa-trash">Eliminar</i></a>
              </td>
            </tr>
            <?php
              }
            }else{
            ?>
            <tr class="text-center">
              <td colspan="16">No existen registros</td>
            </tr>
            <?php
            }
            ?>
	        </tbody>
          </table>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
  <script src="../js/user.js"></script>
  </body>
</html>