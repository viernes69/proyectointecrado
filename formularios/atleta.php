<!DOCTYPE html>
<html>
<head>
  <title>Formulario de Registro</title>
  <link rel="stylesheet" href="./../styles/style-atleta.css">
  
</head>
<body>
  <header>
        <a style="background:none; " href="./../index.php"><img  src="../img/deportes-con-balones.png" alt="Disiplonas-deporte"></a>
        <h1>Seleccione la disiplina a la cual desea registrarse:</h1>
        <nav> 
        <a href="pais.php">País</a>
        <a href="disciplina.php">Disciplina</a>
        <a href="atleta.php">Atleta</a>
        <a href="selecciones.php">Selecciones</a>
        <a href="competencias.php">Competencias</a>
    </nav>
    </header>

  <main>
    <form class="atleta-form" action="php_logica/register_atleta.php" method="post" enctype="multipart/form-data">
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" placeholder="Ingrese aquí el nombre..." required>

      <label for="pais">País:</label>
      <input type="text" id="pais" name="pais" placeholder="Ingrese aquí el país..." required>

      <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
      <div class="form-section-date">
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>
      </div>

      <label for="genero">Género:</label>
      <select id="genero" name="genero" class="form-select" required>
        <option value="masculino">Masculino</option>
        <option value="femenino">Femenino</option>
      </select>

      <label for="foto">Foto:</label>
      <div class="file-input-container">
      <input type="file" id="file-input" name="foto" class="file-input" accept="image/*">
      <label for="file-input" class="file-input-label">Seleccionar archivo</label>
      </div>


      <div class="button-container">
        <input type="submit" name="submit" value="Registrar">
      </div>
    </form>
  </main>

  <footer>
    &copy; 2023 Registro Deportivo. Todos los derechos reservados.
  </footer>
</body>
</html>
