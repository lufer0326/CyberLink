<!DOCTYPE html>
<html lang="es">
<head>
    <title>INFORMACIÓN DE USUARIO</title>    
    <link rel="stylesheet" href="../CSS/estilocons.css">
</head>
<body>
<?php
    $nom = "";
    $paterno = "";
    $materno = "";
    $sexo = "";
    $tele = "";
    $cam = "";
    $tac = "";
    $piz = "";
    $ham = "";
    $nac = "";
    $errores = 0;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["nom"], $_POST["appaterno"], $_POST["apmaterno"], $_POST["nac"])) {
            $nom = $_POST["nom"];
            $paterno = $_POST["appaterno"];
            $materno = $_POST["apmaterno"];
            $nac = $_POST["nac"];
        }

        if (isset($_POST["sexo"])) {
            $sexo = $_POST["sexo"];
        }

        if (isset($_POST["tele"])) {
            $tele = $_POST["tele"];
        }

        if (isset($_POST["tac"])) {
            $tac = $_POST["tac"];
        }

        if (isset($_POST["piz"])) {
            $piz = $_POST["piz"];
        }

        if (isset($_POST["ham"])) {
            $ham = $_POST["ham"];
        }

        if (isset($_POST["cam"])) {
            $cam = $_POST["cam"];
        }

        if ($errores == 0) {
            include("conexion.php");
            $conexion = conectar();
            $respuesta = mysqli_query($conexion, "INSERT INTO persona2 (nombre, ap_pat, ap_mat, fec_nac, gen, telefono, pack1, pack2, pack3, pack4) 
            VALUES('$nom','$paterno','$materno','$nac','$sexo',$tele,'$tac','$piz','$ham','$cam')");

            if ($respuesta == 1) {
                echo "<br><h1 style='color:white'>¡Los datos ingresados se registraron con éxito!</h1><br>";
                echo "<img src=../IMAGENES/checked.gif>";
            }
        }
    }
    ?>
    <h3 align="bottom-left">
        <br>
        <img src="../IMAGENES/88450.png" height="50" alt="Regresar al formulario"><br>
        <a style="color:white" href="../PAGINAS/formulario.php">Regresar al formulario</a>
    </h3> 
    <h3 align="right">
        <a style="color:white" href="../prueba2.php">Regresar a la página principal 
        <img src="../IMAGENES/25694.png" height="60" alt="Regresar a la página principal"></a>
    </h3>
</body>
</html>
