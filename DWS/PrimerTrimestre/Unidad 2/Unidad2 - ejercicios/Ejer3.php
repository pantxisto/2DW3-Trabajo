<?php

    $elementos=array(2,10,12,43,23);
    $suma=0;
    $promedio=0;

    for($i=0;$i<count($elementos);$i++){
        $suma=$suma+$elementos[$i];
        echo $elementos[$i].'<br>';
    }

    $promedio=$suma/5;
    if($promedio>6){
        echo 'El promedio es mayor que 6 y es: '.$promedio;
    }else{
        echo 'El promedio es menor que 6 y es: '.$promedio;
    }
;
?>