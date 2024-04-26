<?php
include '../../assets/php/session_start.php';
include '../../assets/php/security/verify_access_user.php';

?>
<?php

// Obtiene el nombre de la marca de la sesión
$business_marca = $_SESSION['business_marca'];

// Prepara la consulta SQL
$sql = "SELECT * FROM categorias_productos WHERE business_id IN (SELECT business_id FROM business_account WHERE business_marca = ?)";

// Prepara la declaración
$stmt = $db->prepare($sql);

// Vincula los parámetros
$stmt->bind_param("s", $business_marca);

// Ejecuta la declaración
$stmt->execute();

// Obtiene los resultados
$result = $stmt->get_result();

// Verifica si hay resultados
if ($result->num_rows > 0) {
  ?>
<div id="dash" class="container p-2 p-md-2 p-lg-3 p-xl-5 pt-6 px-4">
      <div class="d-md-flex justify-content-md-between bg-white">
        <div class="mb-2 mb-md-0">
        <h1 class="display-4 mb-3 text-black">Dashboard <span style="color: #1bd392;background-color: #1bd3921f; font-size:12px;" class="badge rounded-pill ms-1">1.34.8</span></h1>
        </div>
        <div class="d-flex gap-2">
          <div>

          <a class="hero-btn-1 border-0 rounded-pill d-flex d-md-none" style="padding: 10px 20px;" href="https://www.flaviofast.com/menu.html" target="_blank">
          <svg style="transform: rotate(180deg);" width="10" height="10" viewBox="0 0 10 10" aria-hidden="true"><g fill-rule="evenodd"><path class="line" d="M0 5h7"></path><path class="tip" d="M1 1l4 4-4 4"></path></g></svg> Men<span style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif !important;font-weight: 700;margin-left: -8px;">ú</span></a>
          <a class="hero-btn-1 border-0 rounded-pill d-none d-md-flex" style="padding: 10px 20px;" href="https://www.flaviofast.com/menu.html" target="_blank">
          <svg style="transform: rotate(180deg);" width="10" height="10" viewBox="0 0 10 10" aria-hidden="true"><g fill-rule="evenodd"><path class="line" d="M0 5h7"></path><path class="tip" d="M1 1l4 4-4 4"></path></g></svg> Ver men<span style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif !important;font-weight: 700;margin-left: -8px;">ú</span></a></div>
          <div>
          <button type="button" style="padding: 10px 20px;" data-bs-toggle="modal" data-bs-target="#add-categorie" class="hero-btn-2 border-0 rounded-pill w-100">
          Agregar categor<span style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif !important;font-weight: 700;margin: 0px -4.5px;">í</span>a<svg width="10" height="10" viewBox="0 0 10 10" aria-hidden="true"><g fill-rule="evenodd"><path class="line" d="M0 5h7"></path><path class="tip" d="M1 1l4 4-4 4"></path></g></svg></button>
        </div>      
        </div>
      </div>



      <div></div>

      


        <script>
        window.addEventListener('scroll', function() {
            var element = document.getElementById('myElement');
            var rect = element.getBoundingClientRect();
            if (rect.top <= 0) {
                element.classList.add('stuck');
            } else {
                element.classList.remove('stuck');
            }
        });
    </script>




   <div id="menu"></div>
      <script>
        var send_dates = {

update_page_dashboard: function() {
    $.get('../assets/php/load_categories_business.php', function(data) {
        $('#menu').html(data);
        });
}
};
      </script>
      <script>
        send_dates.update_page_dashboard();
      </script>

    </div>
    <?php

} else {
    
  ?>


<div class="content-space-t-lg-5 px-3 content-space-t-2">
         
         <center>
       
           
                 
                     <h1 class="display-3 lgclip" style="color: #1a362f; letter-spacing: 1px;">Listo para comenzar!</h1>
                     
                     <p class="fw-semi pt-3" style="font-size: 17px; letter-spacing: 1.1; color: #646464; max-width: 850px;">Utilizamos estrategias y técnicas de vanguardia para aumentar tanto la calidad como la cantidad del tráfico web, atrayendo así a un público más amplio y generando más oportunidades de negocio.</p>
                    
                     <button type="button" style="padding: 10px 20px;" data-bs-toggle="modal" data-bs-target="#add-categorie" class="hero-btn-2 border-0 rounded-pill w-100">
          Agregar categor<span style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif !important;font-weight: 700;margin: 0px -4.5px;">í</span>a<svg width="10" height="10" viewBox="0 0 10 10" aria-hidden="true"><g fill-rule="evenodd"><path class="line" d="M0 5h7"></path><path class="tip" d="M1 1l4 4-4 4"></path></g></svg></button>
                   
                   
                   </center>
         
            </div>
  <?php
}

// Cierra la declaración y la conexión
$stmt->close();
$db->close();
?>