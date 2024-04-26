<?php
include '../session_start.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtén los datos del formulario
    $business_id = $_SESSION['business_id'];
    $id_categoria = mysqli_real_escape_string($db, htmlspecialchars($_POST['id_categoria']));
    $nombre_producto = mysqli_real_escape_string($db, htmlspecialchars($_POST['nombre_producto']));
    $descripcion_producto = mysqli_real_escape_string($db, htmlspecialchars($_POST['descripcion_producto']));
    $precio_producto = mysqli_real_escape_string($db, htmlspecialchars($_POST['precio_producto']));
    $moneda_producto = mysqli_real_escape_string($db, htmlspecialchars($_POST['moneda_producto']));

    
            $stmt = $db->prepare("INSERT INTO productos (business_id, id_categoria, nombre_producto, descripcion_producto, precio_producto, moneda_producto) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssss", $business_id, $id_categoria, $nombre_producto, $descripcion_producto, $precio_producto, $moneda_producto);

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

