<?php

    // Creo un numero aleatorio
    $numero=rand ( 1 , 10 );
    echo $numero;
    echo '<br/>';

    //Creo una matriz con el numero de elementos igual al numero aleatorio y la relleno con numeros aleatorios
    $arrayAleatorios=array();
    for($i=0; $i<$numero; $i++){
        $arrayAleatorios[]=rand ( 1 , 10 );
    }

    // Pinto la matriz
    print_r($arrayAleatorios);
    echo '<br/>';

    //Sumamos los 3 últimos números y sacamos por pantalla el resultado
    $sumaUltimosTres=0;
    for($i=0; $i<$numero; $i++){
        if($numero-$i<=3 || $numero<=3){
            $sumaUltimosTres=$sumaUltimosTres+$arrayAleatorios[$i];
        }
    }
    echo $sumaUltimosTres;
    echo '<br/>';

    //Si el numero esta entre 1 y 10, 10 y 20 o mas de 20 sacamos un mensaje
    if(10>$sumaUltimosTres && $sumaUltimosTres>=1){
        echo 'El numero esta entre 1 y 10';
    }
    elseif(20>=$sumaUltimosTres && $sumaUltimosTres>=10){
        echo 'El numero esta entre 10 y 20';
    }else{
        echo 'El numero es  mayor de 20';
    }

?>