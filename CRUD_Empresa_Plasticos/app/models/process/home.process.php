<?php
// Conexión a MySQL (reemplaza con tus credenciales)
$conexion = mysqli_connect("localhost", "Director", "plasticos", "plasticos");

// Verificar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Autenticar al usuario directamente en MySQL
    $query = "SELECT user FROM mysql.user WHERE user = '$username' AND host = 'localhost'";

    $result = mysqli_query($conexion, $query);

    if (mysqli_num_rows($result) == 1) {
        // Usuario autenticado con éxito, redirige al usuario a la página de destino
        header("Location: read.php");
        exit;
    } else {
        // Credenciales incorrectas, muestra un mensaje de error
        echo "Credenciales incorrectas. Inténtalo de nuevo.";
    }
}
?>

