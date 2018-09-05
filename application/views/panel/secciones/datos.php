<!-- Content Header (Page header) -->
<section class="content-header panel-body">
   <script>
      $.noConflict();
      jQuery( document ).ready(function( $ ) {
          $('#grid').DataTable();
      });
      // Code that uses other library's $ can follow here.
   </script>
   <h1>
      DATOS DEL SITIO
      <small>Lista</small>
   </h1>
   <ol class="breadcrumb">
      <li><a href="<?=base_url();?>plantilla/panel/#"><i class="fa fa-dashboard"></i>Configuracion</a></li>
      <li class="active">Datos del sitio</li>
   </ol>
</section>
<!-- Main content -->
<section class="content container-fluid row">
<div class="col-md-12 row">
  <div class="col-md-4">
        <?php if($key->foto==''){ ?>
      <img src="<?=base_url();?>plantilla/panel/dist/img/user2-160x160.jpg" class="img-responsive " alt="User Image">
      <?php }else{ ?>
      <img src="<?=base_url().$key->foto;?>" class="img-circle img-responsive" alt="User Image">
      <?php } ?>
      <div class="form-group col-md-12">
         <a href="#" class="btn  form-control" data-title="imagen" data-toggle="modal" data-target="#imagen" >Cambiar Logo</a>
      </div>
  </div> 
</div>
<div class="col-md-12 row">
  <div class="col-md-4">
        <?php if($key->foto==''){ ?>
      <img src="<?=base_url();?>plantilla/panel/dist/img/user2-160x160.jpg" class="img-responsive " alt="User Image">
      <?php }else{ ?>
      <img src="<?=base_url().$key->foto;?>" class="img-circle img-responsive" alt="User Image">
      <?php } ?>
      <div class="form-group col-md-12">
         <a href="#" class="btn  form-control" data-title="imagen" data-toggle="modal" data-target="#imagen" >Cambiar Logo</a>
      </div>
  </div> 
</div>
<div class="col-md-12 row">
  <div class="col-md-4">
        <?php if($key->foto==''){ ?>
      <img src="<?=base_url();?>plantilla/panel/dist/img/user2-160x160.jpg" class="img-responsive " alt="User Image">
      <?php }else{ ?>
      <img src="<?=base_url().$key->foto;?>" class="img-circle img-responsive" alt="User Image">
      <?php } ?>
      <div class="form-group col-md-12">
         <a href="#" class="btn  form-control" data-title="imagen" data-toggle="modal" data-target="#imagen" >Cambiar Logo</a>
      </div>
  </div> 
</div>
</section>