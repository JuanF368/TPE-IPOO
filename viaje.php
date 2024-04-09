<?php

class viaje{
    private $codeViaje;
    private $destino;
    private $cantMaxPasajeros;
    private $pasajerosViaje;
    private $pasajeros=[];

    public function __construct($codiViaje, $dest, $maxPasaj, $pasajViaje){
        $this->codeViaje=$codiViaje;
        $this->destino=$dest;
        $this->cantMaxPasajeros=$maxPasaj;
        $this->pasajerosViaje=$pasajViaje;
    }

    public function cargarDatos($nroDoc, $nombre, $apellido, $telefono){


    }

    public function modificarDatos($nombre, $apellido, $nroDoc, $telefono){
        $pasaj= new Pasajeros ($nombre, $apellido, $nroDoc, $telefono);
        $this->pasajeros[]=$pasaj;
    }
}