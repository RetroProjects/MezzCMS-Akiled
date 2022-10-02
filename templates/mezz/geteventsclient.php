<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="/templates/sloptv4.2/tag/style.css">
	
					

</head>


<section class="news-contenedor" style="min-width: 331px;max-width: 331px">
<header>Horario de eventos<img src="/templates/sloptv4.2/client/images/close-circle.png"  id="btn-contenido2" style="right: 1rem;
    position: absolute; cursor:pointer;"></header>
<section class="contenido">
<section class="retos">
<strong>¡Estos son los eventos disponibles en el hotel!</strong>
<hr style="margin-bottom: 4px;"> 
					 
					 

	 <div id="contentBox">
	   
						
</div>
                
				
    					<?php
							if (empty($_GET['id']))
			{
				
						$getEvents = $dbh->prepare("SELECT * FROM cms_events ORDER BY id DESC LIMIT 5") ;
						$getEvents->execute();
						if ($getEvents->RowCount() > 0){
							while ($data = $getEvents->fetch())
								{
									 $getto = $dbh->prepare("SELECT id,username FROM users WHERE id = :id");
									$getto->bindParam(':id', $data['user']);									
									$getto->execute();
									$geto = $getto->fetch();

						echo'	
						<div class="body" style="background: url('.filter($data["image"]).');border-radius: 3px;height: 120px;margin-top: 3px;margin-bottom: 5px; ">
								<div class="form__fieldset form__fieldset--box">
								</br>
								<b style="opacity: 1;
    background: rgba('.rand(0,150).', '.rand(0,150).', '.rand(0,150).', 100);
    display: inline;
    padding: 3px 10px 3px 11px;
    color: #fff;
    font-size: 15px;
    font-weight: 700;
    text-shadow: 1px 1px 0px rgb(0 0 0 / 93%);
    margin-top: 10px;">'.filter($data["title"]).'</b>
	</div>
	</br>
	<div style="opacity: 1;
    background: #000000cc;
    display: inline;
    padding: 3px 10px 3px 11px;
    color: #fff;
    font-size: 12px;
    margin-top: 37px;"><span style="">Realizado por: </b><b style="font-size: 13px;">  '.filter($geto["username"]).'</b></span>
	</div>
	</br>
	</br>
								<div style="width: 305px;
    color: white;
    margin-top: -3px;
    background-color: #000000cc;
    margin-left: 0px;
    border-radius: 3px;
    font-size: 16px;
    height: 23px;
    text-align: center;">Fecha: <b style="color:red;">'.filter($data["fecha"]).' </b><b></b> a las <b style="color:red;">'.filter($data["hora"]).'</b></div><br></div></div></div>
		

  			
';

							 } }else{
								echo '<div class="alert alert-primary" role="alert" style="
    background: #cc0033;
    color: #fff;
">
No tenemos eventos programados, consulte mas tarde.
</div><br>';
						
							
				}
			}
		?>
		</div>

    
</section>
</section>
</section>

<script>

var modes_btn = document.querySelector("#btn-contenido2");
var modes = document.querySelector("#contenido");

modes_btn.addEventListener("click", function(){
var modes_position = modes.style.display;

var contenedor = document.querySelector(".news-contenedor");

if(modes_position !== "block"){
    modes.style.display="block";
}else{
    modes.style.display="none";
    $(contenedor).remove();
}
});

function cargarContenido(id){
    var parametros = {
    "id" : id
    };
    $.ajax({
    data:  parametros, //datos que se envian a traves de ajax
    url:   '', //archivo que recibe la peticion
    type:  'post', //método de envio
    beforeSend: function () {
        document.getElementById("loading").style.display="block";
    },
    success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
        document.getElementById("loading").style.display="none";
        $("#contenido").html(response);
    }
    });
}

  
</script>

