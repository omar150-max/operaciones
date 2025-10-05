<?php  //Se abre el código PHP
$res_cuadrado = $res_triangulo = $res_rectangulo = $res_circulo = $res_trapecio = "";// Inicializamos variables de resultados
$val_cuadrado = $val_triangulo = $val_rectangulo = $val_circulo = $val_trapecio = [];// Variables para mantener valores de inputs
$figura_activa = "";// Variable para determinar qué figura mostrar tras submit
//Espacio vacio en el codigo
function formato($num) {  // Función para formatear números
    return number_format($num, 2); // Formatea a 2 decimales
} // Se cierra función para formatear números
//Espacio vacio en el codigo
// Procesamiento de formularios
if ($_SERVER['REQUEST_METHOD'] === 'POST') { //Se abre el condicional para método POST
    $val_cuadrado['lado'] = $_POST['lado_cuadrado'] ?? ''; // Valor del lado del cuadrado
    if ($val_cuadrado['lado'] !== '') { //Se abre el condicional para el cuadrado
        $figura_activa = 'cuadrado';// Define figura activa
        $lado = floatval($val_cuadrado['lado']);// Convierte a float
        if ($lado < 0) $res_cuadrado = "No se permiten negativos";// Mensaje de error si es negativo
        else {  //Se abre el else
            $area = $lado * $lado;  // Calcula el área
            $perimetro = 4 * $lado;// Calcula el perímetro
            $res_cuadrado = "<p>Área: ".formato($area)."</p><p>Perímetro: ".formato($perimetro)."</p>"; // Resultado formateado
        }// Se cierra el else
    } // Se cierra el condicional para el cuadrado
//Espacio vacio en el codigo
    // Triángulo
    $val_triangulo = [// Array para valores del triángulo
        'base' => $_POST['base_triangulo'] ?? '',// Valor de la base
        'altura' => $_POST['altura_triangulo'] ?? '',// Valor de la altura
        'lado1' => $_POST['lado1_triangulo'] ?? '',// Valor del lado1
        'lado2' => $_POST['lado2_triangulo'] ?? ''// Valor del lado2
    ];  // Se cierra array
    if (array_filter($val_triangulo) != []) { //Se abre el condicional para el triángulo
        $figura_activa = 'triangulo'; // Define figura activa
        $base = floatval($val_triangulo['base']);   // Convierte a float
        $altura = floatval($val_triangulo['altura']);   // Convierte a float
        $lado1 = floatval($val_triangulo['lado1']);  // Convierte a float
        $lado2 = floatval($val_triangulo['lado2']); // Convierte a float
        if ($base < 0 || $altura < 0 || $lado1 < 0 || $lado2 < 0) $res_triangulo = "No se permiten negativos";  // Mensaje de error si es negativo
        else {  //Se abre el else
            $area = ($base * $altura) / 2; // Calcula el área
            $perimetro = $base + $lado1 + $lado2;  // Calcula el perímetro
            $res_triangulo = "<p>Área: ".formato($area)."</p><p>Perímetro: ".formato($perimetro)."</p>";    // Resultado formateado
        }   // Se cierra el else
    } // Se cierra el condicional para el triángulo
    //Espacio vacio en el codigo
    // Rectángulo
    $val_rectangulo = ['base'=>$_POST['base_rectangulo']??'','altura'=>$_POST['altura_rectangulo']??'']; // Array para valores del rectángulo
    if (array_filter($val_rectangulo) != []) { //Se abre el condicional para el rectángulo
        $figura_activa = 'rectangulo'; // Define figura activa
        $base = floatval($val_rectangulo['base']);  // Convierte a float
        $altura = floatval($val_rectangulo['altura']); // Convierte a float
        if ($base < 0 || $altura < 0) $res_rectangulo = "⚠ No se permiten negativos"; // Mensaje de error si es negativo
        else {  //Se abre el else
            $area = $base * $altura; // Calcula el área
            $perimetro = 2 * ($base + $altura); // Calcula el perímetro
            $res_rectangulo = "<p>Área: ".formato($area)."</p><p>Perímetro: ".formato($perimetro)."</p>"; // Resultado formateado
        }  // Se cierra el else
    } // Se cierra el condicional para el rectángulo
    //Espacio vacio en el codigo
    // Círculo
    $val_circulo['radio'] = $_POST['radio_circulo'] ?? ''; // Valor del radio del círculo
    if ($val_circulo['radio'] !== '') { //Se abre el condicional para el círculo
        $figura_activa = 'circulo'; // Define figura activa
        $radio = floatval($val_circulo['radio']); // Convierte a float
        if ($radio < 0) $res_circulo = "⚠ No se permiten negativos"; // Mensaje de error si es negativo
        else { //Se abre el else
            $area = pi() * pow($radio,2); // Calcula el área
            $perimetro = 2 * pi() * $radio; // Calcula el perímetro
            $res_circulo = "<p>Área: ".formato($area)."</p><p>Perímetro: ".formato($perimetro)."</p>"; // Resultado formateado
        }  // Se cierra el else
    } // Se cierra el condicional para el círculo
    //Espacio vacio en el codigo
    // Trapecio
    $val_trapecio = [ // Array para valores del trapecio
        'base_men'=>$_POST['base_menor_trapecio']??'', // Valor de la base menor
        'base_may'=>$_POST['base_mayor_trapecio']??'', // Valor de la base mayor
        'altura'=>$_POST['altura_trapecio']??'', // Valor de la altura
        'lado1'=>$_POST['lado1_trapecio']??'', // Valor del lado1
        'lado2'=>$_POST['lado2_trapecio']??'' // Valor del lado2
    ];  // Se cierra array
    if (array_filter($val_trapecio) != []) { //Se abre el condicional para el trapecio
        $figura_activa = 'trapecio'; // Define figura activa
        $b_men = floatval($val_trapecio['base_men']); // Convierte a float
        $b_may = floatval($val_trapecio['base_may']); // Convierte a float
        $altura = floatval($val_trapecio['altura']); // Convierte a float
        $lado1 = floatval($val_trapecio['lado1']); // Convierte a float
        $lado2 = floatval($val_trapecio['lado2']); // Convierte a float
        if ($b_men < 0 || $b_may < 0 || $altura < 0 || $lado1 < 0 || $lado2 < 0) $res_trapecio = "⚠ No se permiten negativos"; // Mensaje de error si es negativo
        else { //Se abre el else
            $area = (($b_may + $b_men) * $altura) / 2; // Calcula el área
            $perimetro = $b_may + $b_men + $lado1 + $lado2; // Calcula el perímetro
            $res_trapecio = "<p>Área: ".formato($area)."</p><p>Perímetro: ".formato($perimetro)."</p>"; // Resultado formateado
        } // Se cierra el else
    } //Se cierra el condicional del trapecio
}// Se cierra el condicional para método POST
?> <!-- Se cierra el código PHP -->
<!--Espacio vacio en el codigo-->
<!DOCTYPE html> <!-- Se define el tipo de documento y el idioma -->
<html lang="es"><!-- Se abre el HTML con el atributo de idioma español -->
<head><!-- Se abre el head -->
    <title>Figuras Geométricas</title><!-- Título de la página -->
    <meta charset="utf-8"><!-- Meta para definir la codificación de caracteres -->
    <meta name="viewport" content="width=device-width, initial-scale=1"><!-- Meta para hacer la página responsive -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"><!-- Enlace al archivo CSS de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script><!-- Enlace a jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script><!-- Enlace a Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script><!-- Enlace al archivo JS de Bootstrap -->
    <style>/* Estilos personalizados */
        .oculto { display: none; }/* Clase para ocultar secciones */
        button { margin: 5px; }/* Estilo para botones */
        .image-container { display: flex; justify-content: space-between; align-items: center; width: 100%; max-width: 600px; margin: 0 auto; }/* Contenedor de imágenes */
        .image-container img { width: auto; height: 50px; border: 1px solid #ddd; padding: 5px; box-sizing: border-box; }/* Estilo para imágenes */
        .botones-abajo { display: flex; justify-content: center; gap: 20px; margin-top: 40px; margin-bottom: 40px; }/* Contenedor de botones inferiores */
        .reiniciar-btn, .home-btn { min-width: 150px; }/* Estilo para botones inferiores */
        .card-body img { display: block; margin: 10px auto; max-width: 100%; max-height: 200px; object-fit: contain; }/* Estilo para imágenes dentro de las tarjetas */
    </style><!-- Se cierra el estilo -->
</head> <!-- Se cierra el head -->
<body> <!-- Se abre el body -->
<div class="container"> <!-- Contenedor principal -->
    <br><!-- Salto de línea -->
    <h2 class="text-center">Figuras Geométricas</h2><!-- Título centrado -->
    <p class="text-center">Presiona el botón de la figura que deseas calcular.</p><!-- Instrucción centrada -->
<!--Espacio vacio en el codigo-->
    <div class="text-center mb-4"> <!-- Contenedor centrado para botones de figuras -->
        <div class="image-container"> <!-- Contenedor de imágenes -->
            <button class="btn btn-warning" onclick="mostrar('cuadrado')"><img src="imagenes/img-cuadrado.png" alt="Cuadrado"></button> <!-- Botón para cuadrado -->
            <button class="btn btn-info" onclick="mostrar('triangulo')"><img src="imagenes/img-triangulo.png" alt="Triángulo"></button><!-- Botón para triángulo -->
            <button class="btn btn-success" onclick="mostrar('rectangulo')"><img src="imagenes/img-rectangulo.png" alt="Rectángulo"></button><!-- Botón para rectángulo -->
            <button class="btn btn-primary" onclick="mostrar('circulo')"><img src="imagenes/img-circulo.png" alt="Círculo"></button> <!-- Botón para círculo -->
            <button class="btn btn-danger" onclick="mostrar('trapecio')"><img src="imagenes/img-trapecio.png" alt="Trapecio"></button> <!-- Botón para trapecio -->
        </div><!-- Se cierra el contenedor de imágenes -->
    </div><!-- Se cierra el contenedor centrado para botones de figuras -->
<!--Espacio vacio en el codigo-->
    <!-- Sección Cuadrado -->
    <div id="cuadrado" class="oculto"><!-- Contenedor para cuadrado, inicialmente oculto -->
        <div class="card-group"><!-- Grupo de tarjetas -->
            <div class="card bg-warning text-white text-center"> <!-- Tarjeta para cuadrado -->
                <div class="card-body"> <!-- Cuerpo de la tarjeta -->
                    <h2>Cuadrado</h2> <!-- Título de la tarjeta -->
                    <img src="imagenes/img-cuadrado.png" alt="Cuadrado"> <!-- Imagen del cuadrado -->
                </div> <!-- Se cierra el cuerpo de la tarjeta -->
            </div>  <!-- Se cierra la tarjeta -->
            <div class="card bg-light"> <!-- Tarjeta para datos -->
                <div class="card-body text-center"> <!-- Cuerpo de la tarjeta centrado -->
                    <h2>Datos</h2> <!-- Título de la sección de datos -->
                    <form method="post"> <!-- Formulario para ingresar datos -->
                        <div class="form-group"> <!-- Grupo de formulario -->
                            <label>Lado:</label> <!-- Etiqueta para el lado -->
                            <input type="number" min="0" step="any" class="form-control" name="lado_cuadrado" placeholder="Ej: 5" required value="<?= htmlspecialchars($val_cuadrado['lado'] ?? '') ?>"> <!-- Input para el lado -->
                        </div> <!-- Se cierra el grupo de formulario -->
                        <button type="submit" class="btn btn-primary">Calcular</button> <!-- Botón para enviar el formulario -->
                    </form> <!-- Se cierra el formulario -->
                </div> <!-- Se cierra el cuerpo de la tarjeta -->
            </div> <!-- Se cierra la tarjeta -->
            <div class="card bg-success text-white text-center"> <!-- Tarjeta para resultado -->
                <div class="card-body"> <!-- Cuerpo de la tarjeta -->
                    <h2>Resultado</h2> <!-- Título de la sección de resultado -->
                    <div><?= $res_cuadrado ?></div> <!-- Muestra el resultado del cálculo -->
                </div> <!-- Se cierra el cuerpo de la tarjeta -->
            </div> <!-- Se cierra la tarjeta -->
        </div> <!-- Se cierra el grupo de tarjetas -->
    </div> <!-- Se cierra el contenedor para cuadrado -->
<!--Espacio vacio en el codigo-->
    <!-- Sección Triángulo -->
    <div id="triangulo" class="oculto"> <!-- Contenedor para triángulo, inicialmente oculto -->
        <div class="card-group"> <!-- Grupo de tarjetas -->
            <div class="card bg-info text-white text-center"> <!-- Tarjeta para triángulo -->
                <div class="card-body"> <!-- Cuerpo de la tarjeta -->
                    <h2>Triángulo</h2> <!-- Título de la tarjeta -->
                    <img src="imagenes/img-triangulo.png" alt="Triángulo"> <!-- Imagen del triángulo -->
                </div> <!-- Se cierra el cuerpo de la tarjeta -->
            </div> <!-- Se cierra la tarjeta -->
            <div class="card bg-light"> <!-- Tarjeta para datos -->
                <div class="card-body text-center"> <!-- Cuerpo de la tarjeta centrado -->
                    <h2>Datos</h2> <!-- Título de la sección de datos -->
                    <form method="post"> <!-- Formulario para ingresar datos -->
                        <div class="form-group"> <!-- Grupo de formulario -->
                            <label>Base:</label> <!-- Etiqueta para la base -->
                            <input type="number" min="0" step="any" class="form-control" name="base_triangulo" placeholder="Ej: 5" required value="<?= htmlspecialchars($val_triangulo['base'] ?? '') ?>"> <!-- Input para la base -->
                        </div> <!-- Se cierra el grupo de formulario -->
                        <div class="form-group"> <!-- Grupo de formulario -->
                            <label>Altura:</label> <!-- Etiqueta para la altura -->
                            <input type="number" min="0" step="any" class="form-control" name="altura_triangulo" placeholder="Ej: 10" required value="<?= htmlspecialchars($val_triangulo['altura'] ?? '') ?>"> <!-- Input para la altura -->
                        </div> <!-- Se cierra el grupo de formulario -->
                        <div class="form-group"> <!-- Grupo de formulario -->
                            <label>Lado 1:</label> <!-- Etiqueta para el lado 1 -->
                            <input type="number" min="0" step="any" class="form-control" name="lado1_triangulo" placeholder="Ej: 7" required value="<?= htmlspecialchars($val_triangulo['lado1'] ?? '') ?>"> <!-- Input para el lado 1 -->
                        </div> <!-- Se cierra el grupo de formulario -->
                        <div class="form-group"> <!-- Grupo de formulario -->
                            <label>Lado 2:</label> <!-- Etiqueta para el lado 2 -->
                            <input type="number" min="0" step="any" class="form-control" name="lado2_triangulo" placeholder="Ej: 8" required value="<?= htmlspecialchars($val_triangulo['lado2'] ?? '') ?>"> <!-- Input para el lado 2 -->
                        </div> <!-- Se cierra el grupo de formulario -->
                        <button type="submit" class="btn btn-primary">Calcular</button> <!-- Botón para enviar el formulario -->
                    </form> <!-- Se cierra el formulario -->
                </div> <!-- Se cierra el cuerpo de la tarjeta -->
            </div> <!-- Se cierra la tarjeta -->
            <div class="card bg-success text-white text-center"> <!-- Tarjeta para resultado -->
                <div class="card-body"> <!-- Cuerpo de la tarjeta -->
                    <h2>Resultado</h2> <!-- Título de la sección de resultado -->
                    <div><?= $res_triangulo ?></div> <!-- Muestra el resultado del cálculo -->
                </div> <!-- Se cierra el cuerpo de la tarjeta -->
            </div>  <!-- Se cierra la tarjeta -->
        </div> <!-- Se cierra el grupo de tarjetas -->
    </div> <!-- Se cierra el contenedor para triángulo -->
<!--Espacio vacio en el codigo-->
    <!-- Sección Rectángulo -->
    <div id="rectangulo" class="oculto"> <!-- Contenedor para rectángulo, inicialmente oculto -->
        <div class="card-group"> <!-- Grupo de tarjetas -->
            <div class="card bg-success text-white text-center"> <!-- Tarjeta para rectángulo -->
                <div class="card-body"> <!-- Cuerpo de la tarjeta -->
                    <h2>Rectángulo</h2> <!-- Título de la tarjeta -->
                    <img src="imagenes/img-rectangulo.png" alt="Rectángulo"> <!-- Imagen del rectángulo -->
                </div>  <!-- Se cierra el cuerpo de la tarjeta -->
            </div> <!-- Se cierra la tarjeta -->
            <div class="card bg-light"> <!-- Tarjeta para datos -->
                <div class="card-body text-center"> <!-- Cuerpo de la tarjeta centrado -->
                    <h2>Datos</h2> <!-- Título de la sección de datos -->
                    <form method="post"> <!-- Formulario para ingresar datos -->
                        <div class="form-group"> <!-- Grupo de formulario -->
                            <label>Base:</label> <!-- Etiqueta para la base -->
                            <input type="number" min="0" step="any" class="form-control" name="base_rectangulo" placeholder="Ej: 5" required value="<?= htmlspecialchars($val_rectangulo['base'] ?? '') ?>"> <!-- Input para la base -->
                        </div> <!-- Se cierra el grupo de formulario -->
                        <div class="form-group"> <!-- Grupo de formulario -->
                            <label>Altura:</label> <!-- Etiqueta para la altura -->
                            <input type="number" min="0" step="any" class="form-control" name="altura_rectangulo" placeholder="Ej: 15" required value="<?= htmlspecialchars($val_rectangulo['altura'] ?? '') ?>"> <!-- Input para la altura -->
                        </div> <!-- Se cierra el grupo de formulario -->
                        <button type="submit" class="btn btn-primary">Calcular</button> <!-- Botón para enviar el formulario -->
                    </form> <!-- Se cierra el formulario -->
                </div> <!-- Se cierra el cuerpo de la tarjeta -->
            </div> <!-- Se cierra la tarjeta -->
            <div class="card bg-success text-white text-center"> <!-- Tarjeta para resultado -->
                <div class="card-body"> <!-- Cuerpo de la tarjeta -->
                    <h2>Resultado</h2> <!-- Título de la sección de resultado -->
                    <div><?= $res_rectangulo ?></div> <!-- Muestra el resultado del cálculo -->
                </div> <!-- Se cierra el cuerpo de la tarjeta -->
            </div> <!-- Se cierra la tarjeta -->
        </div> <!-- Se cierra el grupo de tarjetas -->
    </div> <!-- Se cierra el contenedor para rectángulo -->
<!--Espacio vacio en el codigo-->
    <!-- Sección Círculo -->
    <div id="circulo" class="oculto"> <!-- Contenedor para círculo, inicialmente oculto -->
        <div class="card-group"> <!-- Grupo de tarjetas -->
            <div class="card bg-primary text-white text-center"> <!-- Tarjeta para círculo -->
                <div class="card-body"> <!-- Cuerpo de la tarjeta -->
                    <h2>Círculo</h2> <!-- Título de la tarjeta -->
                    <img src="imagenes/img-circulo.png" alt="Círculo"> <!-- Imagen del círculo -->
                </div> <!-- Se cierra el cuerpo de la tarjeta -->
            </div> <!-- Se cierra la tarjeta -->
            <div class="card bg-light"> <!-- Tarjeta para datos -->
                <div class="card-body text-center"> <!-- Cuerpo de la tarjeta centrado -->
                    <h2>Datos</h2> <!-- Título de la sección de datos -->
                    <form method="post"> <!-- Formulario para ingresar datos -->
                        <div class="form-group"> <!-- Grupo de formulario -->
                            <label>Radio:</label> <!-- Etiqueta para el radio -->
                            <input type="number" min="0" step="any" class="form-control" name="radio_circulo" placeholder="Ej: 5" required value="<?= htmlspecialchars($val_circulo['radio'] ?? '') ?>"> <!-- Input para el radio -->
                        </div> <!-- Se cierra el grupo de formulario -->
                        <button type="submit" class="btn btn-primary">Calcular</button> <!-- Botón para enviar el formulario -->
                    </form> <!-- Se cierra el formulario -->
                </div> <!-- Se cierra el cuerpo de la tarjeta -->
            </div> <!-- Se cierra la tarjeta -->
            <div class="card bg-success text-white text-center"> <!-- Tarjeta para resultado -->
                <div class="card-body"> <!-- Cuerpo de la tarjeta -->
                    <h2>Resultado</h2> <!-- Título de la sección de resultado -->
                    <div><?= $res_circulo ?></div> <!-- Muestra el resultado del cálculo -->
                </div>  <!-- Se cierra el cuerpo de la tarjeta -->
            </div> <!-- Se cierra la tarjeta -->
        </div> <!-- Se cierra el grupo de tarjetas -->
    </div> <!-- Se cierra el contenedor para círculo -->
<!--Espacio vacio en el codigo-->
    <!-- Sección Trapecio -->
    <div id="trapecio" class="oculto"> <!-- Contenedor para trapecio, inicialmente oculto -->
        <div class="card-group"> <!-- Grupo de tarjetas -->
            <div class="card bg-danger text-white text-center"> <!-- Tarjeta para trapecio -->
                <div class="card-body"> <!-- Cuerpo de la tarjeta -->
                    <h2>Trapecio General</h2> <!-- Título de la tarjeta -->
                    <img src="imagenes/img-trapecio.png" alt="Trapecio"> <!-- Imagen del trapecio -->
                </div> <!-- Se cierra el cuerpo de la tarjeta -->
            </div> <!-- Se cierra la tarjeta -->
            <div class="card bg-light"> <!-- Tarjeta para datos -->
                <div class="card-body text-center"> <!-- Cuerpo de la tarjeta centrado -->
                    <h2>Datos</h2> <!-- Título de la sección de datos -->
                    <form method="post"> <!-- Formulario para ingresar datos -->
                        <div class="form-group"> <!-- Grupo de formulario -->
                            <label>Base Menor:</label> <!-- Etiqueta para la base menor -->
                            <input type="number" min="0" step="any" class="form-control" name="base_menor_trapecio" placeholder="Ej: 5" required value="<?= htmlspecialchars($val_trapecio['base_men'] ?? '') ?>"> <!-- Input para la base menor -->
                        </div> <!-- Se cierra el grupo de formulario -->
                        <div class="form-group"> <!-- Grupo de formulario -->
                            <label>Base Mayor:</label> <!-- Etiqueta para la base mayor -->
                            <input type="number" min="0" step="any" class="form-control" name="base_mayor_trapecio" placeholder="Ej: 10" required value="<?= htmlspecialchars($val_trapecio['base_may'] ?? '') ?>"> <!-- Input para la base mayor -->
                        </div> <!-- Se cierra el grupo de formulario -->
                        <div class="form-group"> <!-- Grupo de formulario -->
                            <label>Altura:</label> <!-- Etiqueta para la altura -->
                            <input type="number" min="0" step="any" class="form-control" name="altura_trapecio" placeholder="Ej: 15" required value="<?= htmlspecialchars($val_trapecio['altura'] ?? '') ?>"> <!-- Input para la altura -->
                        </div> <!-- Se cierra el grupo de formulario -->
                        <div class="form-group"> <!-- Grupo de formulario -->
                            <label>Lado 1:</label> <!-- Etiqueta para el lado 1 -->
                            <input type="number" min="0" step="any" class="form-control" name="lado1_trapecio" placeholder="Ej: 7" required value="<?= htmlspecialchars($val_trapecio['lado1'] ?? '') ?>"> <!-- Input para el lado 1 -->
                        </div> <!-- Se cierra el grupo de formulario -->
                        <div class="form-group"> <!-- Grupo de formulario -->
                            <label>Lado 2:</label> <!-- Etiqueta para el lado 2 -->
                            <input type="number" min="0" step="any" class="form-control" name="lado2_trapecio" placeholder="Ej: 8" required value="<?= htmlspecialchars($val_trapecio['lado2'] ?? '') ?>"> <!-- Input para el lado 2 -->
                        </div> <!-- Se cierra el grupo de formulario -->
                        <button type="submit" class="btn btn-primary">Calcular</button> <!-- Botón para enviar el formulario -->
                    </form> <!-- Se cierra el formulario -->
                </div> <!-- Se cierra el cuerpo de la tarjeta -->
            </div> <!-- Se cierra la tarjeta -->
            <div class="card bg-success text-white text-center"> <!-- Tarjeta para resultado -->
                <div class="card-body"> <!-- Cuerpo de la tarjeta -->
                    <h2>Resultado</h2> <!-- Título de la sección de resultado -->
                    <div><?= $res_trapecio ?></div> <!-- Muestra el resultado del cálculo -->
                </div> <!-- Se cierra el cuerpo de la tarjeta -->
            </div> <!-- Se cierra la tarjeta -->
        </div> <!-- Se cierra el grupo de tarjetas -->
    </div> <!-- Se cierra el contenedor para trapecio -->
<!--Espacio vacio en el codigo-->
    <div class="botones-abajo"> <!-- Contenedor para botones inferiores -->
        <button class="btn btn-secondary home-btn" onclick="window.location.href='index.php'">🏠 Home</button> <!--Botón al menu-->
        <button class="btn btn-dark reiniciar-btn" onclick="window.location.href='<?= $_SERVER['PHP_SELF'] ?>'">🔄 Reiniciar</button> <!--Botón para reiniciar-->
    </div> <!-- Se cierra el contenedor para botones inferiores -->
</div> <!-- Se cierra el contenedor principal -->
<!--Espacio vacio en el codigo-->
<script> // Función para mostrar la figura seleccionada
function mostrar(id){ // Se abre la función
    document.querySelectorAll('.oculto').forEach(div=>div.style.display='none'); // Oculta todas las figuras
    document.getElementById(id).style.display='block'; // Muestra la figura seleccionada
} // Se cierra la función
// Espacio vacio en el codigo
// Mostrar automáticamente la figura activa tras submit
window.addEventListener('DOMContentLoaded', (event) => { // Se abre el evento DOMContentLoaded
    let figura = '<?= $figura_activa ?>'; // Obtiene la figura activa desde PHP
    if(figura) document.getElementById(figura).style.display='block'; // Muestra la figura activa si existe
}); // Se cierra el evento DOMContentLoaded
</script>  <!-- Se cierra el script -->
</body> <!-- Se cierra el body -->
</html> <!-- Se cierra el HTML -->