<?php

    echo "El nombre ingresado es ".$_REQUEST['nombre']."<br>";
    echo "El sexo ingresado es ".$_REQUEST['sexo']."<br>";
    $pasatiempos=$_REQUEST['pasatiempos'];
    echo "Los pasatiempos son ";
    foreach ($pasatiempos as $pasatiempo){
        echo $pasatiempo;
    }
    echo "<br>";
    echo "Propiedades y valores del fichero: <br>";
    foreach($_FILES['fichero'] as $clave =>$valor){
        echo ("Propiedad: $clave ---- Valor: $valor<br>");
    }
    echo "El input hidden tiene el valor ".$_REQUEST['oculto']."<br>";
    echo "La contraserña ingresada es ".$_REQUEST['contraseña']."<br>";
    echo "El color seleccionado es ".$_REQUEST['color']."<br>";
    echo "El texcto ingresado es ".$_REQUEST['comentario'];

?>