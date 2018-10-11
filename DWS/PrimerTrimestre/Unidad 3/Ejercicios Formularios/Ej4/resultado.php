<html>
    <header>
        <title>Formulario 5</title>
    </header>
    <body>
        <h1 style="text-align:center">DATOS PERSONALES 5(RESULTADO)</h1>
        <?php
        $colores=$_REQUEST['color'];
        foreach($colores as $color){
            echo $color."<br>";
        }
        ?>
        <a href="Ej4.php">Volver al formuario</a>
    </body>
</html>