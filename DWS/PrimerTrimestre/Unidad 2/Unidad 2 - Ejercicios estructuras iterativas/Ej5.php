<?php

    $arrayNumeros=array(40,2,20,4,5,6,7,8,9,30);
    $numeroMenor=10000000000000000000000000000000;
    for($i=0;$i<count($arrayNumeros);$i++){
        if($arrayNumeros[$i]<$numeroMenor){
            $numeroMenor=$arrayNumeros[$i];
        }
    }
    echo "El menor numero es ".$numeroMenor;

?>