<?php
include '../assets/php/session_start.php';
include '../assets/php/security/verify_access_user.php';

?>
<!DOCTYPE html>
<html lang="es"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Dashboard | Habana5</title>

  <link rel="shortcut icon" href="../assets/img/logos/logo_hbn5.webp">
  <link rel="stylesheet" href="../assets/css/uixsoftware.css">
  <link rel="stylesheet" href="../assets/css/vendor.min.css">
  <link rel="stylesheet" href="../assets/css/theme.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
      

  
</head>
<body class="has-navbar-vertical-aside navbar-vertical-aside-show-xl footer-offset" style="opacity: 1;">


  <script src="../assets/js/hs.theme-appearance-charts.js"></script>

  <script src="../assets/js/hs-navbar-vertical-aside-mini-cache.js"></script>

  <!-- ========== HEADER ========== -->

  <header id="header" class="navbar navbar-expand-lg navbar-fixed navbar-height navbar-container navbar-bordered bg-white">
    <div class="navbar-nav-wrap">
      <!-- Logo -->
      <a class="navbar-brand" href="https://htmlstream.com/preview/front-dashboard-v2.1.1/index.html" aria-label="Front">
      <span class=" navbar-brand-logo mb-0 fw-bold lgclip" style="font-size: 28px !important; color: #1a362f; letter-spacing: 1px;">Clipmenu<span style="color: #1bd392;">.</span></span>
          <span class=" navbar-brand-logo-mini mb-0 fw-bold lgclip" style="font-size: 28px !important; color: #1a362f; letter-spacing: 1px;">C<span style="color: #1bd392;">.</span></span>
      </a>
      <!-- End Logo -->

      <div class="navbar-nav-wrap-content-start d-none d-md-block">
        <!-- Navbar Vertical Toggle -->
        <button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-aside-toggler" style="opacity: 1;">
          <i class="bi-arrow-bar-left navbar-toggler-short-align" data-bs-template="&lt;div class=&quot;tooltip d-none d-md-block&quot; role=&quot;tooltip&quot;&gt;&lt;div class=&quot;arrow&quot;&gt;&lt;/div&gt;&lt;div class=&quot;tooltip-inner&quot;&gt;&lt;/div&gt;&lt;/div&gt;" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Collapse" data-bs-original-title="Collapse"></i>
          <i class="bi-arrow-bar-right navbar-toggler-full-align" data-bs-template="&lt;div class=&quot;tooltip d-none d-md-block&quot; role=&quot;tooltip&quot;&gt;&lt;div class=&quot;arrow&quot;&gt;&lt;/div&gt;&lt;div class=&quot;tooltip-inner&quot;&gt;&lt;/div&gt;&lt;/div&gt;" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Expand" data-bs-original-title="Expand"></i>
        </button>

      </div>

      <div class="navbar-nav-wrap-content-end">
        <!-- Navbar -->
        <ul class="navbar-nav">
          

        <li class="nav-item">
            <button type="button" class="btn border-0 icmenu align-items-center rounded-circle p-2" style="aspect-ratio:1/1" data-bs-toggle="modal" data-bs-target="#preview">
            <svg width="22px" height="22px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M3 14C3 9.02944 7.02944 5 12 5C16.9706 5 21 9.02944 21 14M17 14C17 16.7614 14.7614 19 12 19C9.23858 19 7 16.7614 7 14C7 11.2386 9.23858 9 12 9C14.7614 9 17 11.2386 17 14Z" stroke="#0f0f0f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
            </button>
          </li>
          

          <li class="nav-item">
            <!-- Apps -->
            <div class="dropdown">
            <button type="button" class="btn border-0 icmenu align-items-center rounded-circle p-2" style="aspect-ratio:1/1" id="navbarAppsDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation="">
              <svg width="22px" height="22px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <rect x="3" y="3" width="5" height="5" rx="1" stroke="#0f0f0f" stroke-width="2"></rect> <rect x="3" y="16" width="5" height="5" rx="1" stroke="#0f0f0f" stroke-width="2"></rect> <rect x="16" y="3" width="5" height="5" rx="1" stroke="#0f0f0f" stroke-width="2" stroke-linejoin="round"></rect> <rect x="6" y="10" width="2" height="2" rx="0.5" fill="#0f0f0f"></rect> <path d="M12.5 2H13.5C13.7761 2 14 2.22386 14 2.5V5.5C14 5.77614 13.7761 6 13.5 6H12.5C12.2239 6 12 6.22386 12 6.5V7.5C12 7.77614 11.7761 8 11.5 8H10.5C10.2239 8 10 7.77614 10 7.5V4.5C10 4.22386 10.2239 4 10.5 4H11.5C11.7761 4 12 3.77614 12 3.5V2.5C12 2.22386 12.2239 2 12.5 2Z" fill="#0f0f0f"></path> <rect x="8" y="12" width="4" height="2" rx="0.5" fill="#0f0f0f"></rect> <rect x="18" y="10" width="4" height="2" rx="0.5" fill="#0f0f0f"></rect> <rect x="12" y="18" width="4" height="2" rx="0.5" fill="#0f0f0f"></rect> <rect x="10" y="16" width="2" height="2" rx="0.5" fill="#0f0f0f"></rect> <path d="M12 11.5V10.5C12 10.2239 12.2239 10 12.5 10H15.5C15.7761 10 16 10.2239 16 10.5V14H17.5C17.7761 14 18 14.2239 18 14.5V15.5C18 15.7761 17.7761 16 17.5 16H16H14.5C14.2239 16 14 15.7761 14 15.5V12.5C14 12.2239 13.7761 12 13.5 12H12.5C12.2239 12 12 11.7761 12 11.5Z" fill="#0f0f0f"></path> <path d="M16.5 20L17.5 20C17.7761 20 18 19.7761 18 19.5L18 18.5C18 18.2239 18.2239 18 18.5 18L19.5 18C19.7761 18 20 17.7761 20 17.5L20 14.5C20 14.2239 20.2239 14 20.5 14L21.5 14C21.7761 14 22 14.2239 22 14.5L22 16L22 18L22 19.5C22 19.7761 21.7761 20 21.5 20L20.5 20C20.2239 20 20 20.2239 20 20.5L20 21.5C20 21.7761 19.7761 22 19.5 22L16.5 22C16.2239 22 16 21.7761 16 21.5L16 20.5C16 20.2239 16.2239 20 16.5 20Z" fill="#0f0f0f"></path> <path d="M2 13.5V10.5C2 10.2239 2.22386 10 2.5 10H3.5C3.77614 10 4 10.2239 4 10.5V11.5C4 11.7761 4.22386 12 4.5 12H5.5C5.77614 12 6 12.2239 6 12.5V13.5C6 13.7761 5.77614 14 5.5 14H2.5C2.22386 14 2 13.7761 2 13.5Z" fill="#0f0f0f"></path> <path d="M13.5 22H10.5C10.2239 22 10 21.7761 10 21.5V20.5C10 20.2239 10.2239 20 10.5 20H11.5C11.7761 20 12 19.7761 12 19.5V18.5C12 18.2239 12.2239 18 12.5 18H15.5C15.7761 18 16 18.2239 16 18.5V19.5C16 19.7761 15.7761 20 15.5 20H14.5C14.2239 20 14 20.2239 14 20.5V21.5C14 21.7761 13.7761 22 13.5 22Z" fill="#0f0f0f"></path> </g></svg>
              </button>

              <div class="dropdown-menu dropdown-menu-end dropdown-card navbar-dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="navbarAppsDropdown" style="opacity: 1;">
                <div class="card">
                  <!-- Header -->
                  <div class="card-header border-0 py-3">
                    <h4 class="card-title text-center">Qrcode</h4>
                  </div>
                  <!-- End Header -->

                  <!-- Body -->
                  
    
        <center>
        <div class="m-5 my-3 mt-1" id="codigo-qr"></div>
        </center>
        
        <script>
            const codigoQRDiv = document.getElementById('codigo-qr');
            const codigoQR = new QRCode(codigoQRDiv, {
                text: 'https://habana5.uixsoftware.com/',
                width: 128,
                height: 128
            });
        </script>

                  <!-- Footer -->
                  <a class="card-footer text-center py-2 mb-0 bg-primary text-white fw-semi h5" href="#">
                    Guadar QR
                  </a>
                  <!-- End Footer -->
                </div>
              </div>
            </div>
            <!-- End Apps -->
          </li>

          <li class="nav-item">
            <!-- Account -->
            <div class="dropdown">
              <a class="navbar-dropdown-account-wrapper pe-2" style="background-color: #e9e7e5;
              border-style: solid;
              border-width: 0.1px;
              border-color: #e2e2e2;" href="javascript:;" id="accountNavbarDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside" data-bs-dropdown-animation="">
                          <div class="d-flex align-items-center">
                        <div class="avatar avatar-circle" style="height: 32px;width: 32px;">
                            <span class="avatar-initials btn btn-primary btn-icon border-0" style="height: 32px;width: 32px;background: linear-gradient(145deg, #1bd392, #1ab37d);">C</span>
                          </div>
          
                          <svg class="ms-1" width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Menu / Menu_Alt_02"> <path id="Vector" d="M11 17H19M5 12H19M11 7H19" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg>
                     
                          </div>
                        </a>

              <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-account" aria-labelledby="accountNavbarDropdown" style="width: 16rem;">
                <div class="dropdown-item-text">
                  <div class="d-flex align-items-center">
                    <div class="avatar avatar-sm avatar-dark avatar-circle">
                      <span class="avatar-initials">UX</span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h5 class="mb-0">Uixsoftware</h5>
                      <p class="card-text text-body small">soporte@uixsoftware.com</p>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <!-- End Account -->
          </li>
        </ul>
        <!-- End Navbar -->
      </div>
    </div>
  </header>



  <aside class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered bg-white navbar-vertical-aside-initialized">
    <div class="navbar-vertical-container">
      <div class="navbar-vertical-footer-offset">
        <!-- Logo -->

        <span class="navbar-brand fw-bold text-black mt-3" style="font-size: 28px;">
        <img class="navbar-brand-logo" src="../assets/img/logos/logo_hbn5.webp" class="mb-4" width="150" alt="Logo Habana5">
        <img class="navbar-brand-logo-mini" src="../assets/img/logos/logo_hbn5.webp" class="mb-4" width="60" alt="Logo Habana5">
          
        </span>
       
        <!-- End Logo -->

        <!-- Navbar Vertical Toggle -->
        <button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-aside-toggler shadow-sm" style="opacity: 1;">
          <i class="bi-chevron-left text-dark navbar-toggler-short-align" data-bs-template="&lt;div class=&quot;tooltip d-none d-md-block&quot; role=&quot;tooltip&quot;&gt;&lt;div class=&quot;arrow&quot;&gt;&lt;/div&gt;&lt;div class=&quot;tooltip-inner&quot;&gt;&lt;/div&gt;&lt;/div&gt;"></i>
          <i class="bi-chevron-right text-dark navbar-toggler-full-align" data-bs-template="&lt;div class=&quot;tooltip d-none d-md-block&quot; role=&quot;tooltip&quot;&gt;&lt;div class=&quot;arrow&quot;&gt;&lt;/div&gt;&lt;div class=&quot;tooltip-inner&quot;&gt;&lt;/div&gt;&lt;/div&gt;"></i>
        </button>


        <!-- End Navbar Vertical Toggle -->


        
        <!-- Content -->
        <div class="navbar-vertical-content">
          <div id="navbarVerticalMenu" class="nav nav-pills nav-vertical card-navbar-nav">
            <!-- Collapse -->


            <div class="nav-item">
              <a class="nav-link align-items-center icmenu loop rounded-pill" href="templates/home" id="linkhome" data-placement="left">
              <svg width="26px" height="26px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M2.5192 7.82274C2 8.77128 2 9.91549 2 12.2039V13.725C2 17.6258 2 19.5763 3.17157 20.7881C4.34315 22 6.22876 22 10 22H14C17.7712 22 19.6569 22 20.8284 20.7881C22 19.5763 22 17.6258 22 13.725V12.2039C22 9.91549 22 8.77128 21.4808 7.82274C20.9616 6.87421 20.0131 6.28551 18.116 5.10812L16.116 3.86687C14.1106 2.62229 13.1079 2 12 2C10.8921 2 9.88939 2.62229 7.88403 3.86687L5.88403 5.10813C3.98695 6.28551 3.0384 6.87421 2.5192 7.82274ZM9 17.25C8.58579 17.25 8.25 17.5858 8.25 18C8.25 18.4142 8.58579 18.75 9 18.75H15C15.4142 18.75 15.75 18.4142 15.75 18C15.75 17.5858 15.4142 17.25 15 17.25H9Z" fill="#1C274C"></path> </g></svg>
                <span class="nav-link-title ms-2 h5 mb-0">Dashboard</span>
              </a>
            </div>



            <div class="nav-item mt-2">
              <a class="nav-link  align-items-center icmenu loop rounded-pill" href="templates/reservas" id="linkcards" data-placement="left">
              <svg width="26px" height="26px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M18 8C18 11.3137 15.3137 14 12 14C8.68629 14 6 11.3137 6 8C6 4.68629 8.68629 2 12 2C15.3137 2 18 4.68629 18 8Z" fill="#1C274C"></path> <path opacity="0.7" d="M13.5798 13.7899C13.0765 13.9269 12.5468 14 12 14C9.46679 14 7.30024 12.4302 6.42018 10.2102C3.87293 10.9036 2 13.2331 2 16C2 19.3138 4.68629 22 8 22C11.3137 22 14 19.3138 14 16C14 15.2195 13.851 14.4739 13.5798 13.7899Z" fill="#1C274C"></path> <path opacity="0.4" d="M13.5798 13.7896C13.851 14.4736 14 15.2193 14 15.9998C14 17.7768 13.2275 19.3734 12 20.472C13.0615 21.4221 14.4633 21.9998 16 21.9998C19.3137 21.9998 22 19.3135 22 15.9998C22 13.2329 20.1271 10.9034 17.5798 10.21C16.8897 11.9508 15.4085 13.2918 13.5798 13.7896Z" fill="#1C274C"></path> </g></svg>
                <span class="nav-link-title ms-2 h5 mb-0">Reservas <span style="color: #1bd392;background-color: #1bd3921f;letter-spacing: 1px;" class="badge rounded-pill ms-1">1.34.8</span></span>
              </a>
            </div>


        </div>

 
       
        <!-- End Content -->

     
      </div>
    </div>
  </aside>











<div id="spinner" style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);">
    <div class="spinner-border" style="color: #1ab37d;" role="status">
      <span class="visually-hidden">Loading...</span>
    </div>
</div>


  <main id="content" role="main" class="main">
  <div class="clipajax mb-6"></div>


    <script>
      $(document).ready(function() {
      
        var storedLink = localStorage.getItem('activeLink');
        if (storedLink) {
          $('#' + storedLink).addClass('active');
        }
        // Comprueba si hay una página almacenada y, en caso afirmativo, cárgala
        var storedPage = localStorage.getItem('currentPage');
        if (storedPage) {
          loadPage(storedPage);
        } else {
          // Si no hay ninguna página almacenada, carga la página inicial
          loadPage("templates/home");
        }
      
        // Maneja los clics en todos los enlaces
        $(".loop").click(function(e) {
        e.preventDefault();
      
        // Quita la clase 'active' del enlace que la tenga
        $('.loop.active').removeClass('active');
      
        // Añade la clase 'active' al enlace que se ha hecho clic
        $(this).addClass('active');
      
        // Almacena el enlace activo en el almacenamiento local
        localStorage.setItem('activeLink', $(this).attr('id'));
      
        var page = $(this).attr("href");
        localStorage.setItem('currentPage', page);
        loadPage(page);
      });
      });
      
      function loadPage(page) {
        // Muestra el spinner
        $("#spinner").show();
      
        // Desliza hacia arriba el contenido actual, intenta cargar la nueva página, luego la muestra deslizando hacia abajo
        $(".clipajax").slideUp(500, function() {
          $.ajax({
              url: page,
              success: function(data) {
                  $(".clipajax").html(data).slideDown(500);
      
                  // Oculta el spinner
                  $("#spinner").hide();
              },
              error: function() {
                  $(".clipajax").load("static/404.php", function() {
                      $(this).slideDown(500);
      
                      // Oculta el spinner
                      $("#spinner").hide();
                  });
              }
          });
        });
      }
    </script>


    <!-- Footer -->
    <div class="footer">
      <div class="pb-3 d-flex justify-content-center text-center" style="bottom: 0;position:absolute;">
        <span class="text-center text-dark me-3" style="font-size: 12px;">©2024</span>
        <a class="text-dark" style="font-size: 12px;" href="#" data-bs-toggle="modal" data-bs-target="#mo-terms">Términos y condiciones de Clipmenu</a>
        <a class="text-dark d-none d-md-block ms-3" style="font-size: 12px;" href="https://api.whatsapp.com/send?phone=+5355919471&amp;text=Hola,%20vengo%20de%20Clipmenu%20...%20Me%20puede%20brindar%20ayuda?">Reportar un problema</a>
        <a class="text-dark d-none d-md-block ms-3" style="font-size: 12px;" href="https://www.uixsoftware.com/">Uixsoftware</a>
        </div>
    </div>
    <!-- End Footer -->

  </main>









  <div class="modal fade" role="dialog" tabindex="-1" id="add-products">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="border-radius: 20px !important;">
            <form id="add-product">
                <input type="hidden" id="inputOculto" name="id_categoria">
                <div class="modal-header pb-3" style="border-width: 0px;">
                    <h4 class="modal-title h3">Agregar producto</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pb-4" style="padding-top: 10px;padding-right: 20px;padding-left: 20px;">
                    
                <div class="px-2">
                            <input type="file" class="form-control d-none" name="imagen_producto">

                            <label class="form-label mb-2 h6" for="signupModalFormLoginPassword">Nombre <span class="text-danger h5">*</span></label>
                            <input type="text" style="background-color: #f8f8f9;" class="form-control rounded-3 induo" placeholder="Nombre del producto" style="margin-bottom: 15px;" name="nombre_producto" required="">
                            


                            

  <label class="form-label mb-2 mt-3 h6" for="signupModalFormLoginPassword">Descripción <span class="text-danger h5">*</span></label>

<textarea style="background-color: #f8f8f9;" class="form-control rounded-3 induo" name="descripcion_producto" id="reviewLabelModalEg" placeholder="Ejemplo: Pizza con tomate, queso mozzarella y pimienta" rows="2" maxlength="100"
          data-hs-count-characters-options='{
            "output": "#maxLengthCountCharacters"
          }'></textarea>
<!-- End Form -->

<label class="form-label mb-2 mt-3 h6" for="signupModalFormLoginPassword">Precio <span class="text-danger h5">*</span></label>

                            <div class="input-group"><input style="background-color: #f8f8f9; border-radius: 10px 0px 0px 10px !important;" class="form-control rounded-3 induo" type="text" placeholder="00.00" name="precio_producto" required=""><select style="background-color: #f8f8f9; border-radius: 0px 10px 10px 0px !important;" class="form-control rounded-3" name="moneda_producto">
                                    <option value="CUP" selected="">CUP</option>
                                    <option value="USD">USD</option>
                                </select></div>
                                </div>

                                <button type="submit" style="padding: 10px 20px;" class="hero-btn-2 border-0 mt-5 rounded-pill w-100">
        Agregar producto<svg width="10" height="10" viewBox="0 0 10 10" aria-hidden="true"><g fill-rule="evenodd"><path class="line" d="M0 5h7"></path><path class="tip" d="M1 1l4 4-4 4"></path></g></svg></button>
        

                </div>
            </form>
<script>
$(document).ready(function() {
// Cuando se hace clic en el botón...
$(document).on('click', '.aggp', function() {
    // Obtén el valor del atributo data-id
    var idCategoria = $(this).attr('data-id');

    // Establece ese valor en el input oculto dentro de la ventana modal
    $('#inputOculto').val(idCategoria);
});
});

</script>
            <script>
$(document).ready(function(){
$('#add-product').submit(function(e){
    e.preventDefault();

    // Crea un objeto FormData y agrega todos los campos del formulario
    var formData = new FormData(this);

    $.ajax({
        url: '../assets/php/admin/add_products_business.php',
        type: 'post',
        data: formData,
        contentType: false, // Importante para que jQuery no modifique el "Content-Type" de la solicitud
        processData: false, // Impide que jQuery transforme los datos del formulario en una cadena de consulta
        success: function(response){
            // Comprueba la respuesta del servidor
            if (response.trim() === "success") {
                // Cierra la ventana modal
                $('#add-products').modal('hide');

                // Actualiza el contenido del div "menu"
                $.get('../assets/php/load_categories_business.php', function(data) {
                    $('#menu').html(data);
                });

                $('#toast_success_pod').fadeIn().removeClass('d-none');

// Después de 2 segundos, oculta el div con una animación de desvanecimiento
setTimeout(function() {
  $('#toast_success_pod').fadeOut(function() {
    $(this).addClass('d-none');
  });
}, 3000);

                // Limpia el formulario
                $('#add-product')[0].reset();

                // Restablece el valor del input oculto
                $('#inputOculto').val('');
            } else {
                // Si hubo un error, muestra una alerta
                alert(response);
            }
        }
    });
});
});

      </script>
        </div>

    </div>

</div>








<div class="modal fade pt-5" role="dialog" tabindex="-1" id="preview"  style="backdrop-filter: blur(8px);">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background: transparent !important;">
            

        <center>

        <button type="button" class="btn-close btn-white rounded-circle p-2 mb-3" style="opacity: 1;" data-bs-dismiss="modal" aria-label="Close"></button>

        <br>
            <span class="badge bg-warning text-dark rounded-pill mb-3">Vista previa en tiempo real</span>
          
          <figure class="device-mobile d-block" style=" width: 100% !important; max-width: 370px !important;">
            <div class="device-mobile-frame p-2 pb-1" style="background: #e4e8ee !important;border-radius: 33px;">
             
                <iframe src="../" style="width: 100%; min-height: 680px; border-radius: 28px;" frameborder="0"></iframe>
          
            </div>
          </figure></center>


        </div>
    </div>
</div>




  <div id="add-categorie" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      
    <form id="add_categorie" class="js-validate needs-validation" novalidate="">
    <div class="modal-content"  style="border-radius: 20px !important;">
        <div class="modal-header">
          <h5 class="modal-title h3" id="exampleModalCenterTitle">Añadir categoría</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row mb-3">
            <div class="col-8">
            <label class="form-label mb-2 h6" for="signupModalFormLoginPassword">Nombre de categoría <span class="text-danger h5">*</span></label>
              <input type="text" style="background-color: #f8f8f9;" class="form-control rounded-3" name="nombre_categoria" placeholder="Pizzas" required="">
              <span class="invalid-feedback">Please enter a valid email address.</span>
            </div>
            <div class="col-4">
            <label class="form-label mb-2 h6" for="signupModalFormLoginPassword">Prioridad <span class="text-danger h5">*</span></label>
                
                <input type="number" style="background-color: #f8f8f9;" class="form-control rounded-3" name="prioridad_categoria" placeholder="1" required="">
                <span class="invalid-feedback">Please enter a valid email address.</span>
            </div>
          </div>  
          <button type="submit" style="padding: 10px 20px;" class="hero-btn-2 border-0 rounded-pill mt-2 w-100">
        Agregar<svg width="10" height="10" viewBox="0 0 10 10" aria-hidden="true"><g fill-rule="evenodd"><path class="line" d="M0 5h7"></path><path class="tip" d="M1 1l4 4-4 4"></path></g></svg></button>
        
        </div>
        <div>
        

        </div>
      </div>
      </form>
      <script>
            $(document).ready(function(){
        $('#add_categorie').submit(function(e){
            e.preventDefault();
            $.ajax({
                url: '../assets/php/admin/add_categorie_business.php',
                type: 'post',
                data: $('#add_categorie').serialize(),
                success: function(response){
                    // Comprueba la respuesta del servidor
                    if (response.trim() === "success") {
                        // Cierra la ventana modal
                        $('#add-categorie').modal('hide');
    
                        // Actualiza el contenido del div "menu"
                        $.get('../assets/php/load_categories_business.php', function(data) {
                            $('#menu').html(data);
                        });
    
                        $('#toast_success_cat').fadeIn().removeClass('d-none');

// Después de 2 segundos, oculta el div con una animación de desvanecimiento
setTimeout(function() {
  $('#toast_success_cat').fadeOut(function() {
    $(this).addClass('d-none');
  });
}, 3000);


                         // Limpia el formulario
                $('#add_categorie')[0].reset();
                    } else {
                        // Si hubo un error, muestra una alerta
                        alert(response);
                    }
                }
            });
        });
    });
      </script>
      
    </div>
  </div>



<!-- Modal -->
<div class="modal fade" id="search_product" tabindex="-1" role="dialog" aria-labelledby="search_productLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background: #f8f8f9;border-radius: 27px !important;">

    <div class="modal-body p-0 pb-4">
      <form>
            <!-- Input Card -->
            <div class="input-card border-0 p-1 rounded-pill" style="box-shadow: 0 .5rem 1rem rgba(0,0,0,.09)!important;">
              <div class="input-card-form d-flex align-items-center">
            
                <input type="text" name="search_product" class="form-control rounded-pill" id="searchAppsForm" placeholder="Buscar productos..." aria-label="Search for apps">
              </div>
              <button type="button" class="btn btn-dark rounded-circle border-0" style="background: linear-gradient(145deg, #ff385c, #D70466); aspect-ratio:1/1">
                <i class="bi-search"></i>
              </button>
            </div>
            <!-- End Input Card -->
          </form>



          <div class="mt-4 px-md-4 px-3" id="result"></div>
      </div>

    </div>
  </div>
</div>
<!-- End Modal -->

<script>
  $(document).ready(function(){
    $('#searchAppsForm').on('input', function(){
        var searchQuery = $(this).val();
        var businessId = '<?php echo $_SESSION['business_id']; ?>';
        if(searchQuery.length > 0){
            $.ajax({
                url: '../assets/php/admin/search_product_admin.php',
                type: 'POST',
                data: {search_product: searchQuery, business_id: businessId},
                success: function(data){
                    $('#result').html(data);
                }
            });
        } else {
            $('#result').html('');
        }
    });
});

</script>





  <!-- Javascript -->
  <script src="../assets/js/vendor.min.js"></script>
  <script src="../assets/js/chartjs-plugin-datalabels.min.js"></script>
  <script src="../assets/js/theme.min.js"></script>
  <script src="../assets/js/hs.theme-appearance-charts.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
      // INITIALIZATION OF DATERANGEPICKER
      // =======================================================
      $('.js-daterangepicker').daterangepicker();

      $('.js-daterangepicker-times').daterangepicker({
        timePicker: true,
        startDate: moment().startOf('hour'),
        endDate: moment().startOf('hour').add(32, 'hour'),
        locale: {
          format: 'M/DD hh:mm A'
        }
      });

      var start = moment();
      var end = moment();

      function cb(start, end) {
        $('#js-daterangepicker-predefined .js-daterangepicker-predefined-preview').html(start.format('MMM D') + ' - ' + end.format('MMM D, YYYY'));
      }

      $('#js-daterangepicker-predefined').daterangepicker({
        startDate: start,
        endDate: end,
        ranges: {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
      }, cb);

      cb(start, end);
    });


    // INITIALIZATION OF DATATABLES
    // =======================================================
    HSCore.components.HSDatatables.init($('#datatable'), {
      select: {
        style: 'multi',
        selector: 'td:first-child input[type="checkbox"]',
        classMap: {
          checkAll: '#datatableCheckAll',
          counter: '#datatableCounter',
          counterInfo: '#datatableCounterInfo'
        }
      },
      language: {
        zeroRecords: `<div class="text-center p-4">
              <img class="mb-3" src="./assets/svg/illustrations/oc-error.svg" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="default">
              <img class="mb-3" src="./assets/svg/illustrations-light/oc-error.svg" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="dark">
            <p class="mb-0">No data to show</p>
            </div>`
      }
    });

    const datatable = HSCore.components.HSDatatables.getItem(0)

    document.querySelectorAll('.js-datatable-filter').forEach(function (item) {
      item.addEventListener('change',function(e) {
        const elVal = e.target.value,
    targetColumnIndex = e.target.getAttribute('data-target-column-index'),
    targetTable = e.target.getAttribute('data-target-table');

    HSCore.components.HSDatatables.getItem(targetTable).column(targetColumnIndex).search(elVal !== 'null' ? elVal : '').draw()
      })
    })
  </script>

  <!-- JS Plugins Init. -->
  <script>
    (function() {
      localStorage.removeItem('hs_theme')

      window.onload = function () {
        

        // INITIALIZATION OF NAVBAR VERTICAL ASIDE
        // =======================================================
        new HSSideNav('.js-navbar-vertical-aside').init()


        // INITIALIZATION OF FORM SEARCH
        // =======================================================
        const HSFormSearchInstance = new HSFormSearch('.js-form-search')

        if (HSFormSearchInstance.collection.length) {
          HSFormSearchInstance.getItem(1).on('close', function (el) {
            el.classList.remove('top-0')
          })

          document.querySelector('.js-form-search-mobile-toggle').addEventListener('click', e => {
            let dataOptions = JSON.parse(e.currentTarget.getAttribute('data-hs-form-search-options')),
              $menu = document.querySelector(dataOptions.dropMenuElement)

            $menu.classList.add('top-0')
            $menu.style.left = 0
          })
        }


        // INITIALIZATION OF BOOTSTRAP DROPDOWN
        // =======================================================
        HSBsDropdown.init()


        // INITIALIZATION OF CHARTJS
        // =======================================================
        HSCore.components.HSChartJS.init('.js-chart')


        // INITIALIZATION OF CHARTJS
        // =======================================================
        HSCore.components.HSChartJS.init('#updatingBarChart')
        const updatingBarChart = HSCore.components.HSChartJS.getItem('updatingBarChart')

        // Call when tab is clicked
        document.querySelectorAll('[data-bs-toggle="chart-bar"]').forEach(item => {
          item.addEventListener('click', e => {
            let keyDataset = e.currentTarget.getAttribute('data-datasets')

            const styles = HSCore.components.HSChartJS.getTheme('updatingBarChart', HSThemeAppearance.getAppearance())

            if (keyDataset === 'lastWeek') {
              updatingBarChart.data.labels = ["Apr 22", "Apr 23", "Apr 24", "Apr 25", "Apr 26", "Apr 27", "Apr 28", "Apr 29", "Apr 30", "Apr 31"];
              updatingBarChart.data.datasets = [
                {
                  "data": [120, 250, 300, 200, 300, 290, 350, 100, 125, 320],
                  "backgroundColor": styles.data.datasets[0].backgroundColor,
                  "hoverBackgroundColor": styles.data.datasets[0].hoverBackgroundColor,
                  "borderColor": styles.data.datasets[0].borderColor,
                  "maxBarThickness": 10
                },
                {
                  "data": [250, 130, 322, 144, 129, 300, 260, 120, 260, 245, 110],
                  "backgroundColor": styles.data.datasets[1].backgroundColor,
                  "borderColor": styles.data.datasets[1].borderColor,
                  "maxBarThickness": 10
                }
              ];
              updatingBarChart.update();
            } else {
              updatingBarChart.data.labels = ["May 1", "May 2", "May 3", "May 4", "May 5", "May 6", "May 7", "May 8", "May 9", "May 10"];
              updatingBarChart.data.datasets = [
                {
                  "data": [200, 300, 290, 350, 150, 350, 300, 100, 125, 220],
                  "backgroundColor": styles.data.datasets[0].backgroundColor,
                  "hoverBackgroundColor": styles.data.datasets[0].hoverBackgroundColor,
                  "borderColor": styles.data.datasets[0].borderColor,
                  "maxBarThickness": 10
                },
                {
                  "data": [150, 230, 382, 204, 169, 290, 300, 100, 300, 225, 120],
                  "backgroundColor": styles.data.datasets[1].backgroundColor,
                  "borderColor": styles.data.datasets[1].borderColor,
                  "maxBarThickness": 10
                }
              ]
              updatingBarChart.update();
            }
          })
        })


        // INITIALIZATION OF CHARTJS
        // =======================================================
        HSCore.components.HSChartJS.init('.js-chart-datalabels', {
          plugins: [ChartDataLabels],
          options: {
            plugins: {
              datalabels: {
                anchor: function (context) {
                  var value = context.dataset.data[context.dataIndex];
                  return value.r < 20 ? 'end' : 'center';
                },
                align: function (context) {
                  var value = context.dataset.data[context.dataIndex];
                  return value.r < 20 ? 'end' : 'center';
                },
                color: function (context) {
                  var value = context.dataset.data[context.dataIndex];
                  return value.r < 20 ? context.dataset.backgroundColor : context.dataset.color;
                },
                font: function (context) {
                  var value = context.dataset.data[context.dataIndex],
                    fontSize = 25;

                  if (value.r > 50) {
                    fontSize = 35;
                  }

                  if (value.r > 70) {
                    fontSize = 55;
                  }

                  return {
                    weight: 'lighter',
                    size: fontSize
                  };
                },
                formatter: function (value) {
                  return value.r
                },
                offset: 2,
                padding: 0
              }
            },
          }
        })

        // INITIALIZATION OF SELECT
        // =======================================================
        HSCore.components.HSTomSelect.init('.js-select')


        // INITIALIZATION OF CLIPBOARD
        // =======================================================
        HSCore.components.HSClipboard.init('.js-clipboard')
      }
    })()
  </script>

  <!-- Style Switcher JS -->

  <script>
      (function () {
        // STYLE SWITCHER
        // =======================================================
        const $dropdownBtn = document.getElementById('selectThemeDropdown') // Dropdowon trigger
        const $variants = document.querySelectorAll(`[aria-labelledby="selectThemeDropdown"] [data-icon]`) // All items of the dropdown

        // Function to set active style in the dorpdown menu and set icon for dropdown trigger
        const setActiveStyle = function () {
          $variants.forEach($item => {
            if ($item.getAttribute('data-value') === HSThemeAppearance.getOriginalAppearance()) {
              $dropdownBtn.innerHTML = `<i class="${$item.getAttribute('data-icon')}" />`
              return $item.classList.add('active')
            }

            $item.classList.remove('active')
          })
        }

        // Add a click event to all items of the dropdown to set the style
        $variants.forEach(function ($item) {
          $item.addEventListener('click', function () {
            HSThemeAppearance.setAppearance($item.getAttribute('data-value'))
          })
        })

        // Call the setActiveStyle on load page
        setActiveStyle()

        // Add event listener on change style to call the setActiveStyle function
        window.addEventListener('on-hs-appearance-change', function () {
          setActiveStyle()
        })
      })()
    </script>



<div id="toast_success_cat" style="position: fixed; z-index:1000; top: 90px; left: 50%; transform: translate(-50%, -50%); white-space: nowrap;" class="bg-success d-none shadow-sm py-2 px-4 rounded-2 text-center">
  <p class="text-white mb-0 h5">Categoría agregada con éxito</p>
</div>


<div id="toast_success_pod" style="position: fixed; z-index:1000; top: 90px; left: 50%; transform: translate(-50%, -50%); white-space: nowrap;" class="bg-success d-none shadow-sm py-2 px-4 rounded-2 text-center">
  <p class="text-white mb-0 h5">Producto agregado con éxito</p>
</div>


<div id="toast_success_deshidden" style="position: fixed; z-index:1000; top: 90px; left: 50%; transform: translate(-50%, -50%); white-space: nowrap;" class="bg-success d-none shadow-sm py-2 px-4 rounded-2 text-center">
    <p class="text-white mb-0 h5">Producto desocultado con éxito</p>
</div>


<div id="toast_success_hidden" style="position: fixed; z-index:1000; top: 90px; left: 50%; transform: translate(-50%, -50%); white-space: nowrap;" class="bg-success d-none shadow-sm py-2 px-4 rounded-2 text-center">
    <p class="text-white mb-0 h5">Producto oculto con éxito</p>
</div>

<div id="toast_success_del_prod" style="position: fixed; z-index:1000; top: 90px; left: 50%; transform: translate(-50%, -50%); white-space: nowrap;" class="bg-danger py-2 d-none px-4 rounded-2 text-center">
  <p class="text-white mb-0 h5">Producto eliminado con éxito</p>
</div>

</body></html>