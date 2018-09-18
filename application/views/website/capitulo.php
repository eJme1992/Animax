

<section id="capitulo-detalle">
   <div class="container capitulo">
      <div class="row">
         <div class="col-md-8 no-padding">
            <div class="tab-content">
          <?php $i=0; foreach ($video as $key) { ?>
           
          
  				<div class="tab-pane container <?php if($i==0) {echo "active";}else{echo 'fade';}?> no-padding" id="server<?=$i;?>">
  					<div class="f-video">
  			<?=$key->url_video;?>
            </div>
  				</div>
  			  <?php  $i=$i+1;  }  ?>
  			
         </div>
     </div>
         <div class="col-md-4 no-padding ">
            <div class="cabecera-cap col-12">
               <div class="text-center">
                <h3 class="nom-cap"><?=$capitulo->nombre;?></h3>
              </div>
               <p class="capi-dur"> <p class="red-titles">Duracion del capitulo:<br>
               <span class="white-text"><?=$capitulo->duracion;?></span></p>
               <p class="red-titles">Fecha de Estreno del capitulo:<br>
                <span class="white-text"><?=$capitulo->fecha_estreno;?></span></p>
            </div>
            <div class="scroll-bar  col-md-12" style="width:99.6%;">
                
                    
                     <div class="row text-center col-12" style="width:90%; color:#ff6414;margin-bottom:20px;">
                          
                               
                     </div>  
                  <div class="col-md-12 no-padding">  
                  <?php $cond=0; 
                  foreach ($capituloss as $key) {
                     if($cond!=$key->temporada){ $cond=$key->temporada; ?>
                     <ul class="list-videos" style="padding-left:0; ">
                     <li><p class="red-titles">Temporada numero: <span class="white-text"><?=$key->temporada;?></span></p> <?php } ?></li>
                     <li><a class="white-text" href="<?php echo base_url();?>home/capitulo/<?=$key->id?>"><?=$key->nombre;?>  <?php } ?><span class="white-text float-right"><?=$key->duracion;?></span></a> </li>
                  
 
                  </ul>
                     
                                               
                 
               </div>
                        
                     

               
            </div>
         </div>
         <div class="col-md-12">
            <div class="row">
               <div class="col-md-8 footer-fv no-padding server-ground">
                  <ul class="nav nav-tabs nav-capitulo" role="tablist">
                    <?php $i=0; foreach ($video as $key) { ?>
                     <li class="nav-item"><a href="#server<?=$i;?>"  data-toggle="pill"  class="nav-link"><i class="far fa-check-circle"></i> Servidor <?=$i+1;?></i></a></li>
                    <?php  $i=$i+1;  }  ?>
                     
                  </ul>
                  <!--Tabs Panel-->

               </div>
               <div class="col-md-4 footer-cap no-padding text-center">
                  <h3 class="nom-cap navbar-text" ><a href="#"><?=$capitulo->nombre_serie;?><i class="fas fa-angle-double-up" style="color:#fff;"></i></a></h3>
               </div>
            </div>
         </div>
         <div class="col-md-12">
         	<div class="reaccion">
                     <ul class="nav nav-bar fav">
                      <li  class="nav-item"><a class="nav-link" id="favorite" title="Favorito" data-toggle="tooltip" href="#"><i class="fas fa-heart" style="color:#FF0000;"></i></a></li>
                      <li  class="nav-item"><span class="navbar-text"><a href="#"  title="Calificacion" data-toggle="tooltip"><i class="fas fa-star" ></i></a></span>
                        <span class="navbar-text"><a href="#" title="Calificacion" data-toggle="tooltip"><i class="fas fa-star" id="star"></i></a></span>
                        <span class="navbar-text"><a href="#"title="Calificacion" data-toggle="tooltip"><i class="fas fa-star" ></i></a></span>
                        <span class="navbar-text"><a href="#" title="Calificacion" data-toggle="tooltip"><i class="fas fa-star"></i></a></span>
                        <span class="navbar-text"><a href="#" title="Calificacion" data-toggle="tooltip"><i class="fas fa-star" ></i></a></span> 
                     </li>
                      <li  class="nav-item"><a class="nav-link" href="#">Agregar a mi lista</a></li>    
                     </ul>
                   
                  </div>
         </div>
      </div>
   </div>
</section>
<section id="second-part-capi">
   <div class="container grey-capi">
            <div class="row">
         <div class="col-md-8">
            <h3 class="subt-capitulo" >Comentarios</h3>
            <!--<p class="capitulo-text">"La mayoría del anime" mejores programas de comentario literario, compartir historias del hombre detrás de cada ACG trabaja con usted para darle otra forma de decir que la animación! </p>-->
            <div class="comentarios">
               <?php foreach ($comentarios as $key) { ?>
                  
            <div class="row alert alert-warning" style="margin:10px;">
              <div class="col-2">
                  <?php if($key->foto==''){ ?>
                  <img src="<?=base_url()?>file/img/user/default.png" class="rounded-circle img-fluid"/>
                  <?php }else{ ?>
                  <img src="<?=base_url().$key->foto;?>" class="rounded-circle img-fluid"/>
                  <?php } ?>
               </div>
               <div class="col-10">
                <h5><b><?=$key->nombre;?></b></h5> <p><?=$key->comentario;?></p> 
               </div>
            </div>
             <?php } ?>


              
               <div class="row col-12">
               <div class="col-md-3" style="padding:20px;">
                  <?php if(isset($user->foto)){ ?>
                  <?php if($user->foto==''){ ?>
                  <img src="<?=base_url()?>file/img/user/default.png" class="rounded-circle img-fluid"/>
                  <?php }else{ ?>
                  <img src="<?=base_url().$user->foto;?>" class="rounded-circle img-fluid"/>
                  <?php } ?>
                  <?php }else{ ?>
                  <img src="<?=base_url();?>file/img/user/default.png" class="rounded-circle img-fluid"/>
                  <?php } ?>
               </div>
               
                   <?php if(isset($user->id)){ ?>  
               <div class="col-md-9 comment-box">
            
                  <form id="comments">
                     <div class="form-group">
                        <label for="comment">Comentar:</label>
                        <textarea class="form-control"  rows="5" name="comentario" id="comentario"></textarea>
                        <input type="hidden" name="id_capitulo" name="id_capitulo" value="<?=$capitulo->id?>">
                        <input type="hidden" name="id_user" id="id_user" value="<?=$user->id?>">
                        <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>">
                     </div>
                     <div class="col-md-12" id="resultado" style="margin-top:15px;"></div>
                     <button class="btn btn-comentar " type="submit">Comentar</button> 
                  </form>
               </div>
               <?php }else{ ?>
             <div class="col-md-9 comment-box">
                  <p>Debe iniciar sección para poder comentar </p>
               </div>
             <?php } ?>
            </div>
            </div>
            <!-- <div class="col-md-6">
                  <ul class="comen-regis">
                     <li><a href="#">Inciar sesion</a></li>
                     <li><a href="#">Registrarse</a></li>
                  </ul>
               </div>
               <div class="col-md-6">
                  <div class="contador"><span>0/300</span></div>
               </div>-->
         </div>
         <div class="col-md-4">
            <h4 class="subt-capitulo">Ultimos Capitulos</h4>
            <div class="row">
               
          <?php foreach ($capitulos as $key) { ?>
               
               <div class="col-md-6 img-text">
                 <a href="<?php echo base_url();?>home/capitulo/<?=$key->id?>" data-toggle="tooltip" title="<?=$key->name;?> <?=$key->temporada;?>-<?=$key->numero;?>"> <img src="<?=base_url().$key->imagen2;?>" class="img-fluid "/></a>
               </div>
               <div class="col-md-6 img-text">
                  <a href="<?php echo base_url();?>home/capitulo/<?=$key->id?>" data-toggle="tooltip" title="<?=$key->name;?> <?=$key->temporada;?>-<?=$key->numero;?>"><b><?=$key->name;?> </b>
                  <br><b>Temp:</b><?=$key->temporada;?>-<b>Cap:</b><?=$key->numero;?> <i class="far fa-clock"></i></a>
               </div>
            <?php } ?> 

            </div>
         </div>
      </div>
   </div>
</section>
      <script >
         jQuery(document).ready(function() {
               jQuery("#comments").submit(function(event) {
               event.preventDefault();
         
             var msj = '1';
         //validaciones con js
         
        if (msj === "1") {
         var formData = new FormData(jQuery('#comments') [0]);
         jQuery.ajax({
           url: '<?=base_url();?>Comentario_capitulo/crear_comentario',
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
             window.location.href ='<?=base_url();?>home/capitulo/<?=$capitulo->id;?>';
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

       
        var i = document.querySelector("iframe"); 
          i.setAttribute("class", "mx-auto d-block");

      </script>
