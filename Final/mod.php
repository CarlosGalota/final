<?php
        require "conexion.php";
        $con=conectar();
        $materia=$_POST['materia'];
        $id_carrera=$_POST['id_carrera'];
        $id=$_POST['id'];
        $conn=conectar();

        $sql= "update materia set descripcion_materia='$materia', id_carrera=".$id_carrera." where id_materia=".$id."; ";

        mysqli_query($con,$sql);

        if(mysqli_affected_rows($con)>0){
            echo '<script>alert("Los datos se han cargado correctamente");</script>';
        }
        else{
            echo '<script>alert("Los datos no se pudieron cargar");</script>';
        }
        

       ?>