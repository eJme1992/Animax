<!-- Content Header (Page header) -->
<section class="content-header panel-body">
   <h1>
      Nueva serie
      <small>New Serie</small>
   </h1>
   <ol class="breadcrumb">
      <li><a href="<?=base_url();?>plantilla/panel/#"><i class="fa fa-dashboard"></i>Series</a></li>
      <li class="active">Nueva serie</li>
   </ol>
</section>
<!-- Main content -->
<section class="content container-fluid">
   <form action="/action_page.php">
      <div class="form-group col-md-6">
         <label>Nombre:</label>
         <input type="text" class="form-control" id="nombre">
      </div>
      <div class="form-group col-md-6">
         <label>Categoría:</label>
         <select  class="form-control" id="categoria">
          <?php foreach ($categorias as $key) { ?>
             <option><?=$key->nombre;?></option>
          <?php }  ?>   
         </select>
      </div>
      <div class="form-group col-md-6">
         <label>Portada:</label>
         <input type="file" class="form-control" id="nombre">
      </div>
      <div class="form-group col-md-6">
         <label>Estado:</label>
         <select  class="form-control" id="categoria">
            <option>Por estrenar</option>
            <option>En emisión</option>
            <option>Finalizada</option>
         </select>
      </div>
      <div class="form-group col-md-12">
         <label>Sinopsis:</label>
         <textarea name="content" id="editor">
        
    </textarea>
         <script>
            ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .catch( error => {
                    console.error( error );
                } );
         </script>
      </div>
      <div class="form-group col-md-12">
         <button type="submit" class="btn btn-default btn-lg">Enviar</button>
      </div>
   </form>
</section>
<!-- /.content -->
