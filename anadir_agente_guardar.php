<HTML>
    <HEAD>
        <TITLE>Web de la inmobiliaria</TITLE>
    </HEAD>
    <BODY>
    <?php
        include('conexion.php');

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST["nombre"];
            $email = $_POST["email"];
            $telefono = $_POST["telefono"];

            $consulta = "INSERT INTO agentes (nombre, email, telefono) VALUES ('$nombre', '$email', '$telefono')";
            $res = mysqli_query($conexion, $consulta) or die("Error al agregar agente");
            
            header("Location: index.php"); // Redirigir a la página principal
        }
    ?>

    </BODY>
</HTML>