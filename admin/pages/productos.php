<?php
include ("../inc/header.php");
?>


<?php

$txtID = (isset($_POST['txtID']))?$_POST['txtID']:"";
$txtNombre = (isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
$txtImagen = (isset($_FILES['txtImagen']['name']))?$_FILES['txtImagen']['name']:"";
$accion = (isset($_POST['accion']))?$_POST['accion']:"";

include ('../config/db.php');

switch($accion) {
    case "Agregar";
        $sentenciaSQL = $conexion->prepare("INSERT INTO `libros` (`id`, `nombre`, `imagen`) VALUES (NULL, :nombre, :imagen);");
        $sentenciaSQL->bindParam(':nombre', $txtNombre);
        $sentenciaSQL->bindParam(':imagen', $txtImagen);
        $sentenciaSQL->execute();
        break;
    
    case "Modificar";
        break;

    case "Cancelar";
        break;
}


?>

<div class="row">
    <div class="col-md-5">

        <div class="card">
            <div class="card-header">
                <center><h1>Datos</h1></center>
            </div>
            <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
            <div class = "form-group">
                <label for="txtID">ID</label>
                <input type="text" class="form-control" id="txtID" name="txtID" placeholder="ID">
            </div>

            <div class = "form-group">
                <label for="txtName">Nombre</label>
                <input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="Nombre">
            </div>

            <div class = "form-group">
                <label for="txtImagen">Imagen</label>
                <input type="file" class="form-control" id="txtImagen" name="txtImagen" placeholder="Nombre">
            </div>
            <div class="btn-group" role="group" aria-label="">
                <button type="submit" name="accion" value="Agregar" class="btn btn-success">Agregar</button>
                <button type="submit" name="accion" value="Modificar" class="btn btn-warning">Modificar</button>
                <button type="submit" name="accion" value="Cancelar" class="btn btn-info">Cancelar</button>
            </div>
        </form>  
            </div>
        </div>
    </div>

    <div class="col-md-7">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">1</td>
                    <td>Aprende php</td>
                    <td>imagen.jpg</td>
                    <td>Selecionar || borrar</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>



<?php
include ("../inc/footer.php");

?>