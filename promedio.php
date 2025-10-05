<!DOCTYPE html>  <!-- Indica que el documento es HTML5 -->
<html lang="en"> <!-- Inicia el documento HTML y establece el idioma en inglés -->
<head><!-- Se abre el head (Contiene información útil para el navegador y buscadores, como el style, titulo,icono,etc.)-->
  <title>Promedios 1er parcial</title><!-- Título que aparece en la pestaña del navegador -->
  <meta charset="utf-8"> <!-- Codificación de caracteres UTF-8 para poder usar acentos y caracteres especiales -->
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Meta para hacer la página responsive -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> <!-- Enlace al CSS de Bootstrap para estilos predefinidos -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> <!-- Enlace al JS de Bootstrap para funcionalidades interactivas -->
</head> <!--se cierra el head-->
<body> <!-- Comienza el cuerpo de la página -->

        <?php
        // Recuperar valores de los inputs si existen, para mantenerlos en el formulario
        if (isset($_POST['ingles'])) { // Si se envió un valor para Inglés
            $valor = $_POST['ingles'];  // Guardarlo en $valor
        } else {
            $valor = ''; // Si no, inicializar como vacío
        }

        if (isset($_POST['energia'])) { // Si se envió un valor para "La Energía y procesos de la vida"
            $valor2 = $_POST['energia']; // Guardarlo en $valor2
        } else {
            $valor2 = ''; // Si no, inicializar como vacío
        }

        if (isset($_POST['aplicaciones'])) { // Si se envió un valor para "Aplicaciones de Pensamiento Matemático"
            $valor3 = $_POST['aplicaciones']; // Guardarlo en $valor3
        } else {
            $valor3 = ''; // Si no, inicializar como vacío
        }

        if (isset($_POST['conciencia'])) { // Si se envió un valor para "Conciencia Histórica II"
            $valor4 = $_POST['conciencia']; // Guardarlo en $valor4
        } else {
            $valor4 = ''; // Si no, inicializar como vacío
        }

        if (isset($_POST['temas'])) { // Si se envió un valor para "Temas Selectos de Matemáticas"
            $valor5 = $_POST['temas']; // Guardarlo en $valor5
        } else {
            $valor5 = ''; // Si no, inicializar como vacío
        }

        if (isset($_POST['s1'])) { // Si se envió un valor para submódulo M4S1
            $valor6 = $_POST['s1']; // Guardarlo en $valor6
        } else {
            $valor6 = ''; // Si no, inicializar como vacío
        }

        if (isset($_POST['s2'])) { // Si se envió un valor para submódulo M4S2
            $valor7 = $_POST['s2']; // Guardarlo en $valor7
        } else {
            $valor7 = ''; // Si no, inicializar como vacío
        }

        if (isset($_POST['m4'])) { // Si se envió un valor para el promedio del módulo M4
            $valor8 = $_POST['m4']; // Guardarlo en $valor8
        } else {
            $valor8 = ''; // Si no, inicializar como vacío
        }

        // Si se presiona "calcular"
        if(isset($_POST['ingresar'])){

          // Recuperar y validar cada valor, si está vacío asignar 0
            $num1 = $_POST['ingles']; // Recupera calificación de Inglés y lo guarda en la variable "num1"
            if($num1 == ""){
                $num1 = 0; // Si está vacío, poner 0
            }

            $num2 = $_POST['energia']; // Recupera calificación de la energia y lo guarda en la variable "num2"
            if($num2 == ""){
                $num2 = 0; // Si está vacío, poner 0
            }

            $num3 = $_POST['aplicaciones']; // Recupera calificación de aplicaciones (matemáticas) y lo guarda en la variable "num3"
            if($num3 == ""){
                $num3 = 0; // Si está vacío, poner 0
            }

            $num4 = $_POST['conciencia']; // Recupera calificación de conciencia historica y lo guarda en la variable "num4"
            if($num4 == ""){
                $num4 = 0; // Si está vacío, poner 0
            }

            $num5 = $_POST['temas'];
            if($num5 == ""){// Recupera calificación de conciencia historica y lo guarda en la variable "num5"
                $num5 = 0; // Si está vacío, poner 0
            }

            $num6 = $_POST['s1']; // Recupera calificación del submódulo1 y lo guarda en la variable "num6"
            if($num6 == ""){
                $num6 = 0; // Si está vacío, poner 0
            }

            $num7 = $_POST['s2']; // Recupera calificación del submódulo2 y lo guarda en la variable "num7"
            if($num7 == ""){
                $num7 = 0; // Si está vacío, poner 0
            }

            // Calcular promedio de los submódulos
            $valor8 = ($num6 + $num7)/2;

            // Calcular promedio general
            //Si contamos todas las calificaciones= $resultado = ($num1 + $num2 + $num3 + $num4 + $num5 + $valor8 + $num6 + $num7)/8;

            //Código para obtener promedio general de las calificaciones, se suman las calificaciones mas el promedio de los dos submodulos y se divide entre 6. Así lo hace el sistema de CECyTEQ
            $resultado = round(($num1 + $num2 + $num3 + $num4 + $num5 + $valor8)/6, 1); //Si solo sumamos el promedio de los dos submodulos
        }


        // Si se presiona "limpiar" o "reiniciar"
        if (isset($_POST['limpiar'])) {
            $valor = ''; // Vaciar Inglés
            $valor2 = ''; // Vaciar "La Energía y procesos de la vida"
            $valor3 = ''; // Vaciar "Aplicaciones de Pensamiento Matemático"
            $valor4 = ''; // Vaciar "Conciencia Histórica II"
            $valor5 = ''; // Vaciar "Temas Selectos de Matemáticas"
            $valor6 = ''; // Vaciar submódulo M4S1
            $valor7 = ''; // Vaciar submódulo M4S2
            $valor8 = ''; // Vaciar promedio de submódulos
            $resultado = ''; // Vaciar promedio general
        }
        ?>

<!-- Contenedor principal de Bootstrap, ya le da un estilo por defecto, así nos evitamos escribir código css, simplemente lo tomamos de uno ya existente-->
<div class="container mt-3">
  <h2>Ingrese las calificaciones donde corresponda:</h2> <!-- Título de la sección -->
  <p>Nota: Si deja un valor vacio, el programa lo tomara como un cero.</p>  <!-- Nota para el usuario -->

   <!--Se crea el Formulario para ingresar calificaciones -->
    <form action="" method="post"> <!--se usa el metodo post para enviar o guardar los datos a las varibales-->

    <!-- Tabla de materias principales -->
  <table class="table"> <!-- Crea una tabla con clase "table" de Bootstrap para estilos ya creados -->
    <thead> <!-- Encabezado de la tabla -->
      <tr> <!-- Fila del encabezado -->
        <th>Materias</th> <!-- Columna para el nombre de las materias -->
        <th>Calificaciones</th> <!-- Columna para ingresar las calificaciones -->
      </tr> <!--se cierra la Fila del encabezado -->
    </thead> <!-- se cierra el Encabezado de la tabla -->

    <tbody> <!-- Cuerpo de la tabla donde van los datos -->

      <tr class="table-primary"> <!-- Fila para la materia Inglés 5 con color de fondo azul claro de Bootstrap -->
        <td>Inglés 5</td> <!-- Celda que muestra el nombre de la materia -->
        <td><input type="number" step="any" name="ingles" min="0" value="<?php echo $valor?>"></td>
         <!-- Celda con input numérico para calificación de Inglés, mantiene el valor previo con PHP, pueden escribirse numeros decimales gracias a step=any, contiene un name para guardar lo que el usuario escriba, y tiene restriccion de negativos-->
      </tr> <!-- se cierra la fila de ingles -->

      <tr class="table-success"> <!-- Fila con color verde para la materia "La Energía y procesos de la vida" -->
        <td>La Energía y procesos de la vida</td> <!-- Nombre de la materia -->   
        <td><input type="number" step="any" name="energia" min="0" value="<?php echo $valor2?>"></td>
         <!-- Celda con input numérico para calificación de la energia, mantiene el valor previo con PHP, pueden escribirse numeros decimales gracias a step=any, contiene un name para guardar lo que el usuario escriba, y tiene restriccion de negativos-->
      </tr> <!-- se cierra la fila de la energia -->


      <tr class="table-danger"> <!-- Fila con fondo rojo para "Aplicaciones de Pensamiento Matemático" -->
        <td>Aplicaciones de Pensamiento Matemático</td>
        <td><input type="number" step="any" name="aplicaciones" min="0" value="<?php echo $valor3?>"></td>
         <!-- Celda con input numérico para calificación de pensamiento matemático, mantiene el valor previo con PHP, pueden escribirse numeros decimales gracias a step=any, contiene un name para guardar lo que el usuario escriba, y tiene restriccion de negativos-->
      </tr> <!-- se cierra la fila de pensamiento matematico -->

      <tr class="table-info"> <!-- Fila con fondo celeste para "Conciencia Histórica II" -->
        <td>Conciencia Histórica ll</td>
        <td><input type="number" step="any" name="conciencia" min="0" value="<?php echo $valor4?>"></td>
         <!-- Celda con input numérico para calificación de historia, mantiene el valor previo con PHP, pueden escribirse numeros decimales gracias a step=any, contiene un name para guardar lo que el usuario escriba, y tiene restriccion de negativos-->
      </tr> <!-- se cierra la fila de conciencia historica -->

      <tr class="table-warning"> <!-- Fila con fondo amarillo para "Temas Selectos de Matemáticas" -->
        <td>Temas Selectos de Matemáticas</td>
        <td><input type="number" step="any" name="temas" min="0" value="<?php echo $valor5?>"></td>
         <!-- Celda con input numérico para calificación de Temas selectos de matematicas, mantiene el valor previo con PHP, pueden escribirse numeros decimales gracias a step=any, contiene un name para guardar lo que el usuario escriba, y tiene restriccion de negativos-->
      </tr> <!-- se cierra la fila de Temas Selectos de Matemáticas -->

    </tbody> <!--  -->
  </table> <!-- se cierra la tabla  -->

<!-- Tabla de submódulos (solo para que se vea mas bonita jajaj) -->
  <table class="table"> <!-- Otra tabla con clase "table" para los submódulos -->
    <thead> <!-- se abre el encabezado de la tabla -->
      <tr>  <!-- Fila del encabezado -->
        <th>Módulos:</th> <!-- titulo de columna -->
        <th>Calificaciones</th> <!-- titulo de columna -->
      </tr> <!--se cierra Fila del encabezado -->
    </thead> <!-- se cierra el encabezado de la tabla -->

    <tbody> <!-- cuerpo de la tabla -->
      <tr class="table-light"> <!-- Fila con fondo blanco para submódulo M4S1 -->
        <td>M4S1-Construye Bases De Datos Para Aplicaciones Web</td> <!-- Nombre del submódulo -->
        <td><input type="number" step="any" name="s1" min="0" value="<?php echo $valor6?>"></td>
         <!-- Celda con input numérico para calificación del submodulo 1, mantiene el valor previo con PHP, pueden escribirse numeros decimales gracias a step=any, contiene un name para guardar lo que el usuario escriba, y tiene restriccion de negativos-->
      </tr> <!--se cierra la fila-->


      <tr class="table-dark"> <!-- Fila con fondo negro para submódulo M4S2 -->
        <td>M4S2-Desarrolla Aplicaciones Web Con Conexión a Bases De Datos</td> <!-- Nombre del submódulo -->
        <td><input type="number" step="any" name="s2" min="0" value="<?php echo $valor7?>"></td>
         <!-- Celda con input numérico para calificación del submodulo 2, mantiene el valor previo con PHP, pueden escribirse numeros decimales gracias a step=any, contiene un name para guardar lo que el usuario escriba, y tiene restriccion de negativos-->
      </tr> <!--se cierra la fila-->

      <tr class="table-secondary"> <!-- Fila con fondo gris para promedio del módulo M4 -->
        <td>M4 Desarrolla Software De Aplicacion Web Con Almacenamiento Persistente De Datos</td>
        <td><input type="number" step="any" name="m4" min="0" readonly value="<?php echo $valor8?>"></td>
          <!-- Input solo lectura que muestra el promedio de los submódulos (M4) -->
        <!-- readonly evita que el usuario lo modifique -->

      </tr>  <!--se cierra la fila-->
    </tbody> <!--se cierra el cuerpo de la tabla-->
  </table> <!--se cierra la tabla-->

<!-- Botones para enviar formulario -->
  <button type="submit" name="ingresar" class="btn btn-success">calcular</button> <!-- Botón verde para enviar el formulario y calcular promedios -->
  <button type="submit" name="limpiar" class="btn btn-danger">reiniciar</button> <!-- Botón rojo para enviar el formulario y reiniciar todos los campos -->


    </form> <!-- Fin del formulario -->


  <br>  <!-- Salto de línea -->
  <!-- Tarjeta que muestra el promedio final -->
    <div class="card bg-info text-white"> <!-- Tarjeta con fondo azul y texto blanco -->
      <div class="card-body">El promedio de las calificaciones es:      
      <input type="number" step="any" name="promedio" min="0" readonly value="<?php echo $resultado?>"> <!-- Input solo lectura que muestra el promedio calculado en PHP -->
    </div> <!-- Fin del contenedor -->
    </div> <!-- Fin del contenedor -->
    <br> <!-- salto de linea -->

  </div> <!-- Fin del contenedor principal -->

  <!-- Botón para regresar a otra página -->
    <div class="container mt-3">
      <!-- Botón de estilo Bootstrap que simula un regreso -->
    <a href="index.php" class="btn btn-outline-dark">Regresar</a>
  </div>

<br> <!-- Salto de línea final para que no se vea tan pegado-->

<div class="container mt-3"> <!--se agrega una imagen el cual esta en una carpeta llamada imagenes-->  
           <!--contiene estilo de bootstrap--> 
  <img src="imagenes/img-calificaciones.png" class="rounded-circle" alt="imagen" width="304" height="236"> 
</div>


</body>
</html>
