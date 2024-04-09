<?php

class Pasajeros{

    private $nombre;
    private $apellido;
    private $numDoc;
    private $telefono;

    public function __construct($nom, $apell, $Doc, $tel){
        $this->nombre=$nom;
        $this->apellido=$apell;
        $this->numDoc=$Doc;
        $this->telefono=$tel;
    }

    
    public function modificacion($newNomb, $newApell, $newTelef){
        $this->nombre=$newNomb;
        $this->apellido=$newApell;
        $this->telefono=$newTelef;
    }
}