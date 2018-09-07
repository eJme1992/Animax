<header id="portada">
   <a class="#"><img style="width:100%;" class="portada-principal" src="<?=base_url();?>plantilla/website/img/1534667129353.jpg"></a>
</header>
<nav id="barra-secundaria">
   <div class="text-center">
      <a href="#SERIES_DESTACAS"><i class="fas fa-star"></i></i> Series destacadas</a>
      <a href="#TEMPORADAS_RECIENTES"><i class="fab fa-cloudscale"></i> Temporadas </a>
      <a href=""><i class="fas fa-video"></i> Películas recientes</a>
      <a href=""><i class="fas fa-video"></i> Noticias</a>
   </div>
</nav>
<section id="home">
   <div class="container">
      <div class="row mg">
         <div class="col-md-5">
            <!--Slider-->
            <div id="demo" class="carousel slide" data-ride="carousel">
               <!-- Indicators -->
               <ul class="carousel-indicators">
                  <li data-target="#demo" data-slide-to="0" class="active"></li>
                  <li data-target="#demo" data-slide-to="1"></li>
                  <li data-target="#demo" data-slide-to="2"></li>
               </ul>
               <!-- The slideshow -->
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <a href="#">
                     <img src="<?=base_url();?>plantilla/website/img/1696.jpg" alt="Los Angeles">
                     </a>  
                  </div>
                  <div class="carousel-item">
                     <a href="#"> <img src="<?=base_url();?>plantilla/website/img/1032.jpg" alt="Chicago">
                     </a>
                  </div>
                  <div class="carousel-item">
                     <a href="#"> <img src="<?=base_url();?>plantilla/website/img/1503.jpg" alt="New York">
                     </a>
                  </div>
               </div>
               <!-- Left and right controls -->
               <a class="carousel-control-prev" href="#demo" data-slide="prev">
               <span class="carousel-control-prev-icon"></span>
               </a>
               <a class="carousel-control-next" href="#demo" data-slide="next">
               <span class="carousel-control-next-icon"></span>
               </a>
            </div>
         </div>
         <div class="col-md-7">
            <div class="row">
               <?php foreach ($capitulo as $key){?> 
               <div class="col-md-4" id="cap">
                  <div class="card">
                     <a href="#" data-toggle="tooltip" title="<?=$key->name;?> <?=$key->temporada;?>-<?=$key->numero;?>"> <img src="<?=base_url().$key->imagen2;?>" class="img-fluid cap-es"></a>
                     <span class="span Capi">
                     <b>Temp:</b><?=$key->temporada;?>-<b>Cap:</b><?=$key->numero;?> <i class="far fa-clock"></i>
                     </span>
                     <span class="Title">
                     <?=$key->name;?> 
                     </span>
                  </div>
               </div>
               <?php } ?>             
            </div>
         </div>
         <!--Diva para la barra lateral 3-->
         <div class="col-md-9 row">
            <div class="col-md-12 bordert" id="SERIES_DESTACAS">
               <h2><i class="fas fa-star"></i></i> Series destacadas</h2>
            </div>
            <?php foreach ($series as $key){?> 
            <div class="col-sm-4" id='destacadas'>
               <div class="card">
                  <a href="#" data-toggle="tooltip" title="<?=$key->nombre;?>"> <img src="<?=base_url().$key->imagen;?>" class="img-fluid tem-es"></a>
                  <span class="span Capi">
                  DESTACA <i class="fas fa-star"></i></i>
                  </span>
                  <span class="Title">
                  <?=$key->nombre;?> 
                  </span>
               </div>
            </div>
            <?php } ?> 
            <div class="text-right col-md-12">
            <button class="btn mas" style="color:#fff;background-color:#1B9936;text-align:right;border-radius:100%;height:40px;width:40px;"><b><i class="fas fa-plus"></i></b></button>  
            </div>         
            <div class="col-md-12 bordert" id="TEMPORADAS_RECIENTES">
               <h2><i class="fab fa-cloudscale"></i> Temporadas Recientes</h2>
            </div>
            <?php foreach ($Temporadar as $key){?> 
            <div class="col-md-3" id='temp_re'>
               <div class="card">
                  <a href="#" data-toggle="tooltip" title="<?=$key->nombre;?>"> <img src="<?=base_url().$key->imagen;?>" class="img-fluid"></a>
                  <span class="span Capi">
                  ESTRENO <i class="far fa-clock"></i></i>
                  </span>
                  <span class="Title">
                  <?=$key->nombre;?> 
                  </span>
               </div>
            </div>
            <?php } ?>
             <div class="text-right col-md-12">
            <button class="btn mas" style="color:#fff;background-color:#1B9936;text-align:right;border-radius:100%;height:40px;width:40px;"><b><i class="fas fa-plus"></i></b></button>  
            </div>
                <div class="col-md-12 bordert" id="PELICULAS_RECIENTES">
               <h2><i class="fas fa-video"></i> Películas Recientes</h2>
            </div>
            <?php foreach ($Temporadar as $key){?> 
            <div class="col-md-3" id='temp_re'>
               <div class="card">
                  <a href="#" data-toggle="tooltip" title="<?=$key->nombre;?>"> <img src="<?=base_url().$key->imagen;?>" class="img-fluid"></a>
                  <span class="span Capi">
                  ESTRENO <i class="far fa-clock"></i></i>
                  </span>
                  <span class="Title">
                  <?=$key->nombre;?> 
                  </span>
               </div>
            </div>
            <?php } ?>
             <div class="text-right col-md-12">
            <button class="btn mas" style="color:#fff;background-color:#1B9936;text-align:right;border-radius:100%;height:40px;width:40px;"><b><i class="fas fa-plus"></i></b></button>  
            </div>
         </div>
         <div class="col-md-3">
            <div class="col-md-12">
               <h2 class="sub-t" style='text-align:center;'>NOTICIAS</h2>
            </div>
            <a href="#"> <img src="<?=base_url();?>plantilla/website/img/jp.jpg" class="img-fluid"></a>
         </div>
      </div>
   </div>
</section>
<script>
   $(document).ready(function(){
       $('[data-toggle="tooltip"]').tooltip();   
   });
</script>