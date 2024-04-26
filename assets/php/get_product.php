<?php
include 'session_start.php';

// Asegúrate de que esta es la forma correcta de obtener el business_id
$business_id = $_SESSION['business_id'];

// Obtén el ID del producto de la solicitud
$id_producto = $_POST['id_producto'];

// Prepara la consulta SQL
$stmt = $db->prepare("SELECT * FROM productos WHERE business_id = ? AND id_producto = ?");
$stmt->bind_param("ii", $business_id, $id_producto);

// Ejecuta la consulta
$stmt->execute();
$result = $stmt->get_result();

// Comprueba si la consulta devolvió algún resultado
if ($result->num_rows > 0) {
    // Recorre cada fila del resultado (solo debería haber una)
    while($row = $result->fetch_assoc()) {
        // Aquí puedes manejar los datos del producto
        // Por ejemplo, puedes generar un array con los datos y devolverlo como una respuesta JSON
        $producto = array(
            'id_producto' => $row['id_producto'],
            'nombre_producto' => $row['nombre_producto'],
            'descripcion_producto' => $row['descripcion_producto'],
            'precio_producto' => $row['precio_producto'],
            'moneda_producto' => $row['moneda_producto'],
            'estado_producto' => $row['estado_producto']
        );
        echo json_encode($producto);
    }
} else {
    echo "No se encontró el producto.";
}

// Cierra la consulta
$stmt->close();
?>
