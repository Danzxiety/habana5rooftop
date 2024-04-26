<?php
session_start();
// Incluye el archivo con las constantes de la base de datos
include '../../config.php';

// Obtiene el account_id del usuario de la sesión
$account_id = $_SESSION['user_id'];

if ($db) {
    // Prepara la consulta SQL para obtener los contactos del usuario
    $stmt = $db->prepare("SELECT * FROM contactos WHERE account_id = ?");
    $stmt->bind_param("i", $account_id);

    // Ejecuta la consulta
    $stmt->execute();
    $result = $stmt->get_result();

    // Itera sobre los resultados y genera el HTML para cada contacto
    while ($contact = $result->fetch_assoc()) {
        echo '<div class="col-sm-6 col-lg-2">';
        echo '<a class="card card-hover-shadow card-transition h-100" style="box-shadow: 2px 3px 4px #00000030;" href="#">';
        echo '<div class="card-body">';
        echo '<div class="d-flex justify-content-left align-items-center">';
        echo '<svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path opacity="0.5" d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z" fill="#1C274C"></path> <path d="M16.807 19.0112C15.4398 19.9504 13.7841 20.5 12 20.5C10.2159 20.5 8.56023 19.9503 7.193 19.0111C6.58915 18.5963 6.33109 17.8062 6.68219 17.1632C7.41001 15.8302 8.90973 15 12 15C15.0903 15 16.59 15.8303 17.3178 17.1632C17.6689 17.8062 17.4108 18.5964 16.807 19.0112Z" fill="#1C274C"></path> <path d="M12 12C13.6569 12 15 10.6569 15 9C15 7.34315 13.6569 6 12 6C10.3432 6 9.00004 7.34315 9.00004 9C9.00004 10.6569 10.3432 12 12 12Z" fill="#1C274C"></path> </g></svg>';
        echo '<div class="ms-2">';
        echo '<h6 class="mb-0">' . htmlspecialchars($contact['contact_nombre']) . ' ' . htmlspecialchars($contact['contact_apellido']) . '</h6>';
        echo '<span class="text-body fs-6 ms-1">' . htmlspecialchars($contact['contact_telefono']) . '</span>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</a>';
        echo '</div>';
    }

echo '<div class="col-lg-1 mb-3" style="align-content: center; justify-content: center !important;align-items: center;margin-left: -10px !important;">
<a href="#" data-bs-toggle="modal" data-bs-target="#agg_contact" class="btn btn-light icmenu p-2 rounded-pill justify-content-center align-items-center" style="align-content: center; background-color: rgba(189, 197, 209, .2);">
<svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M6 12H18M12 6V18" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
</a>
</div>';

    
    

    // Cierra la consulta
    $stmt->close();
} else {
    echo "No se pudo conectar a la base de datos.";
}
?>
