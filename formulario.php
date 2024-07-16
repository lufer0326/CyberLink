<!DOCTYPE html>
<html lang="es">
    <head>
        <title> 
            REGISTRO
        </title>    
        <link href="../CSS/estiloform.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
    </head> 
<body background= "../IMAGENES/kits.png"></body>
<div class="header">
    <a href="../prueba2.php"><img src="../IMAGENES/flecha.png" alt="Back Arrow" class="back-arrow" width="30" height="30"></a>
    <center><h1 id="tit">PARA OBTENER MÁS INFORMACIÓN...</h1></center>
</div>
    <form action="../PAGINAS/informacion.php" method="POST">
    <ul>
    <center><h1>REGÍSTRATE</h1></center>
    <li>
    <div class="input">
    <label for="nom">Nombre</label>
    <input name="nom" id="nom" class="input" type="text" required pattern="[A-Za-z ]{3,20}" minlength="3" maxlength="20" data-tipo="text">
</li>
</div>
<li>
<div class="input">
    <label for="appaterno">Apellido Paterno</label>
    <input name="appaterno" id="appaterno" class="input" type="text" required pattern="[A-Za-z ]{3,20}" minlength="3" maxlength="20" data-tipo="text">
</li>
</div>
<li>
    <div class="input">
    <label for="apmaterno">Apellido Materno</label>
    <input name="apmaterno" id="apmaterno" class="input" type="text" required pattern="[A-Za-z ]{3,20}" minlength="3" maxlength="20" data-tipo="text">
</li>
</div>
<li>
    <label for="nac">Fecha de nacimiento</label>
    <input type="date" id="nac" name="nac" min="1950" max="2024" required>
</li>
<li>
   <div class="input-container">
   <label class="input-label" for="tele">Teléfono</label>
    <input name="tele" id="tele" class="input" type="text" required pattern="^[0-9]{10}$" minlength="10" maxlength="10" data-tipo="number">
</div>
    </li>
<li>
    <label for="sexo">Género</label>
</li>
<center><li> 
<label for="fem">Femenino</label>    
<input type="radio" name="sexo" id="fem" value="Femenino" required>
    
    <label for="mas">Masculino</label>
    <input type="radio" name="sexo" id="mas" value="Masculino">
    </center>
    <br>
    <li>
    <label>¿Qué paquete es de tú interés?</label>
    </li>
    <li>
    <input type="checkbox" name="tac" id="tac" value="1">
    <label for="tac">2 cámaras</label>
    </li>
    <li>
    <input type="checkbox" name="piz" id="piz" value="1">
    <label for="piz">4 cámaras</label>
    </li>
    <li>
    <input type="checkbox" name="ham" id="ham" value="1">
    <label for="ham">8 cámaras</label>
    </li>
    <li>
    <input type="checkbox" name="cam" id="cam" value="1">
    <label for="cam">16 cámaras</label>
    </li>
    <li>
    <button class="button-regresar" type="submit">Enviar</button>
    </li>
</ul>
</form>
<br>
<center><a href="../prueba2.php"><button class="button-regresar" type="button">REGRESAR</button></a></center>
<footer>
<img src="../IMAGENES/logonegro.jpg" height="50"><p style="color:white">© 2024 CyberLink Infrastructure. Todos los derechos reservados.</p>
    </footer>
</body>

</html>