<?php
include '../session_start.php';

// Obtén el nuevo número de teléfono y el business_id desde la solicitud POST
$telefono = $_POST['telefono'];
$business_id = $_SESSION['business_id'];

// Prepara la consulta SQL
$stmt = $db->prepare("UPDATE reservas_tel SET account_telefono = ? WHERE business_id = ?");
$stmt->bind_param("si", $telefono, $business_id);

// Ejecuta la consulta y verifica si fue exitosa
if ($stmt->execute()) {
    echo "success";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$db->close();
?>
