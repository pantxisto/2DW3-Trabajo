<?php

    $a=1;
    $b=10;
    $c=3;

    $array=array($a,$b,$c);
    rsort($array);
    echo 'El mayor valor es: '.$array[0].'<br>';
    echo 'El menor valor es: '.$array[count($array)-1].'<br>';

?>