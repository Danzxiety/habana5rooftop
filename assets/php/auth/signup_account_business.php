<?php
session_start();
// Incluye el archivo con las constantes de la base de datos
include '../config.php';

// Comprueba si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $business_marca = mysqli_real_escape_string($db, htmlspecialchars($_POST['business_marca']));
    $business_telefono = mysqli_real_escape_string($db, htmlspecialchars($_POST['business_telefono']));
    $business_correo_electronico = mysqli_real_escape_string($db, htmlspecialchars($_POST['business_correo_electronico']));
    $business_contrasena = password_hash(mysqli_real_escape_string($db, htmlspecialchars($_POST['business_contrasena'])), PASSWORD_DEFAULT);

    if ($db) {
        // Verifica si el nombre del negocio ya existe
        $stmt = $db->prepare("SELECT * FROM business_account WHERE business_marca = ?");
        $stmt->bind_param("s", $business_marca);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo "El nombre del negocio ya existe.";
        } else {
            // Verifica si el número de teléfono ya existe
            $stmt = $db->prepare("SELECT * FROM business_account WHERE business_telefono = ?");
            $stmt->bind_param("s", $business_telefono);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                echo "El número de teléfono ya existe.";
            } else {
                // Verifica si el correo electrónico ya existe
                $stmt = $db->prepare("SELECT * FROM business_account WHERE business_correo_electronico = ?");
                $stmt->bind_param("s", $business_correo_electronico);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    echo "El correo electrónico ya existe.";
                } else {
                    // Prepara la consulta SQL
                    $stmt = $db->prepare("INSERT INTO business_account (business_marca, business_telefono, business_correo_electronico, business_contrasena) VALUES (?, ?, ?, ?)");
                    $stmt->bind_param("ssss", $business_marca, $business_telefono, $business_correo_electronico, $business_contrasena);

                    // Ejecuta la consulta
                    try {
                        if ($stmt->execute()) {
                          echo "success";
                        } else {
                          throw new Exception("Error: " . $stmt->error);
                        }
                      } catch(Exception $e) {
                        echo $e->getMessage();
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


