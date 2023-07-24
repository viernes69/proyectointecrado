<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Tarjeta Identificatoria</title>
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<div class="contenedor">
		<?php
		// Comprueba si se ha enviado el formulario
		if (isset($_POST['submit'])) {
		    // Obtén los datos enviados
		    $nombre = $_POST['nombre'];
		    $pais = $_POST['pais'];
		    $fecha_nacimiento = $_POST['fecha_nacimiento'];
		    $genero = $_POST['genero'];

      
                    
            if (empty($fecha_nacimiento)) {
               
                echo "<p class=\"error\">Error: Ingrese una fecha de nacimiento válida por favor</p>";
                echo "<a class=\"back-button\" href=\"../../index.php\">Inicio</a>";
                echo "<a class=\"back-button\" href=\"../atleta.php\">Volver</a>";
                exit; // Detener la ejecución del script
            }

		    // Verifica si el atleta es mayor de 18 años
		    $hoy = new DateTime();
		    $nacimiento = new DateTime($fecha_nacimiento);
		    $edad = $hoy->diff($nacimiento)->y;

		    if ($edad < 18) {
		        echo "<p class='error'>El atleta debe ser mayor de 18 años.</p>";
		    } else {
		        // Procesa la imagen de la foto
		        if (isset($_FILES['foto'])) {
		            $foto = $_FILES['foto'];

		            // Ruta del directorio de destino
		            $directorio_destino = __DIR__ . '/../fotos_atletas/';

		            // Verifica si el directorio no existe
		            if (!is_dir($directorio_destino)) {
		                // Intenta crear el directorio
		                if (!mkdir($directorio_destino, 0755, true)) {
		                    echo "<p class='error'>Error al crear el directorio de destino.</p>";
		                    exit;
		                }
		            }
                
                    if (empty($genero)) {
                        echo "<p class=\"error\">Error: El nombre del país no puede estar vacío.</p>";
                        echo "<a class=\"back-button\" href=\"../../index.php\">Inicio</a>";
                        echo "<a class=\"back-button\" href=\"../atleta.php\">Volver</a>";
                        exit; // Detener la ejecución del script
                    }
                    if (empty($nombre)) {
                        echo "<p class=\"error\">Error: El nombre del país no puede estar vacío.</p>";
                        echo "<a class=\"back-button\" href=\"../../index.php\">Inicio</a>";
                        echo "<a class=\"back-button\" href=\"../atleta.php\">Volver</a>";
                        exit; 
						



















                    }
                    if (empty($pais)) {
                        echo "<p class=\"error\">Error: El nombre del país no puede estar vacío.</p>";
                        echo "<a class=\"back-button\" href=\"../../index.php\">Inicio</a>";
                        echo "<a class=\"back-button\" href=\"../atleta.php\">Volver</a>";
                        exit; // Detener la ejecución del script
                    }
                

		            // Verifica si se cargó correctamente
		            if ($foto['error'] === UPLOAD_ERR_OK) {
		                // Obtiene la extensión de la imagen
		                $extension = pathinfo($foto['name'], PATHINFO_EXTENSION);

		                // Genera un nombre único para la imagen
		                $nombre_foto = uniqid() . '.' . $extension;

		                // Mueve la imagen a la carpeta deseada
		                if (!move_uploaded_file($foto['tmp_name'], $directorio_destino . $nombre_foto)) {
		                    echo "<p class='error'>Error al mover el archivo.</p>";
		                    exit;
		                }

		                // Muestra los datos del atleta
		                echo "<h2>Tarjeta Identificatoria</h2>";
		                echo "<p>Nombre: <span class='resaltar'>$nombre</span></p>";
		                echo "<p>País:<span class='resaltar'> $pais</p>";
		                echo "<p>Fecha de Nacimiento:<span class='resaltar'>$fecha_nacimiento</p>";
		                echo "<p>Género:<span class='resaltar'> $genero</p>";
		                echo "<p>Foto:</p>";
		                echo "<img src='../fotos_atletas/$nombre_foto' alt='Foto del atleta'>";
                        echo "<a class=\"back-button\" href=\"../../index.php\">Inicio</a>";
                        echo "<a class=\"back-button\" href=\"../atleta.php\">Volver</a>";

		            } else {
		                echo "<p class='error'>Error al cargar la foto: " . $foto['error'] . "</p>";
                        echo "<a class=\"back-button\" href=\"../../index.php\">Inicio</a>";
                        echo "<a class=\"back-button\" href=\"../atleta.php\">Volver</a>";
		            }
		        } else {
		            echo "<p class='error'>No se ha seleccionado ninguna foto.</p>";
                    echo "<a class=\"back-button\" href=\"../../index.php\">Inicio</a>";
                    echo "<a class=\"back-button\" href=\"../atleta.php\">Volver</a>";  
		        }
		    }
		}
		?>
	</div>
</body>
</html>