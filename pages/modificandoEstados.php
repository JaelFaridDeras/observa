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
        <div class="container">
            <h2>Modificar Estado</h2>
            <br>
            <?php
            $id=$_GET['id'];
            $sel = $db->query("SELECT * FROM data WHERE id = $id");
            while ($fila = $sel -> fetch_assoc()) {
            ?>
            <form action ="modificarValores.php" method="post">
                <input value="<?php echo $fila['id']?>" name="id" type="hidden"/>
                <div class="col-md-12">
                    <label class="col-md-4 control-label" nombre="estado" >Estado:</label>
                    <label class="col-md-3 control-label" nombre="estado" ><b><?php echo $fila['estado']?> </b></label>
                </div>
                
                <div class="col-md-12">
                    <label for="precitaee" class="col-md-7 control-label">Antigüedad de la información económica (Datos de Crecimiento):</label>
                    <input value="<?php echo $fila['precitaee']?>" class="col-md-5" type="text" size="5" maxlength="30" name="precitaee"/>
                </div>
                <div class="col-md-12">
                    <label for="precpobt" class="col-md-7 control-label">Fecha último Censo:</label>
                    <input value="<?php echo $fila['precpobt']?>" class="col-md-5" type="text" size="5" maxlength="30" name="precpobt"/>
                </div>
                <div class="col-md-12">
                    <label for="precpeco" class="col-md-7 control-label">Antigüedad de la información económica (Población):</label>
                    <input value="<?php echo $fila['precpeco']?>" class="col-md-5" type="text" size="5" maxlength="30" name="precpeco"/>
                </div>
                <div class="col-md-12">
                    <label for="poblacion" class="col-md-7 control-label">Población:</label>
                    <input value="<?php echo $fila['poblacion']?>" class="col-md-5" type="number"  name="poblacion"/>
                </div>
                <div class="col-md-12">
                    <label for="pobemp" class="col-md-7 control-label">Población con empleo:</label>
                    <input value="<?php echo $fila['pobemp']?>" class="col-md-5" type="number"  name="pobemp"/>
                </div>
                <div class="col-md-12">
                    <label for="desemp" class="col-md-7 control-label">Población desempleada:</label>
                    <input value="<?php echo $fila['desemp']?>" class="col-md-5" type="number" name="desemp"/>
                </div>
                <div class="col-md-12">
                    <label for="itaee" class="col-md-7 control-label">Crecimiento en el trimestre:</label>
                    <input value="<?php echo $fila['itaee']?>" class="col-md-5" type="text"  name="itaee"/>
                </div>
                <div class="col-md-12">
                    <label for="varpt" class="col-md-7 control-label">Crecimiento respecto al trimestre anterior:</label>
                    <input value="<?php echo $fila['varpt']?>" class="col-md-5" type="text" name="varpt"/>
                </div>
                <div class="col-md-12">
                    <label for="varpy" class="col-md-7 control-label">Crecimiento respecto al año anterior:</label>
                    <input value="<?php echo $fila['varpy']?>" class="col-md-5" type="text" name="varpy"/>
                </div>
                <div class="col-md-12">
                    <label for="crimen" class="col-md-7 control-label">Crimen:</label>
                    <input value="<?php echo $fila['crimen']?>" class="col-md-5" type="number" name="crimen"/>
                </div>
                <br>
                <div class="form-group">
                    <div class="col-md-offset-3 col-md-9">
                        <button id="btn-signup" type="submit" class="btn btn-info" value="Guardar"><i class="icon-hand-right"></i>MODIFICAR</button> 
                    </div>
                </div>
            </form>
            <?php } ?>
        </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>


    <!---Scripts footer-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



</body></html>
