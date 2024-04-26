<?php
include 'session_start.php';

// Asegúrate de que esta es la forma correcta de obtener el business_id
$business_id = $_SESSION['business_id'];

// Obtén los datos del producto del formulario
$id_producto = $_POST['id_producto'];
$nombre_producto = $_POST['nombre_producto'];
$descripcion_producto = $_POST['descripcion_producto'];
$precio_producto = $_POST['precio_producto'];
$moneda_producto = $_POST['moneda_producto'];

// Prepara la consulta SQL
$stmt = $db->prepare("UPDATE productos SET nombre_producto = ?, descripcion_producto = ?, precio_producto = ?, moneda_producto = ? WHERE business_id = ? AND id_producto = ?");
$stmt->bind_param("ssdsii", $nombre_producto, $descripcion_producto, $precio_producto, $moneda_producto, $business_id, $id_producto);

    // Ejecuta la consulta
    if ($stmt->execute()) {
        echo "success";
    } else {
        echo "Error: " . $stmt->error;
    }

// Cierra la consulta
$stmt->close();
?>
