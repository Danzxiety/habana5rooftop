<?php
include '../session_start.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtén los datos del formulario
    $business_id = $_SESSION['business_id'];
    $nombre_categoria = mysqli_real_escape_string($db, htmlspecialchars($_POST['nombre_categoria']));
    $prioridad_categoria = mysqli_real_escape_string($db, htmlspecialchars($_POST['prioridad_categoria']));

    // Prepara la consulta SQL
    $stmt = $db->prepare("INSERT INTO categorias_productos (business_id, nombre_categoria, prioridad_categoria) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $business_id, $nombre_categoria, $prioridad_categoria);

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
