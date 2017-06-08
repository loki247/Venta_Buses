<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" href="css/Estilo.css">
    <script type="text/javascript" src="js/jquery-3.1.1.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>
    <title>Venta Buses Chile</title>
</head>
<body>
<div id="container">

    <nav>
        <div class="nav-wrapper" id="barraSuperior">
            <a href="index.php" class="brand-logo right">Venta Buses Chile</a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="publicar.php">Publicar</a></li>
                <li><a href="#">Modificar Aviso</a></li>
            </ul>
        </div>
    </nav>

    <div id="resultadoBusqueda">
        <table class="bordered highlight">

            <?php

            require ("rest/conector.php");

            $anho = $_GET["a"];
            $sql = "CALL buscarPorAnho('". $anho ."')";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {

                echo "<tr>
                        <th>Foto</th>
                        <th>Modelo</th>
                        <th>Año</th>
                        <th>Valor</th>
                        <th>Ubicación</th>
                      </tr>";

                while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td><a href='publicacion.php?b=". $row["idBus"] ."'><img src=". $row["foto1"] ." height='100' style='border-radius: 20px;'></a></td>
                        <td>". $row["marcaCarrorecia"] ." " .$row["modeloCarroceria"] ."</td>
                        <td>". $row["anho"] ."</td>
                        <td>$". $row["valor"] ."</td>
                        <td>". $row["nombreCiudad"] ."</td>
                      </tr>";
                }
            } else {
                echo "0 results";
            }
            ?>

        </table>
    </div>
</div>
</body>
</html>