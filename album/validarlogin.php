<?php
session_start();
$conexion = new mysqli("localhost", "root", "", "listanime") or die("Sin conexion al servidor. Favor de revisar");
if (!$conexion) {
    echo "Error: No se pudo conectar a MySQL. Error " . mysqli_connect_errno() . " : ". mysqli_connect_error() . PHP_EOL;
    die;
}
$queryinsert =  "SELECT * FROM usuarios WHERE mail ='{$_POST['floatingInput']}' AND password = '{$_POST['floatingPassword']}'";
$com = mysqli_query($conexion, $queryinsert);
    if($com->num_rows > 0 ){
        while ($fila = $com->fetch_assoc()) {
            $rol = $fila["rango"];
            if ($rol == 'administrador'){
                $_SESSION['administrador'] = true;
                $_SESSION['logged_in'] = true;
                header("location: index.php");
                exit();
        }
            else if($rol == 'usuario'){
                $_SESSION['administrador'] = false;
                $_SESSION['usuario'] = true;
                $_SESSION['logged_in'] = true;
                header("location: index.php");
                exit();
            }else{
                $_SESSION['administrador'] = false;
                $_SESSION['logged_in'] = false;
               // header("location: index.php");
               // exit();
            }
            
    }
}
    else {
            {
            $mensajeError = "Ocurrió un error en el proceso. Favor de verificar los datos";
            $html = "<script>
            function mostrarError() {
                alert('$mensajeError');
               window.location.href = 'login.html';
            }
            window.onload = mostrarError;
        </script>";
            echo $html;
            exit;
            }
        }
?>
