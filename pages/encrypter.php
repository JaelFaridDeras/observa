<?php
//echo password_hash('unipoli', PASSWORD_BCRYPT);

if(password_verify('unipoli', '$2y$10$Jj.C9wyQcTOziMr7kDd5u.NHk9NRyu0Zh/FfpDnzDh/mo2gZyQkO6')){
    //echo "si es";
} else {
    //echo 'no es :c';
}
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = ';
$dbName = 'observatorio';

$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

$getHash = $db->query("SELECT password FROM usuarios");
if ($getHash->num_rows > 0){
    while($row2 = $getHash->fetch_assoc()){
        echo $row2['password'];
    }
}
?>