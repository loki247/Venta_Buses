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
        <p style="font-size: 25pt;">Resultados de la búsqueda:</p>
        <table class="bordered highlight">

            <?php

            require ("rest/conector.php");

            $anho = $_GET["a"];
            $sql = "CALL buscarPorAnho('". $anho ."')";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {

                while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td style='background-color: green; font-size: 20pt;'>". $row["marcaCarrorecia"] ." " .$row["modeloCarroceria"] ."</td>
                        <td style='background-color: green;'></td>
                        <td style='background-color: green;'></td>
                      </tr>
                        
                       <tr>
                        <td><a href='publicacion.php?b=". $row["idBus"] ."'><img src=". $row["foto1"] ." height='200' style='border-radius: 20px;'></a></td>
                        <td>
                            <table>
                                <tr>
                                    <td style='font-size: 16pt;'><b>Año: </b>". $row["anho"] ."</td>
                                </tr>
                            
                                <tr>
                                    <td style='font-size: 16pt;'><b>Ubicación: </b>". $row["nombreCiudad"] ."</td>
                                </tr>
                            </table>
                        </td>
                        
                        <td style='font-size: 20pt;'><b>Valor:</b> $". $row["valor"] ."</td>
                                
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