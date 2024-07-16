<!DOCTYPE html>
<html>
    <head>
        <title>CONSULTA ENCUESTA</title>
        <link rel="stylesheet" href="../CSS/estilocons.css"/>
    </head>
    <body>
        <table>
            <tr>
                <th colspan="7">Información</th>
            </tr>
            <tr>
                <td>Nombre Completo</td>
                <td>Correo Electrónico</td>
                <td>¿Cómo calificaría la calidad de nuestros productos?</td>
                <td>¿Cómo calificaría nuestro servicio al cliente?</td>
                <td>¿Volvería a comprar con nosotros?</td>
                <td>Comentarios o Sugerencias</td>
                <td>Eliminar</td>
            </tr>
            <?php
            include("conexionEnc.php");
            $conexion=conectar();
            $query=mysqli_query($conexion,"Select*from persona1");
            while($valores=mysqli_fetch_array($query)){
                echo "<tr><td>".$valores['nombre']."</td>
                <td>".$valores['correo']."</td>
                <td>".$valores['calidad']."</td>
                <td>".$valores['servicio']."</td>
                <td>".$valores['comprar']."</td>
                <td>".$valores['comentarios']."</td>
                <td><a href='eliminarEnc.php?idE=
                ".$valores['id_persona']."&nomC=
                ".$valores['nombre']."'><button>Eliminar</button></a>
                </td>
                </tr>";}
                ?>

        </table>
    </body>
</html>