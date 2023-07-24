<?php

class Paises{
    private $id_pais;
    private $bandera;
    private $nombre;
    $seleccion = array();

    public function setSeleccion($selec){
        $this->seleccion[]= $selec;
    }
   
    public function getSeleccion(){
            return $this->seleccion;
        }
    }

class Selecciones{
   
    private $id_seleccion;
    private $pais;
    private $disciplina;
    $seleccion = array();

    public function setSeleccion($selec){
        $this->seleccion[]= $selec;
    }

    public function getSeleccion(){
        return $this->seleccion;
    }
}

class Disciplinas{
    private $id_disciplina;
    private $nombre;
    $seleccion = array();

    public function setSeleccion($selec){
        $this->seleccion[]= $selec;
    }

    public function getSeleccion(){
        return $this->seleccion;
    }
}

class Competencias{
    private $id_competencia;
    private $nombre;
    $seleccion = array();

    public function setSeleccion($selec){
        $this->seleccion[]= $selec;
    }

    public function getSeleccion(){
        return $this->seleccion;
    }
}
class Atleta{
    private $id_atleta;
    private $nombre;
    private $pais;
    private $fecha_nacimiento;
    private $genero;
    private $foto;
    $seleccion = array();
    public function setSeleccion($selec){
        $this->seleccion[]= $selec;
    }  
    public function getSeleccion(){
        return $this->seleccion;
    }
}

?>
