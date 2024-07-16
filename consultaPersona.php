<!DOCTYPE html>
<html>
    <head>
        <title>CONSULTA REGISTROS</title>
        <link rel="stylesheet" href="../CSS/estilocons.css"/>
    </head>
    <body>
        <table>
            <tr>
                <th colspan="12">Información Persona</th>
            </tr>
            <tr>
                <td>Nombre</td>
                <td>Apellido Paterno</td>
                <td>Apellido Materno</td>
                <td>Fecha de nacimiento</td>
                <td>Género</td>
                <td>Teléfono</td>
                <td>Paquete 1</td>
                <td>Paquete 2</td>
                <td>Paquete 3</td>
                <td>Paquete 4</td>
                <td>Eliminar</td>
                <td>Actualizar</td>
            </tr>
            <?php
            include("conexion.php");
            $conexion=conectar();
            $query=mysqli_query($conexion,"Select*from persona2");
            while($valores=mysqli_fetch_array($query)){
                echo "<tr><td>".$valores['nombre']."</td>
                <td>".$valores['ap_pat']."</td>
                <td>".$valores['ap_mat']."</td>
                <td>".$valores['fec_nac']."</td>
                <td>".$valores['gen']."</td>
                <td>".$valores['telefono']."</td>
                <td>".$valores['pack1']."</td>
                <td>".$valores['pack2']."</td>
                <td>".$valores['pack3']."</td>
                <td>".$valores['pack4']."</td>
                <td><a href='eliminarPersona.php?idE=
                ".$valores['id_persona']."&nom=
                ".$valores['nombre']."'><button>Eliminar</button></a>
                </td>
                <td><a href='actualizarPersona.php?idE=
                ".$valores['id_persona']."'><button>Actualizar</button></a>
                </td>
                </tr>";}
                ?>

        </table>
    </body>
</html>