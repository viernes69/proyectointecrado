<?php
include_once 'conexion.php';

class Paises extends conexion {
    private $id_pais;
    private $bandera;
    private $nombre;
    private $seleccion = array();

    public function setSeleccion($selec) {
        $this->seleccion[] = $selec;
    }

    public function getSeleccion() {
        return $this->seleccion;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setBandera($bandera) {
        $this->bandera = $bandera;
    }

    public function getBandera() {
        return $this->bandera;
    }

    public function setId_pais($id_pais) {
        $this->id_pais = $id_pais;
    }

    public function getId_pais() {
        return $this->id_pais;
    }

    public function cargarPais() {
        $p = new paisBD();
        $p->cargarPaises($this->getBandera(), $this->getNombre());
    }
}
?>