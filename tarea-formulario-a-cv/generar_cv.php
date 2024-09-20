<?php
$nombre = '';
$fecha_nacimiento = '';
$ocupacion = '';
$telefono = '';
$email = '';
$nacionalidad = '';
$nivel_ingles = '';
$lenguajes_programacion = [];
$aptitudes = '';
$seccion_habilidades = [];
$perfil = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = isset($_POST['nombre']) ? htmlspecialchars($_POST['nombre']) : 'N/A';
    $fecha_nacimiento = isset($_POST['fecha_nacimiento']) ? htmlspecialchars($_POST['fecha_nacimiento']) : 'N/A';
    $ocupacion = isset($_POST['ocupacion']) ? htmlspecialchars($_POST['ocupacion']) : 'N/A';
    $telefono = isset($_POST['telefono']) ? htmlspecialchars($_POST['telefono']) : 'N/A';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : 'N/A';
    $nacionalidad = isset($_POST['nacionalidad']) ? htmlspecialchars($_POST['nacionalidad']) : 'N/A';
    $nivel_ingles = isset($_POST['nivel_ingles']) ? htmlspecialchars($_POST['nivel_ingles']) : 'N/A';
    $lenguajes_programacion = isset($_POST['lenguajes_programacion']) ? $_POST['lenguajes_programacion'] : [];
    $aptitudes = isset($_POST['aptitudes']) ? htmlspecialchars($_POST['aptitudes']) : 'N/A';
    $seccion_habilidades = isset($_POST['seccion_habilidades']) ? $_POST['seccion_habilidades'] : [];
    $perfil = isset($_POST['perfil']) ? htmlspecialchars($_POST['perfil']) : 'N/A';
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario a CV</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<form action="" method="POST">
    <h1>Formulario a CV</h1>
    
    <div class="seccion-nombre">
        <label for="nombre">Nombre y Apellidos:</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo $nombre; ?>">
    </div>

    <div class="seccion-fecha-nacimiento">
        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" value="<?php echo $fecha_nacimiento; ?>">
    </div>

    <div class="seccion-ocupacion">
        <label for="ocupacion">Ocupación:</label>
        <input type="text" id="ocupacion" name="ocupacion" value="<?php echo $ocupacion; ?>">
    </div>

    <div class="seccion-contacto">
        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" value="<?php echo $telefono; ?>">
    </div>

    <div class="seccion-contacto">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $email; ?>">
    </div>

    <div class="seccion-nacionalidad">
        <label for="nacionalidad">Nacionalidad:</label>
        <select id="nacionalidad" name="nacionalidad">
            <option value="Perú" <?php echo ($nacionalidad == 'Perú') ? 'selected' : ''; ?>>Perú</option>
            <option value="Argentina" <?php echo ($nacionalidad == 'Argentina') ? 'selected' : ''; ?>>Argentina</option>
            <option value="Bolivia" <?php echo ($nacionalidad == 'Bolivia') ? 'selected' : ''; ?>>Bolivia</option>
            <option value="Brasil" <?php echo ($nacionalidad == 'Brasil') ? 'selected' : ''; ?>>Brasil</option>
            <option value="Chile" <?php echo ($nacionalidad == 'Chile') ? 'selected' : ''; ?>>Chile</option>
            <option value="Colombia" <?php echo ($nacionalidad == 'Colombia') ? 'selected' : ''; ?>>Colombia</option>
            <option value="Ecuador" <?php echo ($nacionalidad == 'Ecuador') ? 'selected' : ''; ?>>Ecuador</option>
            <option value="Guyana" <?php echo ($nacionalidad == 'Guyana') ? 'selected' : ''; ?>>Guyana</option>
            <option value="Paraguay" <?php echo ($nacionalidad == 'Paraguay') ? 'selected' : ''; ?>>Paraguay</option>
            <option value="Surinam" <?php echo ($nacionalidad == 'Surinam') ? 'selected' : ''; ?>>Surinam</option>
            <option value="Uruguay" <?php echo ($nacionalidad == 'Uruguay') ? 'selected' : ''; ?>>Uruguay</option>
            <option value="Venezuela" <?php echo ($nacionalidad == 'Venezuela') ? 'selected' : ''; ?>>Venezuela</option>
        </select>
    </div>

    <div class="seccion-nivel-ingles">
        <label>Nivel de inglés:</label>
        <input type="radio" id="basico" name="nivel_ingles" value="básico" <?php echo ($nivel_ingles == 'básico') ? 'checked' : ''; ?>>
        <label for="basico">Básico</label>
        <input type="radio" id="intermedio" name="nivel_ingles" value="intermedio" <?php echo ($nivel_ingles == 'intermedio') ? 'checked' : ''; ?>>
        <label for="intermedio">Intermedio</label>
        <input type="radio" id="avanzado" name="nivel_ingles" value="avanzado" <?php echo ($nivel_ingles == 'avanzado') ? 'checked' : ''; ?>>
        <label for="avanzado">Avanzado</label>
        <input type="radio" id="fluido" name="nivel_ingles" value="fluido" <?php echo ($nivel_ingles == 'fluido') ? 'checked' : ''; ?>>
        <label for="fluido">Fluido</label>
    </div>

    <div class="seccion-lenguajes-programacion">
        <label>Lenguajes de programación:</label>
        <input type="checkbox" id="javascript" name="lenguajes_programacion[]" value="JavaScript" <?php echo (in_array('JavaScript', $lenguajes_programacion)) ? 'checked' : ''; ?>>
        <label for="javascript">JavaScript</label>
        <input type="checkbox" id="python" name="lenguajes_programacion[]" value="Python" <?php echo (in_array('Python', $lenguajes_programacion)) ? 'checked' : ''; ?>>
        <label for="python">Python</label>
        <input type="checkbox" id="C++" name="lenguajes_programacion[]" value="C++" <?php echo (in_array('C++', $lenguajes_programacion)) ? 'checked' : ''; ?>>
        <label for="C++">C++</label>
        <input type="checkbox" id="Java" name="lenguajes_programacion[]" value="Java" <?php echo (in_array('Java', $lenguajes_programacion)) ? 'checked' : ''; ?>>
        <label for="Java">Java</label>
        
    </div>

    <div class="seccion-aptitudes">
        <label for="aptitudes">Aptitudes:</label>
        <input list="lista_aptitudes" name="aptitudes" id="aptitudes" value="<?php echo $aptitudes; ?>">
        <datalist id="lista_aptitudes">
            <option value="Liderazgo">
            <option value="Resolución de problemas">
            <option value="Creatividad">
            <option value="Adaptabilidad">
            <option value="Organización">
            <option value="Pensamiento crítico">
        </datalist>
    </div>

    <div class="seccion-habilidades">
        <label>Habilidades:</label>
        <input type="checkbox" id="comunicacion_efectiva" name="seccion_habilidades[]" value="Comunicación efectiva" <?php echo (in_array('Comunicación efectiva', $seccion_habilidades)) ? 'checked' : ''; ?>>
        <label for="comunicacion_efectiva">Comunicación efectiva</label>
        <input type="checkbox" id="resolucion_problemas" name="seccion_habilidades[]" value="Resolución de problemas" <?php echo (in_array('Resolución de problemas', $seccion_habilidades)) ? 'checked' : ''; ?>>
        <label for="resolucion_problemas">Resolución de problemas</label>
        <input type="checkbox" id="trabajo_equipo" name="seccion_habilidades[]" value="Trabajo en equipo" <?php echo (in_array('Trabajo en equipo', $seccion_habilidades)) ? 'checked' : ''; ?>>
        <label for="trabajo_equipo">Trabajo en equipo</label>
        <input type="checkbox" id="gestion_tiempo" name="seccion_habilidades[]" value="Gestión del tiempo" <?php echo (in_array('Gestión del tiempo', $seccion_habilidades)) ? 'checked' : ''; ?>>
        <label for="gestion_tiempo">Gestión del tiempo</label>
    </div>

    <div class="seccion-perfil">
        <label for="perfil">Perfil:</label>
        <textarea id="perfil" name="perfil" rows="4" cols="50"><?php echo $perfil; ?></textarea>
    </div>

    <input type="submit" value="Enviar">
</form>

<?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
    <link rel="stylesheet" type="text/css" href="styles2.css">
    <div class="contenedor">
        <div class="encabezado">
            <img src="imagenes/traje.png" alt="foto del perfil" class="foto-perfil">
            <div class="texto-encabezado">
                <h1><?php echo $nombre; ?></h1>
                <p><?php echo $ocupacion; ?></p>
            </div>
        </div>
        
        <div class="contenido-principal">
            <div class="columna-izquierda">
                <section class="contacto">
                    <h2>Contacto</h2>   
                    <p><img src="imagenes/telefono.png" alt="Teléfono" class="icono"> <?php echo $telefono; ?></p>
                    <p><img src="imagenes/carta.png" alt="Correo" class="icono"> <?php echo $email; ?></p>
                    <p><img src="imagenes/ubicacion.png" alt="Ubicación" class="icono"> <?php echo $nacionalidad; ?></p>
                </section>

                <section class="idiomas">
                    <h2>Idiomas</h2>
                    <ul>
                        <li>Español: Nativo</li>
                        <li>Inglés: <?php echo $nivel_ingles; ?></li>
                    </ul>
                </section>

                <section class="aptitudes">
                    <h2>Aptitudes</h2>
                    <p><?php echo $aptitudes; ?></p>
                </section>

                <section class="habilidades">
                    <h2>Habilidades</h2>
                    <p><?php echo implode(', ', $seccion_habilidades); ?></p>
                </section>

                <section class="lenguajes">
                    <h2>Lenguajes de programación</h2>
                    <p><?php echo implode(', ', $lenguajes_programacion); ?></p>
                </section>
            </div>

            <div class="columna-derecha">
                <section class="perfil">
                    <h2>Perfil</h2>
                    <p><?php echo $perfil; ?></p>
                </section>
            </div>
        </div>
    </div>
<?php endif; ?>

</body>
</html>
