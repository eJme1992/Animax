<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
  <link rel="stylesheet" href="<?=base_url();?>plantilla/login-user/css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Amaranth" rel="stylesheet"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


  
</head>

<body>


<div class="cont">
  <div class="form sign-in">
    <h2>Bienvenido</h2>
    <form id="formu">
    <label>
      <span>Email</span>
      <input type="email" id="email" name="email"/>
    </label>
    <label>
      <span>Contraseña</span>
      <input type="password" id="pass" name="pass" />
    </label>
    <a class="fp" href="#"><p class="forgot-pass">¿Olvidaste tu contraseña?</p></a>
    <button type="submit" id="enviar" name="enviar" class="submit">Iniciar sesión</button>
    <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
    <div class="col-md-12" id="resultado" style="margin-top:15px;"></div>
    
  </form>
  </div>
  <div class="sub-cont">
    <div class="img" style="background-image: url('<?=base_url();?>plantilla/login-user/img/images.jpg');">
      <div class="img__text m--up">
        <h2>¿Eres un nuevo miembro?</h2>
        <p>Registrate y ve todo el increible contenido que tenemos </p>
      </div>
      <div class="img__text m--in">
        <h2>¿Eres uno de nosotros?</h2>
        <p>Si ya tienes una cuenta incia sesión. Te extrañamos!</p>
      </div>
      <div class="img__btn">
        <span class="m--up">Comenzar</span>
        <span class="m--in">Iniciar Sesión</span>
      </div>
    </div>
    <div class="form sign-up">
      <h2>Es tiempo de sentirte como en casa</h2>
      <form id="formr">
      <label>
        <span>Nombre</span>
        <input type="text" id="nombre" name="nombre" />
      </label>
      <label>
        <span>Apellido</span>
        <input type="text" id="apellido" name="apellido" />
      </label>
     
     
      <label>
        <span>Email</span>
        <input type="email" id="mail" name="mail" />
      </label>
      <label>
        <span>Contraseña</span>
        <input type="password" id="contrasena" name="contrasena" />
      </label>
      <label class="lp"style="width:90%;">
        <span>Fecha de nacimiento</span>
        <input type="date" id="fecha_n" name="fecha_n" />
      </label>
      <div class="container">
      <div class="form-check-inline">
        <label class="form-check-label" style="width:100%;">
          <input type="radio" class="form-check-input" name="sexo" id="sexo" value="F">Femenino
        </label>
      </div>
      <div class="form-check-inline">
        <label class="form-check-label" style="width:100%;">
          <input type="radio" class="form-check-input" name="sexo" id="sexo" value="M">Masculino
        </label>
      </div>
</div>
<div class="centrar-b"><button type="submit" class="submit">Registrarte</button></div>
      <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
      </form>
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
             $("#resultado").html('<div class="alert alert-success">Procesando...!</div>');
           }
         })
         .done(function(data, textStatus, jqXHR) {
           var getData = jqXHR.responseJSON; // guarda los errores si los hay en la ejecucion del js
         
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

    <script  src="<?=base_url();?>plantilla/login-user/js/index.js"></script>




</body>

</html>
