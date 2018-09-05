
<div class="container">
	<h2 class="user-titulo">Nombre de Usuario: <?=$user->nombre;?></h2>
	<div class="row">
		<div class="col-md-5">
			<form id="change-img">
				 <?php foreach ($user as $key) { ?>
			<?php if($key->foto==''){ ?>
			<img src="<?=base_url()?>file/img/user/default.png" class="rounded-circle change-p"/>
			 <?php }else{ ?>
			 	<img src="<?=base_url().$key->foto;?>" class="rounded-circle change-p"/>
			 	 <?php } ?>
			<button class="btn"  data-toggle="modal" data-target="#imagen">Cambiar Foto</button>
				<!-- The Modal -->
			<div class="modal" id="imagen">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <!-- Modal body -->
			      <div class="modal-body">
			        <input type="file" name="imagen" id="imagen" class="form-control" required="">
                  <input type="hidden" name="id" id="id" value="<?=$key->id;?>" />
                  <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
			      </div>
			      <!-- Modal footer -->
			      <div class="modal-footer">
			        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			      </div>
			    </div>
			  </div>
			</div>
		</form>
		</div>
		<div class="col-md-7">
			<form id="Form-cambio">
				 <div class="form-group">
				  	<label for="usr">Nombre:</label>
				  <input type="text" class="form-control" id="nombre" name="name" placeholder="Nombre">
				</div>
				<div class="form-group">
				  <label for="pwd">Apellido:</label>
				  <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido">
				</div>
				<div class="form-group">
				  <label for="pwd">Email:</label>
				  <input type="Email" class="form-control" id="mail" name="mail" placeholder="your@email.com">
				</div>
					<div class="form-group">
				  <label for="pwd">Sexo:</label>
				   <div class="form-group">
	  				  <select class="form-control" id="sexo" name="sexo" required="">
					    <option value="F">Femenino</option>
					    <option value="M">Masculino</option>
					  </select>
					</div> 
				</div>
				<div class="form-group">
				  <label for="pwd">Fecha de Nacimiento</label>
				  <input type="date" class="form-control" id="pwd">
				</div>
				<button  type="submit" class="btn">Enviar</button>
				</form> 
			</div>
		</div>
	</div>

<script>
	//Para el form
	jQuery(document).ready(function() {
      jQuery("#Form-cambio").submit(function(event) {
         event.preventDefault();
         
         var msj = '1';
         //validaciones con js
         
        if (msj === "1") {
         var formData = new FormData(jQuery('#Form-cambio') [0]);
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
             window.location.href ='<?=base_url();?>/perfil/usuario';
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
      //Para la Imagen

      jQuery("#change-img").submit(function(event) {
         event.preventDefault();
         var msj = '1';
        //validaciones con js
        
       if (msj === "1") {
        var formData = new FormData(jQuery('#change-img') [0]);
        jQuery.ajax({
          url: '<?=base_url();?>user/editar_img',
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
           window.location.href ='<?=base_url();?>perfil/usuario/<?=$key->id;?>';
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
       });
</script>