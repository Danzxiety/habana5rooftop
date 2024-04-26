<?php
session_start();
// Incluye el archivo con las constantes de la base de datos
include '../../config.php';

// Comprueba si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $contact_nombre = mysqli_real_escape_string($db, htmlspecialchars($_POST['contact_nombre']));
    $contact_apellido = mysqli_real_escape_string($db, htmlspecialchars($_POST['contact_apellido']));

    // Obtiene el prefijo y el número de teléfono del formulario
    $contact_telefono_prefix = mysqli_real_escape_string($db, htmlspecialchars($_POST['contact_telefono_prefix']));
    $contact_telefono_number = mysqli_real_escape_string($db, htmlspecialchars($_POST['contact_telefono_number']));
    
    // Concatena el prefijo y el número de teléfono para formar el número de teléfono completo
    $contact_telefono = $contact_telefono_prefix . $contact_telefono_number;

    // Obtiene el account_id del usuario de la sesión
    $account_id = $_SESSION['user_id'];

    if ($db) {

            // Verifica si el número de teléfono ya existe
            $stmt = $db->prepare("SELECT * FROM contactos WHERE contact_telefono = ?");
            $stmt->bind_param("s", $contact_telefono);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                echo "Ya tiene un contacto con ese número.";
            } else {
                    // Prepara la consulta SQL
                    $stmt = $db->prepare("INSERT INTO contactos (account_id, contact_nombre, contact_apellido, contact_telefono) VALUES (?, ?, ?, ?)");
                    $stmt->bind_param("isss", $account_id, $contact_nombre, $contact_apellido, $contact_telefono);

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

        // Cierra la consulta
        $stmt->close();
    } else {
        echo "No se pudo conectar a la base de datos.";
    }

?>
