<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DASHGUM - FREE Bootstrap Admin Template</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <!--external css-->
    <link href="<?=base_url();?>plantilla/perfil/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>plantilla/perfil/assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>plantilla/perfil/assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>plantilla/perfil/assets/lineicons/style.css">    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="<?=base_url();?>plantilla/perfil/assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
<header>
<nav class="navbar navbar-expand-sm bg-light">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon" ><i class="fas fa-bars" style="color:#000;"></i></span>
</button>
<div class="collapse navbar-collapse" id="collapsibleNavbar">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Maestro</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Audiofrecuencia</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Game Center</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Vivo</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Los miembros compran</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">BML</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Mengzhan</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Mengzhan</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><i class="fas fa-mobile fa-lg"></i>Descargar App</a>
    </li>
  </ul>
</div>
  <form class="form-inline" action="/action_page.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-success" type="submit">Search</button>
  </form>
</nav>
</header>
  
        <div class="container">
            <div class="bgi" style="background-image:url('<?=base_url();?>plantilla/perfil/assets/img/bgi.jpg');">
            <img src="<?=base_url()?>file/img/user/default.png" class="rounded-circle cic">
            <h3 class="user-name"><?=$user->nombre;?></h3>
        </div>
        <nav id="second-nav" class="navbar navbar-expand-sm bg-light">
        <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#"><i class="fas fa-home fa-lg"></i>Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><i class="fas fa-asterisk fa-lg"></i>Dinamico</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><i class="fas fa-tv fa-lg"></i>Publicado</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><i class="fab fa-youtube fa-lg"></i>Canal</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><i class="fas fa-heart fa-lg"></i>Suscripcion</a>
    </li>
  </ul>
        <h3  class="level">Level</h3>
        </nav>

        <section id="inicio">
            <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3>Obra Maestra</h3>
                    <div class="row">
                    <div class="col-md-4">
                            <img src="<?=base_url();?>plantilla/perfil/assets/img/1032.jpg" class="img-fluid">
                    </div>
                    <div class="col-md-4">
                    <img src="<?=base_url();?>plantilla/perfil/assets/img/1032.jpg" class="img-fluid">
                    </div>
                    <div class="col-md-4">
                    <img src="<?=base_url();?>plantilla/perfil/assets/img/1032.jpg" class="img-fluid">
                    </div>
</div>
                </div>
                <div class="col-md-4">
                <img src="<?=base_url();?>plantilla/perfil/assets/img/1032.jpg" class="img-fluid">    
                </div>    
            </div>
</div>
        </section>
        </div>
  </body>
</html>
