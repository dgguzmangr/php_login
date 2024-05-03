<?php
//$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
//$dotenv->load();
session_start();
error_reporting(0);
$varsesion = $_SESSION['name'];

if($varsesion== null || $varsesion == ''){
    header("Location: ../includes/login.php");
    die();
}

$id = $_GET['id'];
//$connection= mysqli_connect($host, $user, $database);
$connection= mysqli_connect("localhost", "root", "", "login_module_db");
$consulta= "SELECT * FROM user WHERE id = $id";
$resultado = mysqli_query($connection, $consulta);
$usuario = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html lang="es-MX">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registros</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <body id="page-top">
        <form  action="../includes/_functions.php" method="POST">
            <div id="login" >
                <div class="container">
                    <div id="login-row" class="row justify-content-center align-items-center">
                        <div id="login-column" class="col-md-6">
                            <div id="login-box" class="col-md-12">
                                <br>
                                <br>
                                <h3 class="text-center">Editar usuario</h3>
                                <div class="form-group">
                                    <label for="name" class="form-label">Nombre *</label>
                                    <input type="text" id="name" name="name" class="form-control" value="<?php echo $usuario['name'];?>"required>
                                </div>
                                <div class="form-group">
                                    <label for="username">Correo electrónico:</label><br>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="" value="<?php echo $usuario['email'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="phone" class="form-label">phone *</label>
                                    <input type="tel"  id="phone" name="phone" class="form-control" value="<?php echo $usuario['phone'];?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Contraseña:</label><br>
                                    <input type="password" name="password" id="password" class="form-control" value="<?php echo $usuario['password'];?>" required>
                                    <input type="hidden" name="accion" value="editar_registro">
                                    <input type="hidden" name="id" value="<?php echo $id;?>">
                                </div>
                                <br>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-success" >Editar</button>
                                    <a href="user.php" class="btn btn-danger">Cancelar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>