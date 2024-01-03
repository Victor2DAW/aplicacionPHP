<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Propiedad</title>
    <link rel="stylesheet" href="estilosEditar.css">
</head>
<body>

<?php
include('conexion.php');

$propiedad_id = $_REQUEST["id"];

$consulta = "SELECT * FROM propiedades WHERE id = $propiedad_id";
$res = mysqli_query($conexion, $consulta) or die("Consulta incorrecta");

$fila = mysqli_fetch_array($res);


// Obtener la lista de agentes
$consulta_agentes = "SELECT * FROM agentes";
$res_agentes = mysqli_query($conexion, $consulta_agentes) or die("Consulta de agentes incorrecta");
?>

<h1>Editar Propiedad</h1>

<form action="editar_guardar.php" method="post">
    <input type="hidden" name="propiedad_id" value="<?php echo $fila['id']; ?>">
    
    <table>
        <tr>
            <td><div align="right">Nombre</div></td>
            <td><input name="nombre" type="text" value="<?php echo $fila['nombre']; ?>"></td>
        </tr>
        <tr>
            <td><div align="right">Descripción</div></td>
            <td><input name="descripcion" type="text" value="<?php echo $fila['descripcion']; ?>"></td>
        </tr>
        <tr>
            <td><div align="right">Precio</div></td>
            <td><input name="precio" type="text" value="<?php echo $fila['precio']; ?>"></td>
        </tr>
        <tr>
            <td><div align="right">Ubicación</div></td>
            <td><input name="ubicacion" type="text" value="<?php echo $fila['ubicacion']; ?>"></td>
        </tr>
        <tr>
            <td><div align="right">Agente</div></td>
            <td>
                <select name="agente_id">
                    <?php
                    while ($fila_agente = mysqli_fetch_array($res_agentes)) {
                        $selected = ($fila_agente['id'] == $fila_propiedad['agente_id']) ? "selected" : "";
                        echo "<option value='" . $fila_agente['id'] . "' $selected>" . $fila_agente['nombre'] . "</option>";
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Guardar Cambios"></td>
        </tr>
    </table>
</form>

</body>
</html>
