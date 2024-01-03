<!DOCTYPE html>
<html lang="es">
<head>
    <title>Eliminar Agente</title>
</head>
<body>

<?php
    include('conexion.php');

    $agente_id = $_REQUEST["id"];

    // Consulta para eliminar el agente
    $consulta = "DELETE FROM agentes WHERE id='".$agente_id."';";
    $res = mysqli_query($conexion, $consulta) or die("Consulta incorrecta");

    header("Location: index.php"); // Redirige a la página principal después de eliminar el agente
?>

</body>
</html>
