<?php
function conectar(){
    $usuario='root';
    $password='';
    $servidor='localhost';
    $db="ejemplo1";

    $conexion= mysqli_connect($servidor,$usuario,$password)
    or die ("Error al conectar la base de datos".mysql_error());
    mysqli_select_db($conexion,$db);
    return $conexion;
}
?>