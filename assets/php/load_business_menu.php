<?php
 $business_name = $_GET['name'];


  include 'config.php';

   

  // Prepara la consulta SQL para obtener el id del negocio
  $stmt = $db->prepare("SELECT business_id FROM business_account WHERE business_marca = ?");
  $stmt->bind_param("s", $business_name);

  // Ejecuta la consulta
  $stmt->execute();

  // Obtiene el resultado
  $result = $stmt->get_result();

  // Verifica si se encontró el negocio
  if ($result->num_rows > 0) {
    // Obtiene el id del negocio
    $row = $result->fetch_assoc();
    $business_id = $row['business_id'];

     // Prepara la consulta SQL para obtener las categorías del negocio
  $stmt = $db->prepare("SELECT id_categoria, nombre_categoria FROM categorias_productos WHERE business_id = ? ORDER BY prioridad_categoria ASC");
  $stmt->bind_param("i", $business_id);

  // Ejecuta la consulta
  $stmt->execute();

  // Obtiene el resultado
  $result = $stmt->get_result();

  // Muestra las categorías y productos
  while ($row = $result->fetch_assoc()) {
    echo '<a class="bookmark" id="' . htmlspecialchars($row['nombre_categoria']) . '"></a>';
    echo '<div class="row g-3 pb-3 mb-3">';
    echo '<div class="mb-5" style="display: flex!important; align-content: center; align-items: center;">';
    echo '<i class="bi bi-list me-2" style="font-size: 14px;"></i>';
    echo '<h2 class="mb-0 h2 ttf">' . htmlspecialchars($row['nombre_categoria']) . '</h2>';
    echo '</div>';
    // Prepara la consulta SQL para obtener los productos de la categoría
    $stmt2 = $db->prepare("SELECT nombre_producto, precio_producto, descripcion_producto, moneda_producto FROM productos WHERE id_categoria = ?");
    $stmt2->bind_param("i", $row['id_categoria']);

    // Ejecuta la consulta
    $stmt2->execute();

    // Obtiene el resultado
    $result2 = $stmt2->get_result();

    // Muestra los productos
    while ($row2 = $result2->fetch_assoc()) {
      echo '<div class="col-12 col-md-6 col-lg-3">';
      echo '<a class="card">';
      echo '<div class="card-body p-3">';
      echo '<h3 class="h5 mb-1" style="color: #4a4f5f">' . htmlspecialchars($row2['nombre_producto']) . '</h3>';
      echo '<p class="small mb-2" style="color: #4a4f5f">' . htmlspecialchars($row2['descripcion_producto']) . '</h3>';
      echo '<p class="h4 fw-bold mb-0" style="color: #d1b181;letter-spacing:-0.04px !important;">' . htmlspecialchars($row2['precio_producto']) . '<span class="ms-1" style="font-size:10px">' . htmlspecialchars($row2['moneda_producto']) . '</span></p>';
      echo '</div></a>
      </div>';
    }

    echo '</div><hr>';

    
    $stmt2->close();
  }  }

  $stmt->close();
  $db->close();
?>
