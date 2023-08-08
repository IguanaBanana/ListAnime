<?php
session_start();

if (isset($_SESSION['administrador'])) {
    echo $_SESSION['administrador'];
} else {
    echo 'false'; 
}
?>
