<div class="container-scroller">
  <!-- partial:partials/_sidebar.html -->
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="sidebar-brand brand-logo text-danger" href="<?= $config['hotelUrl'];?>/adminpan/dash"><?= $config['hotelName'] ?> Panel</a>
      <a class="sidebar-brand brand-logo-mini text-info" href="<?= $config['hotelUrl'];?>/adminpan/dash">HK</a>
    </div>
    <ul class="nav">
      <li class="nav-item profile">
        <div class="profile-desc">
          <div class="profile-pic">
            <div class="count-indicator">
              <img class="img-xs rounded-circle" src="http://habbo.es/habbo-imaging/avatarimage?figure=<?php echo User::userData('look'); ?>&direction=3&head_direction=3&gesture=none&action=none&size=n&headonly=1" alt="">
              <span class="count bg-success"></span>
            </div>
            <div class="profile-name">
              <p class="mb-0 d-none d-sm-block navbar-profile-name"> <b><?php echo User::userData('username'); ?></b></p>
              <span>Equipo Staff </span>
            </div>
          </div>
          <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
          <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
            <a href="/settings_privacy" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-settings text-primary"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">Configuracion de cuenta</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="/settings_password" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-onepassword  text-info"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">Cambiar contraseña</p>
              </div>
            </a>
          </div>
        </div>
      </li>
      <li class="nav-item nav-category">
        <span class="nav-link">Menu</span>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href="<?= $config['hotelUrl'];?>/adminpan/dash">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>

      <?php
        if (User::userData('rank') >= '19') {
      ?>

      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-icon">
            <i class="mdi mdi-settings-box"></i>
          </span>
          <span class="menu-title">Opciones del Hotel</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic1">
          <ul class="nav flex-column sub-menu">
            
              <li class="nav-item"> <a class="nav-link" href="<?= $config['hotelUrl'];?>/adminpan/settings">Ajustes del hotel</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?= $config['hotelUrl'];?>/adminpan/happyhour">Ajustes del HappyHour</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?= $config['hotelUrl'];?>/adminpan/permissions">Editar Rangos</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?= $config['hotelUrl'];?>/adminpan/tareas">Tareas</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?= $config['hotelUrl'];?>/adminpan/comandos">Comandos</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?= $config['hotelUrl'];?>/adminpan/update">Update</a></li>
              <!--  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Estadísticas usuarios</a></li> -->
            
          </ul>
        </div>
      </li>

      <?php } ?>

      <?php
        if (User::userData('rank') >= '10') {
      ?>

      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-icon">
            <i class="mdi mdi-settings-box"></i>
          </span>
          <span class="menu-title">Moderación</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic2">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="<?= $config['hotelUrl'];?>/adminpan/bans">Baneos</a></li>
            <li class="nav-item"> <a class="nav-link" href="<?= $config['hotelUrl'];?>/adminpan/chatlogs">Monitoreo de Salas</a></li>
			      <li class="nav-item"> <a class="nav-link" href="<?= $config['hotelUrl'];?>/adminpan/commandlogs">Monitoreo de Comandos</a></li>
            <li class="nav-item"> <a class="nav-link" href="<?= $config['hotelUrl'];?>/adminpan/chatlogs_console">Mensajes privados</a></li>
            <li class="nav-item"> <a class="nav-link" href="<?= $config['hotelUrl'];?>/adminpan/clones">Buscar clones</a></li>
            <li class="nav-item"> <a class="nav-link" href="<?= $config['hotelUrl'];?>/adminpan/logsname">Cambios de nombre</a></li>
          </ul>
        </div>
      </li>

      <?php } ?>

      <?php
        if (User::userData('rank') >= '13') {
      ?>

        <li class="nav-item menu-items">
          <a class="nav-link" data-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-icon">
              <i class="mdi mdi-account-check"></i>
            </span>
            <span class="menu-title">Gestion de usuarios</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic3">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="<?= $config['hotelUrl'];?>/adminpan/online">Usuarios conectados</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?= $config['hotelUrl'];?>/adminpan/zoekgebruiker">Editar usuario</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?= $config['hotelUrl'];?>/adminpan/zoekgerank">Gestión de rango</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?= $config['hotelUrl'];?>/adminpan/password">Cambiar contraseña</a></li>

            </ul>
          </div>
        </li>

      <?php } ?>

      <?php
        if (User::userData('rank') >= '12') {
      ?>

        <li class="nav-item menu-items">
          <a class="nav-link" data-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-icon">
              <i class="mdi mdi-table-large"></i>
            </span>
            <span class="menu-title">Utilidades de la Web</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic4">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="<?= $config['hotelUrl'];?>/adminpan/news">Noticias</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?= $config['hotelUrl'];?>/adminpan/infosindex">Infos Index</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?= $config['hotelUrl'];?>/adminpan/fansites">Fan Sites</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?= $config['hotelUrl'];?>/adminpan/eventos">Eventos</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?= $config['hotelUrl'];?>/adminpan/Shopy">Tienda Mezz</a></li>
            </ul>
          </div>
        </li>

      <?php } ?>

      <?php
        if (User::userData('rank') >= '17') {
      ?>

      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic5" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-icon">
            <i class="mdi mdi-auto-fix"></i>
          </span>
          <span class="menu-title">Salas</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic5">
          <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="<?= $config['hotelUrl'];?>/adminpan/salas">Salas</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?= $config['hotelUrl'];?>/adminpan/publicroom">Añadir sala pública</a></li>
          </ul>
        </div>
      </li>

      <?php } ?>

      <?php
        if (User::userData('rank') >= '13') {
      ?>

      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic6" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-icon">
            <i class="mdi mdi-auto-fix"></i>
          </span>
          <span class="menu-title">Placas</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic6">
          <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="<?= $config['hotelUrl'];?>/adminpan/uploadbadge">Subir una placa al hotel</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?= $config['hotelUrl'];?>/adminpan/shop">Tienda de Placas (En CMS)</a></li>
          </ul>
        </div>
      </li>

      <?php } ?>

	    <?php
		    if (User::userData('rank') >= '17') {
      ?>

	  <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic7" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-icon">
            <i class="mdi mdi-shopping"></i>
          </span>
          <span class="menu-title">Tienda</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic7">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="<?= $config['hotelUrl'];?>/adminpan/pagescatalog">Paginas de la Tienda</a></li>
            <li class="nav-item"> <a class="nav-link" href="<?= $config['hotelUrl'];?>/adminpan/pagemuebles">Editar Muebles (CI)</a></li>
            <li class="nav-item"> <a class="nav-link" href="<?= $config['hotelUrl'];?>/adminpan/roleplayitems">RolePlay Items</a></li>
            <li class="nav-item"> <a class="nav-link" href="<?= $config['hotelUrl'];?>/adminpan/pagefurniture">Editar Furniture</a></li>
          </ul>
        </div>
      </li>

	  <?php } ?>
	  
    <?php
		  if (User::userData('rank') >= '19') {
    ?>

	  <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic8" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-icon">
            <i class="mdi mdi-lock" style="color: #607d8b;"></i>
          </span>
          <span class="menu-title">Otras Funciones</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic8">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="<?= $config['hotelUrl'];?>/adminpan/groups">Editar Grupos</a></li>
            <li class="nav-item"> <a class="nav-link" href="<?= $config['hotelUrl'];?>/adminpan/vacantes">Vacantes</a></li>
            <li class="nav-item"> <a class="nav-link" href="<?= $config['hotelUrl'];?>/adminpan/report">Reportes</a></li>
          </ul>
        </div>
      </li>

	  <?php } ?>

      <li class="nav-item menu-items">
        <a class="nav-link" href="https://discord.com/invite/fPm78zt4/" Target="_blank">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Soporte y Ayuda</span>
        </a>
      </li>
    </ul>
  </nav>