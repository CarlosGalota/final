<?php

    require "conexion.php";
    $conn= conectar();

    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $dni=$_POST['dni'];
    $usuario=$_POST['usuario'];
    $password=$_POST['pass'];
    $rol=$_POST['rol'];
    
    echo $nombre,$apellido,$dni,$usuario,$password, $rol;

    $sql="INSERT INTO usuarios VALUE (null,'$nombre','$apellido',$dni,'$usuario','$password',$rol);";

    $result= mysqli_query($conn,$sql);

//if (mysqli_affected_rows($conn)>0){ 

    //recibo el último id
    //$ultimo_id = mysqli_insert_id($conn); 
    //echo $ultimo_id; 
//}else{ 
    //echo "La inserción no se realizó"; }

   
   
   ?>