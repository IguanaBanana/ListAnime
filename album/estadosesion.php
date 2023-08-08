<?php
session_start();



if (isset($_SESSION['administrador']) && $_SESSION['administrador']==true) {
    echo 'administrador';
} else if (isset($_SESSION['usuario']) && $_SESSION['usuario']==true) {
    echo 'user';
} else if (isset($_SESSION['logged_in']) && $_SESSION['administrador']==false) {
    echo'true'; 
}else{
    'false';
}

?>
