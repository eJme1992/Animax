<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Iniciar sesion</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   </head>
   <body>
      <div class="limiter">
         <div class="container-login100" style="background-image:url('<?=base_url();?>plantilla/admin/images/nime.jpeg');" >
            <div class="container">
               <div class="row">
                 <div class="col-md-6">
                  <h1>Hola</h1>
                   <form  id="formr">
                      <div class="form-group">
                        <label for="usr">Name:</label>
                        <input type="text" class="form-control" id="usr">
                      </div>
                      <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd">
                      </div> 
                   </form>
                 </div>
                 <div class="col-md-6">
                   
                 </div>

               </div>
               <script>
                  function doble(){
                   document.getElementById("formr").style.display="block";
                   document.getElementById("formu").style.display="none";
                   document.getElementById("img").style.display="none";
                   document.getElementById("imgr").style.display="block";
                  }
                  function oculta(){
                   document.getElementById("formr").style.display="none";
                   document.getElementById("formu").style.display="block";
                   document.getElementById("img").style.display="block";
                   document.getElementById("imgr").style.display="none";
                  }
               </script>
            </div>
         </div>
      </div>
      <script > //Ajax para mi form ingresar
         jQuery(document).ready(function() { //Cuando el doc se cargue, hacelas ejecuciones siguientes
               jQuery("#formu").submit(function(event) {  //Se activa el form, activa el ajax
               event.preventDefault(); 
         
             var msj = '1'; 
         //validaciones con js
         
         if (msj === "1") { //tres igual para decir que es identico
         var formData = new FormData(jQuery('#formu') [0]); //Se crea el arreglo con los datos del form
         jQuery.ajax({
           url: '<?=base_url();?>login/ingreso', // Al controlador donde van mis datos 
           type: 'POST', 
           contentType: false,
           processData: false, //Le dice que tipo de dato va a recibir
           dataType: 'json',
           data: formData,  
           beforeSend: function() {
             $("#resultado").html('<div class="alert alert-success">Procesando...!</div>');
           }
         })
         .done(function(data, textStatus, jqXHR) {
           var getData = jqXHR.responseJSON; // vguarda los errores si los hay en la ejecucion del js
         
           if(data.status=='ok'){ //ver controlador, status es el nombre la clave cuando se creo
            $("#resultado").html('<div class="alert alert-success">'+data.code+'</div>'); //controlador
             window.location.href ='<?=base_url();?>perfil'; //te manda la direccion a donde vas
           }else{
           $("#resultado").html('<div class="alert alert-danger"><strong>ERROR!</strong>'+data.error+'</div>');
           }
         })
               .fail(function(jqXHR, textStatus, errorThrown) { //Si ocurre errores el jquery
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
      <script > //Ajax para mi form registrar
         jQuery(document).ready(function() { //Cuando el doc se cargue, hacelas ejecuciones siguientes
               jQuery("#formr").submit(function(event) {  //Se activa el form, activa el ajax
               event.preventDefault(); 
         
             var msj = '1'; 
         //validaciones con js
         
         if (msj === "1") { //tres igual para decir que es identico
         var formData = new FormData(jQuery('#formr') [0]); //Se crea el arreglo con los datos del form
         jQuery.ajax({
           url: '<?=base_url();?>login/registrar', // Al controlador donde van mis datos y la funcion que los ejecuta
           type: 'POST', 
           contentType: false,
           processData: false, //Le dice que tipo de dato va a recibir
           dataType: 'json',
           data: formData,  
           beforeSend: function() {
             $("#resultado2").html('<div class="alert alert-success">Procesando...!</div>');
           }
         })
         .done(function(data, textStatus, jqXHR) {
           var getData = jqXHR.responseJSON; // guarda los errores si los hay en la ejecucion del js
         
           if(data.status=='ok'){ //ver controlador, status es el nombre la clave cuando se creo
            $("#resultado2").html('<div class="alert alert-success">'+data.code+'</div>'); //controlador
             window.location.href ='<?=base_url();?>perfil'; //te manda la direccion a donde vas
           }else{
           $("#resultado2").html('<div class="alert alert-danger"><strong>ERROR!</strong>'+data.error+'</div>');
           }
         })
               .fail(function(jqXHR, textStatus, errorThrown) { //Si ocurre errores el jquery
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

      <!--===============================================================================================-->
      <script src="<?=base_url();?>plantilla/admin/vendor/bootstrap/js/popper.js"></script>
      <script src="<?=base_url();?>plantilla/admin/vendor/bootstrap/js/bootstrap.min.js"></script>
      <!--===============================================================================================-->
      <script src="<?=base_url();?>plantilla/admin/vendor/select2/select2.min.js"></script>
      <!--===============================================================================================-->
     
      <script >
         $('.js-tilt').tilt({
          scale: 1.1
         })
      </script>
      <!--===============================================================================================-->
      <script src="<?=base_url();?>plantilla/admin/js/main.js"></script>
   </body>
</html>
