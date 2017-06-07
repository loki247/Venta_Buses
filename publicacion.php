<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" href="css/Estilo.css">
    <script type="text/javascript" src="js/jquery-3.1.1.js"></script>
    <script src="js/cargarImagen.js"></script>
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


    <div id="publicacion">
        <table id='contenidoPublicacion'>
    <?php

    require ("rest/conector.php");

    $idBus = $_GET["b"];
    $sql = "CALL verPublicacion('". $idBus ."')";
    $result = mysqli_query($conn, $sql);


    if (mysqli_num_rows($result) > 0) {

        while($row = mysqli_fetch_assoc($result)) {
            echo "
                    <tr>
                        <th>Tipo de Bus:</th>
                        <td>". $row["tipoBus"] ."</td>
                    </tr>
                    
                    <tr>
                        <th>Marca:</th>
                        <td>". $row["marcaChasis"] ."</td>
                    </tr>
                    
                    <tr>
                        <th>Modelo:</th>
                        <td>". $row["modeloChasis"] ."</td>
                    </tr>
                    
                    <tr>
                        <th>Carroceria:</th>
                        <td>". $row["marcaCarrorecia"] ."</td>
                    </tr>
                    
                    <tr>
                        <th>Modelo Carroceria:</th>
                        <td>". $row["modeloCarroceria"] ."</td>
                    </tr>
                    
                    <tr>
                        <th>Año de Fabricación:</th>
                        <td>". $row["anho"] ."</td>
                    </tr>
                    
                    <tr>
                        <th>Ubicación:</th>
                        <td>". $row["nombreRegion"] .", ". $row["nombreCiudad"] ."</td>
                    </tr>
                    
                    <tr>
                        <th>Valor:</th>
                        <td>$". $row["valor"] ."</td>
                    </tr>
                    
                    <tr>
                        <th>Kilometraje:</th>
                        <td>". $row["kilometraje"] ."</td>
                    </tr>
                    
                    <tr>
                        <th>Capacidad:</th>
                        <td>". $row["cantAsientos"] ." Asientos</td>
                    </tr>
                    
                    <tr>
                        <th>Nombre:</th>
                        <td>". $row["nombre"] ."</td>
                    </tr>
                    
                    <tr>
                        <th>Rut:</th>
                        <td>". $row["rut"] ."</td>
                    </tr>
                    
                    <tr>
                        <th>Teléfono de Contacto:</th>
                        <td>". $row["telefono"] ."</td>
                    </tr>
                    
                    <tr>
                        <th>Correo:</th>
                        <td>". $row["correo"] ."</td>
                    </tr>
                    
                    <tr>
                        <th>Descripción:</th>
                        <td>". $row["descripcion"] ."</td>
                    </tr>
                    
                    <tr>
                        <th style='font-size: 20pt'>Fotos:</th>
                    </tr>
                    
                    <tr>
                        
                        <td>
                           
                            <a href='#modal1'><img id='foto1' height='200' src=". $row["foto1"] ."></a>

                            <div id='modal1' class='modal'>
                                <div class='modal-content'>
                                    <img id='foto1' src=". $row["foto1"] ."  style='width: 75%; margin-left: 100px;'>
                                </div>
                            </div>
                          
                            <script>
                              $(document).ready(function(){
                                $('.modal').modal();
                              });
                            </script>
                        </td>
                    
                        <td>
                            
                            <a href='#modal2'><img id='foto1' height='200' src=". $row["foto2"] ."></a>

                            <div id='modal2' class='modal'>
                                <div class='modal-content'>
                                    <img id='foto2' src=". $row["foto2"] ."  style='width: 75%; margin-left: 100px;'>
                                </div>
                            </div>
                          
                            <script>
                              $(document).ready(function(){
                                $('.modal').modal();
                              });
                            </script>
                        </td>
                   
                        <td>
                            <a href='#modal3'><img id='foto3' height='200' src=". $row["foto3"] ."></a>

                            <div id='modal3' class='modal'>
                                <div class='modal-content'>
                                    <img id='foto3' src=". $row["foto3"] ."  style='width: 75%; margin-left: 100px;'>
                                </div>
                            </div>
                          
                            <script>
                              $(document).ready(function(){
                                $('.modal').modal();
                              });
                            </script>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            <a href='#modal4'><img id='foto1' height='200' src=". $row["foto4"] ."></a>

                            <div id='modal4' class='modal'>
                                <div class='modal-content'>
                                    <img id='foto4' src=". $row["foto4"] ."  style='width: 75%; margin-left: 100px;'>
                                </div>
                            </div>
                          
                            <script>
                              $(document).ready(function(){
                                $('.modal').modal();
                              });
                            </script>
                        </td>
                    
                        <td>
                            <a href='#modal5'><img id='foto5' height='200' src=". $row["foto5"] ."></a>

                            <div id='modal5' class='modal'>
                                <div class='modal-content'>
                                    <img id='foto5' src=". $row["foto5"] ."  style='width: 75%; margin-left: 100px;'>
                                </div>
                            </div>
                          
                            <script>
                              $(document).ready(function(){
                                $('.modal').modal();
                              });
                            </script>
                        </td>
                    
                        <td>
                            <a href='#modal6'><img id='foto6' height='200' src=". $row["foto6"] ."></a>

                            <div id='modal6' class='modal'>
                                <div class='modal-content'>
                                    <img id='foto6' src=". $row["foto6"] ."  style='width: 75%; margin-left: 100px;'>
                                </div>
                            </div>
                          
                            <script>
                              $(document).ready(function(){
                                $('.modal').modal();
                              });
                            </script>
                        </td>
                    </tr>";
        }
    } else {
        echo "0 results";
    }

    mysqli_close($conn);
    ?>
        </table>
    </div>
</div>
</body>
</html>