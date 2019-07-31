<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = ';
$dbName = 'observatorio';

$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if($db->connect_error){
    die("Error conectando a la base de datos: ".$db->connect_error);
}
session_start();
    if(isset($_SESSION['usuario'])){
} else {                             
header("location: login.php");                                  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenidos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="mycss.css">
    <!--Link footer-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/about.css">

</head>

<body>
    <nav class="header navbar navbar-expand-lg navbar-light bg-nav sticky-top ">
        <a class="navbar-brand" href="#"></a>
        <a href="../pages/index.html"><img src="../img/LogoMexico.png" width="60" height="40"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav mr-auto ml-auto">
                <a class="nav-item nav-link" href="#" style="color: white;">Inicio<span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="../pages/cerrarSesion.php" style="color: white;">Cerrar Sesión</a>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <h3>Estados</h3>
        <div class="table-responsive">
        <table class="tabla table table-striped" id="tablatickets">
            <th>Modificar</th>
            <th>Estado</th>
            <th>Antigüedad de la información económica (Datos de Crecimiento)</th>
            <th>Fecha último Censo</th>
            <th>Antigüedad de la información económica (Población)</th>
            <th>Población</th>
            <th>Población con empleo</th>
            <th>Población desempleada</th>
            <th>Crecimiento en el trimestre</th>
            <th>Crecimiento respecto al trimestre anterior</th>
            <th>Crecimiento respecto al año anterior</th>
            <th>Crimen</th>
            <?php 
                $id = $_SESSION["id"];
                $sel = $db->query("SELECT*FROM data");
                while ($fila = $sel -> fetch_assoc()) {
            ?>
            <tr>
                <td><a class="btn btn-primary" href="modificandoEstados.php?id=<?php echo $fila['id']?>">MODIFICAR</a></td>
                <td><?php echo $fila['estado']?></td>
                <td><?php echo $fila['precitaee']?></td>
                <td><?php echo $fila['precpobt']?></td>
                <td><?php echo $fila['precpeco']?></td>
                <td><?php echo $fila['poblacion']?></td>
                <td><?php echo $fila['pobemp']?></td>
                <td><?php echo $fila['desemp']?></td>
                <td><?php echo $fila['itaee']?></td>
                <td><?php echo $fila['varpt']?></td>
                <td><?php echo $fila['varpy']?></td>
                <td><?php echo $fila['crimen']?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>


    <!---Scripts footer-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



</body></html>
