<section id="detalle-serie">
	<div class="container detas">
		<div class="row">
			<div class="col-md-8">
				<div class="back-g" style="background-image: url('<?=base_url();?>plantilla/website/img/title.png'); "><h2 class="titulo-de"><?=$serie->nombre;?></h2></div>
					<div class="row">
						<div class="col-md-4">
							<img src="<?=base_url().$serie->imagen;?>" class="img-fluidnimg-serie"/>
							<button type="submit" class="btn btn-serie">Compartir</button>
							<div class="col-md-12">
								<button type="submit" class="btn btn-redes-s fb">Facebook</button>
								<button class="btn btn-redes-s tw">Twiter</button>
							</div>

						</div>
						<div class="col-md-8">
							<h2 class="titulo-de">Anuncios </h2>
						</div>
					</div>
				
			</div>
			<div class="col-md-4">
				
			</div>

		</div>
		
	</div>
	
</section>