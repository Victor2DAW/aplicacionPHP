<HTML>
  <HEAD>
   <TITLE>Web de la inmobiliaria</TITLE>
  </HEAD>
  <BODY>

<?php
  include('conexion.php');

  $propiedad_id = $_REQUEST["propiedad_id"];
  $nombre = $_REQUEST["nombre"];
  $descripcion = $_REQUEST["descripcion"];
  $precio = $_REQUEST["precio"];
  $ubicacion = $_REQUEST["ubicacion"];
  $agente_id = $_REQUEST["agente_id"];

  $consulta = "UPDATE propiedades SET nombre='$nombre', descripcion='$descripcion', precio=$precio, ubicacion='$ubicacion', agente_id=$agente_id WHERE id=$propiedad_id";
  $res = mysqli_query($conexion, $consulta) or die("Consulta incorrecta");

  header("Location: index.php");
?>


