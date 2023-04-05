<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <div>
            <h2 class="titulo">INGRESAR DATOS</h2>
        </div>
    </header>
    
    <form action="" method=Post>
    <div class="usuarios">
    <table>
        <tr>
            <td colspan="3"><H3 class="titulo">TABLA USUARIO</H3></td>
        </tr>
        <tr>
            <td>Nombre</td>
            <td><input type=text maxlength=32 name=nombre required></td>
        </tr>   
        <tr>
            <td>Apellido</td>
            <td><input type=text maxlength=32 name=apellido required></td>
        </tr>
        <tr>
            <td>DNI</td>
            <td><input type=number maxlength=10 name=dni required></td>
        </tr>
        <tr>

            <td><label>Usuario</label></td>
            <td><input type=text maxlength=64 name=usuario required></td>
        </tr>
        <tr>
            <td>Pass</td>
            <td><input type=password maxlength=128 name=pass required></td>
        </tr>
        <tr>
            <td>Rol</td>
            <td><select name=rol required>
                <option value="2">Profesor</option>
                <option value="1">Administrador</option>
                <option value="3">Alumno</option>
            </select></td>
</tr>
        </table>
        <input type="submit" value="Cargar Usuario" name="cargar">
</form>

</div>

<h1>Agregar Materia</h1>

<div class="materia">
<form action="" method=POST>
    <TABLE>
        <tr>
            <th>Nombre Materia</th>
            <td><input type="text" name="nombreMateria"></td>
            <th>Carrera</th>
            <td><select name=carrera required>
                <option value="1">Analista de Sistema</option>
                <option value="2">Biologia</option>
                <option value="3">Ingles</option>
                <option value="4">Fisica y Quimica</option>
                <option value="5">Matematica</option>
                <option value="6">Educacion Primaria</option>
                <option value="7">Educacion Inicial</option>
            </select></td>
        </tr>
    </TABLE>
    <input type="submit" value="Cargar Materia" name=cargarMateria>
    </form>
    <form action="materias.php" method="POST">
    <button type="submit" class="btn btn-primary">Listar Materias</button>
    </form>

</div>
</body>
</html>

<?php
// Cargar Usuario
    if(isset($_POST['cargar'])){
        require "conexion.php";
        $conn= conectar();
    
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $dni=$_POST['dni'];
        $usuario=$_POST['usuario'];
        $password=$_POST['pass'];
        $rol=$_POST['rol'];
        //comprobacion si se recibe correctamente los datos.
        //echo $nombre,$apellido,$dni,$usuario,$password, $rol;
    
        $sql="INSERT INTO usuarios VALUE (null,'$nombre','$apellido',$dni,'$usuario','$password',$rol);";
    
        $result= mysqli_query($conn,$sql);

        if (mysqli_affected_rows($conn)>0){ 

            echo '<script>alert("Los datos se han cargado correctamente");</script>';
        }else{ 
           
            echo '<script>alert("Los datos no se han cargado correctamente");</script>';
    }
    }

   ?>

<?php
        if(isset($_POST['cargarMateria'])){
        require "conexion.php";
        $conn=conectar();
        $nombMateria=$_POST['nombreMateria'];
        $carrera=$_POST['carrera'];
        $sql="insert into materia value (null, '$nombMateria',$carrera); ";
        $resulset=mysqli_query($conn, $sql);

       if (mysqli_affected_rows($conn)>0){

              echo '<script>alert("La Materia se cargo correctamente");</script>';
        }else{ 
           
            echo '<script>alert("Los datos no se han cargado correctamente");</script>';
    }
       }
    
        ?>