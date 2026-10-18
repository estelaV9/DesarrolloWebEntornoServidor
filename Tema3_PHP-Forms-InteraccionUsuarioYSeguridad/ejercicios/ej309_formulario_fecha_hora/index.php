<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva de Cita Médica</title>
    <!-- EJERCICIO 309: FORMULARIO CON FECHA Y HORA -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }

        .campo {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        select,
        input {
            padding: 8px;
            width: 250px;
        }

        button {
            padding: 10px 15px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <h2>Reserva de Cita Médica</h2>
    <form action="procesar_formulario.php" method="POST">

        <div class="campo">
            <label for="nombre">Nombre del Paciente:</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>

        <div class="campo">
            <label for="especialidad">Especialidad Médica:</label>
            <select id="especialidad" name="especialidad" required>
                <option value="">-- Seleccione Especialidad --</option>
                <option value="Pediatría">Pediatría</option>
                <option value="Dermatología">Dermatología</option>
                <option value="Cardiología">Cardiología</option>
            </select>
        </div>

        <div class="campo">
            <label for="fecha">Fecha de la Cita:</label>
            <input type="date" id="fecha" name="fecha">
        </div>

        <div class="campo">
            <label for="hora">Hora de la Cita:</label>
            <input type="time" id="hora" name="hora" min="08:00" max="15:00">
            <small style="display:block; color:gray;">Horario de atención: 08:00 a 15:00</small>
        </div>

        <button type="submit">Confirmar Cita</button>
    </form>
</body>
</html>