
// CAPTURANDO EVENTOS DE CLICK 

document.getElementById("btn-hnews").addEventListener('click',
    function () {
        var modes = document.querySelector("#lista-btns");
        var modes_position = modes.style.display;

        if (modes_position == "flex") {

            modes.style.display = "none";

        } else {
            modes.style.display = "flex";
        }

    }
);

document.getElementById("abrirbtn").addEventListener('click',
    function () {
        cerrar = document.querySelector("#cerrar");
        abrir = document.querySelector("#abrir");

        content = document.querySelector("#btn-hnews");
        listabtns = document.querySelector("#lista-btns");

        cerrar_estado = cerrar.style.display;

        if (cerrar_estado == "block") {

            cerrar.style.display = "none";
            abrir.style.display = "block";
            content.style.display = "none";
            listabtns.style.display = "none";

        } else {

            cerrar.style.display = "block";
            abrir.style.display = "none";
            content.style.display = "flex";
            listabtns.style.display = "flex";

        }

    }
);


// LLAMANDO A LOS CONTENIDOS

$(document).ready(function (e) {
    $.ajaxSetup({
        cache: false
    });
    $("#ver-content-retos").click(function () {
        $('#contenido').load('geteventsclient');

        var modes = document.querySelector("#contenido");
        var modes_position = modes.style.display;

        var contenedor = document.querySelector(".news-contenedor");

        if (modes_position !== "block") {

            modes.style.display = "block";

        } else {

            $(contenedor).remove();

        }
        $('#contenido').mousedown(function (e) {
            var contenedor = document.querySelector(".news-contenedor");
            var x = e.pageX - contenedor.offsetLeft;
            var y = e.pageY - contenedor.offsetTop;
            var movimiento = document.querySelector(".news-contenedor");
            $(document).mousemove(function (e) {
                movimiento.style.left = e.pageX - x + 'px';
                movimiento.style.top = e.pageY - y + 'px';
            });
        });
        $(document).mouseup(function () {
            $(this).unbind('mousemove');
        });

    });
});


$(document).ready(function (e) {
    $.ajaxSetup({
        cache: false
    });
    $("#ver-content-ranking").click(function () {
        $('#contenido').load('gettopsclient');

        var modes = document.querySelector("#contenido");
        var modes_position = modes.style.display;

        var contenedor = document.querySelector(".news-contenedor");

        if (modes_position !== "block") {

            modes.style.display = "block";

        } else {

            $(contenedor).remove();

        }
        $('#contenido').mousedown(function (e) {
            var contenedor = document.querySelector(".news-contenedor");
            var x = e.pageX - contenedor.offsetLeft;
            var y = e.pageY - contenedor.offsetTop;
            var movimiento = document.querySelector(".news-contenedor");
            $(document).mousemove(function (e) {
                movimiento.style.left = e.pageX - x + 'px';
                movimiento.style.top = e.pageY - y + 'px';
            });
        });
        $(document).mouseup(function () {
            $(this).unbind('mousemove');
        });

    });
});

$(document).ready(function (e) {
    $.ajaxSetup({
        cache: false
    });

    $("#ver-content-cortos").click(function () {
        $('#contenido').load('minigames');


        var modes = document.querySelector("#contenido");
        var modes_position = modes.style.display;

        var contenedor = document.querySelector(".news-contenedor");

        if (modes_position !== "block") {

            modes.style.display = "block";


        } else {

            $(contenedor).remove();

        }
        //mover la venta con clikderecho 

        $('#contenido').mousedown(function (e) {
            var contenedor = document.querySelector(".news-contenedor");
            var x = e.pageX - contenedor.offsetLeft;
            var y = e.pageY - contenedor.offsetTop;
            var movimiento = document.querySelector(".news-contenedor");
            $(document).mousemove(function (e) {
                movimiento.style.left = e.pageX - x + 'px';
                movimiento.style.top = e.pageY - y + 'px';
            });
        });
        $(document).mouseup(function () {
            $(this).unbind('mousemove');

            $(document).mouseup = null;
        });


    });

});
