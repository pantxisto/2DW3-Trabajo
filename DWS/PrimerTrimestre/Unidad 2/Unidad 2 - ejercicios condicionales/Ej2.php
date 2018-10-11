<?php

    $numero1=13;
    $numero2=998;

    $multiplo=false;

    if($numero1>$numero2){
        $resto=$numero1%$numero2;
        $cociente=$numero1/$numero2;
        echo "dividendo: ".$numero1."<br>";
        echo "divisor: ".$numero2."<br>";
        echo "cociente: ".$cociente."<br>";
        echo "resto: ".$resto."<br>";
        if($resto==0){
            echo "la division es exacta";
        }else{
            echo "la division no es exacta";
        }
    }elseif($numero2>$numero1){
        $resto=$numero2%$numero1;
        $cociente=$numero2/$numero1;
        echo "dividendo: ".$numero2."<br>";
        echo "divisor: ".$numero1."<br>";
        echo "cociente: ".$cociente."<br>";
        echo "resto: ".$resto."<br>";
        if($resto==0){
            echo "la division es exacta";
        }else{
            echo "la division no es exacta";
        }
    }

?>