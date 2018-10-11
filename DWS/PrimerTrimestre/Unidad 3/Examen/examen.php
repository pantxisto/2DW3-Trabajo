<?php

    
    $nombre=$_REQUEST['nombre'];
    $apellidos=$_REQUEST['apellidos'];
    $curso=$_REQUEST['curso'];
    $preguntasPrimero=["1+1","1+2","1+3","1+4","1+5"];
    $respuestasPrimero=[2,3,4,5,6];
    $PreguntasSegundo=["1x1","1x2","1x3","1x4","1x5"];
    $respuestasegundo=[1,2,3,4,5];
    $preguntas=[];
    $repuestas=[];
    for($i=0; $i<3;$i++){
        $numeroAleatorio=rand(0,4);
        if($curso=="Primero"){
            $preguntas[]=$preguntasPrimero[$numeroAleatorio];
            $respuestas[]=$respuestasPrimero[$numeroAleatorio];
        }else{
            $preguntas[]=$PreguntasSegundo[$numeroAleatorio];
            $respuestas[]=$respuestasSegundo[$numeroAleatorio];
        }
    }

    session_start();
    $_SESSION['curso']=$curso;
    $_SESSION['nombre']=$nombre;
    $_SESSION['apellidos']=$apellidos;
    $_SESSION['respuestas']=$respuestas;
    

?>

<html>
    <header>
        <title>Formulario 7</title>
    </header>
    <body>
        <?php 
            if($curso=="Primero"){
                echo "<h1 style='text-align:center'>Examen 1º Curso</h1>";
            }else{
                echo "<h1 style='text-align:center'>Examen 2º Curso</h1>"; 
            }
        ?>
        <form action="" method="post">
            Preguntas para alumno: <?php echo $nombre." ".$apellidos ?><br><br>
            <i>Responda a las preguntas siguientes:</i><br><br>
            <strong>1)<?php echo $preguntas[0]; ?></strong><br>
            <input type="text" name="pregunta1" value=""><br>
            <strong>2)<?php echo $preguntas[1]; ?></strong><br>
            <input type="text" name="pregunta2" value=""><br>
            <strong>3)<?php echo $preguntas[2]; ?></strong><br>
            <input type="text" name="pregunta3" value=""><br><br>

            <input type="submit" value="Responder">
            <input type="reset" value="Borrar">
        </form>
        
    </body>
</html>