<?php

    // $semana=array("Lunes","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo");
    $num=rand(1,7);
    // echo $num.'<br>';
    // echo $semana[$num-1];

    switch($num){
        case 1:
        echo "lunes";
        break;

        case 2:
        echo "martes";
        break;

        case 3:
        echo "Miercoles";
        break;

        case 4:
        echo "Jueves";
        break;

        case 5:
        echo "Viernes";
        break;

        case 6:
        echo "Sabado";
        break;

        case 7:
        echo "Domingo";
        break;

        default:
        echo "otro";
        break;
    }

?>