<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../CSS/estilocons.css"/>
    </head>
    <body>
<?php
if(isset($_GET["idE"],$_GET["nomC"])){
    $idElim=$_GET["idE"];
    $nomC=$_GET["nomC"];
    echo "<form action= 'eliminarEnc.php'
    method='post'>
    <h1 style='color:white'>¿Seguro que deseas eliminar a ".$nomC."?</h1>";
    echo "<br><button type= 'submit' name='btnSi'
    value='".$idElim."'>Si</button>
    </form><br>
    <a href='consEncuesta.php'><button>No</button>
    </a>";
}
if(isset($_POST["btnSi"])){
 include("conexionEnc.php");
 $conexion=conectar();
 $respuesta=mysqli_query($conexion,
 "Delete from persona1 where id_persona=".$_POST["btnSi"]);
 echo "<h1 style='color:white'> ¡Se ha eliminado con exito!</h1>
 <a href='consEncuesta.php'>Regresar</a>";
}?>
</body>
</html>