<?php 
    $conexion = new mysqli("localhost", "root", "", "listanime") or die("Sin conexion al servidor. Favor de revisar");
    if (!$conexion) {
        echo "Error: No se pudo conectar a MySQL. Error " . mysqli_connect_errno() . " : ". mysqli_connect_error() . PHP_EOL;
        die;
    }
    $queryinsert =  "INSERT INTO usuarios ( password, nombre, apellido1, apellido2, mail, nacimiento)VALUES ('".$_POST['floatingPassword']."', '".$_POST['floatingnombre']."','".$_POST['floatingape1']."','".$_POST['floatingape2']."','".$_POST['floatingmail']."'
    ,'".$_POST['floatingfecha']."')";    $conexion = new mysqli("localhost", "root", "", "listanime") or die("Sin conexion al servidor. Favor de revisar");
    if (($result = mysqli_query($conexion, $queryinsert)) == false) {
        die(mysqli_error($conexion));
    }
    header("location:index.php");
?>