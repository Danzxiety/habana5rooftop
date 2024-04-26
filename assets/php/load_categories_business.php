<?php
include 'session_start.php';

$business_id = $_SESSION['business_id']; // Asegúrate de que esta es la forma correcta de obtener el business_id

// Prepara la consulta SQL
$stmt = $db->prepare("SELECT * FROM categorias_productos WHERE business_id = ? ORDER BY prioridad_categoria ASC");
$stmt->bind_param("i", $business_id);

// Ejecuta la consulta
$stmt->execute();
$result = $stmt->get_result();

// Comprueba si la consulta devolvió algún resultado
if ($result->num_rows > 0) {
    // Recorre cada fila del resultado



    while($row = $result->fetch_assoc()) {
        // Genera el HTML para la categoría
        echo '<a class="bookmark" id="' . htmlspecialchars($row['nombre_categoria']) . '"></a>';
        echo '<div class="accordion-item mt-4">
        <div class="accordion-header" id="headingBasics' . htmlspecialchars($row['id_categoria']) . '"> 
        <div style="display: flex!important; align-content: center; align-items: center;"><span class="lgclip me-2" style="color: #1bd392;font-size: 50px !important;margin-top: -25px;">.</span><h5 class="py-3 h3 me-3 my-0 text-dark" style="text-wrap: nowrap;">' . htmlspecialchars($row['nombre_categoria']) . '</h5><button href="#" type="button" style="padding: 10px 5px;    max-width: 200px;" class="hero-btn-3 aggp border-0 d-none d-md-flex rounded-pill mt-3 mb-3 w-100" data-id="' . htmlspecialchars($row['id_categoria']) . '" data-bs-toggle="modal" data-bs-target="#add-products">
        Agregar producto<svg width="10" height="10" viewBox="0 0 10 10" aria-hidden="true"><g fill-rule="evenodd"><path class="line" d="M0 5h7"></path><path class="tip" d="M1 1l4 4-4 4"></path></g></svg></button><div class="btn-group"><button type="button" class="btn btn-light text-black btn-icon ms-2 rounded-pill shadow-none border-0 icmenu d-none d-md-block" id="catEditDropdown" data-bs-toggle="dropdown" aria-expanded="false" style="width: 36px; background-color: #eee !important; height: 36px;"><svg width="14px" height="14px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 9.5C5.38071 9.5 6.5 10.6193 6.5 12C6.5 13.3807 5.38071 14.5 4 14.5C2.61929 14.5 1.5 13.3807 1.5 12C1.5 10.6193 2.61929 9.5 4 9.5Z" fill="#000000"></path> <path d="M12 9.5C13.3807 9.5 14.5 10.6193 14.5 12C14.5 13.3807 13.3807 14.5 12 14.5C10.6193 14.5 9.5 13.3807 9.5 12C9.5 10.6193 10.6193 9.5 12 9.5Z" fill="#000000"></path> <path d="M22.5 12C22.5 10.6193 21.3807 9.5 20 9.5C18.6193 9.5 17.5 10.6193 17.5 12C17.5 13.3807 18.6193 14.5 20 14.5C21.3807 14.5 22.5 13.3807 22.5 12Z" fill="#000000"></path> </g></svg></button><div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="catEditDropdown"><a class="dropdown-item h6 mb-0" href="#"><svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M18 6L17.1991 18.0129C17.129 19.065 17.0939 19.5911 16.8667 19.99C16.6666 20.3412 16.3648 20.6235 16.0011 20.7998C15.588 21 15.0607 21 14.0062 21H9.99377C8.93927 21 8.41202 21 7.99889 20.7998C7.63517 20.6235 7.33339 20.3412 7.13332 19.99C6.90607 19.5911 6.871 19.065 6.80086 18.0129L6 6M4 6H20M16 6L15.7294 5.18807C15.4671 4.40125 15.3359 4.00784 15.0927 3.71698C14.8779 3.46013 14.6021 3.26132 14.2905 3.13878C13.9376 3 13.523 3 12.6936 3H11.3064C10.477 3 10.0624 3 9.70951 3.13878C9.39792 3.26132 9.12208 3.46013 8.90729 3.71698C8.66405 4.00784 8.53292 4.40125 8.27064 5.18807L8 6M14 10V17M10 10V17" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg> Eliminar categoría</a></div></div><a class="accordion-button" role="button" data-bs-toggle="collapse" data-bs-target="#accordionCourse' . htmlspecialchars($row['id_categoria']) . '" aria-expanded="true" aria-controls="accordionCourse' . htmlspecialchars($row['id_categoria']) . '"><svg class="rotate-svg" width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M18.2929 15.2893C18.6834 14.8988 18.6834 14.2656 18.2929 13.8751L13.4007 8.98766C12.6195 8.20726 11.3537 8.20757 10.5729 8.98835L5.68257 13.8787C5.29205 14.2692 5.29205 14.9024 5.68257 15.2929C6.0731 15.6835 6.70626 15.6835 7.09679 15.2929L11.2824 11.1073C11.673 10.7168 12.3061 10.7168 12.6966 11.1073L16.8787 15.2893C17.2692 15.6798 17.9024 15.6798 18.2929 15.2893Z" fill="#0F0F0F"></path> </g></svg></a></div>  
        
        <div class="d-flex justify-content-between align-items-center">
        <button href="#" type="button" style="padding: 10px 5px;    max-width: 200px;" class="hero-btn-3 d-flex d-md-none aggp border-0 rounded-pill mt-3 mb-3 w-100" data-id="' . htmlspecialchars($row['id_categoria']) . '" data-bs-toggle="modal" data-bs-target="#add-products">
        Agregar producto<svg width="10" height="10" viewBox="0 0 10 10" aria-hidden="true"><g fill-rule="evenodd"><path class="line" d="M0 5h7"></path><path class="tip" d="M1 1l4 4-4 4"></path></g></svg></button><div class="btn-group"><button type="button" class="btn btn-light text-black btn-icon ms-2 rounded-pill shadow-none border-0 icmenu d-block d-md-none" id="catEditDropdown" data-bs-toggle="dropdown" aria-expanded="false" style="width: 36px; background-color: #eee !important; height: 36px;"><svg width="14px" height="14px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 9.5C5.38071 9.5 6.5 10.6193 6.5 12C6.5 13.3807 5.38071 14.5 4 14.5C2.61929 14.5 1.5 13.3807 1.5 12C1.5 10.6193 2.61929 9.5 4 9.5Z" fill="#000000"></path> <path d="M12 9.5C13.3807 9.5 14.5 10.6193 14.5 12C14.5 13.3807 13.3807 14.5 12 14.5C10.6193 14.5 9.5 13.3807 9.5 12C9.5 10.6193 10.6193 9.5 12 9.5Z" fill="#000000"></path> <path d="M22.5 12C22.5 10.6193 21.3807 9.5 20 9.5C18.6193 9.5 17.5 10.6193 17.5 12C17.5 13.3807 18.6193 14.5 20 14.5C21.3807 14.5 22.5 13.3807 22.5 12Z" fill="#000000"></path> </g></svg></button><div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="catEditDropdown"><a class="dropdown-item h6 mb-0" href="#"><svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M18 6L17.1991 18.0129C17.129 19.065 17.0939 19.5911 16.8667 19.99C16.6666 20.3412 16.3648 20.6235 16.0011 20.7998C15.588 21 15.0607 21 14.0062 21H9.99377C8.93927 21 8.41202 21 7.99889 20.7998C7.63517 20.6235 7.33339 20.3412 7.13332 19.99C6.90607 19.5911 6.871 19.065 6.80086 18.0129L6 6M4 6H20M16 6L15.7294 5.18807C15.4671 4.40125 15.3359 4.00784 15.0927 3.71698C14.8779 3.46013 14.6021 3.26132 14.2905 3.13878C13.9376 3 13.523 3 12.6936 3H11.3064C10.477 3 10.0624 3 9.70951 3.13878C9.39792 3.26132 9.12208 3.46013 8.90729 3.71698C8.66405 4.00784 8.53292 4.40125 8.27064 5.18807L8 6M14 10V17M10 10V17" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg> Eliminar categoría</a></div></div></div>  
        </div>
        </div>
        
        <div id="accordionCourse' . htmlspecialchars($row['id_categoria']) . '" class="accordion-collapse collapse show" aria-labelledby="headingBasics' . htmlspecialchars($row['id_categoria']) . '">
          <div class="accordion-body p-0">';
      
        echo '<div id="products_' . htmlspecialchars($row['id_categoria']) . '" class="row">';
      
        echo '</div>
      </div>
    </div>
  </div>';
        // Código JavaScript para cargar el contenido de load_products_business.php
        echo '<script>
        $(document).ready(function(){
            $.ajax({
                url: "../assets/php/load_products_business.php",
                type: "post",
                data: {id_categoria: ' . $row['id_categoria'] . '},
                success: function(data){
                    $("#products_' . $row['id_categoria'] . '").html(data);
                }
            });
        });
        </script>';
        
        $category_id = $row['id_categoria'];
        
    }

    

} else {
    echo "No se encontraron categorías.";
}

// Cierra la consulta
$stmt->close();
?>

<script>
    $('.accordion-button').on('click', function() {
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