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

$sql ="SELECT * FROM datos_personales WHERE Id='1";
$resultado = $conexion->query($sql);
/*
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
    echo "No se han encontrado resultados"
}
        */


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mi Portfolio</title>
    <link rel="stylesheet" type="text/css" href="portfolio.css">
</head>
<body>
  
  <header>
    <div class="header-content">
      <img src="yo.jpeg" alt="Tu Foto">
        <div class="text">
            <h1>Vicente Asensi</h1>
            <h2>21 años</h2>
            <h2>vicenteasensiguerra@gmail.com</h2>
        </div>

    </div>
</header>

    <nav>
        <ul>
            <li><a href="#informacion">Información</a></li>
            <li><a href="#educacion">Educación</a></li>
            <li><a href="#experiencia">Experiencia Laboral</a></li>
            <li><a href="#habilidades">Habilidades Profesionales</a></li>
            <li><a href="#interesesyhobbies">Intereses y Hobbies</a></li>
            <li><a href="#formulario">Formulario</a></li>
            <script src="https://kit.fontawesome.com/29250cc520.js" crossorigin="anonymous"></script>
        </ul>
    </nav>

    <div class="contenedor">
        <h2>Iniciar Sesión</h2>
        <form action="procesar_formulario.php" method="POST">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" required><br><br>

            <input type="submit" value="Iniciar Sesión">
        </form>
    </div>
      <footer>
        <div class="footer-content">

            <p class="nombrefooter">Vicente Asensi</p>
            <ul class="socials">
                <li><a href="https://www.instagram.com/mtheacademy/" target="_blank"><i
                            class="fa-brands fa-instagram"></i></a></li>
            <p>
                <a href="politicaprivaci.html" target="_blank" class="politica-privacidad">Política de
                    Privacidad</a>
            </p>
        </div>

    </footer>

    </main>
</body>
</html>


