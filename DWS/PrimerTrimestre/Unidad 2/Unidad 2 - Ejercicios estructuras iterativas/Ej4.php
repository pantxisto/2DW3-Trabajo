<?php

    $arrayNumeros=array(40,2,20,4,5,6,7,8,9,30);
    $numeroMayor=0;
    for($i=0;$i<count($arrayNumeros);$i++){
        if($arrayNumeros[$i]>$numeroMayor){
            $numeroMayor=$arrayNumeros[$i];
        }
    }
    echo "El mayor numero es ".$numeroMayor;

?>