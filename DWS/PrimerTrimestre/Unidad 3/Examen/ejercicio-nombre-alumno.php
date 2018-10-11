<html>
    <header>
        <title>Formulario 7</title>
    </header>
    <body>
        <h1 style="text-align:center">Examen</h1>
        <form action="examen.php" method="post">
            Escriba los datos siguientes:<br><br>
            <strong>Nombre:</strong><br>
            <input type="text" name='nombre' value='Nombre'><br><br>
            <strong>Apellidos:</strong><br>
            <input type="text" name='apellidos' value='Apellidos'><br><br>
            <strong>Curso:</strong><br>
            <select name="curso">
                <option value="Primero" >Primero
                <option value="Segundo" >Segundo
            </select><br><br>

            <input type="submit" value="Enviar">
            <input type="reset" value="Borrar">
        </form>
    </body>
</html>