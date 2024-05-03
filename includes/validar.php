<?php
//$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
//$dotenv->load();
//$connection= mysqli_connect($host, $user, $database);
$connection= mysqli_connect("localhost", "root", "", "login_module_db");
if(isset($_POST['registrar'])){
  if(strlen($_POST['name']) >=1 && strlen($_POST['email'])  >=1 && strlen($_POST['phone'])  >=1 
  && strlen($_POST['password'])  >=1 ){

  $name = trim($_POST['name']);
  $email = trim($_POST['email']);
  $phone = trim($_POST['phone']);
  $password = trim($_POST['password']);
  $consulta= "INSERT INTO user (name, email, phone, password)
  VALUES ('$name', '$email','$phone','$password' )";
  mysqli_query($connection, $consulta);
  mysqli_close($connection);
  header('Location: ../views/user.php');
  }
}
?>