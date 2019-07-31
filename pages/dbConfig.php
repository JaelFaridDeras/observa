<?php 
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'observatorio';

$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if($db->connect_error){
    die("Error conectando a la base de datos: ".$db->connect_error);
}

$dataEntry = array();
$query_data = $db->query("SELECT * FROM data");
if($query_data->num_rows > 0){
    while($rowEntry = $query_data->fetch_assoc()){
        $dataEntry[] = $rowEntry;
    }
}

echo mysqli_error($db);
$values = json_encode($dataEntry);
$convertedValue = json_decode($values, true);
?>