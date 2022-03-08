<?php

class producto {

    public $codigo;
    public $nombre;
    public $cantidad;

    public function __constructor($codigo, $nombre, $cantidad)
    {
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->cantidad = $cantidad;
    }

    // SE CREAN LOS GET Y SET

    public function setcodigo($codigo){
        $this->codigo = $codigo;
    }

    public function getcodigo(){
        return $this->codigo;
    }

    public function setnombre($nombre){
        $this->nombre = $nombre;
 }
    public function getnombre(){
            return $this->nombre;
 }

    public function setcantidad($cantidad){
        $this->cantidad = $cantidad;
    }

    public function getcantidad(){
        return $this ->cantidad;
    }


    }

}


