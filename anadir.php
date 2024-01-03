<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Web Inmobiliaria - Añadir piso</title>
    <link rel="stylesheet" href="estilosAñadir.css">
</head>
<body>

<center><h1>Añadir piso</h1></center>
<form method="post" action="anadir_guardar.php">
    <table border="0" align="center" cellpadding="3" cellspacing="0">
        <tr>
            <td><div align="right">Nombre</div></td>
            <td><input name="nombre" type="text"></td>
        </tr>
        <tr>
            <td><div align="right">Descripción</div></td>
            <td><input name="descripcion" type="text"></td>
        </tr>
        <tr>
            <td><div align="right">Precio</div></td>
            <td><input name="precio" type="text"></td>
        </tr>
        <tr>
            <td><div align="right">Ubicación</div></td>
            <td><input name="ubicacion" type="text"></td>
        </tr>
        <tr>
            <td><div align="right">Agente</div></td>
            <td>
                <select name="agente_id">
                    <?php
                        include('conexion.php');

                        $consulta_agentes = "SELECT * FROM agentes";
                        $res_agentes = mysqli_query($conexion, $consulta_agentes) or die("Consulta incorrecta");

                        while ($fila_agente = mysqli_fetch_array($res_agentes)) {
                            echo "<option value='" . $fila_agente['id'] . "'>" . $fila_agente['nombre'] . "</option>";
                        }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <div align="center">
                    <input type="submit" name="Submit" value="Enviar" />
                </div>
            </td>
        </tr>
    </table>
</form>

</body>
</html>
