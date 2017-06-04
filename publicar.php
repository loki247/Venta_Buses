<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" href="css/Estilo.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type="text/javascript" src="js/jquery-3.1.1.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>
    <script src="js/publicar.js"></script>
    <script type="text/javascript" src="js/cargarImagen.js"></script>
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

        <form method="post" action="rest/agregarAviso.php">

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

            <div class="preloader-wrapper small active" id="loadChasis">
                <div class="spinner-layer spinner-green-only">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                        <div class="circle"></div>
                    </div><div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>

            <label>Modelo Chasis</label>
            <select id="modeloChasis" class="icons" name="modeloChasis">
                <option value="0">Modelo Chasis</option>
            </select>
            <br>

            <label>Carroceria</label>
            <select id="carroceria" class="icons" name="carroceria">
                <option value="0">Carroceria</option>
            </select>
            <br>

            <div class="preloader-wrapper small active" id="loadCarroceria">
                <div class="spinner-layer spinner-green-only">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                        <div class="circle"></div>
                    </div><div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>

            <label>Modelo Carroceria</label>
            <select id="modeloCarroceria" class="icons" name="modeloCarroceria">
                <option value="0">Modelo Carroceria</option>
            </select>
            <br>

            <label>Año</label>
            <input type="text" id="anho" name="anho" placeholder="Año">
            <br>

            <label>Región</label>
            <select id="region" name="region">
                <option value="0">Selecionar Región</option>
            </select>
            <br>

            <div class="preloader-wrapper small active" id="loadCiudad">
                <div class="spinner-layer spinner-green-only">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                        <div class="circle"></div>
                    </div><div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>

            <label>Ciudad</label>
            <select id="ciudad" name="ciudad">
                <option value="0">Selecionar Ciudad</option>
            </select>

            <label>Valor</label>
            <input type="text" id="valor" name="valor" placeholder="Valor">
            <br>

            <label>Kilometraje</label>
            <input type="text" id="kilometraje" name="kilometraje" placeholder="Kilometraje">
            <br>

            <label>Cantidad de Asientos</label>
            <input type="text" id="asientos" name="asientos" placeholder="Cantidad de Asientos">
            <br>

            <label>Nombre</label>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre de quién publica">
            <br>

            <label>RUT</label>
            <input type="text" id="rut" name="rut" placeholder="RUT. Ejemplo: xxxxxxxx-x">
            <br>

            <label>Teléfono de contacto</label>
            <input type="text" id="telefono" name="telefono" placeholder="Teléfono de contacto">
            <br>

            <label>Correo (Opcional)</label>
            <input type="text" id="correo" name="correo" placeholder="correo@correo.cl">
            <br>

            <label>Descripcion (Opcional)</label>
            <textarea id="descripcion" name="descripcion" class="materialize-textarea"></textarea>
            <br>

            <p style="font-size: 20pt;">Fotos:</p>

            <input type="file" id="foto1" name="foto1" multiple accept='image/*' onchange="encodeImage1();">


            <input type="file" id="foto2" name="foto2" multiple accept='image/*' onchange="encodeImage2();">


            <input type="file" id="foto3" name="foto3" multiple accept='image/*' onchange="encodeImage3();">


            <input type="file" id="foto4" name="foto4" multiple accept='image/*' onchange="encodeImage4();">


            <input type="file" id="foto5" name="foto5" multiple accept='image/*' onchange="encodeImage5();">

            <input type="file" id="foto6" name="foto6" multiple accept='image/*' onchange="encodeImage6();">

            <table>
                <tr>
                    <td><textarea id="textImg1" name="textImg1" style="display:none;"></textarea>
                        <div id="imgContainer1"></div>
                    </td>

                    <td>
                        <textarea id="textImg2" name="textImg2" style="display:none;"></textarea>
                        <div id="imgContainer2"></div>
                    </td>

                    <td>
                        <textarea id="textImg3" name="textImg3" style="display:none;"></textarea>
                        <div id="imgContainer3"></div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <textarea id="textImg4" name="textImg4" style="display:none;"></textarea>
                        <div id="imgContainer4"></div>
                    </td>

                    <td>
                        <textarea id="textImg5" name="textImg5" style="display:none;"></textarea>
                        <div id="imgContainer5"></div>
                    </td>

                    <td>
                        <textarea id="textImg6" name="textImg6" style="display:none;"></textarea>
                        <div id="imgContainer6"></div>
                    </td>

                </tr>
            </table>
            <br>

            <button class="btn waves-effect waves-light" type="submit" name="action">
                Publicar
                <i class="medium material-icons">done</i>
            </button>

        </form>
    </div>
</div>
</body>
</html>