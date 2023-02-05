<div class="row">
<div class="container" style="max-width: 1760px;width: 90%;">
<nav class="navb grey lighten-5 black-text">
    <div class="nav-wrapper">
      <a href="#" data-activates="mobile-demo" class="men button-collapse" style="display: block;"><i class="fas fa-ellipsis-h fa-3x" style="color:#4272D7;margin-left:26px;"></i></a>
      <div class="container" style="max-width: 1760px;width: 90%;">
      <ul id="nav-mobile" class="right">
      <li>
      <a class="dropdown-button" data-activates="menusuaurio"">
      <div class="staffbox-me" >
      <div class="bodybox-me" style="background-image:url(<?php echo $config['habboIMAGING']; ?>{look}110&direction=2&head_direction=3&headonly=false&size=m&gesture=sml);border:2px solid #4272D7;background-repeat:no-repeat;background-repeat: no-repeat;background-color: #FFF;background-position-y: -16px;background-position-x: -8px;"></div>
        <div class="staffname-me">
        {username} 
        </div>
      </div>
      </a>
      </li>
      </ul>
      <!--DROPDOWN-->
      <ul id="menusuaurio" class="dropdown-content">
        <li><a href="/profile/{id}"><i class="far fa-user"></i> Perfil</a></li>
        <li><a href="/settingshotel"><i class="fas fa-user-cog"></i> Ajustes</a></li>
        <?php
          if(User::userData('rank') > $hotel['staffCheckClientMinimumRank']){
          ?>
         <li><a class="dropdown-item" href="/adminpan"><i class="fas fa-columns"></i> Panel</a></li>
        <?php } ?>
        <li class="divider"></li>
        <li><a href="/logout" style="color:#e53935;"><i class="fas fa-sign-out-alt"></i> Salir</a></li>
      </ul>
      <!--MENU DESPLEGABLE UNIVERSAL-->
      <ul class="side-nav" id="mobile-demo">
      <li><div class="user-view">
      <div class="background">
        <img src="<?php echo User::userData('portada'); ?>">
      </div>
      <a href="<?php echo $config['hotelUrl']; ?>/adminpan/dash"><img class="circle" style="height: 62px;width: 62px;background-color:#4272d7;border:2px solid #FFF;" src="https://imager.akiled.org/?figure=<?php echo User::userData('look'); ?>&direction=3&head_direction=3&gesture=none&action=none&size=n&headonly=1"></a>
      <a href="#!name"><span class="white-text name">Hola, <b><?php echo User::userData('username'); ?> <?php if(User::userData('verified') == 1){echo'<i class="fas fa-check-circle" style="color:#0277bd;font-size:16px;"></i>';}else{echo '';}?></b></span></a>
      <a href="#!email"><span class="white-text email" style="font-style: italic;"><?php echo User::userData('motto'); ?></span></a>
      <li><a class="subheader" style="color:#4272d7;">General</a></li>

      <li><a href="/me"><i class="fas fa-home"></i> Inicio</a></li>
      <li><a class="dropdown-button" href="#!" data-activates="comu"><i class="fas fa-globe-americas"></i> Comunidad <i class="fas fa-chevron-circle-down right" style="color:#1A54CF;"></i></a></li>   
        <ul id="comu" class="dropdown-content">
          <li><a href="/allnews">Noticias</a></li>
          <li><a href="/fansites">Fansites</a></li>
          <li><a href="/userstop">Usuarios TOP</a></li>
          <li><a href="/faqs">Reglas y preguntas frecuentes</a></li>
        </ul>
        <li><a class="dropdown-button" href="#!" data-activates="equip"><i class="fas fa-shield-alt"></i> Equipo <i class="fas fa-chevron-circle-down right" style="color:#1A54CF;"></i></a></li>   
        <ul id="equip" class="dropdown-content">
          <li><a href="/team">Staff</a></li>
          <li><a href="/alfa">Alfas</a></li>
        </ul>

        <li><a href="/shop"><i class="fas fa-store-alt"></i> Tienda</a></li>
        <li><a href="/discord"><i class="fab fa-discord"></i> Discord</a></li>
        <li><a href="/support"><i class="fas fa-ticket-alt"></i> Ticket soporte</a></li>
        <li><a class="subheader" style="color:#4272d7;">Acciones</a></li>

        <li><a class="waves-effect waves-light" href="/client">Entrar al hotel <i class="far fa-paper-plane"></i></a></li>
        <li><a class="waves-effect waves-light" href="<?php echo $config['hotelUrl']; ?>/logout"><i class="fas fa-power-off"></i> Cerrar sesión</a></li>

      </ul>
      

    </div>
  </nav>
  </div>
</div>
<script>
$(".men").sideNav();
$(".dropdown-button").dropdown();
      
</script>