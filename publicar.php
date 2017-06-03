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

    <div id="formularioPublicacion">

        <script src="js/publicar.js"></script>

        <form>

            <label>Tipo de Bus</label>
            <select id="tipoBus" name="tipoBus">
                <option value="0">Tipo de Bus</option>
                <option value="1">Micro-Bus</option>
                <option value="2">Bus</option>
            </select>
            <br>

            <label>Chasis</label>
            <select id="chasis" class="icons" name="chasis">
                <option value="0">Chasis</option>
            </select>
            <br>

            <label>Modelo Chasis</label>
            <select id="modeloChasis" class="icons" name="modeloChasis">
                <option value="0">Modelo Chasis</option>
            </select>
            <br>

            <label>Carroceria</label>
            <select id="carroceria" class="icons" name="carroceria">
                <option value="0">Chasis</option>
            </select>
            <br>

            <label>Modelo Carroceria</label>
            <select id="modeloCarroceria" class="icons" name="modeloCarroceria">
                <option value="0">Modelo Carroceria</option>
            </select>
            <br>

            <label>Año</label>
            <input type="text" id="anho" name="anho">
            <br>
        </form>
    </div>
</div>
</body>
</html>