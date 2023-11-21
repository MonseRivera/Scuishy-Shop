<?php
include("conexion.php");

$conexion = conectar();

$username = $_POST["username"];
$pass = $_POST["pass"];

// Consultar la base de datos para verificar las credenciales
$sql = "SELECT * FROM registros WHERE user_new = '$username' AND contrasena = '$pass'";
$resultado = mysqli_query($conexion, $sql);

if ($resultado) {
    if (mysqli_num_rows($resultado) == 1) {
        $row = mysqli_fetch_assoc($resultado);
        $tipo_usuario = $row["rol"];

        // Inicio de sesión exitoso
        session_start();
        $_SESSION["username"] = $username;

        // Redirigir según el tipo de usuario
        if ($tipo_usuario == '0') {
            header("Location: inicio.php");
        } elseif ($tipo_usuario == '1') {
            header("Location: iniciou.php");
        } else {
            // Tipo de usuario no reconocido, manejar según sea necesario
            $mensaje = "Error: Tipo de usuario no reconocido.";
            header("Location: login.php?mensaje=" . urlencode($mensaje));
            exit();
        }
    } else {
        // Credenciales incorrectas
        $mensaje = "Error al iniciar sesión: Credenciales incorrectas.";
        header("Location: login.php?mensaje=" . urlencode($mensaje));
        exit();
    }
} else {
    // Error en la consulta SQL
    $mensaje = "Error al iniciar sesión: " . mysqli_error($conexion);
    header("Location: login.php?mensaje=" . urlencode($mensaje));
    exit();
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>

