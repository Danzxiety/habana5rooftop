<?php
include '../config/config.php';

$stmt = $db->prepare("SELECT id_business FROM business WHERE id_business = 1");
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $id_business = $row['id_business'];

  $stmt = $db->prepare("SELECT id_categoria, nombre_categoria FROM categorias_productos WHERE id_business = ? ORDER BY prioridad_categoria ASC");
  $stmt->bind_param("i", $id_business);
  $stmt->execute();
  $result = $stmt->get_result();

  while ($row = $result->fetch_assoc()) {
    echo '<div class="accordion pt-5">';
    if ($row['nombre_categoria'] == 'DESAYUNOS') {
      echo '<h6>Los desayunos son de 9am a 12am</h6>';
    }
    echo '<div class="accordion-item border-0 shadow-none" style="background: transparent;"><div class="mb-4 d-flex d-lg-flex justify-content-center justify-content-lg-start" style="display: flex!important; align-content: center; align-items: center;">';
    echo '
    <h2 class="fw-bold d-lg-flex fs-3 justify-content-center justify-content-lg-start" style="text-transform: uppercase;letter-spacing: 3px; font-size:22x !important;">' . htmlspecialchars($row['nombre_categoria']) . '</h2>
    ';
    echo '<a class="btn_acor rounded-pill text-black btn-icon ms-4 shadow-none" style="width: 36px;border-radius: 10px; role="button" data-bs-toggle="collapse" data-bs-target="#collapse' . htmlspecialchars($row['id_categoria']) . '" aria-expanded="false" aria-controls="collapse' . htmlspecialchars($row['id_categoria']) . '"><svg class="rotate-svg" width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M18.2929 15.2893C18.6834 14.8988 18.6834 14.2656 18.2929 13.8751L13.4007 8.98766C12.6195 8.20726 11.3537 8.20757 10.5729 8.98835L5.68257 13.8787C5.29205 14.2692 5.29205 14.9024 5.68257 15.2929C6.0731 15.6835 6.70626 15.6835 7.09679 15.2929L11.2824 11.1073C11.673 10.7168 12.3061 10.7168 12.6966 11.1073L16.8787 15.2893C17.2692 15.6798 17.9024 15.6798 18.2929 15.2893Z" fill="#000"></path> </g></svg></a>';
    echo '</div><div id="collapse' . htmlspecialchars($row['id_categoria']) . '" class="accordion-collapse  collapse show" aria-labelledby="heading' . htmlspecialchars($row['id_categoria']) . '" data-bs-parent="#accordionExample">';
    echo '<div class="accordion-body">';

    // Aquí puedes agregar el código para mostrar los productos de cada categoría
    $stmt2 = $db->prepare("SELECT nombre_producto, precio_producto, descripcion_producto, moneda_producto FROM productos WHERE id_business = 1 AND id_categoria = ?  AND estado_producto = 1 AND id_subcategoria IS NULL ORDER BY prioridad_producto ASC");
    $stmt2->bind_param("i", $row['id_categoria']);
    $stmt2->execute();
    $result2 = $stmt2->get_result();

    echo '<div class="row">';
    while ($row2 = $result2->fetch_assoc()) {
      echo '<div class="col-12 col-md-6 col-lg-3">';
      echo '<a class="card shadow-none border-0 card-transition h-100" style="background: transparent;">';
      echo '<div class="card-body text-center text-md-start p-md-3 pt-2">';
      echo '<h3 class="fs-6 mb-1" style="text-transform: uppercase;letter-spacing: 0.5px;font-weight: 600 !important;">' . htmlspecialchars($row2['nombre_producto']) . '</h3>';
      echo '<p class="small mb-2" style="color: #4a4f5f">' . htmlspecialchars($row2['descripcion_producto']) . '</h3>';
      echo '<p class="fs-6 mb-0" style="color: #4a4f5f">' . htmlspecialchars($row2['precio_producto']) . '<span class="ms-1" style="font-size:10px">' . htmlspecialchars($row2['moneda_producto']) . '</span></p>';
      echo '</div></a>';
      echo '</div>';
    }
    echo '</div>';

    // Aquí puedes agregar el código para mostrar las subcategorías de cada categoría
    $stmt3 = $db->prepare("SELECT id_subcategoria, nombre_subcategoria FROM subcategorias_productos WHERE id_categoria = ? ORDER BY prioridad_subcategoria ASC");
    $stmt3->bind_param("i", $row['id_categoria']);
    $stmt3->execute();
    $result3 = $stmt3->get_result();

    while ($row3 = $result3->fetch_assoc()) {
      echo '<h2 class="fw-bold pt-4" style="text-transform: uppercase;letter-spacing: 2px; font-size:20px !important;">' . htmlspecialchars($row3['nombre_subcategoria']) . '</h2>';

      $stmt4 = $db->prepare("SELECT nombre_producto, precio_producto, descripcion_producto, moneda_producto FROM productos WHERE id_subcategoria = ? AND estado_producto = 1 ORDER BY prioridad_producto ASC");
      $stmt4->bind_param("i", $row3['id_subcategoria']);
      $stmt4->execute();
      $result4 = $stmt4->get_result();

      echo '<div class="row">';
      while ($row4 = $result4->fetch_assoc()) {
        echo '<div class="col-12 col-md-6 col-lg-3">';
        echo '<a class="card shadow-none border-0 card-transition h-100" style="background: transparent;">';
        echo '<div class="card-body text-center text-md-start p-md-3">';
        echo '<h3 class="fs-6 mb-1" style="text-transform: uppercase;letter-spacing: 0.5px;font-weight: 600 !important;">' . htmlspecialchars($row4['nombre_producto']) . '</h3>';
        echo '<p class="small mb-2" style="color: #4a4f5f">' . htmlspecialchars($row4['descripcion_producto']) . '</h3>';
        echo '<p class="fs-6 mb-0" style="color: #4a4f5f">' . htmlspecialchars($row4['precio_producto']) . '<span class="ms-1" style="font-size:10px">' . htmlspecialchars($row4['moneda_producto']) . '</span></p>';
        echo '</div></a>';
        echo '</div>';
      }
      echo '</div>';
    }

    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
  }
}
$db->close();
?>


<script>
    $('.btn_acor').on('click', function() {
    $(this).find('.rotate-svg').toggleClass('rotated');
});
</script>
<style>
.rotate-svg {
    transition: transform 0.3s ease-in-out;
}
.rotate-svg.rotated {
    transform: rotate(180deg);
    transition: transform 0.5s ease-in-out;
}
</style>

<style>
  a {
    text-decoration: none !important;
  }
</style>