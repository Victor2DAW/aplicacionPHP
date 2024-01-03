<!DOCTYPE html>
<html lang="es">
<head>
    <title>Eliminar Propiedad</title>
</head>
<body>

<?php
    include('conexion.php');


        $propiedad_id = $_REQUEST["id"];

        // Creo y construyo la consulta para eliminar la propiedad
        $consulta = "DELETE FROM propiedades WHERE id='".$propiedad_id."';";
        $res = mysqli_query($conexion, $consulta) or die("Consulta incorrecta");

        header("Location: index.php"); // Redirige a la página principal después de eliminar la propiedad
    
?>


