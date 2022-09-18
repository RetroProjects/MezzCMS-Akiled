<!DOCTYPE html>
<html lang="en">
  <head>
        <title>✨ <?= $config['hotelName'] ?> ✨ - <?= $lang["Itittle"]; ?></title>
    <meta property="og:title" content="  ✨ <?= $config['hotelName'] ?> Hotel " />
	<meta name="description" content="<?= $config['hotelName'] ?> Hotel, ¡Haz amig@s, únete a la diversión, pásalo genial en mayor Hotel virtual, con creditos y diamantes gratis, todo actualizado y lo mejor de este año ✅ !" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
				<script type="text/javascript">function siteUrl() {return "";}function showReg() {window.location = siteUrl() + "register";}  function fblogin() {window.location = siteUrl() + "/config/app/plugins/fblogin/fbconfig.php";}</script>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="/templates/<?= $config['skin'] ?>/client/css/style.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
		
          <form action="#" class="sign-in-form" method="post">
		  <?php User::Login(); ?>
            <h2 class="title"><?=$lang["Itittle"];?></h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" placeholder="Nombre de usuario" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Contraseña" />
            </div>
            <input type="submit" name="login" class="btn solid" />
			<?php
										if($config['facebookLogin'] == true)
										{
												?>
            <p class="social-text">O Inicia sesión con Facebook</p>
			
            <div onclick="fblogin();" class="social-media submit">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
            </div>
				<?php 
										}
									?>
          </form>
          <form action="#" class="sign-up-form" method="post">
		  <?php $security=rand(100000, 900000); ?>
		  <?php User::Register(); ?>
		  
           <h2 class="title1">Registrate</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" placeholder="Nombre de Usuario" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" placeholder="Correo" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Contraseña" />
            </div>
			<div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password_repeat" placeholder="Repite la contraseña" />
            </div>
			<h4><?=$lang["Rcodigo"];?>: <?=$security;?></h4>
			 <div class="input-field">
              <i class="fas fa-user"></i>
                                <input type="text" name="code" class="form-control" placeholder="code">
								<input type="text" name="codebueno" value="<?=$security;?>" style="visibility: hidden;width: 0;height: 0;">
            </div>
			
            <input type="submit" class="btn" name="register" value="Registrarme" />
           <?php
										if($config['facebookLogin'] == true)
										{
												?>
            <p class="social-text">O Registrate con Facebook</p>
			
            <div onclick="fblogin();" class="social-media submit">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
            </div>
				<?php 
										}
									?>
          </form>
        </div>
      </div>

		
      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <p>
             <h3><?= Game::usersOnline() ?> <?=$lang["Userson"];?></h3>
            </p>
			    <h4>Aun no estàs registrado?</h4>
				</p>
				<h5>Dark Mode</h5>
				
    <i class="bi bi-brightness-high-fill toggleDark" id="toggleDark" style="font-size: 30px; cursor: pointer; transform: translate(-50%, -50%);" ></i>
	</p>
            <button class="btn transparent" id="sign-up-btn">
             Registrarte
            </button>
          </div>
          <img src="https://pbs.twimg.com/media/Ey4uyoEWEAUOU1G?format=png&name=small" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
		   <p>
             <h2><?= Game::usersOnline() ?> <?=$lang["Userson"];?></h2>
            </p>
            <h3> ¿Ya estas registrado ? </h3>
            </p>
			
            <button class="btn transparent" id="sign-in-btn">
             Iniciar sessión
            </button>
          </div>
          <img src="https://images.habboinhabbo.it/6437_RistoranteCoreano.png" class="image" alt="" />
        </div>
      </div>
    </div>
    <script src="/templates/<?= $config['skin'] ?>/client/js/app.js"></script>
  </body>
</html>