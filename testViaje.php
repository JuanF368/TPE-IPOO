<?php

//cree una instancia de la clase Viaje y presente un menú que permita cargar
// la información del viaje, modificar y ver sus datos.


include "pasajeros.php";
include "viaje.php";
include "responsableV.php";

echo 
"|*******- MENU  VIAJE -*******|
Ingrese  opcion   
|**- 1-Cargar  informacion -**|
|*- 2-Modificar informacion -*|
|*******- 3-Ver datos -*******|";

$opc=trim(fgets(STDIN));

switch($opc){
    case 1:
        
        break;
    case 2:
        echo "Ingrese su numero de documento para poder modificar sus datos:\n";
        $nDoc=trim(fgets(STDIN));
        echo "Ingrese el nuevo nombre: \n";
        $nuevoNom=trim(fgets(STDIN));
        echo "Ingrese el nuevo apellido: \n";
        $nuevoApe=trim(fgets(STDIN));
        echo "Ingrese el nuevo telefono: \n";
        $nuevoTel=trim(fgets(STDIN));
        break;
    case 3:

        break;
}