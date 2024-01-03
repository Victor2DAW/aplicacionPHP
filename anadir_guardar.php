<HTML>
  <HEAD>
   <TITLE>Web de la inmobiliaria</TITLE>
  </HEAD>
  <BODY>

  <?php 
  include('conexion.php');

  $nombre = $_REQUEST["nombre"];
  $descripcion = $_REQUEST["descripcion"];
  $precio = $_REQUEST["precio"];
  $ubicacion = $_REQUEST["ubicacion"];
  $agente_id = $_REQUEST["agente_id"];

  $consulta = "INSERT INTO propiedades (nombre, descripcion, precio, ubicacion, agente_id) VALUES ('$nombre', '$descripcion', $precio, '$ubicacion', $agente_id)";
  $res = mysqli_query($conexion, $consulta) or die("Consulta incorrecta");

  header("Location: index.php");
?>

