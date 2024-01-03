<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Búsqueda de Propiedades</title>
    <link rel="stylesheet" href="estilosAñadir.css">
</head>
<body>
    <h1>Búsqueda de Propiedades</h1>
    
    <form action="resultado_busqueda.php" method="GET">
        <!-- Campo para buscar por nombre -->
        <label for="nombre">Buscar por Nombre:</label>
        <input type="text" id="nombre" name="nombre">
        <br><br>
        <!-- Campo para buscar por ubicación -->
        <label for="ubicacion">Buscar por Ubicación:</label>
        <input type="text" id="ubicacion" name="ubicacion">
        <br><br>
        <!-- Campo para buscar por rango de precios -->
        <label for="precio_min">Precio Mínimo:</label>
        <input type="number" id="precio_min" name="precio_min" step="0.01">
        <label for="precio_max">Precio Máximo:</label>
        <input type="number" id="precio_max" name="precio_max" step="0.01">
        <br><br>
        <!-- Botón para enviar el formulario -->
        <input type="submit" value="Buscar">
    </form>
</body>
</html>
