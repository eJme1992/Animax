
<div class="container">
	<h2 class="user-titulo">Nombre de Usuario: <?=$user->nombre;?></h2>
	<div class="row">
		<div class="col-md-5">
			<?php if($key->foto==''){ ?>
			<img src="<?=base_url()?>file/img/user/default.png" class="rounded-circle change-p"/>
			 <?php }else{ ?>
			 	<img src="<?=base_url().$key->foto;?>" class="rounded-circle change-p"/>
			 	 <?php } ?>
			<button class="btn"  data-toggle="modal" data-target="#myModal">Cambiar Foto</button>
				<!-- The Modal -->
			<div class="modal" id="myModal">
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


		</div>
		<div class="col-md-7">
			 <div class="form-group">
			  	<label for="usr">Nombre:</label>
			  <input type="text" class="form-control" id="usr">
			</div>
			<div class="form-group">
			  <label for="pwd">Apellido:</label>
			  <input type="text" class="form-control" id="pwd">
			</div>
			<div class="form-group">
			  <label for="pwd">Email:</label>
			  <input type="Email" class="form-control" id="pwd">
			</div>
				<div class="form-group">
			  <label for="pwd">Sexo:</label>
			   <div class="form-group">
  				  <select class="form-control" id="sel1">
				    <option value="F">Femenino</option>
				    <option value="M">Masculino</option>
				  </select>
				</div> 
			</div>
			<div class="form-group">
			  <label for="pwd">Fecha de Nacimiento</label>
			  <input type="date" class="form-control" id="pwd">
			</div> 
		</div>
	</div>
</div>