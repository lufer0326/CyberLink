<!DOCTYPE html>
<html lang="es">
<head>
<link href="../CSS/stylencuesta.css" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENCUESTA DE SATISFACCIÓN</title>
</head>
<body background= "../IMAGENES/kits.png"></body>
<br>
<div class="header">
    <a href="../prueba2.php"><img src="../IMAGENES/flecha.png" alt="Back Arrow" class="back-arrow" width="30" height="30"></a>
<center><h1 id="titulo">SI FUE DE TU AGRADO EL SERVICIO RESPONDE NUESTRA...</h1></center>
</div>
<div class="container">
    <h1>ENCUESTA DE SATISFACCIÓN</h1>
    <form action="../PAGINAS/infoEncuesta.php" method="POST">
        <div class="form-group">
            <label for="nomC">Nombre Completo:</label>
            <div class="input">
            <input name="nomC" id="nomC" class="input" type="text" required pattern="[A-Za-z ]{3,50}" minlength="3" maxlength="50" data-tipo="text" placeholder="Ej. Alvarez Marcial Ximena">
        </div>
        </div>
        <div class="form-group">
            <label for="correo">Correo Electrónico:</label>
            <input type="email" id="correo" name="correo" required>
        </div>
        <div class="form-group">
            <label>¿Cómo calificaría la calidad de nuestros productos?</label>
            <br>
            <label for="calidad"><input type="radio" id="calidad" name="calidad" value="Excelente" required> Excelente</label>
            <br>
            <label for="calidad"><input type="radio" id="calidad" name="calidad" value="Buena"> Buena</label>
            <br>
            <label for="calidad"><input type="radio"id="calidad" name="calidad" value="Regular"> Regular</label>
            <br>
            <label for="calidad"><input type="radio" id="calidad" name="calidad" value="Mala"> Mala</label>
        </div>
        <div class="form-group">
            <label>¿Cómo calificaría nuestro servicio al cliente?</label>
            <br>
            <label for="servicio"><input type="radio" id="servicio" name="servicio" value="Excelente" required> Excelente</label>
            <br>
            <label for="servicio"><input type="radio" id="servicio" name="servicio" value="Buena"> Buena</label>
            <br>
            <label for="servicio"><input type="radio" id="servicio" name="servicio" value="Regular"> Regular</label>
            <br>
            <label for="servicio"><input type="radio" id="servicio" name="servicio" value="Mala"> Mala</label>
        </div>
        <div class="form-group">
            <label >¿Volvería a comprar con nosotros?</label>
            <br>
            <label for="comprar"><input type="radio" id="comprar" name="comprar" value="Sí" required> Sí</label>
            <br>
            <label for="comprar"><input type="radio" id="comprar" name="comprar" value="No"> No</label>
        </div>
        <div class="form-group">
            <label for="comentarios">Comentarios o Sugerencias:</label>
            <br>
            <textarea id="comentarios" name="comentarios" rows="4"></textarea>
        </div>
        <button type="submit">Enviar</button>
    </form>
</div>
</body>
<br>
<br>
<center><a href="../prueba2.php"> <button class="btn btn-primary me-md-2" type="button">REGRESAR</button></a></center>
<footer>
<img src="../IMAGENES/logonegro.jpg" height="50"><p style="color:white">© 2024 CyberLink Infrastructure. Todos los derechos reservados.</p>
    </footer>
</html>
