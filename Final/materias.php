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
    <title>Materias</title>
</head>
<body>
        <h1>Listas de Materias</h1>



        <form action="modificar.php" method=POST>
    <table>
        <tr>
            <th></th>
        <th>ID Materia</th>
        <th>Nombre</th>
        <th>Carrera</th>
      </tr>
    <?php
        $con= conectar();
        $sql= "select * from materia;";

       $result= mysqli_query($con,$sql);

       while ($registro=mysqli_fetch_row($result)){
        ?>
        <tr>
                <td> <input type="radio" name=productID value="<?php echo $registro[0];?>" required></td>
                <td><?php echo $registro[0];?></td>
                <td><?php echo $registro[1];?></td>
                <td><?php $matnom="select * from materia,carrera where materia.id_materia=".$registro[0]." && carrera.id_carrera=".$registro[2].";";

                        $conmat=mysqli_query($con,$matnom);
                        $resmat=mysqli_fetch_assoc($conmat);

                        echo $resmat['descripcion_carrera']?></td>
        </tr>
    <?php

       }

    ?>

   
    </table>
    <button type="submit" class="btn btn-primary" name="modificar">Modificar Materia</button>
    </form>


</body>
</html>



