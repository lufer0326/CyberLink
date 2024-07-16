<!DOCTYPE html>
<html lang="es">
    <head>
        <title>
            INFORMACIÓN DE ENCUESTA
        </title>    
        <link rel="stylesheet" href="../CSS/estilocons.css">
    </head>
    <body>
<?php
$nomC="";
$correo="";
$cal="";
$serv="";
$comp="";
$comen="";
$errores=0;
if (isset($_REQUEST["nomC"])) {
$nomC=$_REQUEST["nomC"];
$longitud_nomC = strlen($nomC);
if($longitud_nomC==0){
    $errores++;
    echo "El nombre no puede estar vacío.";
    }else if($longitud_nomC > 50){
        $errores++;
        echo "El nombre supera los 30 carácteres ( ingresó ".$longitud_nomC." carácteres )";
    }
}
if (isset($_REQUEST["correo"])) {
    $correo=$_REQUEST["correo"];
}
if (isset($_REQUEST["calidad"])) {
    $cal=$_REQUEST["calidad"];
}
if (isset($_REQUEST["servicio"])) {
    $serv=$_REQUEST["servicio"];
}
if (isset($_REQUEST["comprar"])) {
    $comp=$_REQUEST["comprar"];
}
if (isset($_REQUEST["comentarios"])) {
    $comen=$_REQUEST["comentarios"];
}
if ($errores == 0){
    include("conexionEnc.php");
    $conexion=conectar();
    $respuesta=mysqli_query($conexion,"INSERT INTO persona1 (nombre, correo, calidad, servicio, comprar, comentarios) 
    VALUES('$nomC','$correo','$cal','$serv','$comp','$comen')");
if($respuesta==1)
    echo"<br><h1 style='color:white'>¡Los datos ingresados se registraron con éxito!</h1><br><br>";

    echo "<img src=../IMAGENES/checked.gif>";
}
?>
<br>
<br>
<br>
<br>
<br>
<br>
<a style="color:white" href="../prueba2.php">Regresar a la página principal 
<img src="../IMAGENES/25694.png" height="60" alt="Regresar a la página principal"></a>
</body>

