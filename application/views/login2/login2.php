<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
  <link rel="stylesheet" href="<?=base_url();?>plantilla/login-user/css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Amaranth" rel="stylesheet"> 
  

  
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
    <button type="button" class="fb-btn">Conectarse con <span>facebook</span></button>
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
        <span>Name</span>
        <input type="text" id="nombre" name="nombre" />
      </label>
      <label>
        <span>Email</span>
        <input type="email" id="mail" name="mail" />
      </label>
      <label>
        <span>Password</span>
        <input type="password" id="contrasena" name="contrasena" />
      </label>
      <button type="button" class="submit">Registrarte</button>
      <button type="button" class="fb-btn">Unirte usando <span>facebook</span></button>
      </form>
    </div>
  </div>
</div>

  
  <script >
         $('.js-tilt').tilt({
         	scale: 1.1
         })
      </script>
      <script >
         jQuery(document).ready(function() {
               jQuery("#formu").submit(function(event) {
               event.preventDefault();
         
             var msj = '1';
         //validaciones con js
         
        if (msj === "1") {
         var formData = new FormData(jQuery('#formu') [0]);
         jQuery.ajax({
           url: '<?=base_url();?>login2/ingreso',
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

    <script  src="<?=base_url();?>plantilla/login-user/js/index.js"></script>




</body>

</html>
