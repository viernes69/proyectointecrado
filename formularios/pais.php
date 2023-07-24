<!DOCTYPE html>
<html>
<head>
  <title>Formulario de Registro</title>
  <link rel="stylesheet"  href="./../styles/stylepais-disiplina.css">
</head>
<body>
    
    <header>
        <a style="background:none; " href="../index.php"><img  src="../img/deportes-con-balones.png" alt="Disiplonas-deporte"></a>
        <h1>Seleccione la disiplina a la cual desea registrarse:</h1>
        <nav> 
        <a href="#">País</a>
        <a href="disciplina.php">Disciplina</a>
        <a href="atleta.php">Atleta</a>
        <a href="selecciones.php">Selecciones</a>
        <a href="competencias.php">Competencias</a>
    </nav>
    </header>


  <main>
    <form action="php_logica/register_pais.php" method="post">
      <label for="pais">Pais:</label>
      <input type="text" id="pais" name="pais" placeholder="Ingrese aquí el país..." required>
      <br>
      <div class="button-container">
        <input type="submit" value="Registrar">
      </div>
    </form>
  </main>

  <footer>
    &copy; 2023 Registro Deportivo. Todos los derechos reservados.
  </footer>

</body>
</html>
