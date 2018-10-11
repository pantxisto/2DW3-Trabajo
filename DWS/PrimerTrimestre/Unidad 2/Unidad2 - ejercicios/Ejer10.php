<?php

    $venta=array(2,3,4,5,6,7,8);
    $total=0;
    $promedio=0;

    for($i=0;$i<count($venta);$i++){
        $total=$total+$venta[$i];
    }
    $promedio=$total/count($venta);
    echo "El total es: ".$total." Euros <br>";
    echo "El promedio es: ".$promedio." Euros";

?>