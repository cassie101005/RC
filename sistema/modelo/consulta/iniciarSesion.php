<?php
// Iniciar la sesión para guardar los datos del usuario
session_start();

// Incluir el archivo de conexión
require_once '../conexion.php';

// Verificar si se enviaron los datos por POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    if (!empty($email) && !empty($password)) {
        try {
            // Preparar la consulta para buscar al usuario por correo
            // Obtenemos IdUsuario, vNombre, vApellidos y vContrasena para la sesión
            $stmt = $conexion->prepare("SELECT IdUsuario, vNombre, vApellidos, vContrasena, vTipo FROM tbl_usuario WHERE vCorreo = :email AND IsActive = 1");
            $stmt->bindParam(':email', $email);
            $stmt->execute();

            $usuario = $stmt->fetch();

            if ($usuario) {
                // Verificar la contraseña
                if (password_verify($password, $usuario['vContrasena']) || $password === $usuario['vContrasena']) {

                    // Guardar datos en la sesión
                    $_SESSION['id_usuario'] = $usuario['IdUsuario'];
                    $_SESSION['nombre'] = $usuario['vNombre'];
                    $_SESSION['apellidos'] = $usuario['vApellidos'];
                    $_SESSION['tipo'] = $usuario['vTipo'];
                    $_SESSION['logged_in'] = true;

                    // Redireccionar al dashboard en la carpeta vistas
                    header("Location: ../../vistas/dashboard.php");
                    exit;
                } else {
                    echo "<script>alert('Contraseña incorrecta'); window.location.href = '../../../profiles/login.php';</script>";
                }
            } else {
                echo "<script>alert('Usuario no encontrado o inactivo'); window.location.href = '../../../profiles/login.php';</script>";
            }
        } catch (PDOException $e) {
            echo "Error de base de datos: " . $e->getMessage();
        }
    } else {
        echo "<script>alert('Por favor llene todos los campos'); window.location.href = '../../../profiles/login.php';</script>";
    }
} else {
    header("Location: ../../../profiles/login.php");
    exit;
}
?>