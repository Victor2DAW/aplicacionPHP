<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Propiedades</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<?php
include('conexion.php');

$consulta = "SELECT propiedades.*, agentes.nombre AS nombre_agente 
             FROM propiedades 
             LEFT JOIN agentes ON propiedades.agente_id = agentes.id";

$res = mysqli_query($conexion, $consulta) or die("Consulta incorrecta");

echo "<h1>Listado de Propiedades Inmobiliarias</h1>";

echo "<table>\n";
echo "<tr>\n
        <th>Nombre</th>\n
        <th>Descripción</th>\n
        <th>Precio</th>\n
        <th>Ubicación</th>\n
        <th>Agente</th>\n
        <th>Acciones</th>\n
    </tr>\n";

while ($fila = mysqli_fetch_array($res)) {
    echo "<tr>\n";
    echo "  <td>" . $fila['nombre'] . "</td>\n";
    echo "  <td>" . $fila['descripcion'] . "</td>\n";
    echo "  <td>$" . $fila['precio'] . "</td>\n";
    echo "  <td>" . $fila['ubicacion'] . "</td>\n";
    echo "  <td>" . $fila['nombre_agente'] . "</td>\n"; // Muestra el nombre del agente
    echo "  <td class='actions'>
                <a href='editar.php?id=" . $fila['id'] . "'><img src='ico_modificar.png' alt='Editar'></a>
                <a href='eliminar.php?id=" . $fila['id'] . "'><img src='ico_eliminar.png' alt='Eliminar'></a>
            </td>";
    echo "</tr>\n";
}
echo "</table>";

echo "<div class='add-property'><a href='anadir.php'>Añadir Propiedad</a></div>";

echo "<div class='add-property'><a href='filtros.php'>Filtros</a></div>";




// Consulta para obtener los agentes
$consultaAgentes = "SELECT * FROM agentes";
$resAgentes = mysqli_query($conexion, $consultaAgentes) or die("Consulta de agentes incorrecta");

echo "<h1>Listado de Agentes Inmobiliarios</h1>";

echo "<table>\n";
echo "<tr>\n
        <th>Nombre</th>\n
        <th>Email</th>\n
        <th>Teléfono</th>\n
        <th>Acciones</th>\n
    </tr>\n";

while ($filaAgente = mysqli_fetch_array($resAgentes)) {
    echo "<tr>\n";
    echo "  <td>" . $filaAgente['nombre'] . "</td>\n";
    echo "  <td>" . $filaAgente['email'] . "</td>\n";
    echo "  <td>" . $filaAgente['telefono'] . "</td>\n";
    echo "  <td class='actions'>
                <a href='editar_agente.php?id=" . $filaAgente['id'] . "'><img src='ico_modificar.png' alt='Editar'></a>
                <a href='eliminar_agente.php?id=" . $filaAgente['id'] . "'><img src='ico_eliminar.png' alt='Eliminar'></a>
            </td>";
    echo "</tr>\n";
}
echo "</table>";

echo "<div class='add-property'><a href='anadir_agente.php'>Añadir Agente</a></div>";

?>

</body>
</html>
