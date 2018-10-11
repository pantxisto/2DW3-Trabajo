<?php

    $año=1300;
    $multiploCuatro=$año%4;
    $multiploCien=$año%100;
    $multiploCuatrocientos=$año%400;

    if($multiploCuatro==0){
        if($multiploCien!=0){
            echo "El año ".$año." es bisiesto porque es multiplo de 4 pero no es multiplo de 100";
        }    elseif($multiploCien==0 && $multiploCuatrocientos!=0){
            echo "El año ".$año." no es bisiesto porque es multiplo de 100 pero no lo es de 400";
        }
    
    }elseif($multiploCuatro!=0){
        echo "El año ".$año." no es bisiesto porque no es multiplo de 4";
    }
?>