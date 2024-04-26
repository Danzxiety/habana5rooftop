<?php
session_start();
// Incluye el archivo con las constantes de la base de datos
include '../config.php';

// Comprueba si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recoge los datos del formulario
    $account_nombre = mysqli_real_escape_string($db, htmlspecialchars($_POST['account_nombre']));
    $account_apellido = mysqli_real_escape_string($db, htmlspecialchars($_POST['account_apellido']));
    $account_telefono = mysqli_real_escape_string($db, htmlspecialchars($_POST['account_telefono']));
    $account_correo_electronico = mysqli_real_escape_string($db, htmlspecialchars($_POST['account_correo_electronico']));
    $account_contrasena = password_hash(mysqli_real_escape_string($db, htmlspecialchars($_POST['account_contrasena'])), PASSWORD_DEFAULT);

    if ($db) {
        // Verifica si el nombre del negocio ya existe
        $stmt = $db->prepare("SELECT * FROM user_account WHERE account_telefono = ?");
        $stmt->bind_param("s", $account_telefono);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo "Ya hay un numero de telefono.";
        } else {
            // Verifica si el número de teléfono ya existe
            $stmt = $db->prepare("SELECT * FROM user_account WHERE account_correo_electronico = ?");
            $stmt->bind_param("s", $account_correo_electronico);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                echo "El correo electrónico ya existe.";
            } else {
                // Verifica si el correo electrónico ya existe
                $stmt = $db->prepare("SELECT * FROM user_account WHERE account_correo_electronico = ?");
                $stmt->bind_param("s", $account_correo_electronico);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    echo "El correo electrónico ya existe.";
                } else {
                    // Prepara la consulta SQL
                    $stmt = $db->prepare("INSERT INTO user_account (account_nombre, account_apellido, account_telefono, account_correo_electronico, account_contrasena) VALUES (?, ?, ?, ?, ?)");
                    $stmt->bind_param("sssss", $account_nombre, $account_apellido, $account_telefono, $account_correo_electronico, $account_contrasena);

                    // Ejecuta la consulta
                    if ($stmt->execute()) {
                        echo "success";
                    } else {
                        echo "Error: " . $stmt->error;
                    }
                }
            }
        }

        // Cierra la consulta
        $stmt->close();
    } else {
        echo "No se pudo conectar a la base de datos.";
    }
}
?>


