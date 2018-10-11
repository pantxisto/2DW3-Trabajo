<?php

    //Mostrar la tabla de multiplicar del 2:

    //For:
    echo 'Bucle For <br>';
    for($i=0;$i<11;$i++){
        echo '2*'.$i.' = '.(2*$i).'<br>';
    }

    echo '<br>';

    //While:
    $contador=0;
    echo 'Bucle while <br>';
    while($contador<11){
        echo '2*'.$contador.' = '.(2*$contador).'<br>';
        $contador=$contador+1;
    }

    echo '<br>';

    //Do/While:
    $contador=0;
    echo 'Bucle do/while <br>';

    do{
        echo '2*'.$contador.' = '.(2*$contador).'<br>';
        $contador=$contador+1;
    }
    while($contador<11);
        
?>