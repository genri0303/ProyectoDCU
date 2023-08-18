<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduScore</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d1ab82c716.js" crossorigin="anonymous"></script> 
</head>
<body>
   
    <div class="container-fluid row">
    <form class="col-4 p-3" method="POST">
    <h3 class="text-center p-3 alert alert-secondary">EduScore</h3>
    <?php
   include "modelo/conexion.php";
   include "controlador/registro_persona.php";
    ?>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre del estudiante</label>
    <input type="text" class="form-control"name="nombre">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Apellido del estudiante</label>
    <input type="text" class="form-control"name="apellido">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Correo del estudiante</label>
    <input type="email" class="form-control"name="correo">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Matricula del estudiante</label>
    <input type="text" class="form-control"name="matricula">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Seccion del estudiante</label>
    <input type="text" class="form-control"name="seccion">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Calificacion del estudiante</label>
    <input type="text" class="form-control"name="calificacion">
  </div>


  <button type="submit" class="btn btn-primary"name="btnregistrar" value="ok">Registrar</button>
</form> 
<div class="col-8 p-4">
<table class="table">
  <thead class="bg-info">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Correo</th>
      <th scope="col">Matricula</th>
      <th scope="col">Seccion</th>
      <th scope="col">Calificacion</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php 
    include "modelo/conexion.php";
    $sql=$conexion->query("select * from alumno");
    while($datos=$sql->fetch_object()){ ?>
      
      <tr>
      <td><?= $datos->Id?></td>
      <td><?= $datos->Nombre?></td>
      <td><?= $datos->Apellido?></td>
      <td><?= $datos->Correo?></td>
      <td><?= $datos->Matricula?></td>
      <td><?= $datos->Seccion?></td>
      <td><?= $datos->Calificacion?></td>
      <td>
      <a href="modificar_producto.php?id=<?= $datos->Id ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
      <a href="" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
      </td>
    </tr>
    
    <?php } ?>  
  
  </tbody>
</table>
</div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>