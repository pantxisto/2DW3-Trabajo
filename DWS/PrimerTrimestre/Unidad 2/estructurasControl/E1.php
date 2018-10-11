<?php
    $array=array("Uno", "Dos", "Tres", "Cuatro", "Cinco", "Seis", "Siete", "Ocho", "Nueve", "Diez");
    $numero=9;

    if($numero>=1 && $numero<=10){
        echo $array[$numero-1];
    } else{
        echo 'El número no está entre 1 y 10';
    }
?>