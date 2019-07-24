<?php
function gEstado($estado)
{
    include('dbConfig.php');
    $query_data = $db->query("SELECT * FROM data where estado = '$estado' ");
    if ($query_data->num_rows > 0) {
        while ($rowEntry = $query_data->fetch_assoc()) {
            echo "<p>" . "<i>Población: </i>" . $rowEntry["poblacion"] . " hab." . "</p>";
            echo "<p>" . "<i>Población con empleo (15 años y más): </i>" . $rowEntry["pobemp"] . " hab." . "</p>";
            echo "<p>" . "<i>Población desempleada (15 años y más): </i>" . $rowEntry["desemp"] . " hab." . "</p>";
                if ($rowEntry["crimen"] >= 6) {
                    $crime = "MUY ALTO";
                } elseif ($rowEntry["crimen"] >= 4) {
                    $crime = "ALTO";
                } elseif ($rowEntry["crimen"] >= 2) {
                    $crime = "MEDIO";
                } elseif ($rowEntry["crimen"] >= 0) {
                    $crime = "BAJO";
                }
            echo "<p>" . "<i>Indice de Criminalidad: </i>" . $crime . "</p>";
            echo "<h5 class=\"centered\"><strong>Datos de carácter económico</strong></h5>";
            echo "<p>" . "<i>Crecimiento en el trimestre: </i>" . $rowEntry["itaee"] . "%" . "</p>";
            echo "<p>" . "<i>Crecimiento respecto al trimestre anterior: </i>" . $rowEntry["varpt"] . "%" . "</p>";
            echo "<p>" . "<i>Crecimiento respecto al año anterior: </i>" . $rowEntry["varpy"] . "%" . "</p>";
            echo "<h5 class=\"centered\"><strong>Antigüedad de la Información</strong></h5>";
            echo "<small><p>" . "<i>Antigüedad de la información económica (Población): </i>" . $rowEntry["precpeco"] . "</p></small>";
            echo "<small><p>" . "<i>Antigüedad de la información económica (Datos de Crecimiento): </i>" . $rowEntry["precitaee"] . "</p></small>";
            echo "<small><p>" . "<i>Fecha último Censo: </i>" . $rowEntry["precpobt"] . "</p></small>";
        }
    }
}
?>