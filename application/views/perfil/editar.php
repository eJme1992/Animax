
<section id="editarPerfil">
<div class="container">
	<h2 class="user-titulo">Nombre de Usuario: <?=$user->nombre;?></h2>
	<div class="row">
		<div class="col-md-5">
				 
			<?php if($user->foto==''){ ?>
			<img src="<?=base_url()?>file/img/user/default.png" class="rounded-circle change-p mx-auto d-block"/>
			 <?php }else{ ?>
			 	<img src="<?=base_url().$user->foto;?>" class="change-p" style="width:100%"/>
			 	 <?php } ?> 
			<div class="col-md-12"><button type="button" class="btn btn-cargar mx-auto d-block" id="mostrarm">
  Cambiar Imagen
</button></div>

						<div class="col-md-12">
							<h3 class="subt-editar">Datos de Seguridad <i class="fas fa-user-lock fa-2x"></i></h3>
								<div class="form-group">
				  <label for="pwd">Nueva Contraseña</label>
				  <input type="password" class="form-control" id="change-pass" name="change-pass" >
				</div><div class="form-group">
				  <label for="pwd">Confirmar Contraseña</label>
				  <input type="password" class="form-control" id="confirm-pass" name="confirm-pass">
				</div>
						</div>

				<!-- The Modal -->
			<div class="modal" id="miimagen">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <!-- Modal body -->
			      <form id="change-img">
			      <div class="modal-body">
			        <input type="file" name="imagen" id="imagen" class="form-control" required="">
                
			      </div>
			      	</form>
			      <!-- Modal footer -->
			      <div class="modal-footer">
			        <button type="button" class="btn btn-danger" id="close" data-dismiss="modal">Close</button>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
		<div class="col-md-7">
			<h3 class="subt-editar">Datos Personales <i class="fas fa-users-cog fa-2x"></i></h3>
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
				  <input type="Email" class="form-control" id="mail" name="mail" placeholder="Example: your@email.com">
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
				<button  type="submit" class="btn btn-cargar mx-auto d-block">Enviar</button>
				</form> 
				<div class="col-md-12" id="resultado" style="margin-top:15px;"></div>
			</div>
		</div>
	</div>
<script>
	$(document).ready(function(){
    $("#mostrarm").click(function(){
        $("#miimagen").show();
    });
    $("#close").click(function(){
        $("#miimagen").hide();
    });
});

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
           window.location.href ='<?=base_url();?>panel/usuario/<?=$user->id;?>';
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
</section>