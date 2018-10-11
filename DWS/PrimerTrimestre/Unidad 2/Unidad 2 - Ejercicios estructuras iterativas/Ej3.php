<?php

    echo "<table border='3' align='center'>\n";
    echo "<caption>Tabla de 20 Filas y 10 Columnas</caption>\n";
    for($i=1;$i<=20;$i++){
        echo "<tr>\n";
        for($j=1;$j<=10;$j++){
            echo "<td>O</td>\n";
        }
        echo "</tr>\n";      
    }
    echo "</table>\n";
    
?>