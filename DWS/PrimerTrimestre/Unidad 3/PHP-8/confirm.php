<?php

    session_start();
    $nombre=$_REQUEST['nombreCompleto'];
    $_SESSION['nombre']=$nombre;
    echo $nombre."<br><br>";

    $direccion=$_REQUEST['direccion'];
    echo $direccion."<br><br>";
    $_SESSION['direccion']=$direccion;

    $email=$_REQUEST['email'];
    echo $email."<br><br>";
    $_SESSION['email']=$email;

    $password1=$_REQUEST['contraseña1'];
    echo $password1."<br><br>";
    $_SESSION['password1']=$password1;

    $password2=$_REQUEST['contraseña2'];
    echo $password2."<br><br>";
    $_SESSION['password2']=$password2;

    $mes=$_REQUEST['mes'];
    echo $mes."<br><br>";
    $_SESSION['mes']=$mes;

    $dia=$_REQUEST['dia'];
    echo $dia."<br><br>";
    $_SESSION['dia']=$dia;

    $año=$_REQUEST['año'];
    echo $año."<br><br>";
    $_SESSION['año']=$año;

    $sexo=$_REQUEST['sexo'];
    echo $sexo."<br><br>";
    $_SESSION['sexo']=$sexo;

    $temas=$_REQUEST['temas'];
    $_SESSION['temas']=$temas;
    foreach($temas as $tema){
        echo $tema."<br>";
    }
    echo "<br>";

    $aficiones=$_REQUEST['aficiones'];
    $_SESSION['aficiones']=$aficiones;
    foreach($aficiones as $aficion){
        echo $aficion."<br>";
    }
    echo "<br>";
    echo "<input type='button' onclick=window.location.href='output.php' value='Confirmar'>";
    

?>