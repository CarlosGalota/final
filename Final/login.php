<?php
$usuario=$_POST['usuario'];
$pass=$_POST['pass'];

require "conexion.php";

$conn=conectar();

$sql="select * from usuarios where usuario='$usuario';";

$resulset=mysqli_query($conn,$sql);

$registro=mysqli_fetch_assoc($resulset);


if(mysqli_affected_rows($conn)>0){


   if($pass==$registro['pass']){
        
    session_start();

        $i=$registro['id'];
        $datos="select * from usuarios where id='$i'";
        $resulset=mysqli_query($conn,$datos);
        $r=mysqli_fetch_assoc($resulset);
    
    $_SESSION['id']=$registro['id'];
    $_SESSION['matricula']=$r[0];
    $_SESSION['pro_id']=$r[0];
    $_SESSION['pre_id']=$r[0];
    $_SESSION['carrera_id']=$r[4];
    $_SESSION['nombre']=$r[1]. " ".$r[2];
    $_SESSION['usuario']=$usuario;
    $_SESSION['rol']=$registro['rol'];
    $_SESSION['carrera_id']=$r['carrera_id'];

    
    switch($_SESSION['rol']){
        case 1:
            //Administrador
            header("location:administrador.php");
            
            break;
        case 2:
            //Profesor
            header("location:profesor.php");
            break;
        case 3:
            //Alumno
            header("location:alumno.php");
            break;
        default:
            //otros
            echo "No se encontraron coincidencias";
            break;
    }
   }
   else{
    header ("location: Ingresar.php?badPass");
   }
}
else{
    header("location: Ingresar.php?noUsu=$usuario");
}

?>