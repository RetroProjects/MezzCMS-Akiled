<!DOCTYPE html>
<html lang="en">
<?php
include_once "includes/head.php";
$_SESSION['title'] = '';
$_SESSION['slogan'] = '';
$_SESSION['news'] = '';
admin::CheckRank(13);
?>

<body>

  <?php
  include_once "includes/navi.php";
  include_once "includes/header.php";

  ?>


  <div class="main-panel">
    <div class="content-wrapper">

      <div class="row">
        <div class="col-lg-4 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Comandos</h4>
              <p class="card-description"> Actualiza los comandos <code>(Real Time)</code>
              </p>
              <div class="table-responsive " style=" max-height: 350px;">

                <form name="mygallery" action="" method="POST">
                  <?php admin::RCON(); ?>
                  <input type="hidden" value="" name="updatecomandos" class="form-control" disable>
                  <div class="input-group-append" style="margin: auto; width: 60%; padding: 10px;">
                    <button class="btn btn-primary mr-2" id="btn" type="submit" name="RCON">Actualizar
                    </button>

                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Furniture/items</h4>
            <p class="card-description"> Actualiza el furniture <code>(Real Time)</code>
            </p>
            <div class="table-responsive " style=" max-height: 350px;">

              <form name="mygallery" action="" method="POST">
                <input type="hidden" value="" name="updateitems" class="form-control" disable>
                <div class="input-group-append" style="margin: auto; width: 60%; padding: 10px;">
                  <button class="btn btn-warning mr-2" id="btn" type="submit" name="RCON">Actualizar
                  </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Catálogo</h4>
          <p class="card-description"> Actualiza el catálogo <code>(Real Time)</code>
          </p>
          <div class="table-responsive " style=" max-height: 350px;">

            <form name="mygallery" action="" method="POST">
              <input type="hidden" value="" name="updatecata" class="form-control" disable>
              <div class="input-group-append" style="margin: auto; width: 60%; padding: 10px;">
                <button class="btn btn-success mr-2" id="btn" type="submit" name="RCON">Actualizar
                </button>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Lenguaje del hotel</h4>
        <p class="card-description"> Actualiza el leenguaje del hotel <code>(Real Time)</code>
        </p>
        <div class="table-responsive " style=" max-height: 350px;">

          <form name="mygallery" action="" method="POST">
            <input type="hidden" value="" name="updateexternaltext" class="form-control" disable>
            <div class="input-group-append" style="margin: auto; width: 60%; padding: 10px;">
              <button class="btn btn-success mr-2" id="btn" type="submit" name="RCON">Actualizar
              </button>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="col-lg-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Navegador de salas</h4>
        <p class="card-description"> Actualiza el Navegador de salas del hotel <code>(Real Time)</code>
        </p>
        <div class="table-responsive " style=" max-height: 350px;">
          <form name="mygallery" action="" method="POST">
            <input type="hidden" value="" name="updatenavigator" class="form-control" disable>
            <div class="input-group-append" style="margin: auto; width: 60%; padding: 10px;">
              <button class="btn btn-primary mr-2" id="btn" type="submit" name="RCON">Actualizar
              </button>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="col-lg-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Permisos de Rangos</h4>
        <p class="card-description"> Actualiza los permisos de rangos del hotel <code>(Real Time)</code>
        </p>
        <div class="table-responsive " style=" max-height: 350px;">
          <form name="mygallery" action="" method="POST">
            <input type="hidden" value="" name="updatepermissions" class="form-control" disable>
            <div class="input-group-append" style="margin: auto; width: 60%; padding: 10px;">
              <button class="btn btn-warning mr-2" id="btn" type="submit" name="RCON">Actualizar
              </button>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
  <!-- content-wrapper ends -->
  <!-- partial:partials/_footer.html -->
  <?php
  include_once "includes/footer.php";
  ?>
  <!-- container-scroller -->

  <!-- End custom js for this page -->
</body>


</html>