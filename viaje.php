<?php

class viaje{
    private $codeViaje;
    private $destino;
    private $cantMaxPasajeros;
    private $pasajerosViaje;

    public function __construct($codiViaje, $dest, $maxPasaj, $pasajViaje){
        $this->codeViaje=$codiViaje;
        $this->destino=$dest;
        $this->cantMaxPasajeros=$maxPasaj;
        $this->pasajerosViaje=$pasajViaje;
    }

    //metodos get de atributos
    public function getCodigo(){
        return $this->codeViaje;
    }
    public function getDestino(){
        return $this->destino;
    }
    public function getMaxPasaj(){
        return $this->cantMaxPasajeros;
    }
    public function getPasaj(){
        return $this->pasajerosViaje;
    }


    //metodos set de atributos
    public function setCodigo($newCode){
        $this->codeViaje=$newCode;
    }
    public function setDestino($newDestino){
        $this->destino=$newDestino;
    }
    public function setMaxPasaj($newCantMaxPasaj){
        $this->cantMaxPasajeros=$newCantMaxPasaj;
    }
    public function setPasaj($newPasaj){
        $this->pasajeros=$newPasaj;
    }

    //metodo que devuelve los valores de los atributos
    public function __toString(){
        return
        "\nCodigo del viaje: ".$this->getCodigo().
        "\nDestino: ".$this->getDestino().
        "\nCant. Max. de pasajeros: ".$this->getMaxPasaj().
        "\nCant de pasajeros: ".$this->getPasaj()
        ;
    }



}
    /*
    public function cargarDatos($nombre, $apellido, $nroDoc, $telefono){
        
        $pasaj= new Pasajeros ($nombre, $apellido, $nroDoc, $telefono);
        array_push($pasaj, $this->arrayPasajeros);

    }

    public function modificarDatos($nombre, $apellido, $nroDoc, $telefono){
        
        $n=count($this->arrayPasajeros);
        $i=0;
        while ($i<$n && $this->arrayPasajeros[$i]["Documento"]!=$nroDoc){
            $i++;
        }
        if ($i<$n){
            $this->arrayPasajeros[$i]["Nombre"]=$nombre;
            $this->arrayPasajeros[$i]["Apellido"]=$apellido;
            $this->arrayPasajeros[$i]["Telefono"]=$telefono;
        }else{
            return "Este pasajero no existe en la base de datos";
        }
    }

    public function buscarPasajero($nroDoc){

    }
} */