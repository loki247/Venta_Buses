$(document).ready(function () {
    var url = "http://localhost:8080/venta_buses/";

    $("#loadChasis").hide();
    $("#loadCarroceria").hide();
    $("#loadCiudad").hide();

    $.getJSON(url + "rest/obtenerMarcaChasis.php", function (result) {
        $.each(result, function (i, field) {
            $("#chasis").append("<option value='" + field.idMarcaChasis + "' data-icon='img/Logos_chasis/"+ field.idMarcaChasis+".png'>" + field.marca + "</option>");
            $('select').material_select('update');
        });
    });

    $("#chasis").change(function () {
        $("#modeloChasis").empty();
        $("#loadChasis").show();
        $.getJSON(url + "rest/obtenerChasis.php?ch=" + $("#chasis").val(), function (result) {
            $.each(result, function (i, field) {
                $("#modeloChasis").append("<option value='" + field.idChasis + "'>" + field.modelo + "</option>");
                $("#loadChasis").hide();
                $('select').material_select('update');
            });
        });
    });

    $.getJSON(url + "rest/obtenerMarcaCarroceria.php", function (result) {
        $.each(result, function (i, field) {
            $("#carroceria").append("<option value='" + field.idMarcaCarroceria + "' data-icon='img/Logos_carrocerias/"+ field.idMarcaCarroceria+".png'>" + field.marca + "</option>");
            $('select').material_select('update');
        });
    });

    $("#carroceria").change(function () {
        $("#modeloCarroceria").empty();
        $("#loadCarroceria").show();
        $.getJSON(url + "rest/obtenerCarroceria.php?ca=" + $("#carroceria").val(), function (result) {
            $.each(result, function (i, field) {
                $("#modeloCarroceria").append("<option value='" + field.idModelo + "'>" + field.modelo + "</option>");
                $("#loadCarroceria").hide();
                $('select').material_select('update');
            });
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
        $("#loadCiudad").show();
        $.getJSON(url + "rest/obtenerCiudad.php?r=" + $("#region").val(), function (result) {
            $.each(result, function (i, field) {
                $("#ciudad").append("<option value='" + field.idCiudad + "'>" + field.nombre + "</option>");
                console.log(field.idCiudad);
                $("#loadCiudad").hide();
                $('select').material_select('update');
            });
        });
    });
});
