<!DOCTYPE html>
<?php header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past?>
<html lang="es">
   <head>
      <title>Acceso de admistracción</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--===============================================================================================-->	
      <link rel="icon" type="image/png" href="<?=base_url();?>plantilla/adm/images/icons/favicon.ico"/>
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="<?=base_url();?>plantilla/adm/vendor/bootstrap/css/bootstrap.min.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="<?=base_url();?>plantilla/adm/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="<?=base_url();?>plantilla/adm/vendor/animate/animate.css">
      <!--===============================================================================================-->	
      <link rel="stylesheet" type="text/css" href="<?=base_url();?>plantilla/adm/vendor/css-hamburgers/hamburgers.min.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="<?=base_url();?>plantilla/adm/vendor/select2/select2.min.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="<?=base_url();?>plantilla/adm/css/util.css">
      <link rel="stylesheet" type="text/css" href="<?=base_url();?>plantilla/adm/css/main.css">
      <!--===============================================================================================-->
   </head>
   <body>
      <div class="limiter">
         <div class="container-adm100">
            <div class="wrap-adm100">
               <div class="adm100-pic js-tilt" data-tilt>
                  <img src="<?=base_url();?>plantilla/adm/images/img-01.png" alt="IMG">
               </div>
               <form class="adm100-form validate-form" id="form">
                  <span class="adm100-form-title">
                  Panel de admistracción
                  </span>
                  <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                     <input type="text" id="user" name="user" class="form-control input100" placeholder="Ingresar email" required="">
                     <span class="focus-input100"></span>
                     <span class="symbol-input100">
                     <i class="fa fa-envelope" aria-hidden="true"></i>
                     </span>
                  </div>
                  <div class="wrap-input100 validate-input" data-validate = "Password is required">
                     <input type="password" id="password" name="password" placeholder="Clave" class="form-control input100"  required="" />
                     <span class="focus-input100"></span>
                     <span class="symbol-input100">
                     <i class="fa fa-lock" aria-hidden="true"></i>
                     </span>
                  </div>
                  <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                  <div class="container-adm100-form-btn">
                     <button type="submit" id="enviar" name="enviar" class="btn btn-primary btn-round btn-lg btn-block adm100-form-btn ">INGRESAR</button>
                  </div>
                  <div class="col-md-12" id="resultado" style="margin-top:15px;"></div>
                  <div class="text-center p-t-12">
                     <span class="txt1">
                     Olvido su
                     </span>
                     <a class="txt2" href="<?=base_url();?>plantilla/adm/#">
                     Usuario / Contraseña?
                     </a>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <!--===============================================================================================-->	
      <script src="<?=base_url();?>plantilla/adm/vendor/jquery/jquery-3.2.1.min.js"></script>
      <!--===============================================================================================-->
      <script src="<?=base_url();?>plantilla/adm/vendor/bootstrap/js/popper.js"></script>
      <script src="<?=base_url();?>plantilla/adm/vendor/bootstrap/js/bootstrap.min.js"></script>
      <!--===============================================================================================-->
      <script src="<?=base_url();?>plantilla/adm/vendor/select2/select2.min.js"></script>
      <!--===============================================================================================-->
      <script src="<?=base_url();?>plantilla/adm/vendor/tilt/tilt.jquery.min.js"></script>
      <script >
         $('.js-tilt').tilt({
         	scale: 1.1
         })
      </script>
      <script >
         jQuery(document).ready(function() {
               jQuery("#form").submit(function(event) {
               event.preventDefault();
         
             var msj = '1';
         //validaciones con js
         
        if (msj === "1") {
         var formData = new FormData(jQuery('#form') [0]);
         jQuery.ajax({
           url: '<?=base_url();?>adm/ingreso',
           type: 'POST',
           contentType: false,
           processData: false,
           dataType: 'json',
           data: formData,
           beforeSend: function() {
             $("#resultado").html('<div class="alert alert-success">Procesando...!</div>');
           }
         })
         .done(function(data, textStatus, jqXHR) {
           var getData = jqXHR.responseJSON; // dejar esta linea
         
           if(data.status=='ok'){
            $("#resultado").html('<div class="alert alert-success">'+data.code+'</div>');
             window.location.href ='<?=base_url();?>/panel';
           }else{
           $("#resultado").html('<div class="alert alert-danger"><strong>ERROR!</strong>'+data.error+'</div>');
           }
         })
               .fail(function(jqXHR, textStatus, errorThrown) {
                 var getErr = jqXHR.responseText;
                 console.log(getErr);
         
               })
          // Fin de ajax
          } else {
              swal("¡Error! ", msj, "error");
          }
          });
         
         });//fin ready
      </script>
      <!--===============================================================================================-->
      <script src="<?=base_url();?>plantilla/adm/js/main.js"></script>
   </body>
</html>
