<?php
include_once 'conexion.php';
// Carga datos a la tabla pais
class paisBD extends conexion {
    public function cargarPaises($bandera, $nombre) {
        $conexion = $this->Conectar();

        $sql = "INSERT INTO pais (bandera, nombre)
                VALUES ('$bandera', '$nombre')";

        if ($conexion->query($sql)) {
            echo "Se ha insertado el nuevo país";
        } else {
            echo "Error: " . $sql . "<br>" . $conexion->error;
        }

        $this->desconectar();
    }
}
// function agregarCliente($nombre, $edad, $departamento, $cedula)
// {
//     $bd = obtenerBD();
//     $fechaRegistro = date("Y-m-d");
//     $sentencia = $bd->prepare("INSERT INTO clientes(nombre, edad, departamento, fecha_registro, cedula) VALUES (?, ?, ?, ? ,?)");
//     return $sentencia->execute([$nombre, $edad, $departamento,  $fechaRegistro, $cedula]);
// }

// Carga datos a la tabla Atleta
class atletaBD extends conexion {

    public function cargarAtleta($genero, $nombre, $fecha_nacimiento, $foto) {
        $conexion = $this->Conectar();

        $sql = "INSERT INTO atletas (nombre, pais, fecha_nacimiento, genero, foto)
                VALUES ('$genero', '$nombre', '$fecha_nacimiento', '$foto')";

        if ($conexion->query($sql)) {
            echo "Se ha insertado el nuevo atleta";
        } else {
            echo "Error: " . $sql . "<br>" . $conexion->error;
        }

        $this->desconectar();
    }
}
// Carga datos a la tabla disciplina
class disciplinaBD extends conexion {

    public function cargarDisciplina($nombre) {
        $conexion = $this->Conectar();

        $sql = "INSERT INTO disciplina (nombre)
                VALUES ('$nombre')";

        if ($conexion->query($sql)) {
            echo "Se ha insertado una nueva seleccion";
        } else {
            echo "Error: " . $sql . "<br>" . $conexion->error;
        }

        $this->desconectar();
    }
}
// Carga datos a la tabla selecciones
class seleccionesBD extends conexion {

    public function cargarSelecciones($pais, $disciplina) {
        $conexion = $this->Conectar();

        $sql = "INSERT INTO seleccion (pais, dispciplina)
                VALUES ('$pais', '$disciplina')";

        if ($conexion->query($sql)) {
            echo "Se ha insertado una nueva seleccion";
        } else {
            echo "Error: " . $sql . "<br>" . $conexion->error;
        }

        $this->desconectar();
    }
}
// Carga datos a la tabla Competencias
class competenciasBD extends conexion {

    public function cargarCompetencias($nombre) {
        $conexion = $this->Conectar();

        $sql = "INSERT INTO competencia (nombre)
                VALUES ('$nombre')";

        if ($conexion->query($sql)) {
            echo "Se ha insertado una nueva seleccion";
        } else {
            echo "Error: " . $sql . "<br>" . $conexion->error;
        }

        $this->desconectar();
    }
}
?>