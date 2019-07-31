<?php
session_start();
$usuario = $_POST['usuario'];
$contrasenia = $_POST['password'];

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'observatorio';

$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if($db->connect_error){
    die("Error conectando a la base de datos: ".$db->connect_error);
}

//---Obtener contraseña encriptada---//
/*
$getHash = $db->query("SELECT password FROM usuarios");
if ($getHash->num_rows > 0){
    while($row2 = $getHash->fetch_assoc()){
        echo $row2['password'];
    }
}

$getUser = $db->query("SELECT user FROM usuarios");
if ($getUser->num_rows > 0){
    while($row3 = $getUser->fetch_assoc()){
        echo $row3['usuario'];
    }
}
*/

$proceso = $db->query("SELECT*FROM usuarios WHERE usuario='$usuario' AND password='$contrasenia'");

if ($proceso->num_rows > 0){
	while ($row=$proceso->fetch_assoc()){ 
		$_SESSION['id']=$row[id];
        $_SESSION['usuario']=$row[usuario];
        header('Location: mostrandoEstados.php');
	}
} else {
    header('Location: login.php');
}
?>