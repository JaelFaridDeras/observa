<?php
session_start();
$usuario = $_POST['usuario'];
$contrasenia = $_POST['password'];

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'observatorio';
//Ikaros2009
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if($db->connect_error){
    die("Error conectando a la base de datos: ".$db->connect_error);
}

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