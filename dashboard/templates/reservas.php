<?php
include '../../assets/php/config.php';

$business_id = $_SESSION['business_id'];
$sql = "SELECT account_telefono FROM reservas_tel WHERE business_id = ?";
$result = $db->query($sql);

if ($result->num_rows > 0) {
  // Obtener el primer resultado
  $row = $result->fetch_assoc();
  $telefono = $row["account_telefono"];
} else {
  echo "No se encontraron resultados";
}
?>

<!-- HTML -->

<div id="dash" class="container p-2 p-md-2 p-lg-3 p-xl-5">
    <div class="d-md-flex justify-content-md-between pb-4 bg-white">
      <div class="mb-2 mb-md-0">
        <h1 class="display-4 mb-3 text-black">Reservas a Whatsapp</h1>
      </div>
    </div>

    <div style="max-width: 400px;">
      <div class="text-start">
        <label class="mb-3 h5" for="signupModalFormLoginEmail">Teléfono de reservas <span class="text-danger h5">*</span></label>
        <div class="input-group mb-3 rounded-3">
        <input type="text" style="border-color: #7b7b7b;background-color: #ffffff;border-radius: 10px;" name="business_telefono" class="form-control induo" required="" value="<?php echo isset($telefono) ? $telefono : ''; ?>">
<span class="invalid-feedback">Please enter a valid phone.</span>
        </div>
        <button type="submit" style="padding: 10px 20px;" class="hero-btn-2 border-0 rounded-pill mt-2 w-100">
          Cambiar<svg width="10" height="10" viewBox="0 0 10 10" aria-hidden="true"><g fill-rule="evenodd"><path class="line" d="M0 5h7"></path><path class="tip" d="M1 1l4 4-4 4"></path></g></svg></button>
      </div>
    </div>
</div>
<script>
$(document).ready(function(){
    $('input[name="business_telefono"]').change(function(){
        var telefono = $(this).val();
        $.ajax({
            url: '../assets/php/admin/reservas_tel_change.php',
            type: 'post',
            data: {telefono: telefono},
            success: function(response){
                // Comprueba la respuesta del servidor
                if (response.trim() === "success") {
                  Swal.fire({
                    title: '¡Actualizado!',
                    text: 'El número de teléfono ha sido actualizado.',
                    icon: 'success',
                    timer: 2500, // Tiempo en milisegundos
                    showConfirmButton: false
                  });
                } else {
                  Swal.fire({
                    title: 'Ups, hubo un problema',
                    text: response,
                    icon: 'warning',
                    timer: 2500, // Tiempo en milisegundos
                    showConfirmButton: false
                  });
                }
            }
        });
    });
});
</script>
