<?php
// Verificar si se enviaron datos del formulario
if (isset($_GET['nombre']) || isset($_GET['ubicacion']) || (isset($_GET['precio_min']) && isset($_GET['precio_max']))) {
    // Obtener los valores enviados por el formulario
    $nombre = $_GET['nombre'];
    $ubicacion = $_GET['ubicacion'];
    $precio_min = $_GET['precio_min'];
    $precio_max = $_GET['precio_max'];

    // Establecer la conexión a la base de datos (reemplaza con tus propios datos)
    include('conexion.php');

    // Construir la consulta basada en los criterios recibidos
    $consulta = "SELECT * FROM propiedades WHERE 1=1";

    if (!empty($nombre)) {
        $consulta .= " AND nombre LIKE '%$nombre%'";
    }

    if (!empty($ubicacion)) {
        $consulta .= " AND ubicacion LIKE '%$ubicacion%'";
    }

    if (!empty($precio_min) && !empty($precio_max)) {
        $consulta .= " AND precio BETWEEN $precio_min AND $precio_max";
    }

    // Ejecutar la consulta
    $res = mysqli_query($conexion, $consulta) or die("Error al agregar agente");

    // Mostrar los resultados
    if (mysqli_num_rows($res) > 0) {
        echo "<h2>Resultados de la búsqueda:</h2>";
        echo "<ul>";
        while ($fila = mysqli_fetch_assoc($res)) {
            echo "<li>{$fila['nombre']} - {$fila['ubicacion']} - {$fila['precio']}</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No se encontraron propiedades que coincidan con los criterios de búsqueda.</p>";
    }
} else {
    // Si no se enviaron datos del formulario
    echo "<p>No se han proporcionado criterios de búsqueda.</p>";
}
?>
