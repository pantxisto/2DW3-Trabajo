<html>
    <header>
        <title>Formulario de inscripción de usuarios</title>
    </header>
    <body>
        <h1 style="text-align:center">Formulario de Inscripción de Usuarios</h1>

        <form action="confirm.php" method="post" enctype="multipart/form-data">
            Nombre Completo:<br>
            <input type="text" name="nombreCompleto" value="Nombre Completo"><br><br>
            Dirección:<br>
            <textarea name="direccion" rows="5" cols="40">Direccion</textarea><br><br>
            Correo Electrónico:<br>
            <input type="text" name="email" value="correo electrónico"><br><br>
            Contraseña:<br>
            <input type="password" name="contraseña1"><br><br>
            Confirmar Contraseña:<br>
            <input type="password" name="contraseña2"><br><br>
            Fecha de Nacimiento:<br>
            <select name="mes">
                <option value="Enero" >Enero
                <option value="Febrero" >Febrero
                <option value="Marzo" >Marzo
                <option value="Abril" >Abril
                <option value="Mayo" >Mayo
                <option value="Junio" >Junio
                <option value="Julio" >Julio
                <option value="Agosto" >Agosto
                <option value="Septiembre" >Septiembre
                <option value="Octubre" >Octubre
                <option value="Noviembre" >Noviembre
                <option value="Diciembre" >Diciembre
            </select>
            <select name="dia">
                <option value="1" >1
                <option value="2" >2
                <option value="3" >3
                <option value="4" >4
                <option value="5" >5
                <option value="6" >6
                <option value="7" >7
                <option value="8" >8
                <option value="9" >9
                <option value="11" >11
                <option value="12" >12
                <option value="13" >13
                <option value="14" >14
                <option value="15" >15
                <option value="16" >16
                <option value="17" >17
                <option value="18" >18
                <option value="19" >19
                <option value="20" >20
                <option value="21" >21
                <option value="22" >22
                <option value="23" >23
                <option value="24" >24
                <option value="25" >25
                <option value="26" >26
                <option value="27" >27
                <option value="28" >28
                <option value="29" >29
                <option value="30" >30
                <option value="31" >31
            </select>
            <input type="text" name="año" value="1980"> (yyyy)<br><br>
            Sexo:<br>
            <input type="radio" name="sexo" value="hombre" checked>Hombre
            <input type="radio" name="sexo" value="mujer">Mujer<br><br>
            Por favor, elige los temas de interés:<br>
            <input type="checkbox" name="temas[]" value="Deporte-aire-libre">Deporte Aire libre<br>
            <input type="checkbox" name="temas[]" value="Deporte-aventura">Deporte Aventura<br><br>
            Seleccionar las aficiones<br>
            <select name="aficiones[]" multiple>
                <option value="Leer" >Leer
                <option value="Deporte" selected>Deporte
                <option value="Trabajo" >Trabajo
                <option value="Viajar" >Viajar
            </select><br><br>


            <input type="submit" value="Enviar">
            <input type="reset" value="Borrar">
        </form>
    </body>
</html>