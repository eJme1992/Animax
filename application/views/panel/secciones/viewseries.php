<!-- Content Header (Page header) -->
<section class="content-header panel-body">
   <script>
      $.noConflict();
      jQuery( document ).ready(function( $ ) {
          $('#cap').DataTable();
      });
      // Code that uses other library's $ can follow here.
   </script>
   <!-- Content Header (Page header) -->
   <section class="content-header panel-body">
      <ol class="breadcrumb">
         <li><a href="<?=base_url();?>plantilla/panel/#"><i class="fa fa-dashboard"></i>Series</a></li>
         <li class="active">Nueva serie</li>
      </ol>
   </section>
   <ul class="nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#home">Ficha</a></li>
      <li><a data-toggle="tab" href="#menu1">Lista de capítulos</a></li>
      <li><a data-toggle="tab" href="#menu2">Editar datos</a></li>
   </ul>
   <!-- Main content -->
   <div class="tab-content">
      <div id="menu2" class="content container-fluid tab-pane fade">
         <form id="nuevaser">
            <div class="form-group col-md-12">
               <label>Nombre:</label>
               <input type="text" class="form-control" id="nombre" name="nombre" required="" placeholder="Nombre" value="<?=$serie->nombre;?>">
            </div>
            <div class="form-group col-md-4">
               <label>Estado:</label>
               <select  class="form-control" id="estado" name="estado" required="" >
                  <option value="Por estrenar" <?php if($serie->estado=='Por estrenar') echo 'selected';?>>Por estrenar</option>
                  <option value="En emisión" <?php if($serie->estado=='En emisión') echo 'selected';?>>En emisión</option>
                  <option value="Finalizada" <?php if($serie->estado=='Finalizada') echo 'selected';?>>Finalizada</option>
               </select>
            </div>
            <div class="form-group col-md-4">
               <label>Categoría:</label>
               <select  class="form-control" id="categoria" name="categoria" required="">
                  <?php foreach ($categorias as $key) { ?>
                  <option value="<?=$key->nombre;?>" <?php if($serie->estado==$key->nombre) echo 'selected';?>><?=$key->nombre;?></option>
                  <?php }  ?>   
               </select>
            </div>
            <div class="form-group col-md-4">
               <label>Días de estreno:</label>
               <select  class="form-control" id="dias" name="dias" required="">
                  <option <?php if($serie->dias=='Sin precisar') echo 'selected';?>>Sin precisar</option>
                  <option <?php if($serie->dias=='Lunes') echo 'selected';?>>Lunes</option>
                  <option <?php if($serie->dias=='Martes') echo 'selected';?>>Martes</option>
                  <option <?php if($serie->dias=='Miércoles') echo 'selected';?>>Miércoles</option>
                  <option <?php if($serie->dias=='Jueves') echo 'selected';?>>Jueves</option>
                  <option <?php if($serie->dias=='Viernes') echo 'selected';?>>Viernes</option>
                  <option <?php if($serie->dias=='Sábado') echo 'selected';?>>Sábado</option>
                  <option <?php if($serie->dias=='Domingo') echo 'selected';?>>Domingo</option>
               </select>
            </div>
            <div class="form-group col-md-6">
               <label>Duración:</label>
               <input type="text" class="form-control" id="duracion" name="duracion" required="" placeholder="De 20 a 40min" value="<?=$serie->duracion;?>">
            </div>
            <div class="form-group col-md-6">
               <label>Fecha de estreno:</label>
               <input type="date" class="form-control" id="fecha" name="fecha" required="" value="<?=$serie->estreno;?>">
            </div>
            <div class="form-group col-md-12">
               <label>Sinopsis:</label>
               <textarea name="content" id="sinopsis" name="sinopsis" required="" value="<?=$serie->descripcion;?>">
        
    </textarea>
               <script>
                  ClassicEditor
                      .create( document.querySelector( '#sinopsis' ) )
                      .catch( error => {
                          console.error( error );
                      } );
               </script>
            </div>
            <div class="col-md-12">
               <label>Generos</label>
               <?php foreach ($generos as $key) { ?>
               <div class="form-check-inline">
                  <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" id='genero[]' name="genero[]" value="<?=$key->id;?>" <?php if($serie->estado==$key->nombre) echo 'checked';?>> <?=$key->nombre;?>
                  </label>
               </div>
               <?php }  ?>  
            </div>
            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
            <div class="col-md-12" id="resultado" style="margin-top:15px;"></div>
            <div class="form-group col-md-12">
               <hr>
               <button type="submit" class="btn btn-default btn-lg">Enviar</button>
            </div>
         </form>
      </div>
      <div id="home" class="content container-fluid tab-pane fade row in active">
         <div class="col-md-4">
            <img src="<?=base_url().$serie->imagen;?>" class="img-responsive">
            <form id="seriesimagen" onsubmit="realizaProceso2();return false; ">
               <input type="file" name="imagen" id="imagen" class="form-control" required="">
               <input type="hidden" name="id" id="id" value="<?=$serie->id;?>" />
               <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
               <div class="col-md-12" id="resultado2"></div>
               <button type="submit" name="enviar" class="form-control">Editar</button>
            </form>
         </div>
         <div class="col-md-6">
            <span style="font-size:1.9em;"><?=$serie->nombre;?></span> <span>(<?=$serie->estreno;?>)</span>
            <br>
            <i class="fa fa-heart" aria-hidden="true"></i> <span>2944</span> Favoritos &nbsp;
            <i class="fa fa-star" aria-hidden="true"></i> <span>2944</span> Calificaciones &nbsp;
            <i class="fa fa-check" aria-hidden="true"></i> <span>2944</span> Suscritos &nbsp;
            <hr>
            <h3>Sinopsis</h3>
            <p><?=$serie->descripcion;?></p>
         </div>
         <div class="col-md-2">
         </div>
         <div class="col-md-8">
            <div class="btn-group">
               <h3>Temporadas <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ntm">Nueva Temporada <i class="fa fa-plus-circle"></i></button><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nuevocap">Nueva capitulo <i class="fa fa-plus-circle"></i></button></h3>
            </div>
            <div style="max-height:500px; overflow:scroll">
               <table class="table" >
                  <thead>
                     <tr>
                        <th>Numero</th>
                        <th>Estreno</th>
                        <th>Ultimo cambio</th>
                        <th>#</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php foreach ($temporada as $key) { ?>
                     <tr>
                        <td><?=$key->numero;?></td>
                        <td><?=$key->fecha_estreno;?></td>
                        <td><?=$key->fecha_m;?></td>
                        <td>
                           <button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit1<?=$key->id;?>" ><span class="glyphicon glyphicon-pencil"></span></button>
                           <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete<?=$key->id;?>" ><span class="glyphicon glyphicon-trash"></span></button>
                        </td>
                        <!-- Modal Editar-->
                        <div id="edit1<?=$key->id;?>" class="modal fade " role="dialog">
                           <div class="modal-dialog" style="margin-top:10vw;">
                              <!-- Modal content-->
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Editar temporada</h4>
                                 </div>
                                 <div class="modal-body">
                                    <form id="editart<?=$key->id;?>" onsubmit="realizaProcesot(
                                       $('#id<?=$key->id;?>').val() 
                                       );return false; ">
                                       <div class="row">
                                          <div class="col-sm-12">
                                             <label>Numero</label>
                                             <input type="text" name="numero" id="numero" required="" class="form-control" placeholder="Ej: Anime" value="<?=$key->numero;?>">
                                             <label>Fecha de estreno</label>
                                             <input type="date" name="fecha" id="fecha" required="" class="form-control" placeholder="Ej: Anime" value="<?=$key->fecha_estreno;?>">
                                          </div>
                                          <input type="hidden" name="id" id="id" value="<?=$key->id;?>">
                                          <input type="hidden" name="id<?=$key->id;?>" id="id<?=$key->id;?>" value="<?=$key->id;?>">
                                          <input type="hidden" name="id_serie" id="id_serie" value="<?=$serie->id;?>" />
                                          <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                                          <div class="col-md-12" id="resultado2<?=$key->id;?>" style="margin-top:15px;"></div>
                                          <div class="col-sm-12" style="margin-top:20px;">
                                             <button class="btn btn-lg btn-block btn-primary" type="submit">
                                             Editar
                                             </button>
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                                 <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- /.content -->
                        <!-- Modal ELIMINAR -->
                        <div id="delete<?=$key->id;?>" class="modal fade " role="dialog">
                           <div class="modal-dialog" style="margin-top:10vw;">
                              <!-- Modal content-->
                              <div class="modal-content">
                                 <div class="modal-body text-center">
                                    <h3> ¿Esta Seguro que desea eliminar la temporada numero: <b><?=$key->numero;?></b>? También se eliminara la lista de capítulos asociados a esta temporada</h3>
                                 </div>
                                 <div class="modal-footer">
                                    <a href="<?=base_url();?>temporada/eliminar_temporada/<?=$key->id;?>/<?=$serie->id;?>"><button type="button" class="btn btn-danger">Si</button></a>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">no</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- /.content -->
                     </tr>
                     <?php }  ?>  
                  </tbody>
               </table>
            </div>
         </div>
      </div>
      <div id='menu1'  class="content container-fluid tab-pane fade row">
         <table class="table" id="cap">
            <thead>
               <tr>
                  <th>Temporada</th>
                  <th>Capitulo#</th>
                  <th>Nombre</th>
                  <th>Estreno</th>
                  <th>Ultimo cambio</th>
                  <th>#</th>
               </tr>
            </thead>
            <tbody>
               <?php foreach ($capitulo as $key) { ?>
               <tr>
                  <td><?=$key->temporada;?></td>
                  <td><?=$key->numero;?></td>
                  <td><?=$key->nombre;?></td>
                  <td><?=$key->fecha_estreno;?></td>
                  <td><?=$key->fecha_m;?></td>
                  <td>
                    
                     <button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit<?=$key->id;?>" ><span class="glyphicon glyphicon-pencil"></span></button>
                     <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete<?=$key->id;?>" ><span class="glyphicon glyphicon-trash"></span></button>
                  </td>
                  <!-- DF -->
                  <!-- Modal ELIMINAR -->
                  <div id="delete<?=$key->id;?>" class="modal fade " role="dialog">
                     <div class="modal-dialog" style="margin-top:10vw;">
                        <!-- Modal content-->
                        <div class="modal-content">
                           <div class="modal-body text-center">
                              <h3> ¿Esta Seguro que desea eliminar el capitulo numero: <b><?=$key->numero;?></b>?</h3>
                           </div>
                           <div class="modal-footer">
                              <a href="<?=base_url();?>capitulo/eliminar_capitulo/<?=$key->id;?>/<?=$serie->id;?>"><button type="button" class="btn btn-danger">Si</button></a>
                              <button type="button" class="btn btn-default" data-dismiss="modal">no</button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- /.content -->
                  <!-- Modal Editar-->
                  <div id="edit<?=$key->id;?>" class="modal fade " role="dialog">
                     <div class="modal-dialog" style="margin-top:10vw;">
                        <!-- Modal content-->
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Editar capitulo</h4>
                           </div>
                           <div class="modal-body">
                              <form id="editart<?=$key->id;?>" onsubmit="realizaProceso(
                                 $('#id<?=$key->id;?>').val() 
                                 );return false; ">
                                 <div class="row">
                                    <div class="col-sm-12">
                                       <label>Numero</label>
                                       <input type="number" name="numero" id="numero" required="" class="form-control" placeholder="Numero">
                                       <label>Nombre</label>
                                       <input type="text" name="nombre" id="nombre" required="" class="form-control" placeholder="Ej: Venganza">
                                       <label>Duración (En minutos)</label>
                                       <input type="number" name="duracion" id="duracion" required="" class="form-control" >
                                       <label>Fecha de estreno</label>
                                       <input type="date" name="fecha_estreno" id="fecha_estreno" required="" class="form-control" >
                                       <label>Temporada</label>
                                       <select id="temporada" name="temporada" class="form-control" required="">
                                          <?php foreach ($temporada as $key ) { ?>
                                          <option value="<?=$key->id;?>"><?=$key->numero; ?></option>
                                          <?php  } ?>
                                       </select>
                                    </div>
                                    <div class="col-md-12" id="resultado3<?=$key->id;?>" style="margin-top:15px;"></div>
                                    <div class="col-sm-12" style="margin-top:20px;">
                                       <button class="btn btn-lg btn-block btn-primary" type="submit">
                                       Editar
                                       </button>
                                    </div>
                                 </div>
                              </form>
                           </div>
                           <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
                           </div>
                        </div>
                     </div>
                  </div>
                  
               </tr>
               <?php }  ?>  
            </tbody>
         </table>
      </div>
   </div>
</section>
<!-- Modal -->
<div id="ntm" class="modal fade " role="dialog">
   <div class="modal-dialog" style="margin-top:10vw;">
      <!-- Modal content-->
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Nueva Temporada</h4>
         </div>
         <div class="modal-body">
            <form id="nt" onsubmit="realizaProceso();return false;">
               <div class="row">
                  <div class="col-sm-12">
                     <label>Numero</label>
                     <input type="text" name="numero" id="numero" required="" class="form-control" placeholder="Ej: Anime">
                     <label>Fecha de estreno</label>
                     <input type="date" name="fecha" id="fecha" required="" class="form-control" placeholder="Ej: Anime">
                  </div>
                  <div class="col-md-12" id="resultadont" style="margin-top:15px;"></div>
                  <input type="hidden" name="id_serie" id="id_serie" value="<?=$serie->id;?>" />
                  <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                  <div class="col-sm-12" style="margin-top:20px;">
                     <button class="btn btn-lg btn-block btn-primary">
                     Crear
                     </button>
                  </div>
               </div>
            </form>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
         </div>
      </div>
   </div>
</div>
<!-- Modal -->
<div id="nuevocap" class="modal fade " role="dialog">
   <div class="modal-dialog" style="margin-top:10vw;">
      <!-- Modal content-->
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Nueva Capitulo</h4>
         </div>
         <div class="modal-body">
            <form id="nc" onsubmit="realizaProceso1();return false;">
               <div class="row">
                  <div class="col-sm-12">
                     <label>Numero</label>
                     <input type="number" name="numero" id="numero" required="" class="form-control" placeholder="Numero">
                     <label>Nombre</label>
                     <input type="text" name="nombre" id="nombre" required="" class="form-control" placeholder="Ej: Venganza">
                     <label>Duración (En minutos)</label>
                     <input type="number" name="duracion" id="duracion" required="" class="form-control" >
                     <label>Fecha de estreno</label>
                     <input type="date" name="fecha_estreno" id="fecha_estreno" required="" class="form-control" >
                     <label>Temporada</label>
                     <select id="temporada" name="temporada" class="form-control" required="">
                        <?php foreach ($temporada as $key ) { ?>
                        <option value="<?=$key->id;?>"><?=$key->numero; ?></option>
                        <?php  } ?>
                     </select>
                  </div>
                  <div class="col-md-12" id="resultadonc" style="margin-top:15px;"></div>
                  <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                  <div class="col-sm-12" style="margin-top:20px;">
                     <button  type="submit" class="btn btn-lg btn-block btn-primary">
                     Crear
                     </button>
                  </div>
               </div>
            </form>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
         </div>
      </div>
   </div>
</div>
<!-- /.content -->
<script>  
   function realizaProceso() {
       var msj = '1';
      //validaciones con js
      
     if (msj === "1") {
      var formData = new FormData(jQuery('#nt') [0]);
      jQuery.ajax({
        url: '<?=base_url();?>temporada/crear_temporada',
        type: 'POST',
        contentType: false,
        processData: false,
        dataType: 'json',
        data: formData,
        beforeSend: function() {
          $("#resultadont").html('<div class="alert alert-success">Procesando...!</div>');
        }
      })
      .done(function(data, textStatus, jqXHR) {
         var getData = jqXHR.responseJSON; // dejar esta linea
        if(data.status=='ok'){
         $("#resultadont").html('<div class="alert alert-success">'+data.code+'</div>');
         window.location.href ='<?=base_url();?>panel/viewserie/<?=$serie->id;?>';
        }else{
        $("#resultadont").html('<div class="alert alert-danger"><strong>ERROR!</strong>'+data.error+'</div>');
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
       };
</script>
<script>  
   function realizaProceso1() {
       var msj = '1';
      //validaciones con js
      
     if (msj === "1") {
      var formData = new FormData(jQuery('#nc') [0]);
      jQuery.ajax({
        url: '<?=base_url();?>capitulo/crear_capitulo',
        type: 'POST',
        contentType: false,
        processData: false,
        dataType: 'json',
        data: formData,
        beforeSend: function() {
          $("#resultadonc").html('<div class="alert alert-success">Procesando...!</div>');
        }
      })
      .done(function(data, textStatus, jqXHR) {
         var getData = jqXHR.responseJSON; // dejar esta linea
        if(data.status=='ok'){
         $("#resultadonc").html('<div class="alert alert-success">'+data.code+'</div>');
          window.location.href ='<?=base_url();?>panel/viewserie/<?=$serie->id;?>';
        }else{
        $("#resultadonc").html('<div class="alert alert-danger"><strong>ERROR!</strong>'+data.error+'</div>');
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
       };
</script>
<script>  
   function realizaProceso2() {
       var msj = '1';
      //validaciones con js
      
     if (msj === "1") {
      var formData = new FormData(jQuery('#seriesimagen') [0]);
      jQuery.ajax({
        url: '<?=base_url();?>series/editar_imagen',
        type: 'POST',
        contentType: false,
        processData: false,
        dataType: 'json',
        data: formData,
        beforeSend: function() {
          $("#resultado2").html('<div class="alert alert-success">Procesando...!</div>');
        }
      })
      .done(function(data, textStatus, jqXHR) {
         var getData = jqXHR.responseJSON; // dejar esta linea
        if(data.status=='ok'){
         $("#resultado2").html('<div class="alert alert-success">'+data.code+'</div>');
         window.location.href ='<?=base_url();?>panel/viewserie/<?=$serie->id;?>';
        }else{
        $("#resultado2").html('<div class="alert alert-danger"><strong>ERROR!</strong>'+data.error+'</div>');
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
       };
</script>
<!-- EDITAR generoS -->
<script >
   function realizaProcesot(id) {
   
       var msj = '1';
      //validaciones con js
      
     if (msj === "1") {
      var formData = new FormData(jQuery('#editart'+id) [0]);
      jQuery.ajax({
        url: '<?=base_url();?>temporada/editar_temporada',
        type: 'POST',
        contentType: false,
        processData: false,
        dataType: 'json',
        data: formData,
        beforeSend: function() {
          $("#resultado2"+id).html('<div class="alert alert-success">Procesando...!</div>');
        }
      })
      .done(function(data, textStatus, jqXHR) {
         var getData = jqXHR.responseJSON; // dejar esta linea
        if(data.status=='ok'){
         $("#resultado2"+id).html('<div class="alert alert-success">'+data.code+'</div>');
         // window.location.href ='<?=base_url();?>/panel';
        }else{
        $("#resultado2"+id).html('<div class="alert alert-danger"><strong>ERROR!</strong>'+data.error+'</div>');
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
       };
      
     
</script>
