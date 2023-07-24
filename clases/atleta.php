<?php

class Atleta{
    private $id_atleta;
    private $nombre;
    private $pais;
    private $fecha_nacimiento;
    private $genero;
    private $foto;
    private $seleccion;
 
    public function setSeleccion($selec){
        $this->seleccion[]= $selec;
    }  
    public function getSeleccion(){
        return $this->seleccion;

}
}


?>
