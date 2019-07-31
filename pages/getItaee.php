<?php
include('dbConfig.php');
$itaee = $db->query("SELECT itaee FROM data");
while($row=mysqli_fetch_array($itaee)){

    $itaeeAr[] = $row['itaee'];

}
echo JSON_encode($itaeeAr);
?>