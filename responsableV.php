<?php

class ResponsableV{

    private $numEmpleado;
    private $numLicencia;
    private $nombre;
    private $apellido;

    public function __construct($numEmpl, $numLic, $nomb, $apell){

        $this->numEmpleado=$numEmpl;
        $this->numLicencia=$numLic;
        $this->nombre=$nomb;
        $this->apellido=$apell;
    }

    //metodos get de los atributos
    public function getNumEmpl(){
        return $this->numEmpleado;
    }
    public function getNumLic(){
        return $this->numLicencia;
    }
    public function getNomEmpl(){
        return $this->nombre;
    }
    public function getApellEmpl(){
        return $this->apellido;
    }

    //metodos set de los atributos

    public function setNumEmpl($newNumEmpl){
        $this->numEmpleado=$newNumEmpl;
    }
    public function setNumLic($newNumLic){
        $this->numLicencia=$newNumLic;
    }
    public function setNomEmpl($newNomEmpl){
        $this->nombre=$newNomEmpl;
    }
    public function setApellEmpl($newApellEmpl){
        $this->apellido=$newApellEmpl;
    }


    //metodo para devolver los valores de los atributos
    public function __toString(){
        return
        "\n Nro. de Empleado: ".$this->getNumEmpl().
        "\n Nro. de Licencia: ".$this->getNumLic().
        "\n Nombre Empleado: ".$this->getNomEmpl().
        "\n Apellido Empleado: ".$this->getApellEmpl()
        ;
    }

}