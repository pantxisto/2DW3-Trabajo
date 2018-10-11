<html>
    <header>
        <title>Formulario 4</title>
    </header>
    <body>
        <h1 style="text-align:center">DATOS PERSONALES 4(FORMULARIO)</h1>
        <form action="resultado.php" method="post" enctype="multipart/form-data">
            Indique su sexo: <br>
            Sexo:  
                <input type="radio" name="sexo" value="mujer" checked>Mujer
                <input type="radio" name="sexo" value="hombre">Hombre  
            </select><br>

            <input type="submit" value="Enviar">
            <input type="reset" value="Borrar">
        </form>
    </body>
</html>