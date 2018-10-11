<?php

    $filas=20;
    $columnas=10;

    print "<table border=\"1\">\n";
    print "<tbody>\n";
    print "<tr>\n";
    print "<th></th>\n";
    for($j=1; $j<=$columnas; $j++){
        print "<th>".$j."</th>\n";
    }
    print "</tr>\n";
    for($i=1; $i<=$filas; $i++){
        print "<tr>\n";
        print "<th>".$i."</th>\n";
        for($j=1; $j<=$columnas; $j++){
            print "<td>O</td>\n";
        }
        print "</tr>\n";
    }
    print "</tbody>\n";
    print "</table>\n";
?>