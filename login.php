<html lang="es" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">

<head>

  <!-- Meta tags -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta property="og:locale" content="es_ES">

  <!-- Title -->
  <title>Clipmenu | Acceso a tu cuenta</title>


  <link rel="stylesheet" href="assets/css/uixsoftware.css">
  <link rel="stylesheet" href="assets/css/vendor.min.css">
  <link rel="stylesheet" href="assets/css/theme.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>


<body>
  <div class="pb-3 d-flex justify-content-center text-center" style="width: 100%;bottom: 0;position:absolute;">
    <span class="text-center text-dark me-3" style="font-size: 12px;">©2024</span>
    <a class="text-dark" style="font-size: 12px;" href="#" data-bs-toggle="modal" data-bs-target="#mo-terms">Términos y condiciones de Clipmenu</a>
    <a class="text-dark d-none d-md-block ms-3" style="font-size: 12px;" href="https://api.whatsapp.com/send?phone=+5355919471&text=Hola,%20vengo%20de%20Clipmenu%20...%20Me%20puede%20brindar%20ayuda?">Reportar un problema</a>
    <a class="text-dark d-none d-md-block ms-3" style="font-size: 12px;" href="https://www.uixsoftware.com/">Uixsoftware</a>
    </div>



      <main id="content" style="overflow-x: hidden;" role="main">
        <!-- Hero -->

        <div class="container-fluid">
          <div class="row">

            
          <center>
            <div class="col-lg-6 col-xl-7 d-flex justify-content-center align-items-center min-vh-100 px-2">
              <div class="flex-grow-1 mx-auto px-2 text-center" style="max-width: 22rem; position: relative; z-index: 5;">
                <!-- Heading -->

                <div class="text-center justify-content-center mb-8  align-items-center">

                
                <img src="assets/img/logos/logo_hbn5.webp" class="mb-4" width="150" alt="Logo Habana5">
                  </div>

                
             

                  
                <div class="pb-4 mt-2">
                  <span style="font-size: 14px;color: #343434;">¿Aún no tienes una cuenta Business? <a class="fw-semi text-dark" style="text-decoration: underline;" href="signup">Registrate</a></span>

                </div>
   <!-- Form -->
                <form id="login_business">

                  
              
                  <!-- Form -->
                  <div class="mb-3">
                   
                    <input type="email" style="background-color: #f8f8f9;" class="form-control rounded-3 induo" name="business_correo_electronico" placeholder="Correo electrónico" aria-label="email@site.com" required="">
                    <span class="invalid-feedback">Please enter a valid email address.</span>
                  </div>
                  <!-- End Form -->
    
                  <!-- Form -->
                  <div class="mb-4">
      
                      <input type="password" style="background-color: #f8f8f9;" class="form-control rounded-3 induo" name="business_contrasena" placeholder="Contraseña" aria-label="email@site.com" required="">
                      <span class="invalid-feedback">Please enter a valid email address.</span>
                   
                  </div>
                  <!-- End Form -->
              
                    <div class="d-flex justify-content-end ms-auto mt-4 mb-4">

                   
                      <button href="#" type="submit" style="padding: 10px 20px;" class="hero-btn-3 border-0 rounded-pill mb-3 px-5 w-100">
                        Continuar<svg width="10" height="10" viewBox="0 0 10 10" aria-hidden="true"><g fill-rule="evenodd"><path class="line" d="M0 5h7"></path><path class="tip" d="M1 1l4 4-4 4"></path></g></svg></button>
               
                  </div>

                </form>
                <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script>
$(document).ready(function(){
    $('#login_business').submit(function(e){
        e.preventDefault();
        $.ajax({
            url: 'assets/php/auth/login_account_business.php',
            type: 'post',
            data: $('#login_business').serialize(),
            success: function(response){
                // Comprueba la respuesta del servidor
                if (response.trim() === "success") {
                  Swal.fire({
            title: '¡Bienvenido!',
            icon: 'success',
            timer: 2500, // Tiempo en milisegundos
            showConfirmButton: false
          });
          window.location.href = "dashboard/";
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
                <!-- End Form -->
              </div>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>
    

      </main>


      
<!-- Modal -->
<div id="mo-terms" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mo-termsTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header py-2 pt-3">
          <span class="h3">Términos y Condiciones</span>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body small" style="max-height: 700px;">


<p>
<span class="h5"><span class="h2">1.</span> INFORMACIÓN GENERAL</span><br><br>  
La titularidad de este sitio web, www.gotosend.com, (en adelante GotoSend) la 
ostenta Yordan Castillo Bonal, con NIF: Y8988902X, y cuyos datos de contacto son:
Dirección: 
Marqueses de Valdecilla y Pelayo, Torrelavega, Cantabria, España
Teléfono de contacto: +34 942 141 400
Email de contacto: admin@gotosend.com
Este documento (así como todo otro documentos que aquí se mencionen) regula las 
condiciones por las que se rige el uso de este Sitio Web (www.gotosend.com) y la 
compra o adquisición de productos y/o servicios en el mismo (en adelante, 
Condiciones).<br> <br> 
A efectos de estas Condiciones se entiende que la actividad que GotoSend 
desarrolla a través del Sitio Web comprende:
<br> - Remesas internacionales: Permitimos enviar y recibir dinero a través de 
proveedores lideres en el mercado ofreciendo comisiones competitivas, tarifas y 
tipos de cambio favorables. Además del servicio de rastreo del estado del envío 
en todo momento y el respaldo de un servicio de atención al cliente de calidad.
<br> - Recargas telefónicas: Facilitamos la recarga de teléfonos móviles, tanto en 
España como en el extranjero a más de 500 operadoras de telefonía móvil 
además de ofertas y promociones que te ofrecen las operadoras, y ahorrar en 
tus llamadas y mensajes.
<br> - Tarjetas de regalo: Brindamos la oportunidad de comprar tarjetas de regalo de 
diversas marcas y establecimientos comerciales, tanto físicos como online. 
<br> - Monedero electrónico: Ofrecemos un monedero electrónico que permite 
almacenar, retirar, transferir a otros usuarios y pagar en nuestra plataforma.
Además de estos productos y servicios, también ofrecemos un programa de 
afiliación y un sistema de recompensas que permiten obtener beneficios 
adicionales por usar nuestra web. Estos son los detalles de estos programas:
<br> - Programa de afiliación: Podrás formar parte de nuestro programa de afiliación, 
que permite ganar comisiones por recomendar GotoSend a otras personas. 
Podrás consultar estadísticas, ganancias y pagos desde el panel de control, y 
2/13
recibir apoyo de nuestro equipo de afiliados.<br> 
<br> - Sistema de recompensas: Premios por usar GotoSend. Otorgamos puntos por 
cada compra o transacción que realicen nuestros usuarios. Canjea estos puntos 
por descuentos, regalos o dinero en efectivo, y ventajas exclusivas. Posibilidad 
de subir de nivel en nuestro sistema de recompensas, y acceder a mayores 
beneficios y recompensas.<br><br>  
Además de leer las presentes Condiciones, antes de acceder, navegar y/o usar esta 
página web, el Usuario ha de haber leído el Aviso Legal y las Condiciones Generales 
de Uso, incluyendo, la política de cookies, y la política de privacidad y de protección 
de datos de GotoSend. Al utilizar este Sitio Web o al hacer y/o solicitar la adquisición 
de un producto y/o servicio a través del mismo el Usuario consiente quedar 
vinculado por estas Condiciones y por todo lo anteriormente mencionado, por lo que 
si no está de acuerdo con todo ello, no debe usar este Sitio Web.<br> 
Asimismo, se informa que estas Condiciones podrían ser modificadas. El Usuario es 
responsable de consultarlas cada vez que acceda, navegue y/o use el Sitio Web ya 
que serán aplicables aquellas que se encuentren vigentes en el momento en que se 
solicite la adquisición de productos y/o servicios.<br><br> 
Para todas las preguntas que el Usuario pueda tener en relación con las 
Condiciones puede ponerse en contacto con el titular utilizando los datos de 
contacto facilitados más arriba o, en su caso, utilizando el formulario de contacto.

<br><br>
<span class="h5"><span class="h2">2.</span> EL USUARIO</span><br><br>
El acceso, la navegación y uso del Sitio Web, confiere la condición de usuario (en 
adelante referido, indistintamente, individualmente como Usuario o conjuntamente 
como Usuarios), por lo que se aceptan, desde que se inicia la navegación por el Sitio 
Web, todas las Condiciones aquí establecidas, así como sus ulteriores 
modificaciones, sin perjuicio de la aplicación de la correspondiente normativa legal 
de obligado cumplimiento según el caso.
El Usuario asume su responsabilidad de un uso correcto del Sitio Web. Esta 
responsabilidad se extenderá a:<br> <br> 
• Hacer uso de este Sitio Web únicamente para realizar consultas y compras o 
adquisiciones legalmente válidas.
<br> <br> • No realizar ninguna compra falsa o fraudulenta. Si razonablemente se pudiera 
considerar que se ha hecho una compra de esta índole, podría ser anulada y 
se informaría a las autoridades pertinentes.
<br> <br> • Facilitar datos de contacto veraces y lícitos, por ejemplo, dirección de correo 
electrónico, dirección postal y/u otros datos (ver Aviso Legal y Condiciones 
Generales de Uso).<br> <br> 
El Usuario declara ser mayor de 18 años y tener capacidad legal para celebrar 
contratos a través de este Sitio Web.
3/13<br> <br> 
El Usuario podrá formalizar, a su elección, con GotoSend el contrato de 
compraventa de los productos y/o servicios deseados en cualquiera de los idiomas 
en los que las presentes Condiciones estén disponibles en este Sitio Web.

<br><br>
<span class="h5"><span class="h2">3.</span>  PROCESO DE COMPRA O ADQUISICIÓN</span><br><br>

Los Usuarios debidamente registrados pueden comprar en el Sitio Web por los 
medios y formas establecidos. Deberán seguir el procedimiento de compra y/o 
adquisición online de www.gotosend.com, durante el cual varios productos y/o 
servicios pueden ser seleccionados y añadidos al carrito, cesta o espacio final de 
compra y, finalmente, hacer clic en "Completar Pago".<br> <br> 
Asimismo, el Usuario deberá rellenar y/o comprobar la información que en cada paso 
se le solicita, aunque, durante el proceso de compra, antes de realizar el pago, se 
pueden modificar los datos de la compra.<br> <br> 
Seguidamente, el Usuario recibirá un correo electrónico confirmando que GotoSend 
ha recibido su pedido o solicitud de compra y/o prestación del servicio, es decir, la 
confirmación del pedido. Y, en su caso, se le informará, igualmente, mediante correo 
electrónico cuando su compra esté siendo enviada. En su caso, estas informaciones 
también podrían ponerse a disposición del Usuario a través de su espacio personal 
de conexión al Sitio Web.<br> <br> 
Una vez el procedimiento de compra ha concluido, el Usuario consiente que el Sitio 
Web genere una factura electrónica que se hará llegar al Usuario a través del correo 
electrónico, y en su caso, a través de su espacio personal de conexión al Sitio Web. 
Asimismo, el Usuario puede, si así lo desea, obtener una copia de su factura en 
papel, solicitándolo a GotoSend utilizando los espacios de contacto del Sitio Web o a 
través de los datos de contacto facilitados más arriba.<br> <br> 
El Usuario reconoce estar al corriente, en el momento de la compra, de ciertas 
condiciones particulares de venta que conciernen al producto y/o servicio en 
cuestión y que se muestran junto a la presentación o, en su caso, imagen de éste en 
su página del Sitio Web, indicando, a modo enunciativo, pero no exhaustivo, y 
atendiendo a cada caso: nombre, precio, componentes, peso, cantidad, color, 
detalles de los productos, o características, modo en el que se llevarán a cabo y/o 
coste de las prestaciones; y reconoce que la realización del pedido de compra o 
adquisición materializa la aceptación plena y completa de las condiciones 
particulares de venta aplicables a cada caso.<br> 
Las comunicaciones, órdenes de compra y pagos que intervengan durante las 
transacciones efectuadas en el Sitio Web podrían ser archivadas y conservadas en 
los registros informatizados de GotoSend con el fin de constituir un medio de prueba 
de las transacciones, en todo caso, respetando las condiciones razonables de 
seguridad y las leyes y normativas vigentes que a este respecto sean de aplicación, 
y particularmente atendiendo al Reglamento (UE) 2016/679 del Parlamento Europeo 
y del Consejo, de 27 de abril de 2016, relativo a la protección de las personas físicas 
en lo que respecta al tratamiento de datos personales y a la libre circulación de estos 
datos (RGPD) y la Ley Orgánica 3/2018, de 5 de diciembre, de Protección de Datos 
4/13
Personales y garantía de los derechos digitales, y a los derechos que asisten a los 
Usuarios conforme a la política de privacidad de este Sitio Web.

<br><br>
<span class="h5"><span class="h2">4.</span>  DISPONIBILIDAD</span><br><br>

Todos los pedidos de compra recibidos por GotoSend a través del Sitio Web están 
sujetos a la disponibilidad de los productos y/o a que ninguna circunstancia o causa 
de fuerza mayor (cláusula nueve de estas Condiciones) afecte al suministro de los 
mismos y/o a la prestación de los servicios. Si se produjeran dificultades en cuanto al 
suministro de productos o no quedaran productos en stock, GotoSend se 
compromete a contactar al Usuario y reembolsar cualquier cantidad que pudiera 
haber sido abonada en concepto de importe. Esto será igualmente aplicable en los 
casos en los que la prestación de un servicio deviniera irrealizable.

<br><br>
<span class="h5"><span class="h2">5.</span>  PRECIOS Y PAGO</span><br><br>
Los precios exhibidos en el Sitio Web son los finales, en Euros (€) e incluyen los 
impuestos, salvo que por exigencia legal, especialmente en lo relativo al IVA, se 
señale y aplique cuestión distinta.<br> 
No obstante, y salvo que se indique, puntualmente, otra cosa los precios de los 
artículos ofrecidos excluyen los gastos de envío, en los que se pudiera incurrir, que 
se añadirán al importe total debido al momento de gestionar el procedimiento de 
envío por parte del Usuario, y donde éste consultará los métodos y costes de envío 
disponibles y elegirá libremente el que más le convenga.
En ningún caso el Sitio Web añadirá costes adicionales al precio de un producto o 
de un servicio de forma automática, sino solo aquellos que el Usuario haya 
seleccionado y elegido voluntaria y libremente.
Los precios pueden cambiar en cualquier momento, pero los posibles cambios no 
afectarán a los pedidos o compras con respecto a los que el Usuario ya haya 
recibido una confirmación de pedido.
Los medios de pago aceptados serán: Tarjeta de crédito o débito, y Transferencia 
bancaria.
GotoSend utiliza todos los medios para garantizar la confidencialidad y la seguridad 
de los datos de pago transmitidos por el Usuario durante las transacciones a través 
del Sitio Web. Como tal, el Sitio Web utiliza un sistema de pago seguro SSL (Secure 
Socket Layer).
Las tarjetas de crédito estarán sujetas a comprobaciones y autorizaciones por parte 
de la entidad bancaria emisora de las mismas, si dicha entidad no autorizase el 
pago, GotoSend no será responsable por ningún retraso o falta de entrega y no 
podrá formalizar ningún contrato con el Usuario.
Una vez que GotoSend reciba la orden de compra por parte del Usuario a través del 
Sitio Web, se hará una pre-autorización en la tarjeta que corresponda para asegurar 
que existen fondos suficientes para completar la transacción. El cargo en la tarjeta 
5/13
se hará en el momento en que se envíe al Usuario la confirmación de envío y/o 
confirmación del servicio que se presta en forma y, en su caso, lugar establecidos.
En todo caso, al hacer clic en "Completar Pago" el Usuario confirma que el método 
de pago utilizado es suyo.
Los pedidos de compra o adquisición en los que el Usuario seleccione como medio 
de pago la transferencia bancaria serán reservados durante 5 días naturales a partir 
de la confirmación del pedido para poder dejar el tiempo suficiente a que la 
transferencia bancaria sea tomada en cuenta por el sistema de pagos utilizado por 
GotoSend para el Sitio Web. Cuando el sistema recibe la transferencia, el pedido 
será preparado y gestionado para envío.
Mediante este método de pago, el Usuario debe asegurarse que introduce 
correctamente el importe exacto del pedido de compra, así como el número de 
cuenta y la referencia de la transferencia. En caso de error, GotoSend no podrá 
validar el pedido, que será anulado.

<br><br>
<span class="h5"><span class="h2">6.</span> ENTREGA</span><br><br>
En los casos en los que proceda realizar la entrega física del bien contratado, las 
entregas se efectuarán en el ámbito del siguiente territorio: Mundo.
Exceptuando aquellos casos en los que existan circunstancias imprevistas o 
extraordinarias o, en su caso, derivadas de la personalización de los productos, el 
pedido de compra consistente en los productos relacionados en cada confirmación 
de compra será entregado en el plazo señalado en el Sitio Web según el método de 
envío seleccionado por el Usuario y, en todo caso, en el plazo máximo de 30 días 
naturales a contar desde la fecha de la confirmación del pedido.
Si por algún motivo, que le fuera imputable, GotoSend no pudiera cumplir con la 
fecha de entrega, contactará al Usuario para informarle de esta circunstancia y, éste 
podrá elegir seguir adelante con la compra estableciendo una nueva fecha de 
entrega o bien anular el pedido con el reembolso total del precio pagado. En 
cualquier caso, las entregas a domicilio se realizan en días laborables.
Si resultara imposible efectuar la entrega del pedido por ausencia del Usuario, el 
pedido podría ser devuelto al almacén. No obstante, el transportista dejaría un aviso 
explicando dónde se encuentra el pedido y cómo hacer para que sea entregado de 
nuevo.<br> <br> 
Si el Usuario no va a estar en el lugar de entrega en la franja horaria convenida, 
debe ponerse en contacto con GotoSend para convenir la entrega otro día.
En caso de que transcurran 30 días desde que su pedido esté disponible para su 
entrega, y no haya sido entregado por causa no imputable a GotoSend, GotoSend 
entenderá que el Usuario desea desistir del contrato y éste se considerará resuelto. 
Como consecuencia de la resolución del contrato, todos los pagos recibidos del 
Usuario le serán devueltos, a excepción de los gastos adicionales resultantes de la 
elección propia del Usuario de una modalidad de entrega diferente a la modalidad 
menos costosa de entrega ordinaria que ofrece el Sitio Web, sin ninguna demora 
6/13
indebida y, en cualquier caso, en el plazo máximo de 14 días naturales desde la 
fecha en que se considera resuelto el contrato.
No obstante, el Usuario debe tener presente que el transporte derivado de la 
resolución puede tener un coste adicional que le podrá ser repercutido.
A efectos de las presentes Condiciones, se entenderá que se ha producido la 
entrega o que el pedido ha sido entregado en el momento en el que el Usuario o un 
tercero indicado por el Usuario adquiera la posesión material de los productos, lo 
que se acreditará mediante la firma de la recepción del pedido en la dirección de 
entrega convenida.<br> <br> 
Los riesgos que de los productos se pudieran derivar serán a cargo del Usuario a 
partir del momento de su entrega. El Usuario adquiere la propiedad de los productos 
cuando GotoSend recibe el pago completo de todas las cantidades debidas en 
relación a la compra o adquisición efectuada, incluidos los gastos de envío, o bien 
en el momento de la entrega, si ésta tiene lugar en un momento posterior a la 
recepción completa del importe objeto de pago por GotoSend.
De conformidad con lo dispuesto en la Ley 37/1992, de 28 de diciembre, del 
Impuesto sobre el Valor Añadido (IVA), los pedidos de compra para su entrega y/o 
prestación se entenderán localizados en el territorio de aplicación del IVA español si 
la dirección de entrega está en territorio español salvo Canarias, Ceuta y Melilla. El 
tipo de IVA aplicable será el legalmente vigente en cada momento en función del 
artículo concreto de que se trate.
En este mismo sentido, y de conformidad con el Capítulo I del título V de la Directiva 
2006/112 del Consejo del 28 de noviembre de 2006 relativa al sistema común del 
IVA, los pedidos de compra se localizarán, para su entrega y/o prestación, en aquel 
Estado miembro de la Unión Europea en que la dirección que figura en el pedido de 
compra se localiza y, por tanto, el IVA aplicable será el vigente en dicho Estado 
miembro.<br> <br> 
En los pedidos con destino a Canarias, Ceuta y Melilla, las entregas se encontrarán 
exentas de IVA por aplicación de lo dispuesto en Ley 37/1992, y a la Directiva 
2006/112, sin perjuicio de la aplicación de los impuestos y aranceles 
correspondientes conforme a la normativa vigente en cada uno de estos territorios. 
El Usuario debe tener en cuenta que en estos territorios podrían darse situaciones 
en que se aplican y devengan impuestos y derechos de aduanas en destino, de 
conformidad con la normativa vigente, y que estos podrían correr de su parte.
Para el resto de localizaciones, distintas a las anteriores, donde los pedidos de 
compra se localizaran, para su entrega y/o prestación se aplicará la normativa 
vigente en cada momento; el Usuario debe tener en cuenta que esto podría generar 
la aplicación y devengo de impuestos y derechos de aduanas en destino, de 
conformidad con la normativa vigente en destino, y que estos podrían correr de su 
parte. Para ampliar información, el Usuario debe dirigirse a la oficina de aduanas en 
destino.


<br><br>
<span class="h5"><span class="h2">7.</span> MEDIOS TÉCNICOS PARA CORREGIR ERRORES</span><br><br>

7/13
Se pone en conocimiento del Usuario que en caso de que detecte que se ha 
producido un error al introducir datos necesarios para procesar su solicitud de 
compra en el Sitio Web, podrá modificar los mismos poniéndose en contacto con 
GotoSend a través de los espacios de contacto habilitados en el Sitio Web, y, en su 
caso, a través de aquellos habilitados para contactar con el servicio de atención al 
cliente, y/o utilizando los datos de contacto facilitados en la cláusula primera 
(Información general). Asimismo, estas informaciones también podrían subsanarse 
por el Usuario a través de su espacio personal de conexión al Sitio Web.
En cualquier caso, el Usuario, antes de hacer clic en "Completar Pago", tiene acceso 
al espacio, carrito, o cesta donde se van anotando sus solicitudes de compra y 
puede hacer modificaciones.<br> <br> 
De igual forma, se remite al Usuario a consultar el Aviso Legal y Condiciones 
Generales de Uso y, en concreto, la Política de Privacidad para recabar más 
información sobre cómo ejercer su derecho de rectificación según lo establecido en 
el Reglamento (UE) 2016/679 del Parlamento Europeo y del Consejo, de 27 de abril 
de 2016, relativo a la protección de las personas físicas en lo que respecta al 
tratamiento de datos personales y a la libre circulación de estos datos (RGPD) y en 
la Ley Orgánica 3/2018, de 5 de diciembre, de Protección de Datos Personales y 
garantía de los derechos digitales.

<br><br>
<span class="h5"><span class="h2">8.</span> DEVOLUCIONES</span><br><br>
En los casos en los que el Usuario adquiriera productos en o través del Sitio Web del 
titular, le asisten una serie de derechos, tal y como se enumeran y describen a 
continuación:<br> <br> 
Derecho de Desistimiento
El Usuario, en tanto que consumidor y usuario, realiza una compra en el Sitio Web y, 
por tanto le asiste el derecho a desistir de dicha compra en un plazo de 14 días 
naturales sin necesidad de justificación.
Este plazo de desistimiento expirará a los 14 días naturales del día que el Usuario o 
un tercero autorizado por éste, distinto del transportista, adquirió la posesión material 
de los bienes adquiridos en el Sitio Web de GotoSend o en caso de que los bienes 
que componen su pedido se entreguen por separado, a los 14 días naturales del día 
que el Usuario o un tercero autorizado por éste, distinto del transportista, adquirió la 
posesión material del último de esos bienes que componían un mismo pedido de 
compra, o en el caso de tratarse de un contrato de servicios, a los 14 días naturales 
desde el día de la celebración del contrato.
Para ejercer este derecho de desistimiento, el Usuario deberá notificar su decisión a 
GotoSend. Podrá hacerlo, en su caso, a través de los espacios de contacto 
habilitados en el Sitio Web o a través del email: info@gotosend.com
El Usuario, independientemente del medio que elija para comunicar su decisión, 
debe expresar de forma clara e inequívoca que es su intención desistir del contrato 
de compra. En todo caso, el Usuario podrá utilizar el modelo de formulario de 
8/13
desistimiento que GotoSend pone a su disposición como parte anexada a estas 
Condiciones, sin embargo, su uso no es obligatorio.
Para cumplir el plazo de desistimiento, basta con que la comunicación que expresa 
inequívocamente la decisión de desistir sea enviada antes de que venza el plazo 
correspondiente.
En caso de desistimiento, GotoSend reembolsará al Usuario todos los pagos 
recibidos, incluidos los gastos de envío (con la excepción de los gastos adicionales 
elegidos por el Usuario para una modalidad de envío diferente a la modalidad menos 
costosa ofrecida en el Sitio Web) sin ninguna demora indebida y, en todo caso, a 
más tardar en 14 días naturales a partir de la fecha en la que GotoSend es 
informado de la decisión de desistir por el Usuario.
GotoSend reembolsará al Usuario utilizando el mismo método de pago que empleó 
este para realizar la transacción inicial de compra. Este reembolso no generará 
ningún coste adicional al Usuario. No obstante, GotoSend podría retener dicho 
reembolso hasta haber recibido los productos o artículos de la compra, o hasta que 
el Usuario presente una prueba de la devolución de los mismos, según qué 
condición se cumpla primero.
El Usuario puede devolver o enviar los productos a GotoSend en el punto de 
recogida asignado y enviado a la dirección que le sea indicada y deberá hacerlo sin 
ninguna demora indebida y, en cualquier caso, a más tardar en el plazo de 14 días 
naturales a partir de la fecha en que GotoSend fue informado de la decisión de 
desistimiento.
El Usuario reconoce conocer que deberá asumir el coste directo de devolución 
(transporte, entrega) de los bienes, si se incurriera en alguno. Además, será 
responsable de la disminución de valor de los productos resultante de una 
manipulación distinta a la necesaria para establecer la naturaleza, las características 
y el funcionamiento de los bienes.
El Usuario reconoce saber que existen excepciones al derecho de desistimiento, tal 
y como se recoge en el artículo 103 del Real Decreto Legislativo 1/2007, de 16 de 
noviembre, por el que se aprueba el texto refundido de la Ley General para la 
Defensa de los Consumidores y Usuarios y otras leyes complementarias. De forma 
enunciativa, y no exhaustiva, este sería el caso de: productos personalizados; 
productos que puedan deteriorarse o caducar con rapidez; CDs/DVD de música o 
video sin su envoltorio, tal y como se precinta en fábrica; productos que por razones 
de higiene o de la salud van precintados y han sido desprecintados tras la entrega.
En este mismo sentido se rige la prestación de un servicio que el Usuario pudiera 
contratar en este Sitio Web, pues esta misma Ley establece que no asistirá el 
Derecho de desistimiento a los Usuarios cuando la prestación del servicio ha sido 
completamente ejecutada, o cuando haya comenzado, con el consentimiento 
expreso del consumidor y usuario y con el reconocimiento por su parte de que es 
consciente de que, una vez que el contrato haya sido completamente ejecutado por 
GotoSend, habrá perdido su derecho de desistimiento.
9/13
En todo caso, no se hará ningún reembolso si el producto ha sido usado más allá de 
la mera apertura del mismo, de productos que no estén en las mismas condiciones 
en las que se entregaron o que hayan sufrido algún daño tras la entrega.
Asimismo, se debe devolver los productos usando o incluyendo todos sus 
envoltorios originales, las instrucciones y demás documentos que en su caso los 
acompañen, además de una copia de la factura de compra.
Puede descargarse el Modelo de formulario de desistimiento enviando un email a 
info@gotosend.com y escribiendo en el asunto la palabra “DESISTIMIENTO”.
Devolución de productos defectuosos o error en el envío
Se trata de todos aquellos casos en los que el Usuario considera que, en el 
momento de la entrega, el producto no se ajusta a lo estipulado en el contrato o 
pedido de compra, y que, por tanto, deberá ponerse en contacto con GotoSend 
inmediatamente y hacerle saber la disconformidad existente (defecto/error) por los 
mismos medios o utilizando los datos de contacto que se facilitan en el apartado 
anterior (Derecho de Desistimiento).
El Usuario será entonces informado sobre cómo proceder a la devolución de los 
productos, y estos, una vez devueltos, serán examinados y se informará al Usuario, 
dentro de un plazo razonable, si procede el reembolso o, en su caso, la sustitución 
del mismo.
El reembolso o la sustitución del producto se efectuará lo antes posible y, en 
cualquier caso, dentro de los 14 días siguientes a la fecha en la que le enviemos un 
correo electrónico confirmando que procede el reembolso o la sustitución del artículo 
no conforme.
El importe abonado por aquellos productos que sean devueltos a causa de algún 
defecto, cuando realmente exista, será reembolsado íntegramente, incluidos los 
gastos de entrega y los costes en que hubiera podido incurrir el Usuario para realizar 
la devolución. El reembolso se efectuará por el mismo medio de pago que el Usuario 
utilizó para pagar la compra.
En todo caso, se estará siempre a los derechos reconocidos en la legislación vigente 
en cada momento para el Usuario, en tanto que consumidor y usuario.
Garantías
El Usuario, en tanto que consumidor y usuario, goza de garantías sobre los 
productos que pueda adquirir a través de este Sitio Web, en los términos legalmente 
establecidos para cada tipo de producto, respondiendo GotoSend, por tanto, por la 
falta de conformidad de los mismos que se manifieste en un plazo de dos años 
desde la entrega del producto.
En este sentido, se entiende que los productos son conformes con el contrato 
siempre que: se ajusten a la descripción realizada por GotoSend y posean las 
cualidades presentadas en la misma; sean aptos para los usos a que ordinariamente 
se destinan los productos del mismo tipo; y presenten la calidad y prestaciones 
habituales de un producto del mismo tipo y que sean fundamentalmente esperables 
10/13
del mismo. Cuando esto no sea así respecto de los productos entregados al Usuario, 
éste deberá proceder tal y como se indica en el apartado Devolución de productos 
defectuosos o error en el envío. No obstante, algunos de los productos que se 
comercializan en el Sitio Web, podrían presentar características no homogéneas 
siempre y cuando éstas deriven del tipo de material con el que se han fabricado, y 
que por ende formarán parte de la apariencia individual del producto, y no serán un 
defecto.
Por otra parte, podría llegar a darse el caso que el Usuario adquiere en el Sitio Web 
un producto de una marca o de fabricación por un tercero. En este caso, y 
considerando el Usuario que se trata de un producto defectuoso, éste también tiene 
la posibilidad de ponerse en contacto con la marca o fabricante responsable del 
producto para averiguar cómo ejercer su derecho de garantía legal directamente 
frente a los mismos durante los dos años siguientes a la entrega de dichos 
productos. Para ello, el Usuario debe haber conservado toda la información en 
relación con la garantía de los productos.


<br><br>
<span class="h5"><span class="h2">9.</span> EXONERACIÓN DE RESPONSABILIDAD</span><br><br>
Salvo disposición legal en sentido contrario, GotoSend no aceptará ninguna 
responsabilidad por las siguientes pérdidas, con independencia de su origen:
• Cualesquiera pérdidas que no fueran atribuibles a incumplimiento alguno por 
su parte;
• Pérdidas empresariales (incluyendo lucro cesante, de ingresos, de contratos, 
de ahorros previstos, de datos, pérdida del fondo de comercio o gastos 
innecesarios incurridos); o de
• toda otra pérdida indirecta que no fuera razonablemente previsible por ambas 
partes en el momento en que se formalizó el contrato de compraventa de los 
productos entre ambas partes.
Igualmente, GotoSend también limita su responsabilidad en cuanto a los siguientes 
casos:
• GotoSend aplica todas las medidas concernientes a proporcionar una 
visualización fiel del producto en el Sitio Web, sin embargo no se 
responsabiliza por las mínimas diferencias o inexactitudes que puedan existir 
debido a falta de resolución de la pantalla, o problemas del navegador que se 
utilice u otros de esta índole.
• GotoSend actuará con la máxima diligencia a efectos de poner a disposición 
de la empresa encargada del transporte del producto objeto del pedido de 
compra. Sin embargo, no se responsabiliza por perjuicios provenientes de un 
mal funcionamiento del transporte, especialmente por causas como huelgas, 
retenciones en carreteras, y en general cualquiera otras propias del sector, 
que deriven en retrasos, pérdidas o hurtos del producto.
11/13
• Fallos técnicos que por causas fortuitas o de otra índole, impidan un normal 
funcionamiento del servicio a través de internet. Falta de disponibilidad del 
Sitio Web por razones de mantenimiento u otras, que impida disponer del 
servicio. GotoSend pone todos los medios a su alcance a efectos de llevar a 
cabo el proceso de compra, pago y envío/entrega de los productos, no 
obstante se exime de responsabilidad por causas que no le sean imputables, 
caso fortuito o fuerza mayor. 
• GotoSend no se hará responsable del mal uso y/o del desgaste de los 
productos que hayan sido utilizados por el Usuario. Al mismo tiempo, 
GotoSend tampoco se hará responsable de una devolución errónea realizada 
por el Usuario. Es responsabilidad del Usuario devolver el producto correcto.
• En general, GotoSend no se responsabilizará por ningún incumplimiento o 
retraso en el cumplimiento de alguna de las obligaciones asumidas, cuando el 
mismo se deba a acontecimientos que están fuera de su control razonable, es 
decir, que se deban a causa de fuerza mayor, y ésta podrá incluir, a modo 
enunciativo pero no exhaustivo:
o Huelgas, cierres patronales u otras medidas reivindicativas.
o Conmoción civil, revuelta, invasión, amenaza o ataque terrorista, 
guerra (declarada o no) o amenaza o preparativos de guerra.
o Incendio, explosión, tormenta, inundación, terremoto, hundimiento, 
epidemia o cualquier otro desastre natural.
o Imposibilidad de uso de trenes, barcos, aviones, transportes de motor u 
otros medios de transporte, públicos o privados.
o Imposibilidad de utilizar sistemas públicos o privados de 
telecomunicaciones.
o Actos, decretos, legislación, normativa o restricciones de cualquier 
gobierno o autoridad pública.
De esta forma, las obligaciones quedarán suspendidas durante el periodo en 
que la causa de fuerza mayor continúe, y GotoSend dispondrá de una 
ampliación en el plazo para cumplirlas por un periodo de tiempo igual al que 
dure la causa de fuerza mayor. GotoSend pondrá todos los medios razonables 
para encontrar una solución que le permita cumplir con sus obligaciones a pesar 
de la causa de fuerza mayor.

<br><br>
<span class="h5"><span class="h2">10.</span> COMUNICACIONES POR ESCRITO Y NOTIFICACIONES</span><br><br>
 
12/13
Mediante el uso de este Sitio Web, el Usuario acepta que la mayor parte de las 
comunicaciones con GotoSend sean electrónicas (correo electrónico o avisos 
publicados en el Sitio Web).
A efectos contractuales, el Usuario consiente en usar este medio electrónico de 
comunicación y reconoce que todo contrato, notificación, información y demás 
comunicaciones que GotoSend envíe de forma electrónica cumplen con los 
requisitos legales de ser por escrito. Esta condición no afectará a los derechos 
reconocidos por ley al Usuario.
El Usuario puede enviar notificaciones y/o comunicarse con GotoSend a través de 
los datos de contacto que en estas Condiciones se facilitan y, en su caso, a través 
de los espacios de contacto del Sitio Web.
Igualmente, salvo que se estipule lo contrario, GotoSend puede contactar y/o 
notificar al Usuario en su correo electrónico o en la dirección postal facilitada.

<br><br>
<span class="h5"><span class="h2">11.</span> RENUNCIA</span><br><br>

Ninguna renuncia de GotoSend a un derecho o acción legal concreta o la falta de 
requerimiento por GotoSend del cumplimiento estricto por el Usuario de alguna de 
sus obligaciones supondrá, ni una renuncia a otros derechos o acciones derivados 
de un contrato o de las Condiciones, ni exonerará al Usuario del cumplimiento de 
sus obligaciones.
Ninguna renuncia de GotoSend a alguna de las presentes Condiciones o a los 
derechos o acciones derivados de un contrato surtirá efecto, a no ser que se 
establezca expresamente que es una renuncia y se formalice y se le comunique al 
Usuario por escrito.

<br><br>
<span class="h5"><span class="h2">12.</span> NULIDAD</span><br><br>

Si alguna de las presentes Condiciones fuesen declaradas nulas y sin efecto por 
resolución firme dictada por autoridad competente, el resto de las cláusulas 
permanecerán en vigor, sin que queden afectadas por dicha declaración de nulidad.

<br><br>
<span class="h5"><span class="h2">13.</span> ACUERDO COMPLETO</span><br><br>

Las presentes Condiciones y todo documento al que se haga referencia expresa en 
estas constituyen el acuerdo íntegro existente entre el Usuario y GotoSend en 
relación con el objeto de compraventa y sustituyen a cualquier otro pacto, acuerdo o 
promesa anterior convenida verbalmente o por escrito por las mismas partes.
El Usuario y GotoSend reconocen haber consentido la celebración de un contrato sin 
haber confiado en ninguna declaración o promesa hecha por la otra parte, salvo 
aquello que figura expresamente mencionado en las presentes Condiciones.

<br><br>
<span class="h5"><span class="h2">14.</span> PROTECCIÓN DE DATOS</span><br><br>
13/13
La información o datos de carácter personal que el Usuario facilite a GotoSend en el 
curso de una transacción en el Sitio Web, serán tratados con arreglo a lo establecido 
en la Política de Privacidad o de protección de datos (contenida, en su caso, en el 
Aviso Legal y Condiciones Generales de Uso). Al acceder, navegar y/o usar el Sitio 
Web el Usuario consiente el tratamiento de dicha información y datos y declara que 
toda la información o datos que facilita son veraces.

<br><br>
<span class="h5"><span class="h2">15.</span> LEGISLACIÓN APLICABLE Y JURISDICCIÓN</span><br><br>
El acceso, navegación y/o uso de este Sitio Web y los contratos de compra de 
productos a través del mismo se regirán por la legislación española.
Cualquier controversia, problema o desacuerdo que surja o esté relacionado con el 
acceso, navegación y/o uso del Sitio Web, o con la interpretación y ejecución de 
estas Condiciones, o con los contratos de venta entre GotoSend y el Usuario, será 
sometida a la jurisdicción no exclusiva de los juzgados y tribunales españoles.

<br><br>
<span class="h5"><span class="h2">16.</span> QUEJAS Y RECLAMACIONES</span><br><br>
El Usuario puede hacer llegar a GotoSend sus quejas, reclamaciones o todo otro 
comentario que desee realizar a través de los datos de contacto que se facilitan al 
principio de estas Condiciones (Información General).
Además, GotoSend dispone de hojas oficiales de reclamación a disposición de los 
consumidores y usuarios, y que estos pueden solicitar a GotoSend en cualquier 
momento, utilizando los datos de contacto que se facilitan al principio de estas 
Condiciones (Información General).
Asimismo, si de la celebración de este contrato de compra entre GotoSend y el 
Usuario emanara una controversia, el Usuario como consumidor puede solicitar una 
solución extrajudicial de controversias, de acuerdo con el Reglamento (UE) 524/2013 
del Parlamento Europeo y del Consejo, de 21 de mayo de 2013, sobre resolución de 
litigios en línea en materia de consumo y por el que se modifica el Reglamento (CE) 
2006/2004 y la Directiva 2009/22/CE. Puede acceder a este método a través del 
siguiente sitio web: http://ec.europa.eu/consumers/odr/.
</p>
        </div>
        <div class="modal-footer pt-2 pb-2 border-0">

          <a href="assets/docs/Términos y Condiciones.pdf" target="_blank" class="btn btn-danger border-0 rounded-3  text-white btn-transition shadow-sm px-4 h5">Descargar en PDF</a>
            <button  data-bs-dismiss="modal" class="btn btn-dark border-0 rounded-3  text-white btn-transition shadow-sm px-4 h5" style="background-color: #191a30;">Cerrar</button>

        </div>
      </div>
    </div>
  </div>

  

<script src="assets/js/vendor.min.js"></script>
</body>
</html>