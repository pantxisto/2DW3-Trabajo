<html>
    <header>
        <title>Formulario de alumno</title>
    </header>
    <body>
        <form action="visor2.php" method="post" enctype="multipart/form-data">
            <input type="text" name="nombre" value="Nombre"/><br><br>
            <input type="text" name="apellidos" value="Apellidos"/><br><br>
            ¿Cuantos alumnos hay en tu clase?<br>
            <select name="alumnos">
                <option value="Menos de 5" selected>Menos de 5
                <option value="Mas de 5 y menos de 10" selected>Mas de 5 y menos de 10
                <option value="Mas de 10 y menos de 2" selected>Mas de 10 y menos de 20          
                <option value="Mas de 20" selected>Mas de 20         
            </select><br>
            ¿Que asignatura/s prefieres?<br>
            <input type="checkbox" name="asignaturas[]" value="Ingles">Ingles<br>
            <input type="checkbox" name="asignaturas[]" value="Euskera">Euskera<br>
            <input type="checkbox" name="asignaturas[]" value="Frances">Frances<br>
            <input type="checkbox" name="asignaturas[]" value="Italiano">Italiano<br>

            <input type="submit" value="Enviar">
        </form>
    </body>
</html>