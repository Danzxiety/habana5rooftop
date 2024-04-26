<?php
include '../session_start.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtén los datos del formulario
    $business_id = $_POST['business_id'];
    $search_product = $_POST['search_product'];

    // Prepara la consulta SQL
    $stmt = $db->prepare("SELECT * FROM productos WHERE nombre_producto LIKE ? AND business_id = ?");
    $likeVar = '%' . $search_product . '%';
    $stmt->bind_param("si", $likeVar, $business_id);

    // Ejecuta la consulta
    $stmt->execute();

    // Obtiene los resultados
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) {
        echo "<div><p class='my-3 h5'>" . $row['nombre_producto'] . " - " . $row['precio_producto'] . " " . $row['moneda_producto'] . "</p></div><hr class='m-0'>";
    }

    // Cierra la consulta
    $stmt->close();
}
?>
