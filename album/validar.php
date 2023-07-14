<?php
// Conexión a la base de datos MySQL
$servername = "localhost";
$username = "usuario";
$password = "password";
$dbname = "basedatos";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['mail'];
$contrasena = $_POST['password'];

// Validar los datos en la base de datos
$sql = "SELECT * FROM usuarios WHERE mail = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "El email ya está registrado en la base de datos.";
} else {
    // Insertar los datos en la base de datos
    $sql = "INSERT INTO usuarios (nombre, mail, password) VALUES ('$nombre', '$email', '$contrasena')";
    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso.";
    } else {
        echo "Error al registrar los datos: " . $conn->error;
    }
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
