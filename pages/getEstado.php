<?php
include('dbConfig.php');
$estado = $db->query("SELECT estado FROM data");
while($row=mysqli_fetch_array($estado)){

    $estadoAr[] = $row['estado'];

}
echo JSON_encode($estadoAr);

?>