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
}