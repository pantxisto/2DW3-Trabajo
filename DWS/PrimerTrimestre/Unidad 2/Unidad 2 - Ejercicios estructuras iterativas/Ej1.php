<?php

    $arrayVentas=array(1100.12,12.43,2.14,76.09,9.65,23.3,7.32,12.21,1.34,0.99);
    $total=0;
    $media=0;

    for($i=0;$i<count($arrayVentas);$i++){
        $total=$total+$arrayVentas[$i];
    }

    $media=$total/count($arrayVentas);
    echo "La media es ".$media;

?>