<?php
// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "coomeva");


if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}


$sql = "SELECT * FROM registro";
$resultado = mysqli_query($conexion, $sql);


while ($fila = mysqli_fetch_row($resultado)) {
    echo "<tr>";

    echo "<td>" . $fila['1'] . "</td>";
    echo "<td>" . $fila['2'] . "</td>";
    echo "<td>" . $fila['3'] . "</td>";
    echo "<td>" . $fila['4'] . "</td>";
    echo "<td>" . $fila['5'] . "</td>";
    echo "<td>" . $fila['6'] . "</td>";
    echo "<td>" . $fila['7'] . "</td>";
    echo "<td>" . $fila['8'] . "</td>";
    echo "<td>" . $fila['9'] . "</td>";
    echo "<td>" . $fila['10'] . "</td>";
    echo "<td>" . $fila['11'] . "</td>";
    echo "<td>" . $fila['12'] . "</td>";
 


    echo "</tr>";
}



mysqli_close($conexion);
?>
