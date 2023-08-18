<?php
    include "modelo/conexion.php"; 

    $id=$_GET["id"];
   
    $sql=$conexion->query("select * from alumno where Id=$id");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
   
</head>
<body>
<form class="col-4 p-3 m-auto" method="POST">
    <h5 class="text-center p-3 alert alert-secondary">Modificar productos</h5>
    <imput type="text"name="id" value="<?= $_GET["id"]?>">
    <?php
    include "controlador/modificar_producto.php";
      while ($datos=$sql->fetch_object()) {?>
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre del estudiante</label>
        <input type="text" class="form-control"name="nombre" value="<?= $datos->Nombre ?>">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Apellido del estudiante</label>
        <input type="text" class="form-control"name="apellido"value="<?= $datos->Apellido ?>">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Correo del estudiante</label>
        <input type="email" class="form-control"name="correo" value="<?= $datos->Correo ?>">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Matricula del estudiante</label>
        <input type="text" class="form-control"name="matricula" value="<?= $datos->Matricula ?>">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Seccion del estudiante</label>
        <input type="text" class="form-control"name="seccion" value="<?= $datos->Seccion ?>">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Calificacion del estudiante</label>
        <input type="text" class="form-control"name="calificacion" value="<?= $datos->Calificacion ?>">
      </div>
    
      <?php }  
      ?>  
    

 

  <button type="submit" class="btn btn-primary"name="btnregistrar" value="ok">Registrar</button>
</form> 
</body>
</html>