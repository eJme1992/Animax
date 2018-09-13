<section id="capitulo-detalle">
   <div class="container capitulo">
      <div class="row">
         <div class="col-md-8 no-padding">
            <div class="tab-content">
          <div class="tab-pane container active no-padding" id="server">
            <div class="f-video">
              <img src="<?=base_url()?>file/img/img2018_09_10_42.jpg" class="img-fluid img-server"/>
                </div>
          </div>
        <div class="tab-pane container fade no-padding" id="server1">
          <div class="f-video">
          <img src="<?=base_url()?>file/img/img2018_09_10_42.jpg"  class="img-fluid img-server"/>
          </div>
        </div>
        <div class="tab-pane container fade no-padding" id="server2">
          <div class="f-video">
          <img src="<?=base_url()?>file/img/img2018_09_10_42.jpg" class="img-fluid img-server"/>
          </div>
        </div>
        <div class="tab-pane container fade no-padding" id="server3">
          <div class="f-video">
          <img src="<?=base_url()?>file/img/img2018_09_10_21.jpg" class="img-fluid img-server"/>
          </div>
        </div>
        <div class="tab-pane container fade no-padding" id="server4">
          <div class="f-video">
          <img src="<?=base_url()?>file/img/img2018_09_10_42.jpg" class="img-fluid img-server"/>
          </div>
        </div>
         </div>
     </div>
         <div class="col-md-4 no-padding">
            <div class="cabecera-cap">
               <h3><?=$capitulo->nombre;?></h3>
               <p class="capi-dur"> Duracion del capitulo: <?=$capitulo->duracion;?></p>
               <p>Fecha de Estreno del capitulo: <?=$capitulo->fecha_estreno;?></p>
            </div>
            <div class="scroll-bar">
               <ul class="list-videos">
                  <li><a href="#">Video</a></li>
                  <li><a href="#">Video</a></li>
                  <li><a href="#">Video</a></li>
                  <li><a href="#">Video</a></li>
                  <li><a href="#">Video</a></li>
                  <li><a href="#">Video</a></li>
                  <li><a href="#">Video</a></li>
                  <li><a href="#">Video</a></li>
                  <li><a href="#">Video</a></li>
                  <li><a href="#">Video</a></li>
                  <li><a href="#">Video</a></li>
                  <li><a href="#">Video</a></li>
                  <li><a href="#">Video</a></li>
                  <li><a href="#">Video</a></li>
                  <li><a href="#">Video</a></li>
                  <li><a href="#">Video</a></li>
                  <li><a href="#">Video</a></li>
               </ul>
            </div>
         </div>
         <div class="col-md-12">
            <div class="row">
               <div class="col-md-8 footer-fv no-padding server-ground">
                  <ul class="nav nav-tabs nav-capitulo" role="tablist">
                     <li class="nav-item"><a href="#server"  data-toggle="pill"  class="nav-link"><i class="fas fa-arrow-circle-right">Servidor I</i></a></li>

                     <li class="nav-item"><a href="#server1" class="nav-link" data-toggle="pill"><i class="fas fa-arrow-circle-right">Servidor II</i></a></li>
                     <li class="nav-item"><a href="#server2" class="nav-link" data-toggle="pill"><i class="fas fa-arrow-circle-right">Servidor III</i></a></li>
                     <li class="nav-item"><a href="#server3" class="nav-link" data-toggle="pill"><i class="fas fa-arrow-circle-right">Servidor IV</i></a></li>
                     <li class="nav-item"><a href="#server4" class="nav-link" data-toggle="pill"><i class="fas fa-arrow-circle-right">Servidor V</i></a></li>
                  </ul>
                  <!--Tabs Panel-->

               </div>
               <div class="col-md-4 footer-cap no-padding">
                  <h3 class="nom-cap" ><?=$capitulo->nombre_capitulo;?><i class="fas fa-angle-double-up" style="color:#fff;"></i></h3>
               </div>
            </div>
         </div>
         <div class="col-md-12">
          <div class="reaccion">
                     <ul class="nav nav-bar fav">
                      <li  class="nav-item"><a class="nav-link" id="favorite" title="Favorito" data-toggle="tooltip" href="#"><i class="fas fa-heart" style="color:#FF0000;"></i></a></li>
                      <li  class="nav-item"><span class="navbar-text"><a href="#"  title="Calificacion" data-toggle="tooltip"><i class="fas fa-star" ></i></a></span>
                        <span class="navbar-text"><a href="#" title="Calificacion" data-toggle="tooltip"  onclick="cambio()"><i class="fas fa-star" id="star"></i></a></span>
                        <span class="navbar-text"><a href="#"title="Calificacion" data-toggle="tooltip"><i class="fas fa-star" ></i></a></span>
                        <span class="navbar-text"><a href="#" title="Calificacion" data-toggle="tooltip"><i class="fas fa-star"></i></a></span>
                        <span class="navbar-text"><a href="#" title="Calificacion" data-toggle="tooltip"><i class="fas fa-star" ></i></a></span> 
                     </li>
                      <li  class="nav-item"><a class="nav-link" href="#">Agregar a mi lista</a></li>    
                     </ul>
                     <script>
                        
                        function cambio(){
                           document.getElementById("star").style.color="#FFFF00";
                        }
                     </script>

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
                  <?php if($user->foto==''){ ?>
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
                  <img src="<?=base_url().$user->foto;?>" class="rounded-circle img-fluid"/>
                  <?php } ?>
               </div>
                
               <div class="col-md-9 comment-box">
                  <form id="comments">
                     <div class="form-group">
                        <label for="comment">Comment:</label>
                        <textarea class="form-control"  rows="5" name="comentario" id="comentario"></textarea>
                        <input type="hidden" name="id_capitulo" name="id_capitulo" value="<?=$capitulo->id?>">
                        <input type="hidden" name="id_user" id="id_user" value="<?=$user->id?>">
                        <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>">
                     </div>
                     <div class="col-md-12" id="resultado" style="margin-top:15px;"></div>
                     <button class="btn btn-comentar " type="submit">Comentar</button> 
                  </form>
               </div>
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
