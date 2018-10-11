<?php

$primerNumero=200;
$SegundoNumero=200;
$TercerNumero=200;

$array=array($primerNumero,$SegundoNumero,$TercerNumero);
$numIniciales=count($array);
echo $numIniciales."<br>";

$array=array_unique($array);
$numNoRepetidos=count($array);
echo $numNoRepetidos."<br>";
if($numNoRepetidos==3){
    echo ("0 numeros iguales");
}else{
    echo (($numIniciales-$numNoRepetidos+1)." numeros iguales");
}

?>