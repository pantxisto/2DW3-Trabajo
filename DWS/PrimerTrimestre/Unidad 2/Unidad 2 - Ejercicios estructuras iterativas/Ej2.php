<?php

$arrayNombres= array ('roberto','juan','marta','moria','martin','jorge','miriam','nahuel','mirta');
$arrayNombresM=array();
for($i=0;$i<count($arrayNombres);$i++){
    $letra=substr($arrayNombres[$i],0,1);
    if($letra==="m"){
        $arrayNombresM[]=$arrayNombres[$i];
    }
}

for($i=0;$i<count($arrayNombresM);$i++){
    echo $arrayNombresM[$i]."<br>";
}


?>