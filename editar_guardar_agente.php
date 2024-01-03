<HTML>
  <HEAD>
    <TITLE>Web de la inmobiliaria</TITLE>
  </HEAD>
  <BODY>

  <?php
    include('conexion.php');

    $agente_id = $_REQUEST["agente_id"];
    $nombre = $_REQUEST["nombre"];
    $email = $_REQUEST["email"];
    $telefono = $_REQUEST["telefono"];

    $consulta = "UPDATE agentes SET nombre='$nombre', email='$email', telefono='$telefono' WHERE id=$agente_id";
    $res = mysqli_query($conexion, $consulta) or die("Consulta incorrecta");

    header("Location: index.php");
  ?>

  </BODY>
</HTML>

