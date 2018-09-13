<section id="capitulo-detalle">
   <div class="container capitulo">
      <div class="row">
         <div class="col-md-8 no-padding">
            <div class="f-video">
            </div>
         </div>
         <div class="col-md-4 no-padding">
            <div class="cabecera-cap">
               <h3><?=$capitulo->nombre;?></h3>
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
               <div class="col-md-8 footer-fv no-padding">
                  <ul class="nav nav-bar nav-capitulo">
                     <li class="nav-item"><a href="#" class="nav-link"><i class="fas fa-arrow-circle-right">Servidor I</i></a></li>
                     <li class="nav-item"><a href="#" class="nav-link"><i class="fas fa-arrow-circle-right">Servidor II</i></a></li>
                     <li class="nav-item"><a href="#" class="nav-link"><i class="fas fa-arrow-circle-right">Servidor III</i></a></li>
                     <li class="nav-item"><a href="#" class="nav-link"><i class="fas fa-arrow-circle-right">Servidor IV</i></a></li>
                     <li class="nav-item"><a href="#" class="nav-link"><i class="fas fa-arrow-circle-right">Servidor V</i></a></li>
                  </ul>
               </div>
               <div class="col-md-4 footer-cap no-padding">
                  <h3 class="nom-cap" ><?=$capitulo->nombre_serie;?><i class="fas fa-angle-double-up" style="color:#fff;"></i></h3>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section id="second-part-capi">
   <div class="container grey-capi">
      <div class="row">
         <div class="col-md-8">
            <h3 class="subt-capitulo" >Breve introduccion</h3>
            <p class="capitulo-text">"La mayoría del anime" mejores programas de comentario literario, compartir historias del hombre detrás de cada ACG trabaja con usted para darle otra forma de decir que la animación! </p>
            <div class="comentarios">
               <div class="col-md-6">
                  <ul class="comen-regis">
                     <li><a href="#">Inciar sesion</a></li>
                     <li><a href="#">Registrarse</a></li>
                  </ul>
               </div>
               <div class="col-md-6">
                  <div class="contador"><span>0/300</span></div>
               </div>
               <div class="col-md-12 comment-box">
                  <form id="comments">
                     <div class="form-group">
                        <label for="comment">Comment:</label>
                        <textarea class="form-control" rows="5" id="comment"></textarea>
                     </div>
                     <button class="btn btn-comentar " type="submit">Comentar</button> 
                  </form>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <h4 class="subt-capitulo">Destacados de hoy</h4>
            <div class="row">
               <div class="col-md-6 img-text">
                  <img src="<?=base_url();?>file/img/img2018_09_10_21.jpg" class="img-fluid "/>
               </div>
               <div class="col-md-6 img-text">
                  <p>Descripcion del texto destacados de hoy</p>
               </div>
                 <div class="col-md-6 img-text">
                  <img src="<?=base_url();?>file/img/img2018_09_10_21.jpg" class="img-fluid "/>
               </div>
               <div class="col-md-6 img-text">
                  <p>Descripcion del texto destacados de hoy</p>
               </div>
                 <div class="col-md-6 img-text">
                  <img src="<?=base_url();?>file/img/img2018_09_10_21.jpg" class="img-fluid "/>
               </div>
               <div class="col-md-6 img-text">
                  <p>Descripcion del texto destacados de hoy</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
