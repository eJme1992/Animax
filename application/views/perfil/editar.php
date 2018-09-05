
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
				<button  type="submit" class="btn btn-cargar mx-auto d-block">Enviar</button>
				</form> 
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

</script>
</section>