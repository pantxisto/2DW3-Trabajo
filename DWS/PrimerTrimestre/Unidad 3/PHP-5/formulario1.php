<html>
    <header>
        <title>Formulario de alumno</title>
    </header>
    <body>
        <form action="visor1.php" method="post" enctype="multipart/form-data">
            <input type="text" name="nombre" value="Nombre"/><br><br>
            <input type="radio" name="sexo" value="M" checked />Mujer<br>
            <input type="radio" name="sexo" value="H"/> Hombre<br><br>
            <input type="checkbox" name="pasatiempos[]" value="correr">Correr<br>
            <input type="checkbox" name="pasatiempos[]" value="ordenador">Ordenador<br>
            <input type="checkbox" name="pasatiempos[]" value="bailar">Bailar<br><br>
            <input type=file name=fichero><br>
            <input type="hidden" name="oculto" value="valor oculto">
            <input type="password" name="contraseña" value="Contraseña"><br>
            <select name="color">
                <option value="rojo" selected>rojo
                <option value="verde" selected>verde
                <option value="amarillo" selected>amarillo                  
            </select>
            <textarea cols="50" rows="4" name="comentario">
                Este libro me parece
            </textarea>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>