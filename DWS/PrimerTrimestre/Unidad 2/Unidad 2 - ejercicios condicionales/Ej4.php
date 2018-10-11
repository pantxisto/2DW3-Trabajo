<?php

    // Solo se admiten numeros entre 1 y 200
    $numeroColumnas=100;

    echo "<table border='3' align='center'>\n";
    echo "<tr>\n";
    for($i=1;$i<=$numeroColumnas;$i++){
        echo "<td>".$i."</td>\n";
    }
    echo "</tr>\n";
    echo "<table>\n";

?>