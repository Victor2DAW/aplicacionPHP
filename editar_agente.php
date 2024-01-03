<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Agente</title>
    <link rel="stylesheet" href="estilosEditar.css">
</head>
<body>

<?php
include('conexion.php');

$agente_id = $_REQUEST["id"];

$consulta = "SELECT * FROM agentes WHERE id = $agente_id";
$res = mysqli_query($conexion, $consulta) or die("Consulta incorrecta");

$fila = mysqli_fetch_array($res);
?>

<h1>Editar Agente</h1>

<form action="editar_guardar_agente.php" method="post">
    <input type="hidden" name="agente_id" value="<?php echo $fila['id']; ?>">
    
    <table>
        <tr>
            <td><div align="right">Nombre</div></td>
            <td><input name="nombre" type="text" value="<?php echo $fila['nombre']; ?>"></td>
        </tr>
        <tr>
            <td><div align="right">Email</div></td>
            <td><input name="email" type="text" value="<?php echo $fila['email']; ?>"></td>
        </tr>
        <tr>
            <td><div align="right">Teléfono</div></td>
            <td><input name="telefono" type="text" value="<?php echo $fila['telefono']; ?>"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Guardar Cambios"></td>
        </tr>
    </table>
</form>

</body>
</html>
