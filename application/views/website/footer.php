</section>
<footer>
    <section id="tope">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3 class="titulo-fo">Acerca de nosotros</h3>
                    <p class="sub-fo"><?=$datos->descripcion;?></p>
                </div>
                <div class="col-md-4">
                     <h3 class="titulo-fo">Contactanos</h3>
                     <ul class="contact">
                         <li><a href="#"><i class="fas fa-phone"></i> 
                            <?=$datos->telefono;?></a></li>
                         <li><a href="#"><i class="fas fa-envelope"></i> 
                            <?=$datos->correo;?>
                         </a></li>
                         
                     </ul>
                </div>
                <div class="col-md-4">
                     <h3 class="titulo-fo">Links</h3>
                        <ul class="contact">
                         <li><a href="<?=base_url();?>series"><i class="fas fa-chevron-circle-right"></i>Home </a></li>
                         <li><a href="<?=base_url();?>login/index"><i class="fas fa-chevron-circle-right"></i>Iniciar sesion</a></li>
                         <li><a href="#"><i class="fas fa-chevron-circle-right"></i>Audio Frecuencia</a></li>
                         <li><a href="#"><i class="fas fa-chevron-circle-right"></i>Game center</a></li>
                         
                     </ul>
                </div>
                <div class="col-md-12 "><hr style="border-color:#868588;"></div>
                       <div class="col-md-6">
                <p> Ningun video se encuentra alojado en nuestros servidores </p>
            </div>
            <div class="col-md-6" id="redes-sociales-f">
                
                    <ul>
                        <li ><a  href="#"><i class="fab fa-google-plus-g fa-lg"></i></a></li>
                        <li ><a  href="#"><i class="fab fa-facebook-f fa-lg"></i></a></li>
                        <li ><a  href="#"><i class="fab fa-twitter fa-lg"></i></a></li>
                        <li ><a href="#"><i class="fab fa-youtube fa-lg"  style="color: #868588 !important;"></i></a></li>
                        <li ><a  href="#"><i class="fab fa-tumblr fa-lg"></i></a></li>
                        <li ><a  href="#"><i class="fab fa-flickr fa-lg"></i></a></li>
                    </ul>
               
            </div>
            </div>
            </div>         
        </section>
    </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>