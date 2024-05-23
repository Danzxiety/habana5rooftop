<?php
include '../config/config.php';


  // Prepara la consulta SQL para obtener el id del negocio
  $stmt = $db->prepare("SELECT id_business FROM business WHERE id_business = 1");

  // Ejecuta la consulta
  $stmt->execute();

  // Obtiene el resultado
  $result = $stmt->get_result();

  // Verifica si se encontró el negocio
  if ($result->num_rows > 0) {
    // Obtiene el id del negocio
    $row = $result->fetch_assoc();
    $id_business = $row['id_business'];

     // Prepara la consulta SQL para obtener las categorías del negocio
  $stmt = $db->prepare("SELECT id_categoria, nombre_categoria FROM categorias_productos WHERE id_business = ? ORDER BY prioridad_categoria ASC");
  $stmt->bind_param("i", $id_business);

  // Ejecuta la consulta
  $stmt->execute();

  // Obtiene el resultado
  $result = $stmt->get_result();


  // Muestra las categorías y productos
  while ($row = $result->fetch_assoc()) {
    
    echo '<a class="bookmarks" id="' . htmlspecialchars($row['nombre_categoria']) . '"></a>';
    echo '<div class="row g-3 pb-3 mt-5">';
    echo '<div class="mb-4 d-flex d-lg-flex justify-content-center justify-content-lg-start" style="display: flex!important; align-content: center; align-items: center;">';
    echo '<h2 class="fw-bold" style="text-transform: uppercase;letter-spacing: 3px; font-size:30px !important;">' . htmlspecialchars($row['nombre_categoria']) . '</h2>';
    echo '</div><hr>';
    // Prepara la consulta SQL para obtener los productos de la categoría
    $stmt2 = $db->prepare("SELECT nombre_producto, precio_producto, descripcion_producto, moneda_producto FROM productos WHERE id_business = 1 AND id_categoria = ?  AND estado_producto = 1 AND id_subcategoria IS NULL ORDER BY prioridad_producto ASC");
    $stmt2->bind_param("i", $row['id_categoria']);

    // Ejecuta la consulta
    $stmt2->execute();

    // Obtiene el resultado
    $result2 = $stmt2->get_result();

    // Muestra los productos
    while ($row2 = $result2->fetch_assoc()) {
      echo '<div class="col-12 col-md-6 col-lg-4">';
      echo '<a class="card shadow-none border-0 card-transition h-100" style="background: transparent;">';
      echo '<div class="card-body text-center text-md-start p-md-3">';
      echo '<h3 class="fs-6 mb-1" style="text-transform: uppercase;letter-spacing: 0.5px;font-weight: 600 !important;">' . htmlspecialchars($row2['nombre_producto']) . '</h3>';
      echo '<p class="small mb-2" style="color: #4a4f5f">' . htmlspecialchars($row2['descripcion_producto']) . '</h3>';
      echo '<p class="fs-6 mb-0" style="color: #4a4f5f">' . htmlspecialchars($row2['precio_producto']) . '<span class="ms-1" style="font-size:10px">' . htmlspecialchars($row2['moneda_producto']) . '</span></p>';
      echo '</div></a>
      </div>';
    }

    echo '</div>';



    $stmt3 = $db->prepare("SELECT id_subcategoria, nombre_subcategoria FROM subcategorias_productos WHERE id_categoria = ? ORDER BY prioridad_subcategoria ASC");
    $stmt3->bind_param("i", $row['id_categoria']);
    
    // Ejecuta la consulta
    $stmt3->execute();
    
    // Obtiene el resultado
    $result3 = $stmt3->get_result();
    
    // Muestra las subcategorías
    while ($row3 = $result3->fetch_assoc()) {
      echo '<div class="row g-3 pb-3">';
      echo '<div class="mb-4 d-flex d-lg-flex justify-content-center justify-content-lg-start" style="display: flex!important; align-content: center; align-items: center;">';
      echo '<h2 class="fw-bold" style="text-transform: uppercase;letter-spacing: 2px; font-size:22px !important;">' . htmlspecialchars($row3['nombre_subcategoria']) . '</h2>';
      echo '</div>';


      $stmt4 = $db->prepare("SELECT nombre_producto, precio_producto, descripcion_producto, moneda_producto FROM productos WHERE id_subcategoria = ? AND estado_producto = 1 ORDER BY prioridad_producto ASC");
$stmt4->bind_param("i", $row3['id_subcategoria']);

// Ejecuta la consulta
$stmt4->execute();

// Obtiene el resultado
$result4 = $stmt4->get_result();

// Muestra los productos
while ($row4 = $result4->fetch_assoc()) {
  echo '<div class="col-12 col-md-6 col-lg-4">';
  echo '<a class="card shadow-none border-0 card-transition h-100" style="background: transparent;">';
  echo '<div class="card-body text-center text-md-start p-md-3">';
  echo '<h3 class="fs-6 mb-1" style="text-transform: uppercase;letter-spacing: 0.5px;font-weight: 600 !important;">' . htmlspecialchars($row4['nombre_producto']) . '</h3>';
  echo '<p class="small mb-2" style="color: #4a4f5f">' . htmlspecialchars($row4['descripcion_producto']) . '</h3>';
  echo '<p class="fs-6 mb-0" style="color: #4a4f5f">' . htmlspecialchars($row4['precio_producto']) . '<span class="ms-1" style="font-size:10px">' . htmlspecialchars($row4['moneda_producto']) . '</span></p>';
  echo '</div></a>
  </div>';
}
echo '</div>';
    }
   


    
    $stmt2->close();
  }  }

  $stmt->close();
  $db->close();
?>
<style>
  a {
    text-decoration: none !important;
  }
</style>