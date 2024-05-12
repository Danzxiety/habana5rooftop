<?php
include 'session_start.php';

$business_id = $_SESSION['business_id']; // Asegúrate de que esta es la forma correcta de obtener el business_id
$id_categoria = $_POST['id_categoria']; // Asegúrate de que esta es la forma correcta de obtener el id_categoria

// Prepara la consulta SQL
$stmt = $db->prepare("SELECT * FROM productos WHERE business_id = ? AND id_categoria = ? ORDER BY id_producto ASC");
$stmt->bind_param("ii", $business_id, $id_categoria);

// Ejecuta la consulta
$stmt->execute();
$result = $stmt->get_result();

// Comprueba si la consulta devolvió algún resultado
if ($result->num_rows > 0) {
    // Recorre cada fila del resultado
    while($row = $result->fetch_assoc()) {
      $estado_producto = $row['estado_producto'];

      // Define el color de fondo dependiendo del estado del producto
      $background_color = $estado_producto == 1 ? '#f2f3f6' : ($estado_producto == 2 ? '#ffd7d7' : '#f2f3f6');
 
        echo '<div class="col-sm-6 col-lg-2 mb-3">';
        echo '<a class="card shadow-none border-0 card-transition h-100" style="background-color:' . $background_color . ';" id="prodEditDropdown" data-id-producto="' . htmlspecialchars($row['id_producto']) . '" href="#">';
        echo '<div class="card-body p-3">';
        echo '<div class="d-flex justify-content-left align-items-center">';
        
        echo '<div class="ms-0">';
        echo '<h6 class="mb-0">' . htmlspecialchars($row['nombre_producto']) . '</h6>';
        echo '<span style="color: #505050 !important;" class="text-body fs-6">' . htmlspecialchars($row['precio_producto']) . ' ' . htmlspecialchars($row['moneda_producto']) . '</span></br>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</a>';
        echo '</div>';     
    }



} else {
   
}

// Cierra la consulta
$stmt->close();
?>


<div class="modal fade" role="dialog" tabindex="-1" id="productModal">
    <div class="modal-dialog modal-dialog-centered rounded-4" role="document">
        <div class="modal-content" style="border-radius: 20px !important; ">
            <form id="edit-product">
            <input type="hidden" name="id_producto">
                <div class="modal-header pb-3 ps-4" style="border-width: 0px;">
                    <h4 class="modal-title h3">Editar producto</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="padding-top: 10px; padding-bottom: 15px !important;padding-right: 15px;padding-left: 15px;">
                    
                            <input type="file" class="form-control d-none" name="imagen_producto">

<div class="px-2">
                            <div class="mb-4 text-start">
                  <label class="form-label mb-2 h6" for="signupModalFormLoginPassword">Nombre <span class="text-danger h5">*</span></label>
                   <input type="text" style="background-color: #f8f8f9;" class="form-control rounded-3 induo" id="signupModalFormLoginName" placeholder="Nombre del producto" aria-label="email@site.com" name="nombre_producto">
                 </div>


                 <div class="mb-4 text-start">
                 <label class="form-label mb-2 h6" for="signupModalFormLoginPassword">Descripción <span class="text-danger h5">*</span></label>
       <textarea style="background-color: #f8f8f9;" class="form-control rounded-3 induo" name="descripcion_producto" id="reviewLabelModalEg" placeholder="Ejemplo: Pizza con tomate, queso mozzarella y pimienta" rows="2" maxlength="100"></textarea>
                 </div>


                 <div class="text-start">
                    <label class="form-label mb-2 h6" for="signupModalFormLoginEmail">Precio <span class="text-danger h5">*</span></label>
                    <div class="input-group mb-3 rounded-3">
                      <select style="max-width: 100px;background-color: #f8f8f9; border-radius: 0.75rem 0 0 0.75rem;" name="moneda_producto" class="form-control">
                      <option value="CUP" selected="">CUP</option>
                      <option value="USD">USD</option>
                      </select>
                      <input type="text" style="background-color: #f8f8f9; border-radius: 0 0.75rem 0.75rem 0;" placeholder="00.00" name="precio_producto" class="form-control induo" >
                    </div>
                  </div>
                  </div>


                            

                                <button type="submit" style="padding: 10px 20px;" class="hero-btn-2 aggp border-0 rounded-pill mt-2 w-100">
        Editar producto<svg width="10" height="10" viewBox="0 0 10 10" aria-hidden="true"><g fill-rule="evenodd"><path class="line" d="M0 5h7"></path><path class="tip" d="M1 1l4 4-4 4"></path></g></svg></button>

        <button type="button" style="padding: 10px 20px; display: none;" id="btn-hide" class="btn-hiden btn-remove border-0 rounded-pill mt-2 w-100">Ocultar producto</button>
        <button type="button" style="padding: 10px 20px; display: none;" id="btn-show" class="btn-deshiden btn-desh border-0 rounded-pill mt-2 w-100">Desocultar producto</button>



        <button type="button" style="padding: 10px 20px;" id="product_remove" class="btn-remove border-0 rounded-pill mt-2 w-100">Eliminar producto</button>

                </div>
            </form>
        </div>

    </div>

</div>



<script>

$(document).ready(function(){
    $('.btn-hiden').click(function(e){
        e.preventDefault();
        var idProducto = $('input[name="id_producto"]').val();
        
        $.ajax({
            url: '../assets/php/admin/hidden_products.php',
            type: 'post',
            data: { id_producto: idProducto },
            success: function(response){
                // Comprueba la respuesta del servidor
                if (response.trim() === "success") {
                    // Cierra la ventana modal
                    $('#productModal').modal('hide');

                    // Actualiza el contenido del div "menu"
                    $.get('../assets/php/load_categories_business.php', function(data) {
                        $('#menu').html(data);
                    });

                    $('#toast_success_hidden').fadeIn().removeClass('d-none');

                    // Después de 2 segundos, oculta el div con una animación de desvanecimiento
                    setTimeout(function() {
                      $('#toast_success_hidden').fadeOut(function() {
                        $(this).addClass('d-none');
                      });
                    }, 3000);

                    // Limpia el formulario
                    $('#edit-product')[0].reset();

                } else {
                    // Si hubo un error, muestra una alerta
                    alert(response);
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
                alert('Ocurrió un error durante la solicitud: ' + textStatus);
            }
        });
    });
});





$(document).ready(function(){
    $('.btn-deshiden').click(function(e){
        e.preventDefault();
        var idProducto = $('input[name="id_producto"]').val();
        
        $.ajax({
            url: '../assets/php/admin/deshidden_products.php',
            type: 'post',
            data: { id_producto: idProducto },
            success: function(response){
                // Comprueba la respuesta del servidor
                if (response.trim() === "success") {
                    // Cierra la ventana modal
                    $('#productModal').modal('hide');

                    // Actualiza el contenido del div "menu"
                    $.get('../assets/php/load_categories_business.php', function(data) {
                        $('#menu').html(data);
                    });

                    $('#toast_success_deshidden').fadeIn().removeClass('d-none');

                    // Después de 2 segundos, oculta el div con una animación de desvanecimiento
                    setTimeout(function() {
                      $('#toast_success_deshidden').fadeOut(function() {
                        $(this).addClass('d-none');
                      });
                    }, 3000);

                    // Limpia el formulario
                    $('#edit-product')[0].reset();

                } else {
                    // Si hubo un error, muestra una alerta
                    alert(response);
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
                alert('Ocurrió un error durante la solicitud: ' + textStatus);
            }
        });
    });
});


$(document).ready(function(){
    $('#product_remove').click(function(e){
        e.preventDefault();
        var idProducto = $('input[name="id_producto"]').val();
        
        $.ajax({
            url: '../assets/php/admin/delete_products_business.php',
            type: 'post',
            data: { id_producto: idProducto },
            success: function(response){
                // Comprueba la respuesta del servidor
                if (response.trim() === "success") {
                    // Cierra la ventana modal
                    $('#productModal').modal('hide');

                    // Actualiza el contenido del div "menu"
                    $.get('../assets/php/load_categories_business.php', function(data) {
                        $('#menu').html(data);
                    });

                    $('#toast_success_del_prod').fadeIn().removeClass('d-none');

                    // Después de 2 segundos, oculta el div con una animación de desvanecimiento
                    setTimeout(function() {
                      $('#toast_success_del_prod').fadeOut(function() {
                        $(this).addClass('d-none');
                      });
                    }, 3000);

                    // Limpia el formulario
                    $('#edit-product')[0].reset();

                } else {
                    // Si hubo un error, muestra una alerta
                    alert(response);
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
                alert('Ocurrió un error durante la solicitud: ' + textStatus);
            }
        });
    });
});


$(document).ready(function(){
  $(document).on('click', '#prodEditDropdown', function(){
    var idProducto = $(this).data('id-producto');

    $.ajax({
      url: '../assets/php/get_product.php', // Cambia esto por la ruta a tu servidor
      type: 'post',
      data: {id_producto: idProducto},
      dataType: 'json', // Esperamos una respuesta en formato JSON
      success: function(producto){
        // Aquí puedes manejar la respuesta de tu servidor
        // Por ejemplo, puedes usar la respuesta para llenar los datos en la ventana modal
        $('#edit-product input[name="id_producto"]').val(idProducto);
        $('#edit-product input[name="nombre_producto"]').val(producto.nombre_producto);
        $('#edit-product textarea[name="descripcion_producto"]').val(producto.descripcion_producto);
        $('#edit-product input[name="precio_producto"]').val(producto.precio_producto);
        $('#edit-product select[name="moneda_producto"]').val(producto.moneda_producto);
        if (producto.estado_producto == 1) {
          $('#btn-hide').show();
          $('#btn-show').hide();
        } else {
          $('#btn-hide').hide();
          $('#btn-show').show();
        };
        $('#productModal').modal('show');
      },
      error: function(jqXHR, textStatus, errorThrown){
        // Aquí puedes manejar el error de la solicitud AJAX
        console.error(textStatus, errorThrown);
      }
    });
  });



$('#edit-product').on('submit', function(e){
    e.preventDefault();

    $.ajax({
      url: '../assets/php/update_product.php', // Cambia esto por la ruta a tu servidor
      type: 'post',
      data: $(this).serialize(),
      success: function(response){
            // Comprueba la respuesta del servidor
            if (response.trim() === "success") {
                // Cierra la ventana modal
                $('#productModal').modal('hide');

                // Actualiza el contenido del div "menu"
                $.get('../assets/php/load_categories_business.php', function(data) {
                    $('#menu').html(data);
                });

                $('#toast_success_edit').fadeIn().removeClass('d-none');

// Después de 2 segundos, oculta el div con una animación de desvanecimiento
setTimeout(function() {
  $('#toast_success_edit').fadeOut(function() {
    $(this).addClass('d-none');
  });
}, 3000);

                // Limpia el formulario
                $('#edit-product')[0].reset();

            } else {
                // Si hubo un error, muestra una alerta
                alert(response);
            }
        }
    });
  });
});
</script>




<div id="toast_success_edit" style="position: fixed; z-index:1000; top: 90px; left: 50%; transform: translate(-50%, -50%); white-space: nowrap;" class="bg-success d-none shadow-sm py-2 px-4 rounded-2 text-center">
    <p class="text-white mb-0 h5">Producto editado con éxito</p>
</div>