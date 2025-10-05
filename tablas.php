<!DOCTYPE html>  <!-- Se define el tipo de documento y el idioma -->
<html lang="es">  <!-- Se abre el HTML con el atributo de idioma español -->
<head> <!-- Se abre el head (Contiene información útil para el navegador y buscadores, como el style, titulo,icono,etc.)-->
  <meta charset="UTF-8"> <!-- Meta para definir la codificación de caracteres -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  <!-- Meta para hacer la página responsive -->
  <link rel="stylesheet" href="css/tablas.css">  <!-- Enlace al archivo CSS, (dentro del proyecto) -->
  <title>Tablas de multiplicar</title>  <!-- Título de la página -->
</head>  <!-- Se cierra el head -->

<body>  <!-- Se abre el body (todo lo que se muestra en pantalla)-->

<h2>Tablas de multiplicar</h2> <!-- Título de la página -->

<!-- Formulario para ingresar el número de la tabla -->
<form action="" method="post">  <!-- Se abre el formulario que envía datos por POST (metodo para enviar datos) -->

<!--El siguiente código es para que no desaparezcan (de la pantalla) los datos que escribio el usuario 
al momento de enviar los datos, ya que el boton es un submit,
 y si no estuviera el siguiente codigo, los valores serian borrados automaticamente-->

        <?php //se abren etiquetas php para poder escribir código php
        if (isset($_POST['num1'])) { // Verifica si se envió el campo "num1" (input1)
            $valor = $_POST['num1']; // Si existe, guarda el valor en la variable $valor
        } else { // Si no se envió nada
            $valor = ''; // Asigna vacío para que no muestre nada en el input
        }

        //Mismo código pero ahora para el campo "num2" (input2)
        if (isset($_POST['num2'])) { // Verifica si se envió el campo "num2" (input2)
            $valor2 = $_POST['num2']; // Si existe, guarda el valor en la variable $valor2
        } else { // Si no se envió nada
            $valor2 = ''; // Asigna vacío para que no muestre nada en el input
        }
// tambien se podria escribir lo siguiente para tener seguridad de que nadie modifique el código desde los inputs: htmlspecialchars($_POST['num1']);

//El siguiente código revisa si se dio clic al boton reiniciar que esta en la parte de abajo, como es un submit, entonces reinicia la página, y le da valores a los inputs
        if (isset($_POST['limpiar'])) { // Verifica si se presionó el botón "Reiniciar"
            $valor = ''; // Borra el valor del primer input
            $valor2 = ''; // Borra el valor del segundo input
        }
        ?> <!--Se cierra etiqueta php-->

  <p>Ingrese qué tabla desea que se muestre:</p>  <!-- Texto de instrucción (la etiqueta es de un parrafo) -->
  <input type="number" step="any" name="num1" required value="<?php echo $valor;?>"> <!-- Input para el número -->
    <!--es tipo numero, puede escribir decimales y numeros negativos (step=any), se le asigna el nombre de 
    name1, y es obligatorio darle un valor, la parte de value carga el valor que escribio el usuario, 
    es necesario para que no desaparezca al enviar los datos-->

  <p>Ingrese hasta que número se va a multiplicar (entero y positivo):</p>  <!-- Texto de instrucción -->
  <input type="number" name="num2" min="1" required value="<?php echo $valor2;?>"> <!-- Input para el número -->
  <br><br><!--Espacio para que el boton no se vea tan pegado-->
  <button type="submit" name="ingresar">Generar</button> <!-- Botón para enviar -->
  <button type="submit" name="limpiar">Reiniciar</button>  <!-- Botón para reiniciar (Su código ya se vio anteriormente) -->

</form>  <!-- Se cierra el formulario -->
<hr> <!-- Línea horizontal -->
<?php  //Se abre el código PHP


// Verifica si se ha enviado el formulario
if(isset($_POST['ingresar'])){  //Se abre el condicional el cual Verifica si se ha enviado el formulario
    $num = $_POST['num1']; // guarda en una variable el input numero 1
    $num2 = $_POST['num2']; // guarda en una variable el input numero 2
    echo "<h3>Tabla del $num</h3>"; // Título para la tabla generada concatennado el valor que escribio el usuario en el segundo input
    echo "<table>"; // Comienza la tabla
    echo "<thead><tr><th>Número</th><th>Operador</th><th>Factor</th><th>Igual</th><th>Resultado</th></tr></thead>"; // Encabezados en una fila (tr y th)
    echo "<tbody>";  // Se abre el cuerpo de la tabla

    // Genera las filas de la tabla
    for($i=1; $i<=$num2; $i++){  //Se habre el cliclo
        $resultado = $num * $i; // Calcula el resultado de la multiplicación
        echo "<tr>                  <!-- Se abre una fila -->
                <td>$num</td>        <!-- Número ingresado -->  
                <td>×</td>          <!-- Operador multiplicación -->
                <td>$i</td>          <!-- Factor -->
                <td>=</td>          <!-- Igual -->
                <td>$resultado</td> <!-- Resultado -->
              </tr>"; // Se cierra la fila
    }  // Se cierra el ciclo

    echo "</tbody></table>"; // Cierra la tabla
}  // Se cierra el condicional
?>   <!-- Se cierra el código PHP -->

<!-- BOTÓN PARA REGRESAR AL MENÚ -->
<div class="boton-menu"> <!--se le da una clase para darle estilo-->
  <a href="index.php" class="btn-menu">Regresar</a><!--es un link disfrazado de boton, le da estilo en el archivo css-->
</div> <!--se cierra el bloque de la clase-->

<img src="imagenes/img-tablas.png" alt="imagen"> <!--se agrega una imagen el cual esta en una carpeta llamada imagenes-->


</body>  <!-- Se cierra el body -->
</html>  <!-- Se cierra el HTML -->