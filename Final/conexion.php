<?php

function conectar(){
    $ser="localhost";
    $usr="root";
    $ps="";
    $bd="final";


    $cnn=mysqli_connect($ser,$usr,$ps,$bd) or die("no se puede conectar a la bd");

    return $cnn;
}
?>