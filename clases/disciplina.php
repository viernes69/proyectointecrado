<?php

class Disciplina{
    private $id_disciplina;
    private $nombre;
    private $seleccion = array();
    private $atleta = array();

    public function setSeleccion($selec,$atleta){
        $this->seleccion[]= $selec;
         $this->atleta[]= $atleta;
    }

    public function getSeleccion(){
        return $this->seleccion;
        return $this->atleta;
    }

    

  

}



?>
