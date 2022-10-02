<div id="contenido" style="display: block;" bis_skin_checked="1">
    <meta charset="utf-8">
    <section class="news-contenedor" style="min-width: 1000px;">
        <div class="loading" id="loading" style="display: none;" bis_skin_checked="1"></div>
        <header><img src="/templates/sloptv4.2/client/images/arrow-left.png" onclick="cargarCortos2()" style="left: 1rem;position: absolute; cursor:pointer;"><img src="/templates/sloptv4.2/client/images/reload.png" onclick="refreshIframe();" style="left: 2.8rem;
    position: absolute; cursor:pointer;">Among us<img src="/templates/sloptv4.2/client/images/close-circle.png" id="btn-contenido2" style="right: 1rem;
    position: absolute; cursor:pointer;"></header>
        <section class="contenido" onload="downLoad()" style="height: 514px;">


            <section class="retos" style="height: 511px;">
                <iframe name="iframerefresh" width="100%;" height="100%" src="https://html5.gamedistribution.com/9abe6af0fbb440b98a3e24bf7fb0636a/?gdpr-targeting=1&gdpr-tracking=1&gdpr-third-party=1&euConsent=CPdID2dPdID2dAcABBENCaCsAP_AAH_AAChQI6tf_X__b2_j-_5_f_t0eY1P9_7__-0zjhfdl-8N3f_X_L8X52M7vF36pq4KuR4Eu3LBIQdlHOHcTUmw6okVrzPsbk2cr7NKJ7PEmnMbO2dYGH9_n1_zuZKY7_____7z_v-v______f_7-3f3__p_3_-__e_V_99zfn9_____9vP___9v-_9__________3_4I7AEmGrcQBdmWODNtGEUKIEYVhIdQKACigGFogsIHVwU7K4CfWELABAKEJwIgQ4gowYBAAIJAEhEQEgR4IBEARAIAAQAKgEIAGNgEFgBYGAQACgGhYoRQBCBIQZEBEcpgQFSJBQT2ViCUHehphCHWeAFBo_4qEBGsgYrAyEhYOQ4IkBLxZIHmKN8gBGCFAKJUAA.f_gAD_gAAAAA&gd_sdk_referrer_url=https%3A%2F%2Fwww.funnygames.it%2Fgioco%2Famong-us-online.html" title="Among us" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" bis_size="{&quot;x&quot;:128,&quot;y&quot;:498,&quot;w&quot;:348,&quot;h&quot;:300,&quot;abs_x&quot;:128,&quot;abs_y&quot;:498}"></iframe>
            </section>
        </section>
    </section>



    <script>
        function cerrar() {
            document.all["layer1"].style.display = "none";
        }

        function downLoad() {
            if (document.all) {
                document.all["layer1"].style.display = "none";
                document.all["layer2"].style.display = "block";
            } else if (document.getElementById) {
                node = document.getElementById("layer1").style.display = 'none';
                node = document.getElementById("layer2").style.display = 'block';
            }
        }

        function refreshIframe() {
            var ifr = document.getElementsByName('iframerefresh')[0];
            ifr.src = ifr.src;
    </script>

    <script>
        var modes_btn = document.querySelector("#btn-contenido2");
        var modes = document.querySelector("#contenido");

        modes_btn.addEventListener("click", function() {
            var modes_position = modes.style.display;

            var contenedor = document.querySelector(".news-contenedor");

            if (modes_position !== "block") {
                modes.style.display = "block";
            } else {
                modes.style.display = "none";
                $(contenedor).remove();
            }
        });

        function cargarCortos2() {
            var parametros = {};
            $.ajax({
                data: parametros, //datos que se envian a traves de ajax
                url: 'minigames', //archivo que recibe la peticion
                type: 'post', //método de envio
                beforeSend: function() {
                    document.getElementById("loading").style.display = "block";
                },
                success: function(response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                    document.getElementById("loading").style.display = "none";
                    $("#contenido").html(response);
                }
            });
        }
    </script>
    </section>
    <script src="/templates/sloptv4.2/client/js/jquery.min.js"></script>