<!-- Content Header (Page header) -->
<section class="content-header panel-body">
<script>
   $.noConflict();
   jQuery( document ).ready(function( $ ) {
       $('#tem').DataTable();
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
         <div class="form-group col-md-6">
            <label>Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required="" placeholder="Nombre">
         </div>
         <div class="form-group col-md-6">
            <label>Portada:</label>
            <input type="file" class="form-control" id="imagen" name="imagen" required="">
         </div>
         <div class="form-group col-md-4">
            <label>Estado:</label>
            <select  class="form-control" id="estado" name="estado" required="" >
               <option value="Por estrenar">Por estrenar</option>
               <option value="En emisión">En emisión</option>
               <option value="Finalizada">Finalizada</option>
            </select>
         </div>
         <div class="form-group col-md-4">
            <label>Categoría:</label>
            <select  class="form-control" id="categoria" name="categoria" required="">
               <?php foreach ($categorias as $key) { ?>
               <option value="<?=$key->nombre;?>"><?=$key->nombre;?></option>
               <?php }  ?>   
            </select>
         </div>
         <div class="form-group col-md-4">
            <label>Días de estreno:</label>
            <select  class="form-control" id="dias" name="dias" required="">
               <option>Sin precisar</option>
               <option>Lunes</option>
               <option>Martes</option>
               <option>Miércoles</option>
               <option>Jueves</option>
               <option>Viernes</option>
               <option>Sábado</option>
               <option>Domingo</option>
            </select>
         </div>
         <div class="form-group col-md-6">
            <label>Duración:</label>
            <input type="text" class="form-control" id="duracion" name="duracion" required="" placeholder="De 20 a 40min">
         </div>
         <div class="form-group col-md-6">
            <label>Fecha de estreno:</label>
            <input type="date" class="form-control" id="fecha" name="fecha" required="">
         </div>
         <div class="form-group col-md-12">
            <label>Sinopsis:</label>
            <textarea name="content" id="sinopsis" name="sinopsis" required="">
        
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
               <input type="checkbox" class="form-check-input" id='genero[]' name="genero[]" value="<?=$key->id;?>"> <?=$key->nombre;?>
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
         <form action="" method="">
            <input type="file" name="imagen" id="imagen" class="form-control" required="">
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
      </div>
      <div class="col-md-2">
         <h3>Sinopsis</h3>
         <p><?=$serie->descripcion;?></p>
      </div>
      <div class="col-md-8">
         <h3>Temporadas <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Nueva Temporada <i class="fa fa-plus-circle"></i></button></h3>
         <div style="max-height:500px; overflow:scroll">
         <table class="table" >
            <thead>
               <tr>
                  <th>ID</th>
                  <th>Numero</th>
                  <th>Estreno</th>
                  <th>Ultimo cambio</th>
                  <th>#</th>
               </tr>
            </thead>
            <tbody>
               <?php foreach ($temporada as $key) { ?>
               <tr>
                  <td><?=$key->id;?></td>
                  <td><?=$key->numero;?></td>
                  <td><?=$key->fecha_estreno;?></td>
                  <td><?=$key->fecha_m;?></td>
                  <td>
                     <a href="<?=base_url();?>panel/viewserie/<?=$key->id;?>"><button class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></a>
                     <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete<?=$key->id;?>" ><span class="glyphicon glyphicon-trash"></span></button>
                  </td>
                  <!-- Modal Editar-->
                  <!-- /.content -->
                  <!-- Modal ELIMINAR -->
                  <div id="delete<?=$key->id;?>" class="modal fade " role="dialog">
                     <div class="modal-dialog" style="margin-top:10vw;">
                        <!-- Modal content-->
                        <div class="modal-content">
                           <div class="modal-body text-center">
                              <h3> ¿Esta Seguro que desea eliminar la serie: <b><?=$key->numero;?></b>?</h3>
                           </div>
                           <div class="modal-footer">
                              <a href="<?=base_url();?>series/eliminar_serie/<?=$key->id;?>"><button type="button" class="btn btn-danger">Si</button></a>
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
</div>
<!-- /.content -->
<!-- NUEVAS serieS -->
<script >
   jQuery(document).ready(function() {
         jQuery("#nuevaser").submit(function(event) {
         event.preventDefault();
   
       var msj = '1';
   //validaciones con js
   
   if (msj === "1") {
   var formData = new FormData(jQuery('#nuevaser') [0]);
   jQuery.ajax({
     url: '<?=base_url();?>series/crear_serie',
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
       window.location.href ='<?=base_url();?>/panel/series';
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
