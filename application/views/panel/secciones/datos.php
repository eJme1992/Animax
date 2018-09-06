<!-- Content Header (Page header) -->
<section class="content-header panel-body">
   <script>
      $.noConflict();
      jQuery( document ).ready(function( $ ) {
          $('#grid').DataTable();
      });
      // Code that uses other library's $ can follow here.
   </script>
   <h1>
      DATOS DEL SITIO
      <small>Lista</small>
   </h1>
   <ol class="breadcrumb">
      <li><a href="<?=base_url();?>plantilla/panel/#"><i class="fa fa-dashboard"></i>Configuracion</a></li>
      <li class="active">Datos del sitio</li>
   </ol>
</section>

<section class="content container-fluid">
   <nav class="nav" style="margin-bottom:25px;">
      <div class="btn-group">
         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Nuevos datos <i class="fa fa-plus-circle"></i></button>
      </div>
   </nav>
   <table id="grid" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
         <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Logo 1</th>
            <th>Logo 2</th>
            <th>Icono</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>#</th>
            <th>#</th>
         </tr>
      </thead>
      <tfoot>
         <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Logo 1</th>
            <th>Logo 2</th>
            <th>Icono</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>#</th>
            <th>#</th>
         </tr>
      </tfoot>
      <tbody>
         <?php foreach ($datos as $key) { ?>
         <tr>
            <td><?=$key->id;?></td>
            <td><?=$key->nombre;?></td>
            <td><?=$key->descripcion;?></td>
            <td><button class="btn form-control btn-xs" data-title="Edit" data-toggle="modal" data-target="#cambiar_logo<?=$key->id;?>" ><span class="glyphicon glyphicon-pencil"></span> Cambiar</button></td>
            <td><button class="btn form-control btn-xs" data-title="Edit" data-toggle="modal" data-target="#cambiar_logo2<?=$key->id;?>" ><span class="glyphicon glyphicon-pencil"></span> Cambiar</button></td>
            <td><button class="btn form-control btn-xs" data-title="Edit" data-toggle="modal" data-target="#cambiar_icono<?=$key->id;?>" ><span class="glyphicon glyphicon-pencil"></span>Cambiar</button></td>
            <td><?=$key->correo;?></td>
            <td><?=$key->telefono;?></td>
            <td>
               <p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit<?=$key->id;?>" ><span class="glyphicon glyphicon-pencil"></span></button></p>
            </td>
            <td>
               <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete<?=$key->id;?>" ><span class="glyphicon glyphicon-trash"></span></button></p>
            </td>
            <!-- Modal Editar-->
            <div id="edit<?=$key->id;?>" class="modal fade " role="dialog">
               <div class="modal-dialog" style="margin-top:10vw;">
                  <!-- Modal content-->
                  <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Editar datos</h4>
                     </div>
                     <div class="modal-body">
                        <form id="editar<?=$key->id;?>" onsubmit="realizaProceso(
                                $('#id<?=$key->id;?>').val() 
                                );return false; ">
                           <div class="row">
                              <div class="form-group col-md-4">
                                 <label>Nombre</label>
                                 <input type="text" name="nombre" id="nombre" value="<?=$key->nombre;?>" required="" class="form-control" placeholder="Nombre">
                              </div>
                              <div class="form-group col-md-4">
                                 <label>Teléfono</label>
                                 <input type="text" name="telefono" id="telefono" value="<?=$key->telefono;?>" required="" class="form-control" placeholder="Teléfono">
                              </div>
                              <div class="form-group col-md-4">
                                 <label>Correo</label>
                                 <input type="mail" name="correo" id="correo" required="" class="form-control" value="<?=$key->correo;?>" placeholder="example@example.com">
                              </div>
                              <div class="form-group col-md-12">
                                <label>Descripción</label>
                                <textarea name="descripcion" id="descripcion" class="form-control" placeholder="Descripción..."><?=$key->descripcion;?></textarea>
                              </div>
                              
                                 <input type="hidden" name="id" id="id" value="<?=$key->id;?>">
                                 
                                 <input type="hidden" name="id<?=$key->id;?>" id="id<?=$key->id;?>" value="<?=$key->id;?>">
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
            <!-- Modal cambiar logo1-->
            <div id="cambiar_logo<?=$key->id;?>" class="modal fade " role="dialog">
               <div class="modal-dialog" style="margin-top:10vw;">
                  <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Cambiar Logo 1</h4>
                     </div>
                     <div class="modal-body">
                        <form id="cambiar_logo<?=$key->id;?>" onsubmit="cambiar_logo(
                                $('#idlogo<?=$key->id;?>').val() 
                                );return false; ">
                           <div class="row">
                              <div class="form-group col-md-12">
                                 <input type="file" class='form-control' name="logo" id="logo" >
                              </div>
                              
                              
                                 <input type="hidden" name="id" id="id" value="<?=$key->id;?>">
                                 
                                 <input type="hidden" name="idlogo<?=$key->id;?>" id="idlogo<?=$key->id;?>" value="<?=$key->id;?>">
                                 <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
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
            <!-- /.content -->
            <!-- Modal cambiar logo2-->
            <div id="cambiar_logo2<?=$key->id;?>" class="modal fade " role="dialog">
               <div class="modal-dialog" style="margin-top:10vw;">
                  <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Cambiar Logo 2</h4>
                     </div>
                     <div class="modal-body">
                        <form id="cambiar_logo2<?=$key->id;?>" onsubmit="cambiar_logo2(
                                $('#idlogo2<?=$key->id;?>').val() 
                                );return false; ">
                           <div class="row">
                              <div class="form-group col-md-12">
                                 <input type="file" class='form-control' name="logo2" id="logo2" >
                              </div>
                              
                              
                                 <input type="hidden" name="id" id="id" value="<?=$key->id;?>">
                                 
                                 <input type="hidden" name="idlogo2<?=$key->id;?>" id="idlogo2<?=$key->id;?>" value="<?=$key->id;?>">
                                 <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                              <div class="col-md-12" id="resultado4<?=$key->id;?>" style="margin-top:15px;"></div>
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
            <!-- Modal cambiar icono-->
            <div id="cambiar_icono<?=$key->id;?>" class="modal fade " role="dialog">
               <div class="modal-dialog" style="margin-top:10vw;">
                  <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Cambiar Icono</h4>
                     </div>
                     <div class="modal-body">
                        <form id="cambiar_icono<?=$key->id;?>" onsubmit="cambiar_icono(
                                $('#idicono<?=$key->id;?>').val() 
                                );return false; ">
                           <div class="row">
                              <div class="form-group col-md-12">
                                 <input type="file" class='form-control' name="icon" id="icono" >
                              </div>
                              
                              
                                 <input type="hidden" name="id" id="id" value="<?=$key->id;?>">
                                 
                                 <input type="hidden" name="idicono<?=$key->id;?>" id="idicono<?=$key->id;?>" value="<?=$key->id;?>">
                                 <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                              <div class="col-md-12" id="resultado5<?=$key->id;?>" style="margin-top:15px;"></div>
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
                        <h3> ¿Esta Seguro que desea eliminar los datos de: <b><?=$key->nombre;?></b>?</h3>
                     </div>
                     <div class="modal-footer">
                        <a href="<?=base_url();?>datos/eliminar_datos/<?=$key->id;?>"><button type="button" class="btn btn-danger">Si</button></a>
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
</section>
<!-- Modal -->
<div id="myModal" class="modal fade " role="dialog">
   <div class="modal-dialog" style="margin-top:10vw;">
      <!-- Modal content-->
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Nueva Menú</h4>
         </div>
         <div class="modal-body">
            <form id="nuevos_datos">
               <div class="row">
                  <div class="form-group col-md-4">
                     <label>Nombre</label>
                     <input type="text" name="nombre" id="nombre"  required="" class="form-control" placeholder="Nombre">
                  </div>
                  <div class="form-group col-md-4">
                     <label>Teléfono</label>
                     <input type="text" name="telefono" id="telefono"  required="" class="form-control" placeholder="Teléfono">
                  </div>
                  <div class="form-group col-md-4">
                     <label>Correo</label>
                     <input type="mail" name="correo" id="correo" required="" class="form-control"  placeholder="example@example.com">
                  </div>
                  <div class="form-group col-md-12">
                    <label>Descripción</label>
                    <textarea name="descripcion" id="descripcion" class="form-control" placeholder="Descripción..."></textarea>
                  </div>
                  <div class="col-md-12" id="resultado" style="margin-top:15px;"></div>
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
<!--  Main content -->
<!-- <section class="content container-fluid row">
<div class="col-md-12 row">
  <div class="col-md-4">
      <?php if($key->foto==''){ ?>
      <img src="<?=base_url();?>plantilla/panel/dist/img/user2-160x160.jpg" class="img-responsive " alt="User Image">
      <?php }else{ ?>
      <img src="<?=base_url().$key->foto;?>" class="img-circle img-responsive" alt="User Image">
      <?php } ?>
      <div class="form-group col-md-12">
         <a href="#" class="btn  form-control" data-title="imagen" data-toggle="modal" data-target="#imagen" >Cambiar Logo</a>
      </div>
  </div> 
</div>
<div class="col-md-12 row">
  <div class="col-md-4">
        <?php if($key->foto==''){ ?>
      <img src="<?=base_url();?>plantilla/panel/dist/img/user2-160x160.jpg" class="img-responsive " alt="User Image">
      <?php }else{ ?>
      <img src="<?=base_url().$key->foto;?>" class="img-circle img-responsive" alt="User Image">
      <?php } ?>
      <div class="form-group col-md-12">
         <a href="#" class="btn  form-control" data-title="imagen" data-toggle="modal" data-target="#imagen" >Cambiar Logo</a>
      </div>
  </div> 
</div>
<div class="col-md-12 row">
  <div class="col-md-4">
        <?php if($key->foto==''){ ?>
      <img src="<?=base_url();?>plantilla/panel/dist/img/user2-160x160.jpg" class="img-responsive " alt="User Image">
      <?php }else{ ?>
      <img src="<?=base_url().$key->foto;?>" class="img-circle img-responsive" alt="User Image">
      <?php } ?>
      <div class="form-group col-md-12">
         <a href="#" class="btn  form-control" data-title="imagen" data-toggle="modal" data-target="#imagen" >Cambiar Logo</a>
      </div>
  </div> 
</div>
</section>
 --> 
<script type="text/javascript">
  
function realizaProceso(id) {

  var msj = '1';
         //validaciones con js
         
  if (msj === "1") {
    var formData = new FormData(jQuery('#editar'+id) [0]);
    jQuery.ajax({
      url: '<?=base_url();?>datos/editar_datos',
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
        window.location.href ='<?=base_url();?>panel/datos_sitio';
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
function cambiar_logo(id) {

  var msj = '1';
         //validaciones con js
         
  if (msj === "1") {
    var formData = new FormData(jQuery('#cambiar_logo'+id) [0]);
    jQuery.ajax({
      url: '<?=base_url();?>datos/editar_logo',
      type: 'POST',
      contentType: false,
      processData: false,
      dataType: 'json',
      data: formData,
      beforeSend: function() {
        $("#resultado3"+id).html('<div class="alert alert-success">Procesando...!</div>');
      }
    })
    .done(function(data, textStatus, jqXHR) {
      var getData = jqXHR.responseJSON; // dejar esta linea
      if(data.status=='ok'){
        $("#resultado3"+id).html('<div class="alert alert-success">'+data.code+'</div>');
        window.location.href ='<?=base_url();?>panel/datos_sitio';
      }else{
        $("#resultado3"+id).html('<div class="alert alert-danger"><strong>ERROR!</strong>'+data.error+'</div>');
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
function cambiar_logo2(id) {

  var msj = '1';
         //validaciones con js
         
  if (msj === "1") {
    var formData = new FormData(jQuery('#cambiar_logo2'+id) [0]);
    jQuery.ajax({
      url: '<?=base_url();?>datos/editar_logo2',
      type: 'POST',
      contentType: false,
      processData: false,
      dataType: 'json',
      data: formData,
      beforeSend: function() {
        $("#resultado4"+id).html('<div class="alert alert-success">Procesando...!</div>');
      }
    })
    .done(function(data, textStatus, jqXHR) {
      var getData = jqXHR.responseJSON; // dejar esta linea
      if(data.status=='ok'){
        $("#resultado4"+id).html('<div class="alert alert-success">'+data.code+'</div>');
        window.location.href ='<?=base_url();?>panel/datos_sitio';
      }else{
        $("#resultado4"+id).html('<div class="alert alert-danger"><strong>ERROR!</strong>'+data.error+'</div>');
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
function cambiar_icono(id) {

  var msj = '1';
         //validaciones con js
         
  if (msj === "1") {
    var formData = new FormData(jQuery('#cambiar_icono'+id) [0]);
    jQuery.ajax({
      url: '<?=base_url();?>datos/editar_icon',
      type: 'POST',
      contentType: false,
      processData: false,
      dataType: 'json',
      data: formData,
      beforeSend: function() {
        $("#resultado5"+id).html('<div class="alert alert-success">Procesando...!</div>');
      }
    })
    .done(function(data, textStatus, jqXHR) {
      var getData = jqXHR.responseJSON; // dejar esta linea
      if(data.status=='ok'){
        $("#resultado5"+id).html('<div class="alert alert-success">'+data.code+'</div>');
        window.location.href ='<?=base_url();?>panel/datos_sitio';
      }else{
        $("#resultado5"+id).html('<div class="alert alert-danger"><strong>ERROR!</strong>'+data.error+'</div>');
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

<script type="text/javascript">
  jQuery(document).ready(function() {
    jQuery("#nuevos_datos").submit(function(event) {
      event.preventDefault();
         
      var msj = '1';
         //validaciones con js
         
      if (msj === "1") {
        var formData = new FormData(jQuery('#nuevos_datos') [0]);
        jQuery.ajax({
          url: '<?=base_url();?>datos/crear_datos',
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
            window.location.href ='<?=base_url();?>panel/datos_sitio';
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