<?php
require_once ("_db.php");

if (isset($_POST['accion'])){ 
    switch ($_POST['accion']){
        case 'editar_registro':
            editar_registro();
            break; 
            case 'eliminar_registro';
            eliminar_registro();
            break;
            case 'acceso_user';
            acceso_user();
            break;
		}
	}

    function editar_registro() {
        $connection= mysqli_connect("localhost", "root", "", "login_module_db");
		extract($_POST);
		$consulta="UPDATE user SET name = '$name', correo = '$correo', phone = '$phone',
		password ='$password' WHERE id = '$id' ";
		mysqli_query($connection, $consulta);
		header('Location: ../views/user.php');
}

function eliminar_registro() {
    $connection= mysqli_connect("localhost", "root", "", "login_module_db");
    extract($_POST);
    $id= $_POST['id'];
    $consulta= "DELETE FROM user WHERE id= $id";
    mysqli_query($connection, $consulta);
    header('Location: ../views/user.php');
}

function acceso_user() {
    $name=$_POST['name'];
    $password=$_POST['password'];
    session_start();
    $_SESSION['name']=$name;
    $connection= mysqli_connect("localhost", "root", "", "login_module_db");
    $consulta= "SELECT * FROM user WHERE name='$name' AND password='$password'";
    $resultado=mysqli_query($connection, $consulta);
    $filas=mysqli_num_rows($resultado);
    if($filas){
        header('Location: ../views/user.php');
    }else{
        header('Location: login.php');
        session_destroy();
    }
}






