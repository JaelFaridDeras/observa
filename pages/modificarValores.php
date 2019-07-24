<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'observatorio';
//Ikaros2009
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if($db->connect_error){
    die("Error conectando a la base de datos: ".$db->connect_error);
} 

$id = $_POST['id'];
$precitaee = $_POST['precitaee'];
$precpobt = $_POST['precpobt'];
$precpeco = $_POST['precpeco'];
$poblacion = $_POST['poblacion'];
$pobemp = $_POST['pobemp'];
$desemp = $_POST['desemp'];
$itaee = $_POST['itaee'];
$varpt = $_POST['varpt'];
$varpy = $_POST['varpy'];
$crimen = $_POST['crimen'];
echo $id;

$query = "UPDATE data SET precitaee='".$precitaee."', precpobt='".$precpobt."', precpeco='".$precpeco."', poblacion='".$poblacion."', pobemp='".$pobemp."' , 
desemp='".$desemp."' , itaee='".$itaee."' , varpt='".$varpt."' , varpy='".$varpy."' , crimen='".$crimen."' WHERE id='".$id."'";
$result = mysqli_query($db, $query);
if ($result) {
    echo "<script>location.href='mostrandoEstados.php';</script>";
}else{
    echo "<script>alert('No se modifico correctamente')location.href='../modificandoEstados.php';</script>";
} 
echo "kkk";
?>