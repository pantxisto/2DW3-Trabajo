<html>
    <header>
        <title>Formulario 7</title>
    </header>
    <body>
        <h1 style="text-align:center">DATOS PERSONALES 7(FORMULARIO)</h1>
        <form action="resultado.php" method="post" enctype="multipart/form-data">
        Escriba los datos siguientes:<br><br>
        Nombre:<br>
        <input type="text" name="nombre" value="nombre"><br><br>
        Apellidos:<br>
        <input type="text" name="apellidos" value="apellidos"><br><br>
        Edad:
            <select name="edad">
                <option value="menos de 20" >Menos de 20
                <option value="menos de 30" >Menos de 30
                <option value="menos de 40" >Menos de 40
                <option value="menos de 50" >Menos de 50
            </select>



            <input type="submit" value="Enviar">
            <input type="reset" value="Borrar">
        </form>
    </body>
</html>