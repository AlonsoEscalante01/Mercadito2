
<?php
include("Conexion.php");

if (isset($_POST["registrar"])) {
    if (strlen($_POST["usuario"]) >= 1 &&
        strlen($_POST["password"]) >= 1 &&
        strlen($_POST["nombres"]) >= 1 &&
        strlen($_POST["apellidos"]) >= 1 &&
        strlen($_POST["correo"]) >= 1 &&
        strlen($_POST["telefono"]) >= 1) {

        $usuario = $_POST["usuario"];
        $password = $_POST["password"];
        $nombres = $_POST["nombres"];
        $apellidos = $_POST["apellidos"];
        $telefono = $_POST["telefono"];
        $correo = $_POST["correo"];

        $Consulta = "INSERT INTO `usuarios`(`Usuario`, `Contraseña`, `Nombres`, `Apellidos`, `Telefono`, `Email`)
                     VALUES ('$usuario','$password','$nombres','$apellidos','$telefono','$correo')";

        $Resultado = mysqli_query($Conex, $Consulta);

        if ($Resultado) {
            echo "<h2>Registro Correcto!</h2>";
        } else {
            echo "<h2>Registro Fallido!</h2>";
        }
    } else {
        echo "<h2>Llene correctamente los campos, por favor!</h2>";
    }
}

?>