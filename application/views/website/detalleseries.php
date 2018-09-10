<section id="detalle-serie">
	<div class="container detas">
		<div class="row">
			<div class="col-md-8">
				<div class="back-g" style="background-image: url('<?=base_url();?>plantilla/website/img/title.png'); "><h2 class="titulo-de"><?=$serie->nombre;?></h2></div>
					<div class="row">
						<div class="col-md-5">
							<img src="<?=base_url().$serie->imagen;?>" class="img-fluid img-serie"/>
							<button type="submit" class="btn btn-serie">Compartir</button>
							<div class="col-md-12">
								<button id="fb" type="submit" class="btn-redes-s" ><i class="fab fa-facebook-square fa-5x" style="color:#395BA3;"></i></button>
								<button class="btn-redes-s" id="tw"><i class="fab fa-twitter-square fa-5x" style="color:#87C7F3;" ></i></button>
							</div>

						</div>
						<div class="col-md-7">
							<p>Categorias: <?=$serie->categoria?></p><br>
							<p>Estado: <?=$serie->estado?></p><br>
							<p class="sipnosis">Sinopsis: <?=$serie->descripcion?></p>
						</div>
					</div>
				
			</div>
			<div class="col-md-4 anun">
				<div class="text-nun" ><h2 class="tit-anun">Anuncios </h2></div>
				<h4> Te recomedamos estas series</h4>
				<div class="row">
					
					<div class="col-md-4">
						<img src="<?=base_url();?>file/img/img2018_09_05_42.jpg" class="img-fluid"/>
						</div>
						<div class="col-md-8">
							<p>Nombre de la serie</p>
							<p>Estado de la serie</p>
						</div>
						<div class="col-md-4">
						<img src="<?=base_url();?>file/img/img2018_09_05_42.jpg" class="img-fluid"/>
						</div>
						<div class="col-md-8">
							<p>Nombre de la serie</p>
							<p>Estado de la serie</p>
						</div>
						<div class="col-md-4">
						<img src="<?=base_url();?>file/img/img2018_09_05_42.jpg" class="img-fluid"/>
						</div>
						<div class="col-md-8">
							<p>Nombre de la serie</p>
							<p>Estado de la serie</p>
						</div>

				</div>
			</div>
						<div class="col-md-12">
				    <div class="back-g" style="background-image: url('<?=base_url();?>plantilla/website/img/title.png'); "><h3 class="titulo-de">Lista de Capitulos</h3></div>
			
		    <div class="back-g" style="background-image: url('<?=base_url();?>plantilla/website/img/title.png'); "><h3 class="titulo-de">Comentarios de <?=$serie->nombre;?></h3></div>
		    	
		    	<div class="row">
		    	<div class="col-md-4">	
		    		 <?php if($user->foto==''){ ?>
                  <img src="<?=base_url()?>file/img/user/default.png" class="rounded-circle cic"/>
                  <?php }else{ ?>
                  <img src="<?=base_url().$user->foto;?>" class="rounded-circle cic"/>
                  <?php } ?> 
		    	</div>

		    	<div class="col-md-8 comenta">
		    		<input type="text"class="form-control" id="comentarios"/>
		    	</div>
		    </div>
		    </div>

		</div>
	</div>
	
</section>