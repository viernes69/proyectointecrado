<?php

include_once 'conexion.php';

class competenciasBD extends conexion {
    public function mostrarCompetencias() {
        $conexion = $this->Conectar();

        $sql = "SELECT * FROM competencia";

        $result = $conexion->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "Nombre: " . $row["nombre"] . "<br>";
            }
        } else {
            echo "No se encontraron competencias";
        }

        $this->desconectar();
    }
}

$competencias = new competenciasBD();
$competencias->mostrarCompetencias();


?>