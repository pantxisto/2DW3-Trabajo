<?php

    $arrayAsociativo=array('Curso'=>1, 'Clase'=>2, 'Profesora'=>3, 'Número de alumnos'=>4);
    $arrayNumerativo=array(0=>5, 1=>6, 2=>7, 3=>8);
    $arrayMixto=array(1=>9, 'Clase'=>10, 5=>11, 12);

    $sumaArrayAsociativo=array_sum($arrayAsociativo);
    $sumaArrayNumerativo=array_sum($arrayNumerativo);
    $sumaArrayMixto=array_sum($arrayMixto);

    $sumaTotal=$sumaArrayAsociativo+$sumaArrayNumerativo+$sumaArrayMixto;

    echo $sumaTotal;

?>