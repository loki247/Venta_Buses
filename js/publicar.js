$(document).ready(function () {
    var url = "http://localhost:8080/venta_buses/";
    $("select").material_select();

    $.getJSON(url + "rest/obtenerMarcaChasis.php", function (result) {
        $.each(result, function (i, field) {
            $("#chasis").append("<option value='" + field.idMarcaChasis + "' data-icon='img/Logos_chasis/"+ field.idMarcaChasis+".png'>" + field.marca + "</option>");
            $('select').material_select('update');
        });
    });

    $("#chasis").change(function () {
        $("#modeloChasis").empty();
        $.getJSON(url + "rest/obtenerChasis.php?ch=" + $("#chasis").val(), function (result) {
            $.each(result, function (i, field) {
                $("#modeloChasis").append("<option value='" + field.idChasis + "'>" + field.modelo + "</option>");
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
        $.getJSON(url + "rest/obtenerCarroceria.php?ca=" + $("#carroceria").val(), function (result) {
            $.each(result, function (i, field) {
                $("#modeloCarroceria").append("<option value='" + field.idModelo + "'>" + field.modelo + "</option>");
                $('select').material_select('update');
            });
        });
    });
});
