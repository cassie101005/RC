<?php
// Configuración de la base de datos
$host = "localhost";
$db_name = "db_rc";
$username = "root";
$password = "";

try {
    // Establecer la conexión usando PDO
    $conexion = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);

    // Configurar el modo de error de PDO para que lance excepciones
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Opcional: Establecer el modo de obtención predeterminado a objeto o array asociativo
    $conexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    // En caso de error, mostrar el mensaje
    echo "Error de conexión: " . $e->getMessage();
    exit;
}
?>