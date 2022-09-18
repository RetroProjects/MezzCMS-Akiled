<?php include_once 'includes/header.php'; ?>
<script language="JavaScript">window.document.title = "<?= $config['hotelName'] ?> ~ Subir una placa"</script>
		<div class="conteudo">
		<?php include_once 'includes/ads.php'; ?>
		<div id="area_esquerda">
		
<div class="box" id="senha">
			<div class="titulo_color" style="background-color:#FF9326;"><img src="/templates/Nubbev1/assets/img/iconos/plac.png?0">  Subir una placa</div>
			<div style="padding: 10px 5px;">
					<?= badgeUpload(); ?>
				<form action="" method="post" enctype="multipart/form-data">
				<p class="txt txt-p">Codigo</p>
				<input class="input" type="text" name="code">
				<p class="txt txt-p">Nombre</p>
				<input class="input" type="text" name="name">
				<p class="txt txt-p">Descripción</p>
				<input class="input" type="text" name="desc">
				<p class="txt txt-p">Badge</p>
				<input class="input" type="file" name="badge">

				<button class="button" name="badgeUpload" type="submit">Subir placa</button>

				<div class="clearfix"></div>
				</form>
			</div>
		</div>
	
	</div>
	
<div id="area_direita">
  
<div class="box box_fluid">
<div class="box_titulo">
<div class="titulo"><div>Información</div></div>
<div class="clearfix"></div>
</div>
<br>
<center>
<p>Crea tu propia placa y cárgala en <?= $config['hotelName'] ?> después
 de que nuestro personal haya verificado  la recibirá.</p><br>
</center>
</div>

<div class="box box_fluid">
<div class="box_titulo">
<div class="titulo"><div>¡ATENCIÓN!</div></div>
<div class="clearfix"></div>
</div>
<ul class="lista_cargos">
<li>- La placa debe ser un archivo GIF.</li>
<li>- La placa debe medir 40x40 píxeles.</li>
<li>- Cuando subas tu placa, notifica a un staff.</li>
</ul>
</div>
</div>


</div>
  <?php include_once 'includes/footer.php'; ?>
  </body>
</html>
