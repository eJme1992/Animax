<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
      <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR" rel="stylesheet"> 
      <link rel="stylesheet" type="text/css" href="<?=base_url();?>plantilla/perfil/assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="<?=base_url();?>plantilla/website/css/style.css?E">
      <link rel="stylesheet" type="text/css" href="<?=base_url();?>plantilla/website/css/home.css">
       <link rel="stylesheet" type="text/css" href="<?=base_url();?>plantilla/website/css/medios.css">
      <title>Animax</title>
   </head>
   <body>
      <header id="nav-principal">
         <nav class="navbar navbar-expand-sm fixed-top">
            <div class="container-fluid">
              <div class="row" id="row-header">
                <div class="col-3">
               <a href="#">
               <?php  

              if($datos->logo==''){ 
               $var = 'plantilla/website/img/logo.png';
               }
               else{ 
               $var = $datos->logo; 
               }
               ?>   
            
               <a class="nav-link" href="<?=base_url();?>"><img src="<?=base_url().$var;?>"></a>
               </a>
             </div>
             <div class="col-6">
                 <div id="buscar" class="ocultar">
                  <form class="form-inline" action="/action_page.php" id="buscar">
                     <div style="margin: auto;">
                     <input style="margin-right:-5px;" class="form-control input-buscar" type="text" >
                     <button class="btn btn-buscar" type="submit"><i class="fas fa-search"></i></button>
                   </div>
                  </form>
               </div>
               <button  id="boton-menu" class="btn" type="button" onclick="ocultar()"/>
               <i class="fas fa-bars" style="color:#000;"></i>
               </button>
             </div>
             <div class="col-3">
               <div  id="mi-menu" class="float-right">
                  <div class="registrar-div">
                    <?php if (isset($user->id)==false) { ?>                  
                    <a  href="<?=base_url();?>login" class="login-b navbar-text">LOGIN</a>
                    <a  href='<?=base_url();?>login/registrar' class="navbar-text registrarbtn"><b>REGISTRARSE</b></a> 
                     <?php  }else{ ?>
                    <a  href="<?=base_url();?>login" class="navbar-text registrarbtn"><?php echo $user->nombre." ".$user->apellido;?></a>
                     <?php   } ?> 
                  </div>
               </div>
             </div>
               <button onclick="oculta()" class="font-s btn"><i class="fas fa-search"></i></button>
               </div>         
            </div>
         </nav> 
      </header>
      <header id="responsivenav">
        <nav class="nav navbar fixed-top">
        <div class="container-fluid">
          <div class="row row-responsive">
              <div class="col-4">
              <button  class=" btn float-left"><i class="fas fa-search"></i></button>
              </div>
              <div class="col-4">
              <a href="<?=base_url();?>"><img src="<?=base_url().$var;?>" class="img-fluid mx-auto d-block navbar-text" /></a>
              </div>
              <div class="col-4">
                <a href="#" class="float-right navbar-text"><i class="fas fa-user fa-2x"></i></a>
              </div>
            </div>
          </div>
        </nav>
      </header>
      <section style="padding-top: 4em;">
      <script type="text/javascript">
         //Funcion para ocultar y mostrar el menu
         function ocultar(){
          var x = document.getElementById("mi-menu");
                     if (x.className.indexOf("mostrar") == -1) {
                         x.className += " mostrar";
                     } else { 
                         x.className = x.className.replace(" mostrar", "");
                        
                     }
         }
         //Funcion para ocultar y mostrar la barra de busqueda
          
            function oculta() {
          
                     var x = document.getElementById("buscar");
                     if (x.className.indexOf("mostrar") == -1) {
                         x.className += " mostrar";
                     } else { 
                         x.className = x.className.replace(" mostrar", "");
                        
                     }
                 }
         
         
      </script>
