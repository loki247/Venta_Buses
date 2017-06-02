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
                <li><a href="#">Publicar</a></li>
                <li><a href="#">Modificar Aviso</a></li>
            </ul>
        </div>
    </nav>

    <div id="formularioPublicacion">

        <script src="js/publicar.js"></script>

        <form>
            <label>Tipo de Bus</label>

            <select id="tipoBus">
                <option value="0">Tipo de Bus</option>
                <option value="1">Micro-Bus</option>
                <option value="2">Bus</option>
            </select>

            <select id="chasis" class="icons">
                <option value="0">Chasis</option>
            </select>

            <select id="modeloChasis" class="icons">
                <option value="0">Modelo chasis</option>
            </select>
        </form>
    </div>
</div>
</body>
</html>