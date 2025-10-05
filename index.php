<!DOCTYPE html> <!-- Indica que el documento es HTML5 -->
<html lang="en"> <!-- Inicia el documento HTML y establece el idioma en inglés (en este caso no importa mucho) -->
<head><!-- Se abre el head (Contiene información útil para el navegador y buscadores, como el style, titulo,icono,etc.)-->
  <title>Operaciones Básicas</title> <!-- Título que aparece en la pestaña del navegador -->
  <meta charset="utf-8"> <!-- Codificación de caracteres UTF-8 para poder usar acentos y caracteres especiales -->
  <meta name="viewport" content="width=device-width, initial-scale=1">  <!-- Meta para hacer la página responsive -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"> <!-- Enlace al CSS de Bootstrap para estilos predefinidos -->
  <!-- Enlaces al JS de Bootstrap para funcionalidades interactivas: -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head> <!--se cierra el head-->
<body> <!-- Comienza el cuerpo de la página -->

<div class="jumbotron jumbotron-fluid"> <!--se le da una clase para darle estilo al jumbotron-->
  <div class="container"> <!--contenedor con diseño predeterminado-->
    <h1>Operaciones Básicas</h1>  <!--titulo del jumbotron-->    
   <p>Apoyo para el cálculo de operaciones basicas (suma, resta, multiplicación, división, exponente y factorial), cálculo de áreas y perímetros, mostrar tablas de multiplicar y cálculo de promedios ingresando las calificaciones</p>
  </div> <!--texto dentro del jumbotron y cierre del mismo-->
</div>

<div class="container"> <!--se le da una clase para darle estilo-->
  <h2>Seleccione la opción de su preferencia</h2>
  <br>
  <a href="calculadora.php" class="btn btn-primary btn-block">Calculadora</a><!--es un link al siguiente archivo disfrazado de boton, le da estilo en el archivo css-->
  <br> <!--Saltos de linea-->
  <a href="figuras3.php" class="btn btn-success btn-block">Figuras Geométricas</a><!--es un link al siguiente archivo disfrazado de boton, le da estilo en el archivo css-->
  <br> <!--Saltos de linea-->
  <a href="tablas.php" class="btn btn-primary btn-block">Tablas de multiplicar</a><!--es un link al siguiente archivo disfrazado de boton, le da estilo en el archivo css-->
  <br> <!--Saltos de linea-->
  <a href="promedio.php" class="btn btn-success btn-block">Promedios</a><!--es un link al siguiente archivo disfrazado de boton, le da estilo en el archivo css-->
  <br> <!--Saltos de linea-->

</div> <!--se cierra el bloque de la clase-->

<div class="container"> <!-- Tarjeta que muestra el los nombres del equipo -->
  <div class="card bg-light text-dark"> <!-- Tarjeta con fondo gris claro -->
    <div class="card-body">  <!-- cuerpo de la carta o tarjeta -->
    <h3>Elaborado por:</h3> <!-- Ttitulo de la tarjeta -->
    Santiago David de Vicente Gómez <br> Juan Damián Pérez Hernández <br>  <!--Nombres de integrantes-->
    Omar Perrusquia Alegría <br> Juan Pablo Perrusquia Sánchez <br> José María Uribe Rico</div>
    <div class="container"> <!-- contenedor para una imagen con estilo predeterminado -->         
  <img src="imagenes/x.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">  <!-- dirección de la imagen -->
</div> <!-- cierre de la clase -->
<br>
  </div> <!-- cierre de Tarjeta -->
</div> <!-- cierre de la clase -->

<br> <!-- salto de linea -->



<br> <!-- salto de linea -->

</body>
</html>
