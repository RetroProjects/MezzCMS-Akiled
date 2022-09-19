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
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Reportes del hotel</h4>
            <p class="card-description"> <code>(No Real Time)</code>
            </p>
            <?php admin::DeleteReport(); ?>
            <div class="table-responsive " style=" max-height: 600px; overflow-y: scroll">
              <table class="table table-hover">

                <thead>
                  <tr>
                    <th><?= $lang["Hkreporttema1"] ?></th>
                    <th><?= $lang["Hkreporttema2"] ?></th>
                    <th><?= $lang["Hkreporttema3"] ?></th>
                    <th><?= $lang["Hkreporttema4"] ?></th>
                    <th><?= $lang["Hkreporttema5"] ?></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $getArticles = $dbh->prepare("SELECT * FROM cms_report ORDER BY id DESC");
                  $getArticles->execute();
                  while ($news = $getArticles->fetch()) {
                    echo '';
                    echo '<tr>
										<td style="width: 10%;">' . filter($news["titulo"]) . '</td>
										<td style="width: 20%;">' . filter($news["categoria"]) . '</td>
										<td style="width: 40%;">' . htmlentities($news["comentario"]) . '</td>
										<td>' . $news["autor"] . '</td>
										';
                    if (User::userData('rank') > '10') {
                      echo '	
											<td><a type="button" class="btn btn-danger"  href=' . $config['hotelUrl'] . '/adminpan/report/delete/' . $news["id"] . '>Eliminar</center></a></td>
											</tr>
										

											';
                    }
                  }
                  ?>
                </tbody>
              </table>
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