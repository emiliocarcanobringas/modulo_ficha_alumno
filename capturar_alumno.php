<!DOCTYPE html>
<html>
<head>
    <title>Capturar Alumno</title>
    <link rel="stylesheet" href="capturar_alumno.css">
    <script>
        function updateWhatsAppLength() {
            let input = document.getElementById('whatsapp-input');
            let feedback = document.getElementById('whatsapp-feedback');
            let length = input.value.length;

            if (length < 10) {
                feedback.textContent = `Faltan ${10 - length} números.`;
            } else {
                feedback.textContent = '';
            }
        }
    </script>
</head>
<body>
    <form action="guardar_alumno.php" method="post" class="form-plan">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="apellido_paterno">Apellido Paterno:</label>
        <input type="text" id="apellido_paterno" name="apellido_paterno" required>

        <label for="apellido_materno">Apellido Materno:</label>
        <input type="text" id="apellido_materno" name="apellido_materno" required>

        <label for="fecha_de_nacimiento">Fecha de Nacimiento:</label>
        <input type="date" id="fecha_de_nacimiento" name="fecha_de_nacimiento" pattern="\d{4}-\d{2}-\d{2}" required>

        <label for="WhatsApp">WhatsApp:</label>
        <input type="text" id="whatsapp-input" name="WhatsApp" maxlength="10" onkeyup="updateWhatsAppLength()" required>
        <span id="whatsapp-feedback" class="feedback"></span>

        <input type="submit" value="Guardar">
    </form>
</body>
</html>

