<!DOCTYPE html>
<html>
<head>
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL=../index.php">
    <link rel="stylesheet" href="../css/materialize.css">
    <link rel="stylesheet" href="../css/Estilo.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type="text/javascript" src="../js/jquery-3.1.1.js"></script>
    <script type="text/javascript" src="../js/materialize.js"></script>
    <title>Venta Buses Chile</title>
</head>
<body>
<div id="container">

    <nav>
        <div class="nav-wrapper" id="barraSuperior">
            <a href="../index.php" class="brand-logo right">Venta Buses Chile</a>
        </div>
    </nav>

    <div id="mensaje">
        <?php

        require ("conector.php");

        $tipoBus = $_POST["tipoBus"];
        $chasis = $_POST["chasis"];
        $modeloChasis = $_POST["modeloChasis"];
        $carroceria = $_POST["carroceria"];
        $modeloCarroceria = $_POST["modeloCarroceria"];
        $anho = $_POST["anho"];
        $region = $_POST["region"];
        $ciudad = $_POST["ciudad"];
        $valor = $_POST["valor"];
        $kilometraje = $_POST["kilometraje"];
        $asientos = $_POST["asientos"];
        $nombre = $_POST["nombre"];
        $rut = $_POST["rut"];
        $telefono = $_POST["telefono"];
        $correo = $_POST["correo"];
        $descripcion = $_POST["descripcion"];
        $fecha =  date('Y-m-d',time()-(60*60*24));
        $foto1 = $_POST["textImg1"];
        $foto2 = $_POST["textImg2"];
        $foto3 = $_POST["textImg3"];
        $foto4 = $_POST["textImg4"];
        $foto5 = $_POST["textImg5"];
        $foto6 = $_POST["textImg6"];

        $sql = "CALL agregarAviso(". $tipoBus .", ". $chasis .", ". $modeloChasis .", ". $carroceria .", ". $modeloCarroceria .", ". $anho .", ". $region.", ". $ciudad .", ". $valor .", ". $kilometraje .", ". $asientos .", '". $nombre ."', '". $rut ."', '". $telefono ."', '". $correo ."', '". $descripcion ."', '". $fecha ."', '". $foto1 ."', '". $foto2 ."', '". $foto3 ."', '". $foto4 ."', '".  $foto5."', '". $foto6 ."')";

        if (mysqli_query($conn, $sql)) {
            echo "<p style='font-size: 36pt;'>Publicado Exitosamente</p>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
        ?>
    </div>
</div>
</body>
</html>
