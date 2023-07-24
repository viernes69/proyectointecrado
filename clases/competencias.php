<?php

class Competencias{
    private $id_competencia;
    private $nombre;
    private $seleccion = array();

    public function setSeleccion($selec){
        $this->seleccion[]= $selec;
    }

    public function getSeleccion(){
        return $this->seleccion;
    }
}



?>
