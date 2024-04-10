<?php

//cree una instancia de la clase Viaje y presente un menú que permita cargar
// la información del viaje, modificar y ver sus datos.


include "pasajeros.php";
include "viaje.php";
include "responsableV.php";

//instancia creada de clase viaje
$viaje= new viaje ("001", "Vancouver", 100, 87);
//instancia creada responsableV
$responsable= new responsableV ( 295, 125, "Jose", "Sanchez");

$arrayPasajeros=["Nombre", "Apellido", "Documento", "Telefono"];

    do{
        echo 
        "|*******- MENU  VIAJE -*******|
        Ingrese  opcion   
        1-Cargar  informacion
        2-Modificar informacion
        3-Ver datos
        4-Salir del sistema\n";

        $opc=trim(fgets(STDIN));

        switch($opc){
            case 1:
                echo "Ingrese su nombre: \n";
                $nombre=trim(fgets(STDIN));
                echo "Ingrese su apellido: \n";
                $apellido=trim(fgets(STDIN));
                echo "Ingrese su numero de documento: \n";
                $nroDoc=trim(fgets(STDIN));
                echo "Ingrese su telefono: \n";
                $telefono=trim(fgets(STDIN));
                $newObjPasaj=new pasajero($nombre, $apellido, $nroDoc, $telefono);
                array_push($arrayPasajeros, $newObjPasaj);
            break;
            case 2:
                echo "Ingrese su numero de documento para poder modificar sus datos:\n";
                $nDoc=trim(fgets(STDIN));
                $n=count($arrayPasajeros);
                $i=0;
                while ($i<$n && $arrayPasajeros[$i]["Documento"]!=$nDoc){
                    $i++;
                }
                if ($i<$n){
                    echo "Ingrese el nuevo nombre: ";
                    $newNombre=trim(fgets(STDIN));
                    echo "Ingrese el nuevo Apellido: ";
                    $newApellido=trim(fgets(STDIN));
                    echo "Ingrese el nuevo Telefono: ";
                    $newTelefono=trim(fgets(STDIN));
                    $pasajero->modificacion($newNombre, $newApellido, $newTelefono);
                }else{
                    echo "Este pasajero no existe en la base de datos";
                }
            break;
            case 3:
                echo "Ingrese su numero de documento para mostrar sus datos: ";
                $nroDocPasaj=trim(fgets(STDIN));
                
            break;
        }

}while ($opc != 4);