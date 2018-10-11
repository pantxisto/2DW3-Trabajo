<?php

    echo "El nombre ingresado es ".$_REQUEST['nombre']."<br>";
    echo "El apellido ingresado es ".$_REQUEST['apellidos']."<br>";
    echo "En tu clase hay ".$_REQUEST['alumnos']." alumnos<br>";  
    if(isset($_REQUEST['asignaturas'])){
        $asignaturas=$_REQUEST['asignaturas'];
        foreach($asignaturas as $asignatura){
            echo $asignatura." ";
        }
    }
    
?>