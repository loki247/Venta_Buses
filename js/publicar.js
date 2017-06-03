$(document).ready(function () {
    var url = "http://localhost:8080/venta_buses/";
    $("select").material_select();

    $.getJSON(url + "rest/obtenerMarcaChasis.php", function (result) {
        $.each(result, function (i, field) {
            $("#chasis").append("<option value='" + field.idMarcaChasis + "' data-icon='img/Logos_chasis/"+ field.idMarcaChasis+".png'>" + field.marca + "</option>");
            $('select').material_select('update');
        });
    });

    $.getJSON(url + "rest/obtenerChasis.php?c=" + 1, function (result) {
        $.each(result, function (i, field) {
            //$("#chasis").change(function () {
               // console.log($("#chasis").val());
                $("#modeloChasis").append("<option value='" + field.idChasis + "'>" + field.modelo + "</option>");
                $('select').material_select('update');
            });
        });
    //});
})
