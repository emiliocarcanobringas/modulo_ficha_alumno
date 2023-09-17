<!DOCTYPE html>
<html>
<head>
    <title>Capturar Alumno</title>
    <link rel="stylesheet" href="capturar_alumno.css">
</head>
<body>
    <form action="guardar_alumno.php" method="post" class="form-plan" autocomplete="off">
        <label for="matricula">Matricula:</label>
        <input type="text" id="matricula" name="matricula" maxlength="20" required autocomplete="off">

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" maxlength="100" required autocomplete="off">

        <label for="apellido_paterno">Apellido Paterno:</label>
        <input type="text" id="apellido_paterno" name="apellido_paterno" maxlength="100" required autocomplete="off">

        <label for="apellido_materno">Apellido Materno:</label>
        <input type="text" id="apellido_materno" name="apellido_materno" maxlength="100" autocomplete="off">

        <label for="grupo">Grupo:</label>
        <input type="text" id="grupo" name="grupo" maxlength="10" required autocomplete="off">

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" maxlength="150" autocomplete="off">

        <label for="celular">Celular:</label>
        <input type="text" id="celular" name="celular" maxlength="20" autocomplete="off">

        <label for="fecha_de_nacimiento">Fecha de Nacimiento:</label>
        <input type="date" id="fecha_de_nacimiento" name="fecha_de_nacimiento" pattern="\d{4}-\d{2}-\d{2}" autocomplete="off">

        <input type="submit" value="Guardar">
    </form>
</body>
</html>
