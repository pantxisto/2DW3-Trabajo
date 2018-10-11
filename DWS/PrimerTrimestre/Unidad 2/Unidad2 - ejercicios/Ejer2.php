<?php

    
    //Sumar los números del 1 al 1000 de 3 en 3
    for($i=0;$i<1001;$i++){
        $suma=0;
        echo $i.'<br>';
        echo ($i+1).'<br>';
        echo ($i+2).'<br>';
        $suma=$suma+$i+($i+1)+($i+2);
        $i=$i+2;
        echo $suma.'<br>';
        echo '<br>';

    }

?>