<?php
session_start();
// Incluye el archivo con las constantes de la base de datos
include '../config.php';

// Comprueba si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recoge los datos del formulario
    $business_correo_electronico = mysqli_real_escape_string($db, htmlspecialchars($_POST['business_correo_electronico']));
    $business_contrasena = mysqli_real_escape_string($db, htmlspecialchars($_POST['business_contrasena']));

    if ($db) {
        // Verifica si el correo electrónico existe en la base de datos
        $stmt = $db->prepare("SELECT * FROM business_account WHERE business_correo_electronico = ?");
        $stmt->bind_param("s", $business_correo_electronico);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // El correo electrónico existe, ahora verifica la contraseña
            $client = $result->fetch_assoc();

            if (password_verify($business_contrasena, $client['business_contrasena'])) {
                // La contraseña es correcta, inicia la sesión
                $_SESSION['business_correo_electronico'] = $business_correo_electronico;

                 // Guarda el nombre de la empresa en la sesión
                 $_SESSION['business_id'] = $client['business_id'];
                 $_SESSION['business_marca'] = $client['business_marca'];
                
                // Redirige al usuario a index.html
                echo "success";
            } else {
                echo "Contraseña incorrecta.";
            }
        } else {
            echo "El correo electrónico no existe.";
        }

        // Cierra la consulta
        $stmt->close();
    } else {
        echo "No se pudo conectar a la base de datos.";
    }
}
?>

