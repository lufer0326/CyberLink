<!DOCTYPE html>
<html>
    <head> 
      
    <link rel="stylesheet" href="../CSS/actualizar.css"/>
         <meta charset ="UTF-8">
         <meta name ="viewport" content="width=device-width, initial-scale = 1.0">
</head>
<body>
    <?php
    include("conexion.php");
    $conexion=conectar();
    if(isset($_GET["idE"])){
        $query=mysqli_query($conexion,"Select*from persona2 where id_persona=".$_GET["idE"]);
        while($valores=mysqli_fetch_array($query)){
            
            echo " <form action='actualizarPersona.php' method='POST'>
            <input type='hidden' name='id' value='".$valores['id_persona']."'>
    <ul>
    <center><h1>ACTUALIZAR DATOS</h1></center>
    <li>
    <br>
    <label for='nom' >Nombre</label>
    <input type='text' id='nom' name='nom' value=".$valores['nombre']." required>
</li>
<br>
<li>
    <label for='appaterno'>Apellido Paterno</label>
    <input type='text' id='appaterno' name='appaterno' value=".$valores['ap_pat']." required>
</li>
<br>
<li>
    <label for='apmaterno'>Apellido Materno</label>
    <input type='text' id='apmaterno' name='apmaterno' value=".$valores['ap_mat']." required>
</li>
<br>
<li>
    <label for='nac'>Fecha de nacimiento</label>
    <input type='date' id='nac' name='nac' min='1950' max='2024' value=".$valores['fec_nac']." required>
</li>
<br>
<button type='submit' name='btn_form'>Actualizar</button>
</form>";
    
    }
    
}

if (isset($_POST["nom"], $_POST["appaterno"], $_POST["apmaterno"], $_POST["nac"])) {
$respuesta=mysqli_query($conexion,"UPDATE persona2 set
nombre='".$_POST["nom"]."', ap_pat='".$_POST["appaterno"]."', ap_mat='".$_POST["apmaterno"]."', fec_nac='".$_POST["nac"]."'
where id_persona=".$_POST["id"].";");

if($respuesta==1){
    echo"<br><h1 style='color:white'>¡Registro Actualizado!</h1><br>
    <a href='consultaPersona.php'>Regresar</a>";
}
}
?>
</body>
</html>
