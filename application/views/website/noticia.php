
    <div class="container clearfix" id="noticiad">
    <div class=" row">

        <div class="col-md-8">
        <?php if (isset($noticia)){ ?>
            <div class="text-center">
                <h2><b><?php echo $noticia->titulo; ?></b></h2>
            </div>    
            <div>
            <img class="img-fluid" src="<?=base_url().$noticia->portada;?>">
            </div>    
            <div class="entry">
                <?php echo $noticia->contenido; ?>
            </div>
            
        <?php } ?>           
        </div>
        <div class="col-md-4 row">
    <?php foreach ($noticias as $key){?>
            <div class="col-12 titulares">
                <?=$key->titulo;?>
            </div>
               <div class="col-md-6  imgssm" style="background: url('<?=base_url().$key->imagen;?>');background-repeat: no-repeat;background-size: cover;">
                  
               </div>
               <div class="col-md-6" style="max-height:140px;overflow:hidden;">
                  <p  class="padding"><?=$key->descripcion_corta;?> </p>
               </div>
                <?php } ?>
            </div>
</div>
    </div>
