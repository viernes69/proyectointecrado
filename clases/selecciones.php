<?php

class Selecciones{
   
    private $id_seleccion;
    private $pais;
    private $disciplina;
    private $atletas = array();
    private $competencia = array();

    public function setSeleccion($atleta,$competencia){
        $this->atletas[]= $atleta;
        $this->competencia[]= $competencia;
    }

    public function getSeleccion(){
        return $this->atletas;
        return $this->competencia;
    }
}


?>
