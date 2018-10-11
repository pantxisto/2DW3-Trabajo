<?php

    for($i=1;$i<51;$i++){
        $primo=true;
        for($j=1;$j<$i;$j++){
            if($j!=1 && $i!=$j && $i%$j==0){               
                $primo=false;
            }
        }
        if($primo==true){
            echo $i." es primo <br>";
        }      
    }

?>