<section id="detalle-serie">
	<div class="container detas">
		<div class="row">
			<div class="col-md-8">
				<div class="back-g" style="background-image: url('<?=base_url();?>plantilla/website/img/title.png'); "><h2 class="titulo-de"><?=$serie->nombre;?></h2></div>
					
					
						<ul class="nav">
						    <li class="nav-item">
						      <a class="nav-link" data-toggle="tab" href="#video">Opcion 1</a>
						    </li>
						    <li class="nav-item">
						      <a class="nav-link" data-toggle="tab" href="#video1">Opcion 2</a>
						    </li>
						    <li class="nav-item">
						      <a class="nav-link" data-toggle="tab" href="#video2">Opcion 3</a>
						    </li>
				 		 </ul>
				 		 <div class="tab-content">
						  <div class="tab-pane tab-detalles container active" id="home">
						  		<img src="<?=base_url();?>file/img/img2018_09_10_05.jpg" class="img-fluid mx-auto d-block"alt="video"/>
						  </div>
						  <div class="tab-pane tab-detalles container fade" id="video1">
						  		<img src="<?=base_url();?>file/img/img2018_09_10_07.jpeg" class="img-fluid mx-auto d-block" alt="video"/>
						  </div>
						  <div class="tab-pane  tab-detalles container fade" id="video2">pru
						  	<img src="<?=base_url();?>file/img/img2018_09_10_05.jpg" class="img-fluid d-block" alt="video"/></div>
						</div>

				<div class="col-md-12">
					<div class="row">
							<div class="col-md-4">
							<button type="submit" class="btn btn-serie mx-auto">Compartir</button>
							
								<button id="fb" type="submit" class="btn-redes-s" ><i class="fab fa-facebook-square fa-5x" style="color:#395BA3;"></i></button>
								<button class="btn-redes-s" id="tw"><i class="fab fa-twitter-square fa-5x" style="color:#87C7F3;" ></i></button>
							</div>
							<div class="col-md-8">
								<button type="submit" class="btn btn-serie mx-auto">OPCIONES DE SERIE</button>
								<div class="text-center cont-list">
									<a class="btn btn-warning">Anterior</a>
									<a class="btn btn-secundary">Lista</a>
								</div>
							</div>
						</div>
				</div>
				<div class="col-md-12">
					<div class="back-g" style="background-image: url('<?=base_url();?>plantilla/website/img/title.png'); "><h2 class="titulo-de">Descargas </h2></div>
					<table class="table table-striped text-center">
						<thead>
							<tr>
							<th class="text-center">SERVIDOR</th>
							<th class="text-center">TAMAÑO</th>
							<th class="text-center">FORMATO</th>
							<th class="text-center">DESCARGAR</th>
							</tr>
						</thead>
							<tbody>
							<tr>
							<td>Mega</td>
							<td><strong>?? MB</strong></td>
							<td>MP4</td>
							<td><a target="_blank" rel="nofollow" href="https://mega.nz/#!CahjiAhC!CwD7KnEZ_C1QE_pPb2ni-uit4PC5443BrUCjhYX9Hpw" class="btn btn-success">DESCARGAR</a></td>
							</tr> 
							</tbody>
						</table>
				</div>
				
			</div>
			<div class="col-md-4 anun">
				<div class="text-nun" ><h2 class="tit-anun">Sobre la serie </h2></div>
				<p><?=$serie->descripcion;?></p>
				<div class="text-nun" ><h2 class="tit-anun">Anuncios <?=$serie->nombre;?></h2></div>
				<h5> Te recomedamos estas series</h5>
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
						
		</div>
	</div>
	
</section>