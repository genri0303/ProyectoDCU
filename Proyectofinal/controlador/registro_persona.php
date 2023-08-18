<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) && !empty($_POST["apellido"]) && !empty($_POST["correo"]) && !empty($_POST["matricula"]) && !empty($_POST["seccion"]) && !empty($_POST["calificacion"])) {
        
       $nombre= $_POST["nombre"];
       $apellido= $_POST["apellido"];
       $correo= $_POST["correo"];
       $matricula= $_POST["matricula"];
       $seccion= $_POST["seccion"];
       $calificacion= $_POST["calificacion"];

        $sql=$conexion->query("insert into alumno(Nombre,Apellido,Correo,Matricula,Seccion,Calificacion) values('$nombre','$apellido','$correo',$matricula, '$seccion', $calificacion ) ");
        if ($sql==1) {
            echo '<div class= "alert alert-success">Alumno registrado correctamente</div>';
        } else {
            echo '<div class= "alert alert-danger">Error al registrar</div>';  
        }
        

    } else {
        echo '<div class= "alert alert-warning">Algunos de los campos esta vacio</div>'; 
    }
}

?>
