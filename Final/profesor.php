<?php
session_start();
if(isset($_SESSION['id'])&& $_SESSION['rol']==1){

}
else{
    echo "ACCESSO NO AUTORIZADO";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profesores</title>
</head>


<body>
        
<form class="sesion" action=loggout.php>
    <?php
echo "Sesión iniciada como " .$_SESSION['usuario']. "<br>";
    ?>
	  <?php
echo "Hola, ".$_SESSION['nombre']. "<br>";
    ?>
    <input type=submit value="Cerrar sesión">
    
</form>

	
    <div class="containerInicio">
        <p><h2>Bienvenido al Sistema de Calificaciones</h2></p>
	<div>
	<form action>
       	<input type=text name="apellido" maxlength=20 placeholder="apellido" required><button class="botones" type="submit" formaction="buscarAlumno.php" formmethod="post">Buscar alumno</button></form> <br><br>
		   <form>
		<button class="botones" type="submit" formaction="calificacionProf.php" formmethod="post">Cargar Parciales</button>
		<button class="botones" type="submit" formaction="final.php" formmethod="post">Cargar Final</button> 
    </form>
    </div>
    </div>
