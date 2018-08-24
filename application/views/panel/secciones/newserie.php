 <!-- Content Header (Page header) -->
    <section class="content-header panel-body">
      <h1>
        Nueva serie
        <small>New Serie</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url();?>plantilla/panel/#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
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
    <label>Categoria:</label>
    <select  class="form-control" id="categoria">
      <option></option>
    </select> 
  </div>

  <div class="form-group col-md-6">
    <label>Portada:</label>
    <input type="file" class="form-control" id="nombre">
  </div>

   <div class="form-group col-md-6">
    <label>Estado:</label>
    <select  class="form-control" id="categoria">
      <option>Por extrenar</option>
      <option>En emision</option>
      <option>Finalizada</option>
    </select> 
  </div>

  <div class="form-group col-md-6">
    <label>Sipnosis:</label>
    <textarea  class="form-control" id="nombre"> 
    </textarea>
  </div>

  <div class="form-group col-md-12">
    <button type="submit" class="btn btn-default">Enviar</button>
  </div>
  
  


  
</form> 

    </section>
    <!-- /.content -->
  