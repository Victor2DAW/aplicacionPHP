<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Web Inmobiliaria - Añadir agente</title>
    <link rel="stylesheet" href="estilosAñadir.css">
</head>
<body>
    <form method="post" action="anadir_agente_guardar.php">
        <label for="nombre">Nombre del agente:</label>
        <input type="text" name="nombre" required><br><br>

        <label for="email">Email del agente:</label>
        <input type="email" name="email" required><br><br>

        <label for="telefono">Teléfono del agente:</label>
        <input type="text" name="telefono"><br><br>

        <input type="submit" value="Agregar Agente">
    </form>

</body>
</html>