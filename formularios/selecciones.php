<!DOCTYPE html>
<html>
<head>
  <title>Formulario de Registro</title>
  <link rel="stylesheet"  href="./../styles/style.css">
  
</head>
<body>
    
  <header>
    <h1>Formulario registro</h1>
  </header>
 
 
  <main>
  <form class="atleta-form" action="php_logica/register_disiplina.php" method="post">
        <label for="seleccion_id">ID de Selección:</label>
        <input type="text" name="seleccion_id" required><br><br>
        
        <label for="disciplina">Disciplina:</label>
        <input type="text" name="disciplina" required><br><br>
        
        <label for="pais">País:</label>
        <input type="text" name="pais" required><br><br>

        <label for="atletas">Atletas (separados por coma):</label>
        <input type="text" name="atletas" required><br><br> 
        <div class="button-container">
        <input type="submit" value="Registrar">
        <a class="inicio" href="../index.php">Inicio</a>
      </div>
    </form>
    </main>


  <footer>
    &copy; 2023 Registro Deportivo. Todos los derechos reservados.
  </footer>

</body>
</html>

