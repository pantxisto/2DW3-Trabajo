<?php

    $nombre=$_POST["nombre"];
    $edad=$_POST["edad"];
    $sexo=$_REQUEST["sexo"];
    $extras=$_REQUEST["extras"];
    echo "Hola ".$nombre." tienes ".$edad." años y eres ".$sexo."<br>";
    foreach($extras as $extra){
        echo $extra."<br>";
    }
    $actualizar=$_REQUEST["act"];
    if ($actualizar){
        echo "Se han actualizado los datos";
    }


?>
