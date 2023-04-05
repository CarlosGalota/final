<?php
session_start();
if(isset($_SESSION['id']) && $_SESSION['rol']==1){

}
else{
    echo "ACCESSO NO AUTORIZADO";
    exit();
}
require "conexion.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Materia</title>
</head>
<body>
    <h1>Modificar Materia</h1>
    <form action="mod.php" method="post">
    <table>

     <tr>
        <th>ID Materia</th>
        <th>Nombre</th>
        <th>ID carrera</th>
        <th>Nombre de Carrera</th>
      </tr>
    <?php
        $con= conectar();
        $id_materia=$_POST['productID'];
        $sql= "select * from materia where id_materia=".$id_materia.";";

       $result= mysqli_query($con,$sql);

       while ($registro=mysqli_fetch_row($result)){
        ?>
        <tr>
              
                <td><input type=hidden name=id value=<?php echo $registro[0];?> ><?php echo $registro[0];?></td>
                <td><input type="text" name=materia value=<?php echo $registro[1];?>></td>
                <td><input type="text" name=id_carrera value=<?php echo $registro[2];?>></td>
                <td> <?php $matnom="select * from materia,carrera where materia.id_materia=".$registro[0]." && carrera.id_carrera=".$registro[2].";";

                        $conmat=mysqli_query($con,$matnom);
                        $resmat=mysqli_fetch_assoc($conmat);

                        echo $resmat['descripcion_carrera']?></td>
        </tr>
    <?php

       }

    ?>
    </table>
    <button type="submit" name="guardar" class="btn btn-primary">Guardar Cambios</button>
       <p>Id de Carreras</p>
       <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Analista de Sistema</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Profesorado de Biologia</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Profesorado de Ingles</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Profesorado de Fisica y quimica</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Profesorado de Matematicas</td>
            <td>6</td>
            <td>Educacion Primaria</td>
        </tr>
        <tr>
            <td>7</td>
            <td>Educacion Inicial</td>
        </tr>
       </table>
    </form>

    <a href="materias.php"><button>Volver</button></a>
</body>
</html>