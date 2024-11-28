<?php
// Inicia o reanuda la sesión
session_start();

include("Conexion.php");

$usuario = $_POST["usuario"];
$password = $_POST["password"];

$ValidarLogin = mysqli_query($Conex, "SELECT * FROM `usuarios` WHERE Usuario = '$usuario' AND Contraseña = '$password'");

if (mysqli_num_rows($ValidarLogin) > 0) {
    $usuario_info = mysqli_fetch_assoc($ValidarLogin);
    // Almacena información del usuario en la sesión
    $_SESSION['usuario_id'] = $usuario_info['IdUsr'];
    header("location:Inicio.php");
    exit;
} else {
    echo "<script>alert('Usuario inexistente, verifique los datos.'); window.location = 'Inicio_sesion.php'</script>";
    exit;
}
?>
