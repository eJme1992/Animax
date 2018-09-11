<header id="portada">
   <a class="#"><img style="width:100%;" class="portada-principal" src="<?=base_url();?>plantilla/website/img/1534667129353.jpg"></a>
</header>
<nav id="barra-secundaria">
   <div class="text-center">
      <a href="#SERIES_DESTACAS"><i class="fas fa-star"></i></i> Series destacadas</a>
      <a href="#TEMPORADAS_RECIENTES"><i class="fab fa-cloudscale"></i> Temporadas </a>
      <a href="#PELICULAS_RECIENTES"><i class="fas fa-video"></i> Películas recientes</a>
      <a href="#NOTICIAS"><i class="fas fa-newspaper"></i> Noticias</a>
   </div>
</nav>
<section id="home">
   <div class="container">
      <div class="row mg">
         <div class="col-md-3">
            <div class="col-md-12 bordert" id="SERIES_DESTACAS">
               <h2 style='padding-bottom: 4.8px;'><i class="fas fa-filter"></i>Filtros</h2>
            </div>
            <style>
               label { margin-top: 10px; }
            </style>
            <form method="GET" id="filtro">
            <div class="row col-12" style="padding-top:2em;">
               <label><b>Tipo de búsqueda</b></label>
               <select class="form-control" id="tipo" name="tipo">
                  <option value="1">Series</option>
                  <option value="2">Temporadas</option>
                  <option value="3">Capítulos</option>
                  <option value="4">Películas</option>
                  <option value="5">Series Destacadas</option>
               </select>
               <label><b>Categoría</b></label>
               <select class="form-control" id="categoria" name="categoria">
                  <option>Todas</option>
               </select>
               <label><b>Genero</b></label>
               <select class="form-control" id="genero" name="genero">
                  <option>Todas</option>
               </select>
               <label><b>Estreno</b></label>
               <div class="row">
                  <span class="col-6">Desde</span> <span class="col-6">Hasta</span>  
                  <input class="form-control col-6" style="display:inline-block;" type="number" name="desde" id="desde" required="" placeholder="Desde">
                  <input class="form-control col-6" style="display:inline-block;" type="number" name="hasta" id="hasta" required="" placeholder="Hasta ">
               </div>
               <button type="submit" class="btn btn-warning" style="margin-top:15px;width:50%"><i class="fas fa-filter"></i>Filtrar</button>
               <button class="btn btn-info" style="margin-top:15px;width:50%"><i class="fas fa-retweet"></i>Reiniciar</button>
            </div>
         </form>
         </div>
         <!--Diva para la barra lateral 3-->
         <div class="col-md-9 row">
            <div class="col-md-12 bordert" id="SERIES_DESTACAS">
               <h2><i class="fas fa-star"></i> Series destacadas</h2>
            </div>
            <?php foreach ($data as $key){?> 
            <div class="col-md-4" id='destacadas'>
               <div class="card">
                  <a href="<?php echo base_url();?>home/detalle_series/<?=$key->id?>" data-toggle="tooltip" title="<?=$key->nombre;?>"> <img src="<?=base_url().$key->imagen;?>" class="img-fluid imglg"></a>
                  <span class="span Capi">
                  DESTACA <i class="fas fa-star"></i></i>
                  </span>
                  <span class="Title">
                  <?=$key->nombre;?> 
                  </span>
               </div>
            </div>
            <?php } ?> 
            <div class="center-block text-center">
               <ul class="pagination pagination-lg justify-content-center">
                  <?php
                     if ($total_paginas > 1) {
                             if ($pagina != 1)
                                 echo '<li class="page-item"><a class="page-link" href="' . $url . '?pagina=' . (($total_paginas - $total_paginas) + 1) . '"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i></a></li>';
                         
                             for ($i = $pagina - 1; $i <= $pagina + 5; $i++) {
                                 if ($pagina == $i) {
                         //si muestro el índice de la página actual, no coloco enlace
                                     ?>
                  <li class="active disabled page-item"><a class="page-link"  href="#"> <?php echo $pagina; ?> </a></li>
                  <?php
                     } else
                     //si el índice no corresponde con la página mostrada actualmente,
                     //coloco el enlace para ir a esa página
                     if (($i <= $total_paginas) and ( $i != 0)) {
                         echo ' <li class="page-item"> <a class="page-link" href="' . $url . '/' . $i . '">' . $i . '</a> </li>';
                     }
                     }
                     if ($pagina != $total_paginas)
                     echo '<li class="page-item"><a class="page-link" href="' . $url . '/' . ($total_paginas) . '"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a></li>';
                     }
                     ?>
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>
<script>
   $(document).ready(function(){
       $('[data-toggle="tooltip"]').tooltip();   
   });
</script>
