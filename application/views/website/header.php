<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>plantilla/website/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">    
    <title>Document</title>
</head>
<body>
  <header>
<nav class="navbar navbar-expand-sm bg-light">
    <div class="container-fluid row">
    
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon" ><i class="fas fa-bars" style="color:#000;"></i></span>
</button>
  <div class="col-9">
<div class="collapse navbar-collapse" id="collapsibleNavbar">
  <ul class="navbar-nav">
     <li class="nav-item logo">
                        <a href=""><img src="<?=base_url();?>plantilla/website/img/logo.png"></a>
                   </li>
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
</div>
    <div class="col-3">
      <button onclick="oculta()" class="font-s"><i class="fas fa-search"></i></button>
      <div id="buscar">
        <form class="form-inline" action="/action_page.php">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-success" type="submit">Search</button>
        </form>
    </div>
    </div>
</div>
</nav>
</header>
 
<script type="text/javascript">
  function oculta(){
  document.getElementById("buscar").style.display:'block';
}
</script>