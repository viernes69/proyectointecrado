<!DOCTYPE html>
<html>
<head>
  <title>Resultado del Registro</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Montserrat;
      background:linear-gradient(to bottom, #9933ff 0%, #660033 100%);
      color:white;
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      color:white;
    }

    .message {
      padding: 20px;
      background-color: #333;
      color:white;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }

    .success {
      color: white;
   
    }

    .error {
      color: #ff0000;
    }

    .back-button {
      display: inline-block;
      padding: 10px 20px;
      background-color: #ff4500;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s ease;
      cursor: pointer;
      margin-inline: 5px;
    }

    .back-button:hover {
      background-color: #af3915;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="message">
    <?php
if (isset($_POST["pais"])) {
    $pais = trim($_POST["pais"]); 

    if (empty($pais)) {
        echo "<p class=\"error\">Error: El nombre del país no puede estar vacío.</p>";
        echo "<a class=\"back-button\" href=\"../../index.php\">Inicio</a>";
        echo "<a class=\"back-button\" href=\"../pais.php\">Volver</a>";
        exit; // Detener la ejecución del script
    }

  
    $paisesExistentes = ["Argentina", "Brasil", "Chile"];

    if (in_array($pais, $paisesExistentes)) {
        echo "<p class=\"error\">Error: El nombre del país '$pais' ya ha sido registrado.</p>";
        echo "<a class=\"back-button\" href=\"../../index.php\">Inicio</a>";
        echo "<a class=\"back-button\" href=\"../pais.php\">Volver</a>";
        exit; // Detener la ejecución del script
    }

    // Si pasa las validaciones anteriores, podemos agregar el país a la lista de países existentes
    $paisesExistentes[] = $pais;

    // Mostrar un mensaje de éxito
    echo "<p class=\"success\">El país '$pais' ha sido registrado correctamente.</p>";

    // Mostrar el botón de volver
    echo "<a class=\"back-button\" href=\"../../index.php\">Inicio</a>";
    echo "<a class=\"back-button\" href=\"../pais.php\">Volver</a>";
}
?>


    </div>
  </div>
</body>
</html>
