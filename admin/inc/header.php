<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title></title>
</head>
<body>

    <?php $url="http://".$_SERVER['HTTP_HOST']."/camilosolanorodriguez/sitioWeb";?>

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="../admin/inicio.php"><span>Estas en el administrador de este sitio web</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo $url;?>/admin/inicio.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo $url;?>/admin/pages/productos.php">Libros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo $url;?>/admin/pages/cerrar.php">Cerrar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo $url;?>"><b>sitio Web</b></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<br><br>

<div class="container">