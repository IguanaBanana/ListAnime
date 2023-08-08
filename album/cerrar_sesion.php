<?php
session_start();

// Cerrar sesión
session_unset();
session_destroy();
echo "<script>alert('sesion ".print_r($_SESSION)."');</script> "; 
// Redirigir al archivo index.html después de cerrar sesión
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");
header("Location: index.php");
exit();
?>
