<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRABAJO PRACTICO NUMERO 2</title>
</head>
<body>
    <h1>Formulario de Registro</h1>
    <form action="procesar.php" method="POST">
        <label for="usuario">Usuario: *</label>
        <input type="text" name="usuario" id="usuario" required><br><br>

        <label for="password">Contraseña: *</label>
        <input type="password" name="password" id="password" required><br><br>

        <label for="fecha_nacimiento">Fecha de nacimiento:</label>
        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento"><br><br>

        <label for="direccion">Dirección:</label>
        <input type="text" name="direccion" id="direccion"><br><br>

        <label for="email">Correo electrónico:</label>
        <input type="email" name="email" id="email"><br><br>

        <label for="telefono">Teléfono:</label>
        <input type="text" name="telefono" id="telefono"><br><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>