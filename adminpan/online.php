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

        <div class="col-sm-3 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Staffs online</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0"><?= Game::staffCount() ?></h2>
                        </div>
                        <h6 class="text-muted font-weight-normal">Sataffs conectados al hotel</h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-account-key text-warning ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
             
              <div class="col-sm-3 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Staffs</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0"><?php echo User::count('userwithrank'); ?></h2>
                        </div>
                        <h6 class="text-muted font-weight-normal">Usuarios que tienen rango dentro del hotel</h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-wallet-travel text-danger ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-3 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Usuarios Registrados</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0"><?php echo User::count('usersregister'); ?></h2>
                          <p class="text-success ml-2 mb-0 font-weight-medium"></p>
                        </div>
                        <h6 class="text-muted font-weight-normal"> Total de usuarios registros</h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi mdi-account-card-details text-info ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-3 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Usuarios Conectados</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0"><?php echo User::count('usersons'); ?></h2>
                          <p class="text-success ml-2 mb-0 font-weight-medium"></p>
                        </div>
                        <h6 class="text-muted font-weight-normal"> Total de usuarios conectados</h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi mdi-account text-success ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </div>
              <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Usuarios Conectados</h4>
                    <p class="card-description"> Monitor de usuarios conectados <code>(No Real Time)</code>
                    </p>
                    <div class="table-responsive " style=" max-height: 350px; overflow-y: scroll">
                      <table class="table table-hover" >
                        <thead>
                          <tr>
                          <th><?=$lang["Hkregtab0"]?></th>
                     <th><?=$lang["Hkregtab1"]?></th>
                     <th><?=$lang["Hkregtab3"]?></th>
                     <th>Esmeraldas</th>
					 <th>Planetas</th>
                     <th><?=$lang["Hkregtab5"]?></th>
                          </tr>
                        </thead>
                        <tbody>




                        <?php
					$Geta = $dbh->prepare("SELECT * FROM `users` WHERE `online` = '1'");
					$Geta->execute();
					while($news = $Geta->fetch())
					{
					echo'
                  <tr>
                     <td>'.$news["id"].'</td>
                     <td>'.$news["username"].'</td>
                     <td>'.$news["credits"].'</td>
					 <td>'.$news["activity_points"].'</td>
                     <td>'.$news["vip_points"].'</td>
            <td><label class="badge badge-success">Conectado</label></td>';
					
					 echo'
                  </tr>
				  ';
					}

					?>

                        
                        </tbody>
                      </table>
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