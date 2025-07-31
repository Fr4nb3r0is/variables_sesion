<?php
// Iniciar la sesión - SIEMPRE debe ir al principio
session_start();

// Verificar si se enviaron datos por POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Guardar los datos del formulario en variables de sesión
    $_SESSION['nombre'] = $_POST['nombre'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['edad'] = $_POST['edad'];
    $_SESSION['fecha_registro'] = date('Y-m-d H:i:s');
}
include '../Frontend/html/procesar.html';
?>

