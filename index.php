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

        <div id="formularioBusqueda">
            <script src="js/formularioBusqueda.js"></script>

            <div class="collapsible-header active">

                <p style="font-size: 30pt">Buscar por:</p>

                <ul class="collapsible" data-collapsible="accordion">

                    <li>

                        <div class="collapsible-header"><i class="material-icons">Año</i></div>
                        <div class="collapsible-body">

                            <form id="porAnho">

                                <select id="anhos">
                                    <option value="0">Selecionar</option>
                                </select>

                                <button class="btn waves-effect waves-light" type="submit" name="action">Buscar
                                    <i class="material-icons right"></i>
                                </button>

                            </form>

                        </div>

                    </li>

                    <li>

                        <div class="collapsible-header"><i class="material-icons">Carroceria</i></div>
                        <div class="collapsible-body">

                            <form id="porCarroceria">

                                <select id="carroceria">
                                    <option value="0">Selecionar</option>
                                </select>

                            </form>

                        </div>

                    </li>

                    <li>

                        <div class="collapsible-header"><i class="material-icons">Chasis</i></div>
                        <div class="collapsible-body">

                            <form id="porChasis">

                                <select id="chasis" class="icons">
                                    <option value="0">Selecionar</option>
                                </select>

                            </form>

                        </div>

                    </li>

                    <li>

                        <div class="collapsible-header"><i class="material-icons">Región</i></div>
                        <div class="collapsible-body">

                            <form id="porCiudad">

                                <select id="region">
                                    <option value="0">Selecionar</option>
                                </select>

                            </form>

                        </div>

                    </li>

                </ul>

            </div>
        </div>
    </div>
</body>
</html>