  <!DOCTYPE html>
  <html lang="en">
  <?php
  include_once "includes/head.php";
  $_SESSION['title'] = '';
  $_SESSION['slogan'] = '';
  $_SESSION['news'] = '';
  admin::CheckRank(10);
  ?>

  <body>

    <?php
    include_once "includes/navi.php";
    include_once "includes/header.php";

    ?>


    <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
          <div class="col-lg-7 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Buscar Clones</h4>
                <p class="card-description"> <code>(No Real Time)</code>
                </p>
                <form action="" method="POST">
                  <div class="form-group">
                    <div class="input-group">
                      <input class="form-control" placeholder="nombre de usuario" aria-label="Recipient's username" aria-describedby="basic-addon2" type="text" value="" name="user">
                      <div class="input-group-append">
                        <button name="cloner" type="submit" class="btn btn-sm btn-primary" type="button">Buscar</button>


                </form>

              </div>
            </div>


            <?php
            if (isset($_POST['cloner'])) {
              $getArticles = $dbh->prepare("SELECT username,ip_reg FROM users WHERE username = '" . $_POST['user'] . "' ");
              $getArticles->execute();


              while ($news = $getArticles->fetch()) { ?>
                <div class="table-responsive " style=" max-height: 300px; overflow-y: scroll">
                  <table class="table table-striped">


                    <?php echo $news['name']; ?><br>
                    <tbody>
                      <?php
                      $Getusers = $dbh->prepare("SELECT * FROM users WHERE ip_reg = '" . $news['ip_reg'] . "'");
                      $Getusers->execute();

                      while ($users = $Getusers->fetch()) { ?>


                        <tr>
                          <td><img src="<?= $config['lookUrl']; ?><?= $users['look']; ?>&direction=3&head_direction=2&gesture=sml&size=s&img_format=gif&headonly=1" /><a href="/adminpan/gebrank/<?php echo $users['username']; ?>"><?php echo $users['username']; ?></a></td>
                        </tr>

                      <?php } ?>



                    </tbody>
                  </table>

                </div>

            <?php }
            }




            ?>


          </div>

        </div>

      </div>
    </div>

    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Nuevos Usuarios registrados</h4>
            <p class="card-description"> Monitor de usuarios registados <code>(No Real Time)</code>
            </p>
            <div class="table-responsive " style=" max-height: 350px; overflow-y: scroll">
              <table class="table table-striped">

                <tbody>

                  <?php
                  $sqlGetUsersByRankDev = $dbh->prepare("SELECT id, username,look, account_created, motto FROM users ORDER BY id DESC LIMIT 6");
                  $sqlGetUsersByRankDev->execute();
                  while ($getUsersDev = $sqlGetUsersByRankDev->fetch()) {
                  ?>
                    <tr>
                      <td>ID: <?php echo $getUsersDev['id']; ?></td>
                      <td> <img class="circle" src="http://habbo.es/habbo-imaging/avatarimage?figure=<?php echo $getUsersDev['look']; ?>&direction=3&head_direction=3&gesture=none&action=none&size=n&headonly=1"></td>
                      <td> <span class="text-info"><?php echo $getUsersDev['username']; ?> </span></td>
                      <td>
                        <p><?php echo $getUsersDev['motto']; ?>
                        </p>
                      <td>
                      <td><a type="button" class="btn btn-primary" href="<?= $config['hotelUrl']; ?>/adminpan/gebruiker/<?php echo $getUsersDev['username']; ?>">Editar</a>
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