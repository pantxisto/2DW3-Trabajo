<?php

    $arrayPaises = array ('alemania','brasil','italia','chile','uruguay','australia');
    print_r($arrayPaises);
    echo '<br/>';
    $alemania=array_search('alemania', $arrayPaises);
    $italia=array_search('italia', $arrayPaises);
    $australia=array_search('australia', $arrayPaises);

    // Elimino los elementos pedidos:
    unset($arrayPaises[$alemania], $arrayPaises[$italia], $arrayPaises[$australia]);
    print_r($arrayPaises);
    echo '<br/>';

    // Introduzco los elementos pedidos:
    $arrayPaises[]='argentina';
    $arrayPaises[]='bolivia';
    print_r($arrayPaises);
    echo '<br/>';

    // Ordenar los elementos:
    sort($arrayPaises);
    print_r($arrayPaises);
    echo '<br/>';

    // Dado virtual:
    $dadoVirtual=array('Uno', 'Dos', 'Tres', 'Cuatro', 'Cinco', 'Seis');
    $numeroAleatorio=array_rand($dadoVirtual);
    echo $dadoVirtual[$numeroAleatorio];


?>