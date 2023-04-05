<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
    crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Inicio Sesion</title>
</head>
<div>
<form action=login.php method=post>
	<table>
    <tr><h2>Login</h2></tr>
    <tr><td>Usuario:</td> <td><input type=text name=usuario placeholder="email" maxlength=20 required><br></td></tr>
    <tr><td>Clave:</td><td><input type=password name=pass maxlength=20 placeholder="contraseña" required><br></td></tr>
    <tr><td colspan="2"><br><br><center><input class="" type="submit" value="Ingresar"></center></td></tr> <br>
	<table>
  <?php
        if(isset($_GET['NoUsu'])){
            echo "<br>No existe el usuario ".$_GET['noUsu'];
        }
        if(isset($_GET['badPass'])){
            echo "<br>La contraseña es incorrecta";
        }
    ?>
<form>
	</div><br>
</div>

</body>
</html>