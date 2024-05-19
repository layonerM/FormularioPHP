<?php
$servername = "localhost";  
$username = "root";   
$password = ""; 
$dbname = "coomeva"; 
// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
$eps = $_POST['eps'];
$sangre = $_POST['sangre'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$id =  $_POST['id'];
$hijos = isset($_POST['hijos']) ? mysqli_real_escape_string($conn, $_POST['hijos']) : 'no especificado';
$departamento =  $_POST['departmento'];
$municipio =  $_POST['municipio'];
$direccion =  $_POST['Dirección'];
$fecha =  $_POST['fehca'];
$cita =  $_POST['cita'];
$nacimiento = $_POST['nacimiento'];

// Insertar los datos en la base de datos
$sql = "INSERT INTO registro (eps, sangre, nombre, apellido, identificacion, hijos, departamento, municipio, direccion, fecha, cita, nacimiento) 
        VALUES ('$eps', '$sangre', '$nombre', '$apellido', '$id', '$hijos', '$departamento', '$municipio', '$direccion', '$fecha', '$cita', '$nacimiento')";

if ($conn->query($sql) === TRUE) {
   
    header("location:index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>