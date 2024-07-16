<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../CSS/estilocons.css"/>
    </head>
    <body>
    
<?php
if(isset($_GET["idE"],$_GET["nom"])){
    $idElim=$_GET["idE"];
    $nombre=$_GET["nom"];
    echo "<form action= 'eliminarPersona.php'
    method='post'>
    <h1 style='color:white'>¿Seguro que deseas eliminar a ".$nombre."?</h1>";
    echo "<br><button type= 'submit' name='btnSi'
    value='".$idElim."'>Si</button>
    </form><br>
    <a href='consultaPersona.php'><button>No</button>
    </a>";
}
if(isset($_POST["btnSi"])){
 include("conexion.php");
 $conexion=conectar();
 $respuesta=mysqli_query($conexion,
 "Delete from persona2 where id_persona=".$_POST["btnSi"]);
 echo "<h1 style='color:white'> ¡Se ha eliminado con exito!</h1>
 <a href='consultaPersona.php'>Regresar</a>";
}?>

</body>
</html>