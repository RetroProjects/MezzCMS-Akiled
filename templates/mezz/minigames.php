<meta charset="utf-8" />
<section class="news-contenedor" style="min-width: 380px; z-index: 3">
  <div class="loading" id="loading" style="display: none; z-index: 3"></div>
  <header>
    🎲 Mini GAMES<img src="/templates/sloptv4.2/client/images/close-circle.png" id="btn-contenido2" style="right: 1rem;
    position: absolute; cursor:pointer;">
  </header>
  <section class="contenido">
    <section class="cortos">
      <strong>Juegos clasicos!</strong>
      <hr style="margin-bottom: 6px" />
      <div class="section">
        <article style="margin-bottom: 6px">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT37JQPfC2Q1M1qtMp1aDRD1vuxYats9M-tjg&usqp=CAU" alt="" />
          <div class="desc-article">
            <a onclick="cargarCortos(4)">
              <span style="color: red; font-size: 14px"><b style="color: white">Jugar: </b>FastFood</span>
            </a>
          </div>
        </article>
        <article>
          <img src="http://www.geeknews.it/wp-content/uploads/2014/04/pacman.gif" alt="" />
          <div class="desc-article">
            <a onclick="cargarCortos1(2)">
              <span style="color: red; font-size: 14px"><b style="color: white">Jugar: </b>Pacman</span>
            </a>
          </div>
        </article>
      </div>
    </section>
    <section class="cortos">
      <strong>Nuevos</strong>
      <hr style="margin-bottom: 4px" />
      <div class="section">
        <article>
          <img src="https://i.imgur.com/JPwXKHW.gif" alt="" />
          <div class="desc-article">
            <a onclick="cargarCortos2(3)">
              <span style="color: red; font-size: 14px"><b style="color: white">Jugar: </b>Among us</span>
            </a>
          </div>
        </article>
      </div>
    </section>
    <section class="cortos">
      <strong>¿No sabes cómo jugar?</strong>
      <hr style="margin-bottom: 4px" />
      <div class="section"></div>
    </section>
  </section>
</section>
<script src="/templates/sloptv4.2/client/js/jquery.min.js"></script>
<script>
  var modes_btn = document.querySelector("#btn-contenido2");
  var modes = document.querySelector("#contenido");

  var contenedor = document.querySelector(".news-contenedor");

  modes_btn.addEventListener("click", function() {
    var modes_position = modes.style.display;

    if (modes_position !== "block") {
      modes.style.display = "block";
    } else {
      modes.style.display = "none";

      $(contenedor).remove();
    }
  });

  function cargarCortos(id) {
    var parametros = {
      id: id,
    };
    $.ajax({
      data: parametros, //datos que se envian a traves de ajax
      url: "fastfoodcliente", //archivo que recibe la peticion
      type: "post", //método de envio
      beforeSend: function() {
        document.getElementById("loading").style.display = "block";
      },
      success: function(response) {
        //una vez que el archivo recibe el request lo procesa y lo devuelve
        document.getElementById("loading").style.display = "none";
        $("#contenido").html(response);
      },
    });
  }

  function cargarCortos1(id) {
    var parametros = {
      id: id,
    };
    $.ajax({
      data: parametros, //datos que se envian a traves de ajax
      url: "packmancliente", //archivo que recibe la peticion
      type: "post", //método de envio
      beforeSend: function() {
        document.getElementById("loading").style.display = "block";
      },
      success: function(response) {
        //una vez que el archivo recibe el request lo procesa y lo devuelve
        document.getElementById("loading").style.display = "none";
        $("#contenido").html(response);
      },
    });
  }

  function cargarCortos2(id) {
    var parametros = {
      id: id,
    };
    $.ajax({
      data: parametros, //datos que se envian a traves de ajax
      url: "amongusclinte", //archivo que recibe la peticion
      type: "post", //método de envio
      beforeSend: function() {
        document.getElementById("loading").style.display = "block";
      },
      success: function(response) {
        //una vez que el archivo recibe el request lo procesa y lo devuelve
        document.getElementById("loading").style.display = "none";
        $("#contenido").html(response);
      },
    });
  }
</script>
V