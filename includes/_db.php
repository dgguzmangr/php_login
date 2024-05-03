<?php
//echo "Cargando _db.php...";
//$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
//$dotenv->load();

$host = "localhost";
$user = "root";
$password = "";
$database = "login_module_db";

//$host = $_ENV['DB_HOST'];
//$user = $_ENV['DB_USERNAME'];
//$password = $_ENV['DB_PASSWORD'];
//$database = $_ENV['DB_NAME'];

$connection = mysqli_connect($host, $user, $password, $database);
if (!$connection) {
    echo"Error al conectar con la base de datos: " . mysqli_connect_error();
} else {
    echo"conexión correcta a bd";
}
