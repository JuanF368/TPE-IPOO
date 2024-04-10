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

    //metodos get de los atributos
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getDocumento(){
        return $this->numDoc;
    }
    public function getTelefono(){
        return $this->telefono;
    }

    //metodos set de los atributos
    public function setNombre($newNombre){
        $this->nombre=$newNombre;
    }
    public function setApellido($newApellido){
        $this->nombre=$newApellido;
    }
    public function setNumDoc($newNumDoc){
        $this->nombre=$newNumDoc;
    }
    public function setTelefono($newTelefono){
        $this->nombre=$newTelefono;
    }

    //metodo para modificar los datos del pasajero haciendo uso
    //de las funciones set
    public function modificacion($newNomb, $newApell, $newTelef){
        $this->setNombre($newNomb);
        $this->setApellido($newApell);
        $this->setTelefono($newTelef);
    }


    //metodo para mostrar los valores de pasajero
    public function __toString(){
        return 
        "\n Nombre: ".$this->getNombre().
        "\n Apellido: ".$this->getApellido().
        "\n Nro. Doc.: ".$this->getDocumento().
        "\n Telefono: ".$this->getTelefono();
    }


}