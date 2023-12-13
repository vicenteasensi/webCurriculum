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

$sql ="SELECT * FROM datos_personales WHERE Id='1';
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
            <li><a href="formulario.php">Formulario</a></li>
            <script src="https://kit.fontawesome.com/29250cc520.js" crossorigin="anonymous"></script>
        </ul>
    </nav>

    <main>
        <section id="informacion">
            <h2>Información</h2>
         
        </section>

        <section id="educacion">
            <h2>Educación</h2>
        
        </section>

        <section id="experiencia">
            <h2>Experiencia Laboral</h2>
        
        </section>

        <section id="habilidades">
            <h2>Habilidades Profesionales</h2>
      
        </section>

        <section id="interesesyhobbies">
            <h2>Intereses</h2>
       
        </section>

   

        
        
        <section class="faqs">
          <h2 class="h2faqs">PREGUNTAS FRECUENTES</h2>

          <details>
              <summary>¿Por qué es mejor un desarrollo a medida que un programa ya hecho?</summary>
              <p>Al contratar un desarrollo a medida estás apostando e inviertiendo por NO pagar licencias, por NO
                  tener tus datos en un programa de terceros, estás apostando por tener un programa propio que se
                  adapte a tu forma de trabajar y no al revés y que además le puedes ir haciendo crecer, puedes ir
                  ampliando la funcionalidad según necesites… ¿es mejor o no?</p>
          </details>

          <details>
              <summary>¿Qué garantía ofrece un desarrollo a medida?</summary>
              <p>No te vamos a engañar: cuando contratas un desarrollo a medida vas a encontrarte errores al principio
                  de su uso… ¡es normal! Ten en cuenta que hacemos un programa exclusivo y adaptado a tu negocio, por
                  lo que es imposible probar todos los casos de uso… ¿Lo más importante? Que independientemente de
                  cuándo detectes el error, nuestro equipo de soporte lo solventará SIN COSTE ALGUNO (como es lógico).
              </p>
          </details>

          <details>
              <summary>¿Qué ocurre si detecto un error?</summary>
              <p>¡Que cuentas con nuestro equipo de Soporte! Un equipo propio que te atenderá por email, chat,
                  Whatshap o teléfono y resolverá y solventará todo lo que necesites.</p>
          </details>

          <details>
              <summary>¿Es muy caro un desarrollo a medida?</summary>
              <p>¡No! Nosotros te vamos a ser sinceros: ¡reutilizamos código! Pero esto no lo hacemos solo nosotros,
                  lo hace todos los programadores y quien te diga que no, miente. Al poder reutilizar código, hace que
                  nuestros desarrollos no tengan un precio tan elevado como el que puedes imaginar cuando se habla de
                  «a medida»</p>
          </details>

          <details>
              <summary>¿Qué ocurre si en un futuro necesito una nueva funcionalidad?</summary>
              <p>¡Sin problema! Al ser a medida y de tu propiedad podemos desarrollar en cualquier momento la
                  ampliación o nueva funcionalidad que necesites.</p>
          </details>

      </section>
      
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


