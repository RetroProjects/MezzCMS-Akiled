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
        <div class="page-header">
                <h1 class="page-title">Gestionar Rango </h1>
            </div>
            <div class="row">
                <?php
                if (User::userData('rank') > '5') {
                ?>
                    <div class="col-lg-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Buscar</h4>
                                <p class="card-description"> <code>(No Real Time)</code>
                                </p>
                                <form action="" method="POST">
                                    <div class="form-group">
                                    <?php admin::searchRank(); ?>
                                        <div class="input-group">
                                            <input class="form-control" placeholder="nombre de usuario" aria-label="Recipient's username" aria-describedby="basic-addon2" type="text" value="" name="user" class="validate">
                                            <div class="input-group-append">
                                                <button name="zoek" type="submit" class="btn btn-sm btn-primary" type="button">Buscar</button>

                                            </div>

                                </form>

                            <?php
                        } else {
                            ?>
                                <input type="hidden" value="<?php echo admin::EditUser("zoek"); ?>" name="zoek" class="form-control" disabled>
                            <?php } ?>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

        <div class="col-lg-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Nuevos Usuarios registrados</h4>
                    <p class="card-description"> Monitor de usuarios registados <code>(No Real Time)</code>
                    </p>
                    <div class="table-responsive " style=" max-height: 350px; overflow-y: scroll">
                        <table class="table table-hover">

                            <tbody>

                                <?php
                                $sqlGetUsersByRankDev = $dbh->prepare("SELECT id, username,look, account_created, motto FROM users ORDER BY id DESC LIMIT 6");
                                $sqlGetUsersByRankDev->execute();
                                while ($getUsersDev = $sqlGetUsersByRankDev->fetch()) {
                                ?>
                                    <tr>
                                        <td>ID: <?php echo $getUsersDev['id']; ?></td>
                                        <td> <img class="circle" src="https://imager.akiled.org/?figure=<?php echo $getUsersDev['look']; ?>&direction=3&head_direction=3&gesture=none&action=none&size=n&headonly=1"></td>
                                        <td> <span class="title"><?php echo $getUsersDev['username']; ?> </span></td>
                                        <td>
                                            <p><?php echo $getUsersDev['motto']; ?>
                                            </p>
                                        <td>
                                        <td><a type="button" class="btn btn-info" href="<?= $config['hotelUrl']; ?>/adminpan/gebrank/<?php echo $getUsersDev['username']; ?>">Editar</a>
                                        <td>

                                        <?php } ?>
                                    </tr>




                            </tbody>
                        </table>
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