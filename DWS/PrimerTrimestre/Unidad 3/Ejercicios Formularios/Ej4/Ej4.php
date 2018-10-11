<html>
    <header>
        <title>Formulario 5</title>
    </header>
    <body>
        <h1 style="text-align:center">DATOS PERSONALES 5(FORMULARIO)</h1>
        <form action="resultado.php" method="post" enctype="multipart/form-data">
            <input type="checkbox" name="color[]" value="amarillo" checked>Amarillo<br>
            <input type="checkbox" name="color[]" value="verde">Verde <br>
            <input type="checkbox" name="color[]" value="azul">Azul  <br>
            <input type="checkbox" name="color[]" value="rojo">Rojo   <br><br>

            <input type="submit" value="Enviar">
            <input type="reset" value="Borrar">
        </form>
    </body>
</html>