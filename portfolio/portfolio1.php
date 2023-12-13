<?php
$servidor = "localhost"; // El servidor que utilizaremos, en este caso será el localhost 
$usuario = "camarafp"; // El usuario que acabamos de crear en la base de datos 
$contraseña = "1234"; // La contraseña del usuario que utilizaremos 
$BD = "camarafp"; // El nombre de la base de datos 
$conexion = new mysqli($servidor, $usuario, $contraseña, $BD);

if (!$conexion) { 
    die('<strong>No pudo conectarse:</strong> ' . mysql_error()); 
}else{ 
} 
mysqli_select_db($conexion, $BD) or die(mysqli_error($conexion));

/*
$sql ="SELECT * FROM datos_personales WHERE Id='1";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        $Nombre = $fila["Nombre"];
        $Apellidos = $fila["Apellidos"];
        $Edad = $fila["Edad"];
        $Telefono = $fila["Telefono"];
        $Email = $fila["Email"];
        $Direccion = $fila["Direccion"];
    }
}else{
    echo "No se han encontrado resultados"}
    */
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet" type="text/css" />
    <title>Portafolio Jesus Miralles</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#proyectos">Proyectos</a></li>
                <li><a href="#acerca-de-mi">Acerca de Mí</a></li>
                <li><a href="#curriculum">Currículum</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <section id="inicio">
            <h1>Jesus Miralles Corachan</h1>
            <p>Soy un desarrollador junior en proceso con conocimientos basicos de aplicaciones web y móviles.</p>
        </section>

        <section id="proyectos">
            <h2>Proyectos Destacados</h2>
            <div class="proyecto">
                <img src="proyecto1.jpg" alt="Proyecto 1">
                <h3>Proyecto 1</h3>
                <p>Este fue mi primer proyecto de mi Primera web</p>
            </div>
            <div class="proyecto">
                <img src="proyecto2.jpg" alt="Proyecto 2">
                <h3>Proyecto 2</h3>
                <p>El Proyecto 2 consiste en la creacion de una tienda online.</p>
            </div>
        </section>

        <section id="acerca-de-mi">
            <h2>Acerca de Mí</h2>
            <p>Soy un pequeño apasionado el desarrollo de aplicaciones web y móviles. Mi experiencia incluye trabajos con lenguajes como Java,HTML,CSS.</p>
        </section>

        <section id="curriculum">
            <h2>Currículum</h2>
            <div class="curriculum">
                <h3>Educación</h3>
                <p>Grado medio en Informática - Sistemas microinformaticos y redes</p>
                <p>Titulacion extra : Certificado de CISCO Network Academy</p>
                <h3>Experiencia Laboral</h3>
                <p>Traspaso de sede de una Empresa</p>
                <p>Residencia de Ancianos Campolivar</p>
            </div>
        </section>

        <section id="contacto">
        <!DOCTYPE html>
<html>
<head>
    <title>Formulario de Contacto</title>
    <style>
        label {
            display: block;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h2>Formulario de Contacto</h2>
    <form action="procesar_formulario.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono"><br>

        <label for="asunto">Asunto:</label>
        <input type="text" id="asunto" name="asunto" required><br>

        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" rows="6" required></textarea><br>

        <label for="archivo_adjunto">Adjuntar archivo:</label>
        <input type="file" id="archivo_adjunto" name="archivo_adjunto"><br>

        <label for="opciones">Motivo de contacto:</label>
        <select id="opciones" name="motivo">
            <option value="consulta">Consulta</option>
            <option value="comentario">Comentario</option>
            <option value="solicitud">Solicitud</option>
        </select><br>

        <label for="newsletter">Suscribirse al boletín:</label>
        <input type="checkbox" id="newsletter" name="suscripcion" value="si"> Sí, deseo suscribirme al boletín informativo.<br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>

        </section>
    </main>

    <footer>
        <p>&copy; Portafolio de Jesus Miralles</p>
    </footer>
</body>
</html>
