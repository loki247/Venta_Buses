$(document).ready(function() {
    var url = "http://localhost:8080/venta_buses/";

    $("#load").hide();

    $.getJSON(url + "rest/obtenerMarcaCarroceria.php", function (result) {
        $.each(result, function (i, field) {
            $("#carroceria").append("<option value='" + field.idMarcaCarroceria + "' data-icon='img/Logos_carrocerias/"+ field.idMarcaCarroceria+".png'>" + field.marca + "</option>");
            $('select').material_select('update');
        });
    });

    $.getJSON(url + "rest/obtenerMarcaChasis.php", function (result) {
        $.each(result, function (i, field) {
            $("#chasis").append("<option value='" + field.idMarcaChasis + "' data-icon='img/Logos_chasis/"+ field.idMarcaChasis+".png'>" + field.marca + "</option>");
            $('select').material_select('update');
        });
    });

    $.getJSON(url + "rest/obtenerRegion.php", function (result) {
        $.each(result, function (i, field) {
            $("#region").append("<option value='" + field.idRegion + "'>" + field.nombre + "</option>");
            $('select').material_select('update');
        });
    });

    $("#region").change(function () {
        $("#ciudad").empty();
        $("#load").show();
        $.getJSON(url + "rest/obtenerCiudad.php?r=" + $("#region").val(), function (result) {
            $.each(result, function (i, field) {
                $("#ciudad").append("<option value='" + field.idCiudad + "'>" + field.nombre + "</option>");
                $("#load").hide();
                $('select').material_select('update');
            });
        });
    });
});