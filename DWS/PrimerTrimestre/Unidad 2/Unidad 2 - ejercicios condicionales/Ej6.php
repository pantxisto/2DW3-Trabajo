<?php

    $numeroTablas=17;

    for($i=1;$i<=17;$i++){

        //Creamos las tablas
        echo "<table border='3' align='center'>\n";
        echo "<caption>Tabla del ".$i."</caption>\n";
        //Creamos las filas
        for ($j=0;$j<=$i;$j++){           
            echo "<tr>\n";
            //Creamos las columnas
            for($z=0;$z<=$i;$z++){
                if($j==0 && $z==0){
                    echo "<th>X</th>\n";
                }else if($j==0 && $z!=0){
                    echo "<th>".$z."</th>\n";
                }elseif($j!=0 && $z==0){
                    echo "<th>".$j."</th>\n";
                }else{
                    echo "<td>".($j*$z)."</td>\n";
                }
            }
            echo "</tr>\n";
        }
        echo "</table>\n";
        echo "<br>";
    }

?>