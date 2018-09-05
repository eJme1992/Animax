
<div class="container">
	<h2 class="user-titulo">Nombre de Usuario: <?=$user->nombre;?></h2>
	<div class="row">
		<div class="col-md-5">
			<form id="change-img">
				 
			<?php if($user->foto==''){ ?>
			<img src="<?=base_url()?>file/img/user/default.png" class="rounded-circle change-p"/>
			 <?php }else{ ?>
			 	<img src="<?=base_url().$user->foto;?>" class="change-p" style="width:100%"/>
			 	 <?php } ?> 
			<button class="btn"  data-toggle="modal" data-target="#imagen">Cambiar Foto</button>
				<!-- The Modal -->
			<div class="modal" id="imagen">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <!-- Modal body -->
			      <div class="modal-body">
			        <input type="file" name="imagen" id="imagen" class="form-control" required="">
                
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
