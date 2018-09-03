<!-- Content Header (Page header) -->
<section class="content-header panel-body">
   <h1>
      Editar Usuario
      <?php foreach ($user as $key) { ?>

      <small><?=$key->nombre; ?></small>
   </h1>
   <ol class="breadcrumb">
      <li><a href="<?=base_url();?>plantilla/panel/#"><i class="fa fa-dashboard"></i>Perfil</a></li>
      <li class="active">Editar Usuario</li>
   </ol>
</section>
<!-- Main content -->
<section class="content container-fluid">
   <form id="editarUser">
      <div class="form-group col-md-6">
         <label>Nombre:</label>
         <input type="text" class="form-control" id="nombre" name="nombre" required="" placeholder="Nombre" value="<?=$key->nombre;?>">
      </div>
       <div class="form-group col-md-6">
         <label>Apellido:</label>
         <input type="text" class="form-control" id="apellido" name="apellido" required="" placeholder="Apellido" value="<?=$key->apellido;?>">
      </div>
       <div class="form-group col-md-6">
         <label>Nickname:</label>
         <input type="text" class="form-control" id="nickname" name="nickname" required="" placeholder="Nickname" value="<?=$key->nickname;?>">
      </div>
      <div class="form-group col-md-6">
         <label>Mail:</label>
         <input type="mail" class="form-control" id="mail" name="mail" required="" placeholder="Mail" value="<?=$key->mail;?>">
      </div>
      
      <div class="form-group col-md-6">
         <label>Sexo:</label>
         <select  class="form-control" id="sexo" name="sexo" required="">
          <?php if ($key->sexo == 'M'): ?>
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
          <?php elseif($key->sexo == 'F'): ?>
            <option value="F">Femenino</option>
            <option value="M">Masculino</option>
          <?php endif ?>
         </select>
      </div>
      <div class="form-group col-md-6">
         <label>Fecha de nacimiento:</label>
         <input type="date" class="form-control" id="nacimiento" name="nacimiento" required="<?=$key->nacimiento;?>">
      </div>
      <div class="form-group col-md-6">
         <label>Foto:</label>
         <input type="file" class="form-control" id="foto" name="foto" >
      </div>
      <div class="form-group col-md-6">
         <label>Tipo:</label>
         <select  class="form-control" id="tipo" name="tipo" disabled>
         <?php if ($key->tipo == '1'): ?>
            <option value="1">Admin</option>
            <option value="0">User</option>
          <?php elseif($key->tipo == '0'): ?>
            <option value="0">User</option>
            <option value="1">Admin</option>
          <?php endif ?>
         </select>
      </div>
      <input type="hidden" name="id" id="id" value="<?=$key->id;?>">
      <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
      <div class="col-md-12" id="resultado" style="margin-top:15px;"></div>
      <div class="form-group col-md-12">
         <hr>
         <button type="submit" class="btn btn-default btn-lg">Enviar</button>
      </div>
   </form>

</section>
<!-- /.content -->
<script >
   jQuery(document).ready(function() {
      jQuery("#editarUser").submit(function(event) {
         event.preventDefault();
         
         var msj = '1';
         //validaciones con js
         
        if (msj === "1") {
         var formData = new FormData(jQuery('#editarUser') [0]);
         jQuery.ajax({
           url: '<?=base_url();?>user/editar_usuario',
           type: 'POST',
           contentType: false,
           processData: false,
           dataType: 'json',
           data: formData,
           beforeSend: function() {
             $("#resultado").html('<div class="alert alert-success">Procesando...</div>');
           }
         })
         .done(function(data, textStatus, jqXHR) {
            var getData = jqXHR.responseJSON; // dejar esta linea
           if(data.status=='ok'){
            $("#resultado").html('<div class="alert alert-success">'+data.code+'</div>');
             window.location.href ='<?=base_url();?>/panel/user';
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
 <?php }  ?>  
</script>
