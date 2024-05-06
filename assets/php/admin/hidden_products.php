<?php
include '../session_start.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtén los datos del formulario
    $business_id = $_SESSION['business_id'];
    $id_producto = $_POST['id_producto'];
    
    // Prepara la consulta SQL
    $stmt = $db->prepare("UPDATE productos SET estado_producto = 2 WHERE business_id = ? AND id_producto = ?");
    
    // Vincula los parámetros a la consulta
    $stmt->bind_param("ss", $business_id, $id_producto);

    // Ejecuta la consulta
    if ($stmt->execute()) {
        echo "success";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Cierra la consulta
    $stmt->close();
}
?>
