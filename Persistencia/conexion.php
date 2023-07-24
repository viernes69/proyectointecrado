<?php


//Coneccion a la base de datos
class conexion{
    private $nombreservidor = "localhost";
    private $nombreusuario = "root";
    private $contrasenia = "";
    private $basedatos = "juegos_deportivos";
    private $conexion;
    public function conectar(){
        $this->conexion = new mysqli($this->nombreservidor,$this->nombreusuario,$this->contrasenia,$this->basedatos);
        if ($this->conexion->connect_error) {

            die('Error al conectarse '.$this->conexion->connect_error);
         
        }else{
            echo "<script> console.log('Conexion con exito');</script>";
            return $this->conexion;
        
        }

    }
    
    public function desconectar(){
        echo "<script> console.log('Se desconecto con exito');</script>";
        $this->conexion->close();
    }
}

$os = new conexion();
$os->conectar();
$b->desconectar();
        ?>