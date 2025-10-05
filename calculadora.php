<!DOCTYPE html> <!-- Indica que este documento es HTML5 -->
<html lang="en"> <!-- Comienza el documento HTML y define el idioma como inglés (no importa en este caso) -->
<head> <!-- Se abre el head (Contiene información útil para el navegador y buscadores, como el style, titulo,icono,etc.)-->
  <title>calculadora</title> <!-- Título que aparece en la pestaña del navegador -->
  <meta charset="utf-8"> <!-- Define la codificación de caracteres (UTF-8 soporta acentos y símbolos) -->
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Hace la página adaptable -->
    <!-- Enlace al CSS de Bootstrap versión 5.3.3 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Enlace al script de Bootstrap (para botones, modales, etc.) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head> <!-- Se cierra el head -->
<body> <!-- Comienza el cuerpo de la página -->

            <?php //inicia etiqueta php para escribir... el codigo php jajja

            // Verifica si se envió el valor de num1 mediante POST
            if (isset($_POST['num1'])) {
                $valor = ($_POST['num1']);  // Guarda el valor enviado del input llamada num1 en la variable llamada "valor"
            } else {
                $valor = '0'; // Si no se envió, se asigna 0 por defecto
            }

            // Verifica si se envió el valor de num2 mediante POST
            if (isset($_POST['num2'])) {
                $valor2 = ($_POST['num2']); // Guarda el valor enviado del input llamada num2 en la variable llamada "valor2"
            } else {
                $valor2 = '0'; // Si no se envió, se asigna 0 por defecto
            }

            // Si se presiona "limpiar"
            if (isset($_POST['limpiar'])) {
                $valor = ''; // Limpia el valor de num1
                $valor2 = ''; // Limpia el valor de num2
            }
            //Se cierra etiqueta php, sigue codigo html
            ?>

<div class="container mt-3">  <!-- Contenedor principal con margen superior (Está prediseñado en bootstrap) -->

  <h2>Ingresa los números</h2> <!-- Encabezado de la sección -->
  <p>Nota: si el campo se deja vacio, el programa lo toma como cero.</p> <!-- Indicaciones -->

  <form action="" method="post">  <!-- Formulario que se envía a la misma página mediante POST -->

    <div class="mb-3 mt-3"> <!-- Div prediseñado con bootstrap para poner el formulario-->
      <label for="campo1">Número 1</label> <!-- Etiqueta para input número 1 -->
      <input type="number" step="any" class="form-control" id="campo1" placeholder="Ingresa el primer número" name="num1" value="<?php echo $valor?>"> 
        <!-- Input tipo número, permite decimales (step=any), mantiene valor previo en $valor, y tiene name=num1 -->
    </div> <!-- cierra ev dic -->

    <div class="mb-3"> <!-- Div con margen inferior (bootstrap)-->
      <label for="campo2">Número 2</label> <!-- Etiqueta para input número 2 -->
      <input type="number" step="any" class="form-control" id="campo2" placeholder="Ingresa el segundo número" name="num2" value="<?php echo $valor2?>">
        <!-- Input tipo número, permite decimales (step=any), mantiene valor previo en $valor2, y tiene name=num2 -->
    </div> <!-- cierra ev dic -->

        <!-- Botones para realizar operaciones -->
    <button type="submit" name="suma" class="btn btn-outline-primary">Suma</button>
<!-- Botón que envía el formulario (type="submit") con el nombre "suma" -->
<!-- Clase "btn btn-outline-primary" aplica estilo Bootstrap: botón con borde azul y fondo transparente -->
<!-- Texto visible en el botón: "Suma" -->

    <button type="submit" name="resta" class="btn btn-outline-secondary">Resta</button>
<!-- Botón que envía el formulario con nombre "resta" -->
<!-- Clase "btn btn-outline-secondary": botón con borde gris y fondo transparente -->
<!-- Texto visible: "Resta" -->

    <button type="submit" name="multi" class="btn btn-outline-success">Multiplicación</button>
<!-- Botón que envía el formulario con nombre "multi" -->
<!-- Clase "btn btn-outline-success": botón con borde verde y fondo transparente -->
<!-- Texto visible: "Multiplicación" -->

    <button type="submit" name="divi" class="btn btn-outline-info">División</button>
<!-- Botón que envía el formulario con nombre "divi" -->
<!-- Clase "btn btn-outline-info": botón con borde celeste y fondo transparente -->
<!-- Texto visible: "División" -->

    <button type="submit" name="expo" class="btn btn-outline-warning">Exponente</button>
<!-- Botón que envía el formulario con nombre "expo" -->
<!-- Clase "btn btn-outline-warning": botón con borde amarillo y fondo transparente -->
<!-- Texto visible: "Exponente" -->

    <button type="submit" name="facto" class="btn btn-outline-danger">Factorial</button>
<!-- Botón que envía el formulario con nombre "facto" -->
<!-- Clase "btn btn-outline-danger": botón con borde rojo y fondo transparente -->
<!-- Texto visible: "Factorial" -->

    <button type="submit" name="limpiar" class="btn btn-outline-dark">Reiniciar</button> <!-- Botón para limpiar los campos -->
    <a href="index.php" class="btn btn-success">Regresar</a>
<!-- Enlace a otra página con estilo de botón -->
  </form> <!-- Cierra el formulario -->
</div> <!-- Cierra div-->


        <?php
        $texto = "";  // Asegura que la variable siempre exista, es la que guarda el resultado para despues imprimirlo

        ////////////////////////////////////Función Suma////////////////////////////////////////////////////

        if(isset($_POST['suma'])){ //Verifica si el usuario presiono suma
        //función suma
        //recuperar valores de los campos
        $num1 = $_POST['num1']; // Recupera valor de num1
        $num2 = $_POST['num2']; // Recupera valor de num2

                if($num1 == ""){
                $num1 = 0; // Si está vacío, asigna 0
                }
                    if($num2 == ""){
                    $num2 = 0; // Si está vacío, asigna 0
                    }

                        $resultado = $num1 + $num2; // Calcula la suma
                        echo "<br>"; 
                            $texto = "La suma de $num1 y $num2 es: $resultado"; // Guarda mensaje en la variable texto, para posteriormente imprimirlo al final del código o de la página
        }

        ////////////////////////////////////Función Resta////////////////////////////////////////////////////

        if(isset($_POST['resta'])){ //Verifica si el usuario presiono resta
        //función suma
        //recuperar valores de los campos
        $num1 = $_POST['num1']; // Recupera valor de num1
        $num2 = $_POST['num2']; // Recupera valor de num2

                if($num1 == ""){
                $num1 = 0; // Si está vacío, asigna 0
                }
                    if($num2 == ""){
                    $num2 = 0; // Si está vacío, asigna 0
                    }

                        $resultado = $num1 - $num2; //calcula la resta
                        echo "<br>";
                            $texto = "La resta de $num1 menos $num2 es: $resultado";  // Guarda mensaje en la variable texto, para posteriormente imprimirlo al final del código o de la página
        }

        ////////////////////////////////////Función Multiplicación////////////////////////////////////////////////////

        if(isset($_POST['multi'])){ //Verifica si el usuario presiono el boton multiplicación
        //función suma
        //recuperar valores de los campos
        $num1 = $_POST['num1']; // Recupera valor de num1
        $num2 = $_POST['num2']; // Recupera valor de num2

                if($num1 == ""){
                $num1 = 0; // Si está vacío, asigna 0
                }
                    if($num2 == ""){
                    $num2 = 0; // Si está vacío, asigna 0
                    }

                        $resultado = $num1 * $num2; // Calcula la suma
                        echo "<br>";
                            $texto = "La multiplicación de $num1 por $num2 es: $resultado";  // Guarda mensaje en la variable texto, para posteriormente imprimirlo al final del código o de la página
        }

        ////////////////////////////////////Función División////////////////////////////////////////////////////

        if(isset($_POST['divi'])){ //Verifica si el usuario presiono el boton división
            // recuperar valores de los campos
            $num1 = $_POST['num1']; // Recupera valor de num1
            $num2 = $_POST['num2']; // Recupera valor de num2

                if($num1 == ""){
                    $num1 = 0; // Si está vacío, asigna 0
                }
                    if($num2 == ""){
                        $num2 = 0; // Si está vacío, asigna 0
                    }

                    if($num2 == 0){ //si el numero de abajo es 0, entonces es undefined
                        $resultado = "undefined"; // aquí ponemos undefined en vez de error
                    } 
                    
                    else {
                        $resultado = $num1 / $num2; //hace la división
                    }

            echo "<br>";
                $texto = "La división de $num1 entre $num2 es: $resultado";  // Guarda mensaje en la variable texto, para posteriormente imprimirlo al final del código o de la página
        }

        ////////////////////////////////////Función Exponentes////////////////////////////////////////////////////

        if(isset($_POST['expo'])){ //Verifica si el usuario presiono el boton exponente
        //función suma
        //recuperar valores de los campos
        $num1 = $_POST['num1']; // Recupera valor de num1
        $num2 = $_POST['num2']; // Recupera valor de num2
 
                if($num1 == ""){
                $num1 = 0;  // Si está vacío, asigna 0
                }
                    if($num2 == ""){
                    $num2 = 0; // Si está vacío, asigna 0
                    }

                        $resultado = $num1 ** $num2; //calcula el exponente
                        echo "<br>";
                            $texto = "El resultado de $num1 elevado a $num2 es: $resultado";  // Guarda mensaje en la variable texto, para posteriormente imprimirlo al final del código o de la página
        }

        ////////////////////////////////////Función Factoriales////////////////////////////////////////////////////

        if(isset($_POST['facto'])){ //Verifica si el usuario presiono el boton factorial

            // recuperar valor del campo (solo usaremos num1)
            $num1 = $_POST['num1']; // Recupera valor de num1

            if($num1 == ""){
                $num1 = 0; //se le asigna el valor de cero si no encuentra nada 
            }

            // validamos que sea entero y no negativo
            if ($num1 < 0) {
                $resultado = "undefined (no existe factorial de negativos)";
            } 

            elseif (floor($num1) != $num1) {  /*floor($num1) devuelve la parte entera de $num1. Si $num1 es distinto de su parte entera → es un decimal.Entonces mostramos un mensaje indicando que el factorial solo funciona con enteros.*/ 
                // si es decimal
                $resultado = "undefined (el factorial solo se define para enteros)";
                echo "<br>";  // Guarda mensaje en la variable texto, para posteriormente imprimirlo al final del código o de la página
            }
            
            else {
                $resultado = 1; //se inicializa el valor del factorial que es uno, sirve 
                                //por si el valor es 0 tambien.
                for ($i = 1; $i <= $num1; $i++) { //se multiplica desde el 1 (i) hasta el numero que escribio el usuario
                    $resultado = $resultado * $i;
                }
            }

            echo "<br>";
            $texto = "El factorial de " . $num1 . " es: " . $resultado;  // Guarda mensaje en la variable texto, para posteriormente imprimirlo al final del código o de la página
        }

        ?>

<!-- Contenedor para mostrar resultado (tarjeta color azul claro)-->
 <div class="container mt-3">
  <div class="card bg-info text-white">
    <div class="card-body"> <?php echo "$texto" ?> </div> <!-- Muestra el resultado de la operación -->
    </div> 
  <br>

  <div class="container mt-3"> <!--se agrega una imagen el cual esta en una carpeta llamada imagenes-->  
           <!--contiene estilo de bootstrap--> 
  <img src="imagenes/img-calculadora.png" class="rounded-circle" alt="imagen" width="304" height="236"> 
</div>

</body>
</html>
